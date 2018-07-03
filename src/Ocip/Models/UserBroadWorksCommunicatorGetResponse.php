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
     * @var string|null
     */
    private $configurationServerURL = null;

    /**
     * Getter for configurationServerURL
     *
     * @ElementName configurationServerURL
     * @return string|null
     */
    public function getConfigurationServerURL()
    {
        return $this->configurationServerURL;
    }

    /**
     * Setter for configurationServerURL
     *
     * @ElementName configurationServerURL
     * @param string|null $configurationServerURL
     * @return $this
     */
    public function setConfigurationServerURL($configurationServerURL)
    {
        $this->configurationServerURL = $configurationServerURL;
        return $this;
    }


}

