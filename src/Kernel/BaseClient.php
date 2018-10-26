<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/22
 * Time: 6:21 PM
 * Source: BaseClient.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Kernel;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

Abstract class BaseClient
{
    protected $client = 'smile-iot';
    protected $method = 'POST';
    protected $httpClient;
    protected $response;
    protected $app;
    protected $config;
    protected $redirect = false;

    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
        $this->config = $app['config'];
    }

    /**
     * @param string $endpointKey
     * @param array  $reqData
     *
     * @return array|mixed|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request(string $endpointKey,array $reqData)
    {
        $endpoint = $this->wrapperEndpoint($endpointKey);
        $config_cmb = $this->config->get('cmb');
        isset($reqData['branchNo']) && $reqData['branchNo'] = $config_cmb['branchNo'];
        isset($reqData['merchantNo']) && $reqData['merchantNo'] = $config_cmb['merchantNo'];
        $body = json_encode([
            'version'=>'1.0',
            'charset'=>'UTF-8',
            'signType'=>'SHA-256',
            'sign'=>$this->signature($reqData),
            'reqData'=>$reqData
        ]);
        if ($this->isRedirect())
            $content =  $this->redirectPost($endpoint,$body);
        else
        {
            try {
                $this->response = $this->getHttpClient()->request(
                    $this->getMethod(),
                    $endpoint,
                    [
                        'form_params' => ['jsonRequestData'=>$body],
                        'verify'  => false,
                        'headers' => $this->getHeaders(),
                    ]
                );
                $content = json_decode((string)$this->response->getBody(),true);

            } catch (ClientException $e) {
                $content = [
                    'statusCode'   => $e->getCode(),
                    'reasonPhrase' => $e->getResponse()->getReasonPhrase(),
                ];
            }
        }

        return $content;
    }

    /**
     * @param $endpoint
     * @param $JsonData
     *
     * @return string
     */
    protected function redirectPost($endpoint,$JsonData): string
    {
        $html = <<<EOF
<form style='display:none' name='cmb_hidden_form' action='{$endpoint}' method='{$this->getMethod()}'>
<input type="hidden" name="jsonRequestData" value='{$JsonData}'><script language="JavaScript">document.cmb_hidden_form.submit();</script>
EOF;
        return $html;
    }

    /**
     * @return Client
     */
    protected function getHttpClient(): Client
    {
        return $this->app['http_client'];
    }


    /**
     * @return array
     */
    protected function getHeaders()
    {
        return ['User-Agent' => $this->client];
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param $reqData
     *
     * @return string
     */
    protected function signature($reqData)
    {
        $config_cmb = $this->config->get('cmb');
        ksort($reqData);
        $param = urldecode(http_build_query($reqData)).'&'.$config_cmb['privateKey'];
        return strtoupper(hash('sha256',$param));
    }

    protected function checkSignature(array $rspData,string $sign):bool
    {

    }

    /**
     * @param string $name
     *
     * @return string
     */
    protected function wrapperEndpoint(string $name) :string
    {
        $config_cmb = $this->config->get('cmb');
        if (strpos($name,'.'))
        {
            list($prefix,$key) = explode('.',$name);
            return $config_cmb['endpoint'][$prefix][$key];
        }
        return $config_cmb['endpoint'][$name];
    }

    /**
     * @return bool
     */
    public function isRedirect(): bool
    {
        return $this->redirect;
    }


}