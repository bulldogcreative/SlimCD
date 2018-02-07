<?php

namespace SlimCD;

use GuzzleHttp\Client;

/**
 * Class SlimCD
 * @package SlimCD
 * @version 1.1.1
 * @author Levi Durfee <ldurfee@bulldogcreative.com>
 */
abstract class SlimCD implements Interfaces\SlimCD
{
    private $version = '1.2.0';

    /**
     * @var string
     */
    public $transactionUrl = "https://trans.slimcd.com";

    /**
     * @var string
     */
    public $statsURL = "https://stats.slimcd.com";

    /**
     * @var bool
     */
    public $debug = false;

    /**
     * Data to send
     * @var
     */
    protected $send;

    /**
     * Data that is received
     * @var
     */
    protected $receive;

    /**
     * Curl timeout
     * @var int
     */
    protected $defaultTimeout = 600;

    /**
     * @param $url
     * @param $errorMessage
     * @return object
     */
    protected function buildError($url, $errorMessage)
    {
        // @codeCoverageIgnoreStart
        $reply = (object) array(
            'response'     => 'Error',
            'responsecode' => '2',
            'description'  => $errorMessage,
            'responseurl'  => $url,
            'datablock'    => ''
        );
        $result = (object) array('reply' => $reply);

        return ($result);
        // @codeCoverageIgnoreEnd
    }

    /**
     * @param $urlString
     * @param $timeout
     * @param $nameValueArray
     * @return mixed|object
     * @throws \Exception
     */
    protected function httpPost($urlString, $timeout, $nameValueArray)
    {
        $ch = curl_init($urlString);
        curl_setopt($ch,CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_POST, 1);
        $this->send = http_build_query($nameValueArray) ;
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->send);
        // Turn on TLS 1.2
        curl_setopt ($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
        // SLIMCD.COM uses a GODADDY SSL certificate.  Once you install the CA for GoDaddy SSL, please
        // remove the line below.
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        // receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
        // POST the data
        $this->receive = curl_exec($ch);
        if(curl_errno($ch)) {
            $result = $this->buildError(curl_getinfo($ch, CURLINFO_EFFECTIVE_URL), curl_error($ch));
        } else {
            $httpstatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
            if (intval($httpstatus) !== 200 || ($contentType !== 'application/json'
                    && $contentType !== 'text/javascript')) {
                $result =  $this->buildError(curl_getinfo($ch, CURLINFO_EFFECTIVE_URL), $this->receive) ;
            } else {
                $result = json_decode($this->receive);
            }
            // Make sure we can decode the results...
            if($result === null) {
                switch (json_last_error()) {
                    case JSON_ERROR_NONE:
                        $errorMessage= ' - No errors';
                        break;
                    case JSON_ERROR_DEPTH:
                        $errorMessage = ' - Maximum stack depth exceeded';
                        break;
                    case JSON_ERROR_STATE_MISMATCH:
                        $errorMessage = ' - Underflow or the modes mismatch';
                        break;
                    case JSON_ERROR_CTRL_CHAR:
                        $errorMessage = ' - Unexpected control character found';
                        break;
                    case JSON_ERROR_SYNTAX:
                        $errorMessage= ' - Syntax error, malformed JSON';
                        break;
                    case JSON_ERROR_UTF8:
                        $errorMessage = ' - Malformed UTF-8 characters, possibly incorrectly encoded';
                        break;
                    default:
                        $errorMessage = ' - Unknown JSON error';
                        break;
                }
                $result = $this->buildError($urlString, $errorMessage);
            }
        }
        curl_close ($ch);
        // flatten out the "reply" so we don't have that extra (unneeded) level
        $replyResult = get_object_vars($result->reply);
        if($this->debug) {
            $replyResult = array_merge($replyResult,
                array("senddata" => $this->send , "recvdata" => $this->receive)
            );
        }
        $result = (object) $replyResult;
        $this->send = '';
        $this->receive = '';
        return $result;
    }

    /**
     * @param $timeout
     * @return int
     */
    protected function getTimeout($timeout)
    {
        if(!$timeout) {
            $timeout = $this->defaultTimeout;
        } else {
            $timeout = intval($timeout);
        }
        return $timeout;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}
