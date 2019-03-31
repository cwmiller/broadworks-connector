<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationVerificationRequest22PreAuthorizedExternalAuthenticationLogin
 *
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:3924","type":"sequence"}]
 */
class AuthenticationVerificationRequest22PreAuthorizedExternalAuthenticationLogin
{

    /**
     * @ElementName loginToken
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:3924
     * @MinLength 1
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

