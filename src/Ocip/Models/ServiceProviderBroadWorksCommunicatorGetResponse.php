<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksCommunicatorGetResponse
 *
 * Response to ServiceProviderBroadWorksCommunicatorGetRequest.
 *
 * @see ServiceProviderBroadWorksCommunicatorGetRequest
 * @Groups [{"id":"ba512c9f02a5f24a24d49cc945f1524d:57","type":"sequence"}]
 */
class ServiceProviderBroadWorksCommunicatorGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName configurationServerURL
     * @Type string
     * @Optional
     * @Group ba512c9f02a5f24a24d49cc945f1524d:57
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $configurationServerURL = null;

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

