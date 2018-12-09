<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationVerifyRequest22
 *
 * AuthenticationVerifyRequest22 is used to authenticate a user either by userId/password, userId/sip username/sip password,
 *         dn/passcode, lineport/password or a token previously authorized with the ExternalAuthenticationAuthorizeTokenRequest. 
 *         The phone number may be any DN associated with a user.
 *         The lineport may be any lineport associated with a user.
 *         The password used for the lineport is the user’s password associated with userId.
 *           
 *         The response is a AuthenticationVerifyResponse22 or an ErrorResponse
 *
 * @see AuthenticationVerifyRequest22
 * @see ExternalAuthenticationAuthorizeTokenRequest
 * @see AuthenticationVerifyResponse22
 * @see ErrorResponse
 * @Groups [{"id":"21fd3c6abc11c44e52803121f7739a76:59","type":"choice","children":[{"id":"21fd3c6abc11c44e52803121f7739a76:60","type":"sequence"},{"id":"21fd3c6abc11c44e52803121f7739a76:64","type":"sequence"},{"id":"21fd3c6abc11c44e52803121f7739a76:68","type":"sequence"},{"id":"21fd3c6abc11c44e52803121f7739a76:72","type":"sequence"},{"id":"21fd3c6abc11c44e52803121f7739a76:75","type":"sequence"}]}]
 */
class AuthenticationVerifyRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 21fd3c6abc11c44e52803121f7739a76:75
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName password
     * @Type string
     * @Group 21fd3c6abc11c44e52803121f7739a76:68
     * @var string|null
     */
    private $password = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group 21fd3c6abc11c44e52803121f7739a76:64
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName passcode
     * @Type string
     * @Group 21fd3c6abc11c44e52803121f7739a76:64
     * @var string|null
     */
    private $passcode = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group 21fd3c6abc11c44e52803121f7739a76:68
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName loginToken
     * @Type string
     * @Group 21fd3c6abc11c44e52803121f7739a76:72
     * @var string|null
     */
    private $loginToken = null;

    /**
     * @ElementName sipAuthenticationUserName
     * @Type string
     * @Group 21fd3c6abc11c44e52803121f7739a76:75
     * @var string|null
     */
    private $sipAuthenticationUserName = null;

    /**
     * @ElementName sipAuthenticationPassword
     * @Type string
     * @Group 21fd3c6abc11c44e52803121f7739a76:75
     * @var string|null
     */
    private $sipAuthenticationPassword = null;

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

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Getter for passcode
     *
     * @return string
     */
    public function getPasscode()
    {
        return $this->passcode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passcode;
    }

    /**
     * Setter for passcode
     *
     * @param string $passcode
     * @return $this
     */
    public function setPasscode($passcode)
    {
        $this->passcode = $passcode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPasscode()
    {
        $this->passcode = null;
        return $this;
    }

    /**
     * Getter for linePort
     *
     * @return string
     */
    public function getLinePort()
    {
        return $this->linePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->linePort;
    }

    /**
     * Setter for linePort
     *
     * @param string $linePort
     * @return $this
     */
    public function setLinePort($linePort)
    {
        $this->linePort = $linePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLinePort()
    {
        $this->linePort = null;
        return $this;
    }

    /**
     * Getter for loginToken
     *
     * @return string
     */
    public function getLoginToken()
    {
        return $this->loginToken instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->loginToken;
    }

    /**
     * Setter for loginToken
     *
     * @param string $loginToken
     * @return $this
     */
    public function setLoginToken($loginToken)
    {
        $this->loginToken = $loginToken;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLoginToken()
    {
        $this->loginToken = null;
        return $this;
    }

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

