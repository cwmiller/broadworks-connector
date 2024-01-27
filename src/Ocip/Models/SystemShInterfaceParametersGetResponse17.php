<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemShInterfaceParametersGetResponse17
 *
 * Response to SystemShInterfaceParametersGetRequest.  Contains the Sh Interface system parameters.
 *
 * @see SystemShInterfaceParametersGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16625","type":"sequence"}]
 */
class SystemShInterfaceParametersGetResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName hssRealm
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16625
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $hssRealm = null;

    /**
     * @ElementName publicIdentityRefreshDelaySeconds
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:16625
     * @MinInclusive 0
     * @MaxInclusive 30
     * @var int|null
     */
    protected $publicIdentityRefreshDelaySeconds = null;

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

