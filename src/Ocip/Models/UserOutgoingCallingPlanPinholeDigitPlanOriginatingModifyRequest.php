<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanPinholeDigitPlanOriginatingModifyRequest
 *
 * Modify the originating permissions for Pinhole digit patterns for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:1464","type":"sequence"}]
 */
class UserOutgoingCallingPlanPinholeDigitPlanOriginatingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1464
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName useCustomSettings
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1464
     * @var bool|null
     */
    private $useCustomSettings = null;

    /**
     * @ElementName userPermissions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1464
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions|null
     */
    private $userPermissions = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions
     */
    public function getUserPermissions()
    {
        return $this->userPermissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userPermissions;
    }

    /**
     * Setter for userPermissions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $userPermissions
     * @return $this
     */
    public function setUserPermissions(\CWM\BroadWorksConnector\Ocip\Models\OutgoingPinholeDigitPlanDigitPatternOriginatingPermissions $userPermissions)
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

