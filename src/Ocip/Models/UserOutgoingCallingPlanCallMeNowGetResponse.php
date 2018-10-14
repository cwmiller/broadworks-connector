<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanCallMeNowGetResponse
 *
 * Response to UserOutgoingCallingPlanCallMeNowGetRequest.
 *
 * @see UserOutgoingCallingPlanCallMeNowGetRequest
 */
class UserOutgoingCallingPlanCallMeNowGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useCustomSettings
     * @var bool|null
     */
    private $useCustomSettings = null;

    /**
     * @ElementName userPermissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissions|null
     */
    private $userPermissions = null;

    /**
     * Getter for useCustomSettings
     *
     * @ElementName useCustomSettings
     * @return bool|null
     */
    public function getUseCustomSettings()
    {
        return $this->useCustomSettings;
    }

    /**
     * Setter for useCustomSettings
     *
     * @ElementName useCustomSettings
     * @param bool|null $useCustomSettings
     * @return $this
     */
    public function setUseCustomSettings($useCustomSettings)
    {
        $this->useCustomSettings = $useCustomSettings;
        return $this;
    }

    /**
     * Getter for userPermissions
     *
     * @ElementName userPermissions
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissions|null
     */
    public function getUserPermissions()
    {
        return $this->userPermissions;
    }

    /**
     * Setter for userPermissions
     *
     * @ElementName userPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissions|null $userPermissions
     * @return $this
     */
    public function setUserPermissions(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallMeNowPermissions $userPermissions)
    {
        $this->userPermissions = $userPermissions;
        return $this;
    }


}

