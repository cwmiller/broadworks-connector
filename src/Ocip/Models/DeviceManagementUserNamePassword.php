<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementUserNamePassword
 *
 * Access device credentials.
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:43647","type":"sequence"}]
 */
class DeviceManagementUserNamePassword
{

    /**
     * @ElementName userName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43647
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $userName = null;

    /**
     * @ElementName password
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43647
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $password = null;

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

