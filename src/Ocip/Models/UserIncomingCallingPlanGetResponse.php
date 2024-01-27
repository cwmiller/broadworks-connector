<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIncomingCallingPlanGetResponse
 *
 * Response to UserIncomingCallingPlanGetRequest.
 *
 * @see UserIncomingCallingPlanGetRequest
 * @Groups [{"id":"22e19489d2787693c01f531be4452169:112","type":"sequence"}]
 */
class UserIncomingCallingPlanGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useCustomSettings
     * @Type bool
     * @Group 22e19489d2787693c01f531be4452169:112
     * @var bool|null
     */
    protected $useCustomSettings = null;

    /**
     * @ElementName userPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissions
     * @Group 22e19489d2787693c01f531be4452169:112
     * @var \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissions|null
     */
    protected $userPermissions = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissions
     */
    public function getUserPermissions()
    {
        return $this->userPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userPermissions;
    }

    /**
     * Setter for userPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissions $userPermissions
     * @return $this
     */
    public function setUserPermissions(\CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissions $userPermissions)
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

