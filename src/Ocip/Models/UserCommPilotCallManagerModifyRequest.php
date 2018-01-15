<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommPilotCallManagerModifyRequest
 *
 * Modify the user level data associated with CommPilot Call Manager.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCommPilotCallManagerModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


}

