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
 * @Groups [{"id":"9db4d5fa1bbf70f2626f52a5d6e3420e:72","type":"sequence","children":[{"id":"9db4d5fa1bbf70f2626f52a5d6e3420e:75","type":"choice"}]}]
 */
class UserAuthenticationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 9db4d5fa1bbf70f2626f52a5d6e3420e:72
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName userName
     * @Type string
     * @Optional
     * @Group 9db4d5fa1bbf70f2626f52a5d6e3420e:72
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $userName = null;

    /**
     * @ElementName newPassword
     * @Type string
     * @Optional
     * @Group 9db4d5fa1bbf70f2626f52a5d6e3420e:75
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $newPassword = null;

    /**
     * @ElementName password
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationModifyRequestPassword
     * @Optional
     * @Group 9db4d5fa1bbf70f2626f52a5d6e3420e:75
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationModifyRequestPassword|null
     */
    protected $password = null;

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
     * Getter for userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userName;
    }

    /**
     * Setter for userName
     *
     * @param string $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserName()
    {
        $this->userName = null;
        return $this;
    }

    /**
     * Getter for newPassword
     *
     * @return string
     */
    public function getNewPassword()
    {
        return $this->newPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newPassword;
    }

    /**
     * Setter for newPassword
     *
     * @param string $newPassword
     * @return $this
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewPassword()
    {
        $this->newPassword = null;
        return $this;
    }

    /**
     * Getter for password
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationModifyRequestPassword
     */
    public function getPassword()
    {
        return $this->password instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->password;
    }

    /**
     * Setter for password
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationModifyRequestPassword $password
     * @return $this
     */
    public function setPassword(\CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationModifyRequestPassword $password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPassword()
    {
        $this->password = null;
        return $this;
    }


}

