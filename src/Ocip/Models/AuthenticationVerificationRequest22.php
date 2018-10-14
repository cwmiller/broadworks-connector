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
 *
 * @see AuthenticationVerificationRequest
 * @see AuthenticationVerificationRequest22
 */
class AuthenticationVerificationRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName normalLogin
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22NormalLogin|null
     */
    private $normalLogin = null;

    /**
     * @ElementName trustedExternalAuthenticationLogin
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22TrustedExternalAuthenticationLogin|null
     */
    private $trustedExternalAuthenticationLogin = null;

    /**
     * @ElementName preAuthorizedExternalAuthenticationLogin
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22PreAuthorizedExternalAuthenticationLogin|null
     */
    private $preAuthorizedExternalAuthenticationLogin = null;

    /**
     * Getter for normalLogin
     *
     * @ElementName normalLogin
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22NormalLogin|null
     */
    public function getNormalLogin()
    {
        return $this->normalLogin;
    }

    /**
     * Setter for normalLogin
     *
     * @ElementName normalLogin
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22NormalLogin|null $normalLogin
     * @return $this
     */
    public function setNormalLogin(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22NormalLogin $normalLogin)
    {
        $this->normalLogin = $normalLogin;
        return $this;
    }

    /**
     * Getter for trustedExternalAuthenticationLogin
     *
     * @ElementName trustedExternalAuthenticationLogin
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22TrustedExternalAuthenticationLogin|null
     */
    public function getTrustedExternalAuthenticationLogin()
    {
        return $this->trustedExternalAuthenticationLogin;
    }

    /**
     * Setter for trustedExternalAuthenticationLogin
     *
     * @ElementName trustedExternalAuthenticationLogin
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22TrustedExternalAuthenticationLogin|null $trustedExternalAuthenticationLogin
     * @return $this
     */
    public function setTrustedExternalAuthenticationLogin(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22TrustedExternalAuthenticationLogin $trustedExternalAuthenticationLogin)
    {
        $this->trustedExternalAuthenticationLogin = $trustedExternalAuthenticationLogin;
        return $this;
    }

    /**
     * Getter for preAuthorizedExternalAuthenticationLogin
     *
     * @ElementName preAuthorizedExternalAuthenticationLogin
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22PreAuthorizedExternalAuthenticationLogin|null
     */
    public function getPreAuthorizedExternalAuthenticationLogin()
    {
        return $this->preAuthorizedExternalAuthenticationLogin;
    }

    /**
     * Setter for preAuthorizedExternalAuthenticationLogin
     *
     * @ElementName preAuthorizedExternalAuthenticationLogin
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22PreAuthorizedExternalAuthenticationLogin|null $preAuthorizedExternalAuthenticationLogin
     * @return $this
     */
    public function setPreAuthorizedExternalAuthenticationLogin(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22PreAuthorizedExternalAuthenticationLogin $preAuthorizedExternalAuthenticationLogin)
    {
        $this->preAuthorizedExternalAuthenticationLogin = $preAuthorizedExternalAuthenticationLogin;
        return $this;
    }


}

