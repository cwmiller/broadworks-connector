<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanDigitPlanOriginatingGetResponse
 *
 * Response to UserOutgoingCallingPlanDigitPlanOriginatingGetRequest.
 */
class UserOutgoingCallingPlanDigitPlanOriginatingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useCustomSettings
     * @var bool|null
     */
    private $useCustomSettings = null;

    /**
     * @ElementName userPermissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternOriginatingPermissions|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternOriginatingPermissions|null
     */
    public function getUserPermissions()
    {
        return $this->userPermissions;
    }

    /**
     * Setter for userPermissions
     *
     * @ElementName userPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDigitPatternOriginatingPermissions|null $userPermissions
     * @return $this
     */
    public function setUserPermissions($userPermissions)
    {
        $this->userPermissions = $userPermissions;
        return $this;
    }


}

