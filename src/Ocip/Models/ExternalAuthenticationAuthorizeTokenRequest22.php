<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExternalAuthenticationAuthorizeTokenRequest22
 *
 * This command is part of the Portal API.
 *         Sent when a Web or CLI user logs in using external authentication.
 *         The hashed password value in the request is supported only when the
 * request is sent from the CommPilot web portal.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ExternalAuthenticationAuthorizeTokenRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName password
     * @var string|null
     */
    private $password = null;

    /**
     * @ElementName isPasswordHashed
     * @var bool|null
     */
    private $isPasswordHashed = null;

    /**
     * @ElementName loginToken
     * @var string|null
     */
    private $loginToken = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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

    /**
     * Getter for isPasswordHashed
     *
     * @ElementName isPasswordHashed
     * @return bool|null
     */
    public function getIsPasswordHashed()
    {
        return $this->isPasswordHashed;
    }

    /**
     * Setter for isPasswordHashed
     *
     * @ElementName isPasswordHashed
     * @param bool|null $isPasswordHashed
     * @return $this
     */
    public function setIsPasswordHashed($isPasswordHashed)
    {
        $this->isPasswordHashed = $isPasswordHashed;
        return $this;
    }

    /**
     * Getter for loginToken
     *
     * @ElementName loginToken
     * @return string|null
     */
    public function getLoginToken()
    {
        return $this->loginToken;
    }

    /**
     * Setter for loginToken
     *
     * @ElementName loginToken
     * @param string|null $loginToken
     * @return $this
     */
    public function setLoginToken($loginToken)
    {
        $this->loginToken = $loginToken;
        return $this;
    }


}

