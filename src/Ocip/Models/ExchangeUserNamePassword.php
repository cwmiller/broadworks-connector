<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExchangeUserNamePassword
 *
 * Exchange server user name and password.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2672","type":"sequence"}]
 */
class ExchangeUserNamePassword
{

    /**
     * @ElementName userName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2672
     * @MinLength 1
     * @MaxLength 64
     * @var string|null
     */
    private $userName = null;

    /**
     * @ElementName password
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2672
     * @MinLength 1
     * @MaxLength 104
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

