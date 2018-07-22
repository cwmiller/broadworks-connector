<?php

namespace CWM\BroadWorksConnector\Ocip;

use SoapClient;

class SoapTransport implements ITransport
{
    /** @var SoapClient */
    private $client;

    /**
     * @param string $wsdlUrl
     */
    public function __construct($wsdlUrl)
    {
        $this->client = new SoapClient($wsdlUrl);
    }

    /**
     * @param string $request
     * @return string
     * @throws \CWM\BroadWorksConnector\Ocip\BadResponseException
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