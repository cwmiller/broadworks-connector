<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationVerifyRequest
 *
 * AuthenticationVerifyRequest is used to authenticate a user using the user Id and
 * password. The response is a AuthenticationVerifyResponse or an ErrorResponse
 *         Replaced By: AuthenticationVerifyRequest14sp8
 *
 * @see AuthenticationVerifyRequest
 * @see AuthenticationVerifyResponse
 * @see ErrorResponse
 * @see AuthenticationVerifyRequest14sp8
 */
class AuthenticationVerifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


}

