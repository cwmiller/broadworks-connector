<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationVerificationRequest22TrustedExternalAuthenticationLogin
 *
 * @Groups [{"id":"e9727a9f98db3fe2db7ad08079031b73:88","type":"sequence"}]
 */
class AuthenticationVerificationRequest22TrustedExternalAuthenticationLogin
{

    /**
     * @ElementName userId
     * @Type string
     * @Group e9727a9f98db3fe2db7ad08079031b73:88
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

