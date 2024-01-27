<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LoginRequest13mp10
 *
 * LoginRequest13mp10 is 2nd stage of the 2 stage OCI login process.
 *         The signedPassword is not required for external authentication login from a trusted host (ACL).
 *         The response is either an LoginResponse13mp10 or ErrorResponse
 *
 * @see LoginRequest13mp10
 * @see LoginResponse13mp10
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:16808","type":"sequence"}]
 */
class LoginRequest13mp10 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:16808
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName signedPassword
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16808
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

