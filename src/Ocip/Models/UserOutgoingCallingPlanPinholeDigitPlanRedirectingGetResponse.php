<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetResponse
 *
 * Response to UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetRequest.
 */
class UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useCustomSettings
     * @var bool|null
     */
    private $useCustomSettings = null;

    /**
     * @ElementName userPermissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions|null
     */
    public function getUserPermissions()
    {
        return $this->userPermissions;
    }

    /**
     * Setter for userPermissions
     *
     * @ElementName userPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions|null $userPermissions
     * @return $this
     */
    public function setUserPermissions($userPermissions)
    {
        $this->userPermissions = $userPermissions;
        return $this;
    }


}

