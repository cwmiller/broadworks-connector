<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceModify22ExternalSource
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3230","type":"sequence"}]
 */
class MusicOnHoldSourceModify22ExternalSource
{

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify
     * @Nillable
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3230
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName authenticationRequired
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3230
     * @var bool|null
     */
    private $authenticationRequired = null;

    /**
     * @ElementName authenticationUserName
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3230
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $authenticationUserName = null;

    /**
     * @ElementName authenticationPassword
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3230
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    private $authenticationPassword = null;

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify $accessDeviceEndpoint = null)
    {
        if ($accessDeviceEndpoint === null) {
            $this->accessDeviceEndpoint = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        }
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

    /**
     * Getter for authenticationPassword
     *
     * @return string
     */
    public function getAuthenticationPassword()
    {
        return $this->authenticationPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->authenticationPassword;
    }

    /**
     * Setter for authenticationPassword
     *
     * @param string $authenticationPassword
     * @return $this
     */
    public function setAuthenticationPassword($authenticationPassword)
    {
        $this->authenticationPassword = $authenticationPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuthenticationPassword()
    {
        $this->authenticationPassword = null;
        return $this;
    }


}

