<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemShInterfaceParametersGetResponse
 *
 * Response to SystemShInterfaceParametersGetRequest. Contains the Sh Interface system parameters.
 *
 *                 Replaced by: SystemShInterfaceParametersGetResponse17
 *
 * @see SystemShInterfaceParametersGetRequest
 * @see SystemShInterfaceParametersGetResponse17
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:15953","type":"sequence"}]
 */
class SystemShInterfaceParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName hssRealm
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15953
     * @var string|null
     */
    private $hssRealm = null;

    /**
     * @ElementName requestTimeoutSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15953
     * @var int|null
     */
    private $requestTimeoutSeconds = null;

    /**
     * @ElementName publicIdentityRefreshDelaySeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15953
     * @var int|null
     */
    private $publicIdentityRefreshDelaySeconds = null;

    /**
     * Getter for hssRealm
     *
     * @return string
     */
    public function getHssRealm()
    {
        return $this->hssRealm instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hssRealm;
    }

    /**
     * Setter for hssRealm
     *
     * @param string $hssRealm
     * @return $this
     */
    public function setHssRealm($hssRealm)
    {
        $this->hssRealm = $hssRealm;
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

