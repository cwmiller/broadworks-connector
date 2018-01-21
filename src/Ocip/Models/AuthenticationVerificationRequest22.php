<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationVerificationRequest22
 *
 * AuthenticationVerificationRequest is sent when a Web user logs in. This request
 * is not for OCI use.
 *         Possible login schemes:
 *           User id and password, no login token = Normal login .
 *           User id and no password = ext. auth. login from trusted host (ACL).
 *           No user id, no password, login token = login through pre-authorized
 * login token.
 *           User id and shared key, no login token = Shared Key login.
 *         
 *         Replaced by AuthenticationVerificationRequest22V2 in AS data mode.
 */
class AuthenticationVerificationRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName normalLogin
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22\NormalLogin|null
     */
    private $normalLogin = null;

    /**
     * @ElementName trustedExternalAuthenticationLogin
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22\TrustedExternalAuthenticationLogin|null
     */
    private $trustedExternalAuthenticationLogin = null;

    /**
     * @ElementName preAuthorizedExternalAuthenticationLogin
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22\PreAuthorizedExternalAuthenticationLogin|null
     */
    private $preAuthorizedExternalAuthenticationLogin = null;

    /**
     * Getter for normalLogin
     *
     * @ElementName normalLogin
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22\NormalLogin|null
     */
    public function getNormalLogin()
    {
        return $this->normalLogin;
    }

    /**
     * Setter for normalLogin
     *
     * @ElementName normalLogin
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22\NormalLogin|null $normalLogin
     * @return $this
     */
    public function setNormalLogin($normalLogin)
    {
        $this->normalLogin = $normalLogin;
        return $this;
    }

    /**
     * Getter for trustedExternalAuthenticationLogin
     *
     * @ElementName trustedExternalAuthenticationLogin
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22\TrustedExternalAuthenticationLogin|null
     */
    public function getTrustedExternalAuthenticationLogin()
    {
        return $this->trustedExternalAuthenticationLogin;
    }

    /**
     * Setter for trustedExternalAuthenticationLogin
     *
     * @ElementName trustedExternalAuthenticationLogin
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22\TrustedExternalAuthenticationLogin|null $trustedExternalAuthenticationLogin
     * @return $this
     */
    public function setTrustedExternalAuthenticationLogin($trustedExternalAuthenticationLogin)
    {
        $this->trustedExternalAuthenticationLogin = $trustedExternalAuthenticationLogin;
        return $this;
    }

    /**
     * Getter for preAuthorizedExternalAuthenticationLogin
     *
     * @ElementName preAuthorizedExternalAuthenticationLogin
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22\PreAuthorizedExternalAuthenticationLogin|null
     */
    public function getPreAuthorizedExternalAuthenticationLogin()
    {
        return $this->preAuthorizedExternalAuthenticationLogin;
    }

    /**
     * Setter for preAuthorizedExternalAuthenticationLogin
     *
     * @ElementName preAuthorizedExternalAuthenticationLogin
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22\PreAuthorizedExternalAuthenticationLogin|null $preAuthorizedExternalAuthenticationLogin
     * @return $this
     */
    public function setPreAuthorizedExternalAuthenticationLogin($preAuthorizedExternalAuthenticationLogin)
    {
        $this->preAuthorizedExternalAuthenticationLogin = $preAuthorizedExternalAuthenticationLogin;
        return $this;
    }


}

