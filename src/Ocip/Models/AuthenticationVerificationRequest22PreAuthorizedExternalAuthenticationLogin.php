<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationVerificationRequest22PreAuthorizedExternalAuthenticationLogin
 *
 * @Groups [{"id":"e9727a9f98db3fe2db7ad08079031b73:96","type":"sequence"}]
 */
class AuthenticationVerificationRequest22PreAuthorizedExternalAuthenticationLogin
{

    /**
     * @ElementName loginToken
     * @Type string
     * @Group e9727a9f98db3fe2db7ad08079031b73:96
     * @var string|null
     */
    private $loginToken = null;

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

