<?php

namespace CWM\BroadWorksConnector\Ocip;

use SoapClient;

class SoapTransport implements ITransport
{
    /** @var SoapClient */
    private $client = null;

    /** @var string */
    private $wsdlUrl;

    /**
     * @param string $wsdlUrl
     */
    public function __construct($wsdlUrl)
    {
        $this->wsdlUrl = $wsdlUrl;
    }

    /**
     * @param string $request
     * @return string
     * @throws \CWM\BroadWorksConnector\Ocip\BadResponseException
     */
    public function send($request)
    {
        if ($this->client === null) {
            $this->client = new SoapClient($this->wsdlUrl);
        }

        $response = $this->client->processOCIMessage(['in0' => $request]);

        if (!isset($response->processOCIMessageReturn)) {
            throw new BadResponseException('No processOCIMessageReturn in response.');
        }

        return $response->processOCIMessageReturn;
    }
}