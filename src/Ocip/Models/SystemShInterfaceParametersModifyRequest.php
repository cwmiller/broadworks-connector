<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemShInterfaceParametersModifyRequest
 *
 * Modifies the Sh Interface system parameters.  This request must be submitted on
 * both nodes in the redundant Application Server cluster in order for the changes
 * to take effect on each node without requiring a restart.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *       
 *         Replaced by: SystemShInterfaceParametersModifyRequest17
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemShInterfaceParametersModifyRequest17
 */
class SystemShInterfaceParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName hssRealm
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $hssRealm = null;

    /**
     * @ElementName requestTimeoutSeconds
     * @var int|null
     */
    private $requestTimeoutSeconds = null;

    /**
     * @ElementName publicIdentityRefreshDelaySeconds
     * @var int|null
     */
    private $publicIdentityRefreshDelaySeconds = null;

    /**
     * Getter for hssRealm
     *
     * @ElementName hssRealm
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHssRealm()
    {
        return $this->hssRealm;
    }

    /**
     * Setter for hssRealm
     *
     * @ElementName hssRealm
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $hssRealm
     * @return $this
     */
    public function setHssRealm($hssRealm)
    {
        $this->hssRealm = $hssRealm;
        return $this;
    }

    /**
     * Getter for requestTimeoutSeconds
     *
     * @ElementName requestTimeoutSeconds
     * @return int|null
     */
    public function getRequestTimeoutSeconds()
    {
        return $this->requestTimeoutSeconds;
    }

    /**
     * Setter for requestTimeoutSeconds
     *
     * @ElementName requestTimeoutSeconds
     * @param int|null $requestTimeoutSeconds
     * @return $this
     */
    public function setRequestTimeoutSeconds($requestTimeoutSeconds)
    {
        $this->requestTimeoutSeconds = $requestTimeoutSeconds;
        return $this;
    }

    /**
     * Getter for publicIdentityRefreshDelaySeconds
     *
     * @ElementName publicIdentityRefreshDelaySeconds
     * @return int|null
     */
    public function getPublicIdentityRefreshDelaySeconds()
    {
        return $this->publicIdentityRefreshDelaySeconds;
    }

    /**
     * Setter for publicIdentityRefreshDelaySeconds
     *
     * @ElementName publicIdentityRefreshDelaySeconds
     * @param int|null $publicIdentityRefreshDelaySeconds
     * @return $this
     */
    public function setPublicIdentityRefreshDelaySeconds($publicIdentityRefreshDelaySeconds)
    {
        $this->publicIdentityRefreshDelaySeconds = $publicIdentityRefreshDelaySeconds;
        return $this;
    }


}

