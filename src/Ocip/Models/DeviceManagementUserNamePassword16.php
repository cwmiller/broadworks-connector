<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementUserNamePassword16
 *
 * Access device credentials.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:2875","type":"sequence"}]
 */
class DeviceManagementUserNamePassword16
{
    /**
     * @ElementName userName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2875
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userName = null;

    /**
     * @ElementName password
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2875
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $password = null;

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
     * Getter for password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->password;
    }

    /**
     * Setter for password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
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

