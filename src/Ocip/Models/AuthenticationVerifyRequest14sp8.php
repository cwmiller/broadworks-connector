<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationVerifyRequest14sp8
 *
 * AuthenticationVerifyRequest14sp8 is used to authenticate a user either by userId/password, userId/sip username/sip password,
 *         dn/passcode or a token previously authorized with the ExternalAuthenticationAuthorizeTokenRequest. 
 *         The phone number may be any DN associated with a user.
 *           
 *         The response is a AuthenticationVerifyResponse14sp8 or an ErrorResponse
 *         
 *         Replaced by AuthenticationVerifyRequest22.
 *
 * @see AuthenticationVerifyRequest14sp8
 * @see ExternalAuthenticationAuthorizeTokenRequest
 * @see AuthenticationVerifyResponse14sp8
 * @see ErrorResponse
 * @see AuthenticationVerifyRequest22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:1049","type":"choice","children":[{"id":"d8f04177e438f303b41c211e518706bf:1050","type":"sequence"},{"id":"d8f04177e438f303b41c211e518706bf:1054","type":"sequence"},{"id":"d8f04177e438f303b41c211e518706bf:1058","type":"sequence"},{"id":"d8f04177e438f303b41c211e518706bf:1061","type":"sequence"}]}]
 */
class AuthenticationVerifyRequest14sp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:1061
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName password
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:1050
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $password = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:1054
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $phoneNumber = null;

    /**
     * @ElementName passcode
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:1054
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $passcode = null;

    /**
     * @ElementName loginToken
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:1058
     * @MinLength 1
     * @var string|null
     */
    protected $loginToken = null;

    /**
     * @ElementName sipAuthenticationUserName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:1061
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $sipAuthenticationUserName = null;

    /**
     * @ElementName sipAuthenticationPassword
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:1061
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $sipAuthenticationPassword = null;

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

