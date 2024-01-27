<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationVerifyRequest
 *
 * AuthenticationVerifyRequest is used to authenticate a user using the user Id and password. The response is a AuthenticationVerifyResponse or an ErrorResponse
 *         Replaced By: AuthenticationVerifyRequest14sp8
 *
 * @see AuthenticationVerifyRequest
 * @see AuthenticationVerifyResponse
 * @see ErrorResponse
 * @see AuthenticationVerifyRequest14sp8
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:1027","type":"sequence"}]
 */
class AuthenticationVerifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:1027
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName password
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:1027
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $password = null;

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
}

