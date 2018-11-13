<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExternalAuthenticationAuthorizeTokenRequest
 *
 * This command is part of the Portal API.
 *         Sent when a Web or CLI user logs in using external authentication.
 *         The password must be hashed. The password hashing algorithm is:
 *         1) The message digest of the user's plain password is calculated using
 * the SHA algorithm.
 *         2) For every four bits in the 160-bit digest, starting from the first
 * bit, it is
 *            converted into a character in ASCII Hex format (0 through 9, a
 * through f).
 *            The result is a 40-character string, for example,
 * f7a9e24777ec23212c54d7a350bc5bea5477fdbb.
 *         3) The above string then is used to populate the password field in the
 * request.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ExternalAuthenticationAuthorizeTokenRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName password
     * @Type string
     * @var string|null
     */
    private $password = null;

    /**
     * @ElementName loginToken
     * @Type string
     * @var string|null
     */
    private $loginToken = null;

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

