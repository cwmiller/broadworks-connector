<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExternalAuthenticationCreateLoginTokenRequest
 *
 * This command allows a BroadWorks or Third-Party Client Application to
 *         create a Single Sign-On token for a user.
 *         The response is either ExternalAuthenticationCreateLoginTokenResponse
 *         or ErrorResponse.
 *
 * @see ExternalAuthenticationCreateLoginTokenResponse
 * @see ErrorResponse
 * @Groups [{"id":"ef3c4f453d01f7ce750331de83ebc765:259","type":"sequence"}]
 */
class ExternalAuthenticationCreateLoginTokenRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group ef3c4f453d01f7ce750331de83ebc765:259
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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
}

