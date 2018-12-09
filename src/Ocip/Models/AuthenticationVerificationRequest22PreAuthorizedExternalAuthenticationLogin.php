<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationVerificationRequest22PreAuthorizedExternalAuthenticationLogin
 *
 * @Groups [{"id":"bd46fc427b2b0dc182dcd53cf03e95b4:96","type":"sequence"}]
 */
class AuthenticationVerificationRequest22PreAuthorizedExternalAuthenticationLogin
{

    /**
     * @ElementName loginToken
     * @Type string
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:96
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

