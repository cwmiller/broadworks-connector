<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksCommunicatorGetResponse
 *
 * Response to ServiceProviderBroadWorksCommunicatorGetRequest.
 *
 * @see ServiceProviderBroadWorksCommunicatorGetRequest
 * @Groups [{"id":"9f4234e129f4eaab095d116643e0d9b0:57","type":"sequence"}]
 */
class ServiceProviderBroadWorksCommunicatorGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName configurationServerURL
     * @Type string
     * @Optional
     * @Group 9f4234e129f4eaab095d116643e0d9b0:57
     * @var string|null
     */
    private $configurationServerURL = null;

    /**
     * Getter for configurationServerURL
     *
     * @return string
     */
    public function getConfigurationServerURL()
    {
        return $this->configurationServerURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->configurationServerURL;
    }

    /**
     * Setter for configurationServerURL
     *
     * @param string $configurationServerURL
     * @return $this
     */
    public function setConfigurationServerURL($configurationServerURL)
    {
        $this->configurationServerURL = $configurationServerURL;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfigurationServerURL()
    {
        $this->configurationServerURL = null;
        return $this;
    }


}

