<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIPAuthenticationUserNamePassword
 *
 * User's authentication service information.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5095","type":"sequence"}]
 */
class SIPAuthenticationUserNamePassword
{
    /**
     * @ElementName sipAuthenticationUserName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5095
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $sipAuthenticationUserName = null;

    /**
     * @ElementName sipAuthenticationPassword
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5095
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $sipAuthenticationPassword = null;

    /**
     * Getter for sipAuthenticationUserName
     *
     * @return string
     */
    public function getSipAuthenticationUserName()
    {
        return $this->sipAuthenticationUserName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipAuthenticationUserName;
    }

    /**
     * Setter for sipAuthenticationUserName
     *
     * @param string $sipAuthenticationUserName
     * @return $this
     */
    public function setSipAuthenticationUserName($sipAuthenticationUserName)
    {
        $this->sipAuthenticationUserName = $sipAuthenticationUserName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipAuthenticationUserName()
    {
        $this->sipAuthenticationUserName = null;
        return $this;
    }

    /**
     * Getter for sipAuthenticationPassword
     *
     * @return string
     */
    public function getSipAuthenticationPassword()
    {
        return $this->sipAuthenticationPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipAuthenticationPassword;
    }

    /**
     * Setter for sipAuthenticationPassword
     *
     * @param string $sipAuthenticationPassword
     * @return $this
     */
    public function setSipAuthenticationPassword($sipAuthenticationPassword)
    {
        $this->sipAuthenticationPassword = $sipAuthenticationPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipAuthenticationPassword()
    {
        $this->sipAuthenticationPassword = null;
        return $this;
    }
}

