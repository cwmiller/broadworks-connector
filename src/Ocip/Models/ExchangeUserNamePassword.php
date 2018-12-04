<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExchangeUserNamePassword
 *
 * Exchange server user name and password.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:1899","type":"sequence"}]
 */
class ExchangeUserNamePassword
{

    /**
     * @ElementName userName
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:1899
     * @var string|null
     */
    private $userName = null;

    /**
     * @ElementName password
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:1899
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

