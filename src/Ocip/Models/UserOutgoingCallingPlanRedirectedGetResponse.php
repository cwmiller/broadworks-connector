<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanRedirectedGetResponse
 *
 * Response to UserOutgoingCallingPlanRedirectedGetRequest.
 *
 * @see UserOutgoingCallingPlanRedirectedGetRequest
 */
class UserOutgoingCallingPlanRedirectedGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useCustomSettings
     * @var bool|null
     */
    private $useCustomSettings = null;

    /**
     * @ElementName userPermissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissions|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissions|null
     */
    public function getUserPermissions()
    {
        return $this->userPermissions;
    }

    /**
     * Setter for userPermissions
     *
     * @ElementName userPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissions|null $userPermissions
     * @return $this
     */
    public function setUserPermissions(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectedPermissions $userPermissions)
    {
        $this->userPermissions = $userPermissions;
        return $this;
    }


}

