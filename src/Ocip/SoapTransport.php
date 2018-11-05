<?php

namespace CWM\BroadWorksConnector\Ocip;

use SoapClient;

class SoapTransport implements ITransport
{
    /** @var SoapClient */
    private $client;

    /**
     * @param string $wsdlUrl
     * @param array $soapClientOptions
     */
    public function __construct($wsdlUrl, array $soapClientOptions)
    {
        $this->client = new SoapClient($wsdlUrl, $soapClientOptions);
    }

    /**
     * @param string $request
     * @return string
     * @throws BadResponseException
     */
    public function send($request)
    {
        $response = $this->client->processOCIMessage(['in0' => $request]);

        if (!isset($response->processOCIMessageReturn)) {
            throw new BadResponseException('No processOCIMessageReturn in response.');
        }

        return $response->processOCIMessageReturn;
    }
}