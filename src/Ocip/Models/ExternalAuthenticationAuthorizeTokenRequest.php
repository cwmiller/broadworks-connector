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
 */
class ExternalAuthenticationAuthorizeTokenRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

