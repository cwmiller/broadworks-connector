<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LoginRequest22V5
 *
 * Request to login to OCI.
 *         password is not required for external authentication login from a trusted host (ACL).
 *         
 *         The following data element is only used in XS data mode and will be ignored in AS data mode:
 *           signedPassword, ignored in AS data mode unless the password element is not present then an error is returned.
 *
 *         The response is either an LoginResponse22V5 or ErrorResponse
 *
 * @see LoginResponse22V5
 * @see ErrorResponse
 * @Groups [{"id":"ef3c4f453d01f7ce750331de83ebc765:295","type":"sequence"}]
 */
class LoginRequest22V5 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group ef3c4f453d01f7ce750331de83ebc765:295
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName password
     * @Type string
     * @Optional
     * @Group ef3c4f453d01f7ce750331de83ebc765:295
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $password = null;

    /**
     * @ElementName signedPassword
     * @Type string
     * @Optional
     * @Group ef3c4f453d01f7ce750331de83ebc765:295
     * @MinLength 1
     * @var string|null
     */
    protected $signedPassword = null;

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
     * Getter for signedPassword
     *
     * @return string
     */
    public function getSignedPassword()
    {
        return $this->signedPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->signedPassword;
    }

    /**
     * Setter for signedPassword
     *
     * @param string $signedPassword
     * @return $this
     */
    public function setSignedPassword($signedPassword)
    {
        $this->signedPassword = $signedPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSignedPassword()
    {
        $this->signedPassword = null;
        return $this;
    }
}

