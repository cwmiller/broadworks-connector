<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksCommunicatorGetResponse
 *
 * Response to UserBroadWorksCommunicatorGetRequest.
 *
 * @see UserBroadWorksCommunicatorGetRequest
 * @Groups [{"id":"b4095e83c8aa84e850615ffe7d48b0d6:104","type":"sequence"}]
 */
class UserBroadWorksCommunicatorGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName configurationServerURL
     * @Type string
     * @Optional
     * @Group b4095e83c8aa84e850615ffe7d48b0d6:104
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

