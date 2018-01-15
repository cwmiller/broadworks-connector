<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemShInterfaceParametersGetResponse
 *
 * Response to SystemShInterfaceParametersGetRequest.  Contains the Sh Interface
 * system parameters.
 */
class SystemShInterfaceParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName hssRealm
     * @var string|null
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
     * @return string|null
     */
    public function getHssRealm()
    {
        return $this->hssRealm;
    }

    /**
     * Setter for hssRealm
     *
     * @ElementName hssRealm
     * @param string|null $hssRealm
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

