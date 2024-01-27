<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementUserNamePassword
 *
 * Access device credentials.
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:49279","type":"sequence"}]
 */
class DeviceManagementUserNamePassword
{
    /**
     * @ElementName userName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:49279
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $userName = null;

    /**
     * @ElementName password
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:49279
     * @MinLength 1
     * @MaxLength 40
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

