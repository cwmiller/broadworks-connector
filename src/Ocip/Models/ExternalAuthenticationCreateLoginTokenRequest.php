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
 * @Groups [{"id":"d83be92ebac098705e715f24f025a9a9:239","type":"sequence"}]
 */
class ExternalAuthenticationCreateLoginTokenRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group d83be92ebac098705e715f24f025a9a9:239
     * @var string|null
     */
    private $userId = null;

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

