<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationVerificationRequest22
 *
 * AuthenticationVerificationRequest is sent when a Web user logs in. This request is not for OCI use.
 *         Possible login schemes:
 *           User id and password, no login token = Normal login .
 *           User id and no password = ext. auth. login from trusted host (ACL).
 *           No user id, no password, login token = login through pre-authorized login token.
 *           User id and shared key, no login token = Shared Key login.
 *         
 *         Replaced by AuthenticationVerificationRequest22V2 in AS data mode.
 *
 * @see AuthenticationVerificationRequest
 * @see AuthenticationVerificationRequest22V2
 * @Groups [{"id":"bd46fc427b2b0dc182dcd53cf03e95b4:73","type":"sequence","children":[{"id":"bd46fc427b2b0dc182dcd53cf03e95b4:74","type":"choice","children":[{"id":"bd46fc427b2b0dc182dcd53cf03e95b4:78","type":"sequence"},{"id":"bd46fc427b2b0dc182dcd53cf03e95b4:88","type":"sequence"},{"id":"bd46fc427b2b0dc182dcd53cf03e95b4:96","type":"sequence"}]}]}]
 */
class AuthenticationVerificationRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName normalLogin
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22NormalLogin
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:74
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22NormalLogin|null
     */
    private $normalLogin = null;

    /**
     * @ElementName trustedExternalAuthenticationLogin
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22TrustedExternalAuthenticationLogin
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:74
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22TrustedExternalAuthenticationLogin|null
     */
    private $trustedExternalAuthenticationLogin = null;

    /**
     * @ElementName preAuthorizedExternalAuthenticationLogin
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22PreAuthorizedExternalAuthenticationLogin
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:74
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22PreAuthorizedExternalAuthenticationLogin|null
     */
    private $preAuthorizedExternalAuthenticationLogin = null;

    /**
     * Getter for normalLogin
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22NormalLogin
     */
    public function getNormalLogin()
    {
        return $this->normalLogin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->normalLogin;
    }

    /**
     * Setter for normalLogin
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22NormalLogin $normalLogin
     * @return $this
     */
    public function setNormalLogin(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22NormalLogin $normalLogin)
    {
        $this->normalLogin = $normalLogin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNormalLogin()
    {
        $this->normalLogin = null;
        return $this;
    }

    /**
     * Getter for trustedExternalAuthenticationLogin
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22TrustedExternalAuthenticationLogin
     */
    public function getTrustedExternalAuthenticationLogin()
    {
        return $this->trustedExternalAuthenticationLogin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trustedExternalAuthenticationLogin;
    }

    /**
     * Setter for trustedExternalAuthenticationLogin
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22TrustedExternalAuthenticationLogin $trustedExternalAuthenticationLogin
     * @return $this
     */
    public function setTrustedExternalAuthenticationLogin(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22TrustedExternalAuthenticationLogin $trustedExternalAuthenticationLogin)
    {
        $this->trustedExternalAuthenticationLogin = $trustedExternalAuthenticationLogin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrustedExternalAuthenticationLogin()
    {
        $this->trustedExternalAuthenticationLogin = null;
        return $this;
    }

    /**
     * Getter for preAuthorizedExternalAuthenticationLogin
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22PreAuthorizedExternalAuthenticationLogin
     */
    public function getPreAuthorizedExternalAuthenticationLogin()
    {
        return $this->preAuthorizedExternalAuthenticationLogin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preAuthorizedExternalAuthenticationLogin;
    }

    /**
     * Setter for preAuthorizedExternalAuthenticationLogin
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22PreAuthorizedExternalAuthenticationLogin $preAuthorizedExternalAuthenticationLogin
     * @return $this
     */
    public function setPreAuthorizedExternalAuthenticationLogin(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22PreAuthorizedExternalAuthenticationLogin $preAuthorizedExternalAuthenticationLogin)
    {
        $this->preAuthorizedExternalAuthenticationLogin = $preAuthorizedExternalAuthenticationLogin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPreAuthorizedExternalAuthenticationLogin()
    {
        $this->preAuthorizedExternalAuthenticationLogin = null;
        return $this;
    }


}

