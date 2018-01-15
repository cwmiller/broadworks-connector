<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAttendantConsoleModifyRequest
 *
 * Modify user's attendant console settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserAttendantConsoleModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName launchOnLogin
     * @var bool|null
     */
    private $launchOnLogin = null;

    /**
     * @ElementName allowUserConfigCallDetails
     * @var bool|null
     */
    private $allowUserConfigCallDetails = null;

    /**
     * @ElementName allowUserViewCallDetails
     * @var bool|null
     */
    private $allowUserViewCallDetails = null;

    /**
     * @ElementName displayColumnList
     * @var \CWM\BroadWorksConnector\Ocip\Models\AttendantConsoleReplacementDisplayColumnList|null
     */
    private $displayColumnList = null;

    /**
     * @ElementName monitoredUserIdList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    private $monitoredUserIdList = null;

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
     * Getter for launchOnLogin
     *
     * @ElementName launchOnLogin
     * @return bool|null
     */
    public function getLaunchOnLogin()
    {
        return $this->launchOnLogin;
    }

    /**
     * Setter for launchOnLogin
     *
     * @ElementName launchOnLogin
     * @param bool|null $launchOnLogin
     * @return $this
     */
    public function setLaunchOnLogin($launchOnLogin)
    {
        $this->launchOnLogin = $launchOnLogin;
        return $this;
    }

    /**
     * Getter for allowUserConfigCallDetails
     *
     * @ElementName allowUserConfigCallDetails
     * @return bool|null
     */
    public function getAllowUserConfigCallDetails()
    {
        return $this->allowUserConfigCallDetails;
    }

    /**
     * Setter for allowUserConfigCallDetails
     *
     * @ElementName allowUserConfigCallDetails
     * @param bool|null $allowUserConfigCallDetails
     * @return $this
     */
    public function setAllowUserConfigCallDetails($allowUserConfigCallDetails)
    {
        $this->allowUserConfigCallDetails = $allowUserConfigCallDetails;
        return $this;
    }

    /**
     * Getter for allowUserViewCallDetails
     *
     * @ElementName allowUserViewCallDetails
     * @return bool|null
     */
    public function getAllowUserViewCallDetails()
    {
        return $this->allowUserViewCallDetails;
    }

    /**
     * Setter for allowUserViewCallDetails
     *
     * @ElementName allowUserViewCallDetails
     * @param bool|null $allowUserViewCallDetails
     * @return $this
     */
    public function setAllowUserViewCallDetails($allowUserViewCallDetails)
    {
        $this->allowUserViewCallDetails = $allowUserViewCallDetails;
        return $this;
    }

    /**
     * Getter for displayColumnList
     *
     * @ElementName displayColumnList
     * @return \CWM\BroadWorksConnector\Ocip\Models\AttendantConsoleReplacementDisplayColumnList|null
     */
    public function getDisplayColumnList()
    {
        return $this->displayColumnList;
    }

    /**
     * Setter for displayColumnList
     *
     * @ElementName displayColumnList
     * @param \CWM\BroadWorksConnector\Ocip\Models\AttendantConsoleReplacementDisplayColumnList|null $displayColumnList
     * @return $this
     */
    public function setDisplayColumnList($displayColumnList)
    {
        $this->displayColumnList = $displayColumnList;
        return $this;
    }

    /**
     * Getter for monitoredUserIdList
     *
     * @ElementName monitoredUserIdList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getMonitoredUserIdList()
    {
        return $this->monitoredUserIdList;
    }

    /**
     * Setter for monitoredUserIdList
     *
     * @ElementName monitoredUserIdList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $monitoredUserIdList
     * @return $this
     */
    public function setMonitoredUserIdList($monitoredUserIdList)
    {
        $this->monitoredUserIdList = $monitoredUserIdList;
        return $this;
    }


}

