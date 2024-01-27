<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExternalAuthenticationAuthorizeTokenRequest22
 *
 * This command is part of the Portal API.
 *         Sent when a Web or CLI user logs in using external authentication.
 *         The hashed password value in the request is supported only when the request is sent from the CommPilot web portal.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ef3c4f453d01f7ce750331de83ebc765:238","type":"sequence"}]
 */
class ExternalAuthenticationAuthorizeTokenRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group ef3c4f453d01f7ce750331de83ebc765:238
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName password
     * @Type string
     * @Optional
     * @Group ef3c4f453d01f7ce750331de83ebc765:238
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $password = null;

    /**
     * @ElementName isPasswordHashed
     * @Type bool
     * @Optional
     * @Group ef3c4f453d01f7ce750331de83ebc765:238
     * @var bool|null
     */
    protected $isPasswordHashed = null;

    /**
     * @ElementName loginToken
     * @Type string
     * @Group ef3c4f453d01f7ce750331de83ebc765:238
     * @MinLength 1
     * @var string|null
     */
    protected $loginToken = null;

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
     * Getter for isPasswordHashed
     *
     * @return bool
     */
    public function getIsPasswordHashed()
    {
        return $this->isPasswordHashed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isPasswordHashed;
    }

    /**
     * Setter for isPasswordHashed
     *
     * @param bool $isPasswordHashed
     * @return $this
     */
    public function setIsPasswordHashed($isPasswordHashed)
    {
        $this->isPasswordHashed = $isPasswordHashed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsPasswordHashed()
    {
        $this->isPasswordHashed = null;
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
}

