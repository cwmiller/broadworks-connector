<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksCommunicatorGetResponse
 *
 * Response to UserBroadWorksCommunicatorGetRequest.
 *
 * @see UserBroadWorksCommunicatorGetRequest
 */
class UserBroadWorksCommunicatorGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName configurationServerURL
     * @Type string
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

