<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanRedirectingGetResponse
 *
 * Response to UserOutgoingCallingPlanRedirectingGetRequest.
 *
 * @see UserOutgoingCallingPlanRedirectingGetRequest
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:1597","type":"sequence"}]
 */
class UserOutgoingCallingPlanRedirectingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useCustomSettings
     * @Type bool
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1597
     * @var bool|null
     */
    private $useCustomSettings = null;

    /**
     * @ElementName userPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissions
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1597
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissions|null
     */
    private $userPermissions = null;

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

    /**
     * Getter for userPermissions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissions
     */
    public function getUserPermissions()
    {
        return $this->userPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userPermissions;
    }

    /**
     * Setter for userPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissions $userPermissions
     * @return $this
     */
    public function setUserPermissions(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissions $userPermissions)
    {
        $this->userPermissions = $userPermissions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserPermissions()
    {
        $this->userPermissions = null;
        return $this;
    }


}

