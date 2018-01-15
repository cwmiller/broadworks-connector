<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemShInterfaceParametersGetResponse17
 *
 * Response to SystemShInterfaceParametersGetRequest.  Contains the Sh Interface
 * system parameters.
 */
class SystemShInterfaceParametersGetResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName hssRealm
     * @var string|null
     */
    private $hssRealm = null;

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

