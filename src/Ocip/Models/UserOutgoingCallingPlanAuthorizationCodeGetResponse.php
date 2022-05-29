<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanAuthorizationCodeGetResponse
 *
 * Response to UserOutgoingCallingPlanAuthorizationCodeGetRequest.
 *
 * @see UserOutgoingCallingPlanAuthorizationCodeGetRequest
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:1099","type":"sequence"}]
 */
class UserOutgoingCallingPlanAuthorizationCodeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useCustomSettings
     * @Type bool
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1099
     * @var bool|null
     */
    protected $useCustomSettings = null;

    /**
     * Getter for useCustomSettings
     *
     * @return bool
     */
    public function getUseCustomSettings()
    {
        return $this->useCustomSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useCustomSettings;
    }

    /**
     * Setter for useCustomSettings
     *
     * @param bool $useCustomSettings
     * @return $this
     */
    public function setUseCustomSettings($useCustomSettings)
    {
        $this->useCustomSettings = $useCustomSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseCustomSettings()
    {
        $this->useCustomSettings = null;
        return $this;
    }


}

