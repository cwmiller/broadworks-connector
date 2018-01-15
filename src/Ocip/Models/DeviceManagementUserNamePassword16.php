<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementUserNamePassword16
 *
 * Access device credentials.
 */
class DeviceManagementUserNamePassword16
{

    /**
     * @ElementName userName
     * @var string|null
     */
    private $userName = null;

    /**
     * @ElementName password
     * @var string|null
     */
    private $password = null;

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
     * Getter for password
     *
     * @ElementName password
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Setter for password
     *
     * @ElementName password
     * @param string|null $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }


}

