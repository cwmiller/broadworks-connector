<?php

namespace CWM\BroadWorksConnector\Ocip;

use SoapClient;

class SoapTransport implements ITransport
{
    /** @var SoapClient */
    private $client = null;

    /** @var string */
    private $wsdlUrl;

    /** @var array */
    private $options;

    /**
     * @param string $wsdlUrl
     * @param array $soapClientOptions
     */
    public function __construct($wsdlUrl, array $soapClientOptions)
    {
        $this->wsdlUrl = $wsdlUrl;
        $this->options = $soapClientOptions;
    }

    /**
     * @param string $request
     * @return string
     * @throws BadResponseException
     */
    public function send($request)
    {
        if ($this->client === null) {
            $this->client = new SoapClient($this->wsdlUrl, $this->options);
        }

        $response = $this->client->processOCIMessage(['in0' => $request]);

        if (!isset($response->processOCIMessageReturn)) {
            throw new BadResponseException('No processOCIMessageReturn in response.');
        }

        return $response->processOCIMessageReturn;
    }
}