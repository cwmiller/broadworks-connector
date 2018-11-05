<?php

namespace CWM\BroadWorksConnector\Ocip;

class Options
{
    private $soapClientOptions = [
        'encoding' => 'utf-8',
        'cache_wsdl' => WSDL_CACHE_MEMORY,
    ];

    /**
     * @return array
     */
    public function getSoapClientOptions()
    {
        return $this->soapClientOptions;
    }

    /**
     * @param array $soapClientOptions
     */
    public function setSoapClientOptions($soapClientOptions)
    {
        $this->soapClientOptions = $soapClientOptions;
    }
}