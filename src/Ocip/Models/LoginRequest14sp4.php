<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LoginRequest14sp4
 *
 * LoginRequest14sp4 is 2nd stage of the 2 stage OCI login process.
 *         The signedPassword is not required for external authentication login from a trusted host (ACL).
 *
 * @see LoginRequest14sp4
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:18913","type":"sequence"}]
 */
class LoginRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:18913
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName signedPassword
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:18913
     * @MinLength 1
     * @var string|null
     */
    protected $signedPassword = null;

    /**
     * @ElementName plainTextPassword
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:18913
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $plainTextPassword = null;

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

    /**
     * Getter for plainTextPassword
     *
     * @return string
     */
    public function getPlainTextPassword()
    {
        return $this->plainTextPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->plainTextPassword;
    }

    /**
     * Setter for plainTextPassword
     *
     * @param string $plainTextPassword
     * @return $this
     */
    public function setPlainTextPassword($plainTextPassword)
    {
        $this->plainTextPassword = $plainTextPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlainTextPassword()
    {
        $this->plainTextPassword = null;
        return $this;
    }
}

