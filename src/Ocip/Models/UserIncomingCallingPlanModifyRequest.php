<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIncomingCallingPlanModifyRequest
 *
 * Change the user's incoming calling plan settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserIncomingCallingPlanModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName useCustomSettings
     * @var bool|null
     */
    private $useCustomSettings = null;

    /**
     * @ElementName userPermissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissionsModify|null
     */
    private $userPermissions = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissionsModify|null
     */
    public function getUserPermissions()
    {
        return $this->userPermissions;
    }

    /**
     * Setter for userPermissions
     *
     * @ElementName userPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissionsModify|null $userPermissions
     * @return $this
     */
    public function setUserPermissions(\CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanPermissionsModify $userPermissions)
    {
        $this->userPermissions = $userPermissions;
        return $this;
    }


}

