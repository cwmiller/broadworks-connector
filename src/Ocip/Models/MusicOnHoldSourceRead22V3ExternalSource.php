<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceRead22V3ExternalSource
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3420","type":"sequence"}]
 */
class MusicOnHoldSourceRead22V3ExternalSource
{

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3420
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22|null
     */
    protected $accessDeviceEndpoint = null;

    /**
     * @ElementName authenticationRequired
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3420
     * @var bool|null
     */
    protected $authenticationRequired = null;

    /**
     * @ElementName authenticationUserName
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3420
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $authenticationUserName = null;

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22 $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead22 $accessDeviceEndpoint)
    {
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceEndpoint()
    {
        $this->accessDeviceEndpoint = null;
        return $this;
    }

    /**
     * Getter for authenticationRequired
     *
     * @return bool
     */
    public function getAuthenticationRequired()
    {
        return $this->authenticationRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->authenticationRequired;
    }

    /**
     * Setter for authenticationRequired
     *
     * @param bool $authenticationRequired
     * @return $this
     */
    public function setAuthenticationRequired($authenticationRequired)
    {
        $this->authenticationRequired = $authenticationRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuthenticationRequired()
    {
        $this->authenticationRequired = null;
        return $this;
    }

    /**
     * Getter for authenticationUserName
     *
     * @return string
     */
    public function getAuthenticationUserName()
    {
        return $this->authenticationUserName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->authenticationUserName;
    }

    /**
     * Setter for authenticationUserName
     *
     * @param string $authenticationUserName
     * @return $this
     */
    public function setAuthenticationUserName($authenticationUserName)
    {
        $this->authenticationUserName = $authenticationUserName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuthenticationUserName()
    {
        $this->authenticationUserName = null;
        return $this;
    }


}

