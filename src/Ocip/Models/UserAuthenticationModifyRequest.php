<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAuthenticationModifyRequest
 *
 * Modify the user's authentication service information.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserAuthenticationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName userName
     * @var string|null
     */
    private $userName = null;

    /**
     * @ElementName newPassword
     * @var string|null
     */
    private $newPassword = null;

    /**
     * @ElementName password
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationModifyRequestPassword|null
     */
    private $password = null;

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
     * Getter for userName
     *
     * @ElementName userName
     * @return string|null
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Setter for userName
     *
     * @ElementName userName
     * @param string|null $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * Getter for newPassword
     *
     * @ElementName newPassword
     * @return string|null
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * Setter for newPassword
     *
     * @ElementName newPassword
     * @param string|null $newPassword
     * @return $this
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
        return $this;
    }

    /**
     * Getter for password
     *
     * @ElementName password
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationModifyRequestPassword|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Setter for password
     *
     * @ElementName password
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationModifyRequestPassword|null $password
     * @return $this
     */
    public function setPassword(\CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationModifyRequestPassword $password)
    {
        $this->password = $password;
        return $this;
    }


}

