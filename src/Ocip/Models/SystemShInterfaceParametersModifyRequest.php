<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemShInterfaceParametersModifyRequest
 *
 * Modifies the Sh Interface system parameters.  This request must be submitted on both nodes in the redundant Application Server cluster in order for the changes to take effect on each node without requiring a restart.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *       
 *         Replaced by: SystemShInterfaceParametersModifyRequest17
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemShInterfaceParametersModifyRequest17
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:29985","type":"sequence"}]
 */
class SystemShInterfaceParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName hssRealm
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:29985
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $hssRealm = null;

    /**
     * @ElementName requestTimeoutSeconds
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:29985
     * @MinInclusive 1
     * @MaxInclusive 30
     * @var int|null
     */
    protected $requestTimeoutSeconds = null;

    /**
     * @ElementName publicIdentityRefreshDelaySeconds
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:29985
     * @MinInclusive 0
     * @MaxInclusive 30
     * @var int|null
     */
    protected $publicIdentityRefreshDelaySeconds = null;

    /**
     * Getter for hssRealm
     *
     * @return string|null
     */
    public function getHssRealm()
    {
        return $this->hssRealm instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hssRealm;
    }

    /**
     * Setter for hssRealm
     *
     * @param string|null $hssRealm
     * @return $this
     */
    public function setHssRealm($hssRealm = null)
    {
        if ($hssRealm === null) {
            $this->hssRealm = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->hssRealm = $hssRealm;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHssRealm()
    {
        $this->hssRealm = null;
        return $this;
    }

    /**
     * Getter for requestTimeoutSeconds
     *
     * @return int
     */
    public function getRequestTimeoutSeconds()
    {
        return $this->requestTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requestTimeoutSeconds;
    }

    /**
     * Setter for requestTimeoutSeconds
     *
     * @param int $requestTimeoutSeconds
     * @return $this
     */
    public function setRequestTimeoutSeconds($requestTimeoutSeconds)
    {
        $this->requestTimeoutSeconds = $requestTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequestTimeoutSeconds()
    {
        $this->requestTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for publicIdentityRefreshDelaySeconds
     *
     * @return int
     */
    public function getPublicIdentityRefreshDelaySeconds()
    {
        return $this->publicIdentityRefreshDelaySeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->publicIdentityRefreshDelaySeconds;
    }

    /**
     * Setter for publicIdentityRefreshDelaySeconds
     *
     * @param int $publicIdentityRefreshDelaySeconds
     * @return $this
     */
    public function setPublicIdentityRefreshDelaySeconds($publicIdentityRefreshDelaySeconds)
    {
        $this->publicIdentityRefreshDelaySeconds = $publicIdentityRefreshDelaySeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPublicIdentityRefreshDelaySeconds()
    {
        $this->publicIdentityRefreshDelaySeconds = null;
        return $this;
    }
}

