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
 * @Groups [{"id":"21fd3c6abc11c44e52803121f7739a76:239","type":"sequence"}]
 */
class ExternalAuthenticationCreateLoginTokenRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 21fd3c6abc11c44e52803121f7739a76:239
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

