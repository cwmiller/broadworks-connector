<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceModifyRequest22
 *
 * Request to modify a specified system access device.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 *         The following elements are only used in AS data mode and ignored in XS data mode: 
 *           isWebexTeamsDevice
 *           defaultPathHeader          
 *           deviceExternalId
 *           deviceIPEI
 *           useDeviceCode  
 *           deviceCode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:1541","type":"sequence","children":[{"id":"da582a1f8028404e70d260cf1f891033:1542","type":"choice"}]}]
 */
class SystemAccessDeviceModifyRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:1542
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName deviceExternalId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:1542
     * @MaxLength 36
     * @var string|null
     */
    protected $deviceExternalId = null;

    /**
     * @ElementName protocol
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @MinLength 1
     * @MaxLength 20
     * @var string|null
     */
    protected $protocol = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $netAddress = null;

    /**
     * @ElementName port
     * @Type int
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $port = null;

    /**
     * @ElementName outboundProxyServerNetAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $outboundProxyServerNetAddress = null;

    /**
     * @ElementName stunServerNetAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $stunServerNetAddress = null;

    /**
     * @ElementName macAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @MinLength 1
     * @MaxLength 12
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $macAddress = null;

    /**
     * @ElementName serialNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $serialNumber = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $description = null;

    /**
     * @ElementName physicalLocation
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $physicalLocation = null;

    /**
     * @ElementName transportProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol|null
     */
    protected $transportProtocol = null;

    /**
     * @ElementName useCustomUserNamePassword
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @var bool|null
     */
    protected $useCustomUserNamePassword = null;

    /**
     * @ElementName accessDeviceCredentials
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $accessDeviceCredentials = null;

    /**
     * @ElementName isWebexTeamsDevice
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @var bool|null
     */
    protected $isWebexTeamsDevice = null;

    /**
     * @ElementName defaultPathHeader
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $defaultPathHeader = null;

    /**
     * @ElementName deviceIPEI
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $deviceIPEI = null;

    /**
     * @ElementName useDeviceCode
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @var bool|null
     */
    protected $useDeviceCode = null;

    /**
     * @ElementName deviceCode
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1541
     * @Length 4
     * @Pattern [0-9][0-9][0-9][0-9]
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $deviceCode = null;

    /**
     * Getter for deviceName
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @param string $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceName()
    {
        $this->deviceName = null;
        return $this;
    }

    /**
     * Getter for deviceExternalId
     *
     * @return string
     */
    public function getDeviceExternalId()
    {
        return $this->deviceExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceExternalId;
    }

    /**
     * Setter for deviceExternalId
     *
     * @param string $deviceExternalId
     * @return $this
     */
    public function setDeviceExternalId($deviceExternalId)
    {
        $this->deviceExternalId = $deviceExternalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceExternalId()
    {
        $this->deviceExternalId = null;
        return $this;
    }

    /**
     * Getter for protocol
     *
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocol;
    }

    /**
     * Setter for protocol
     *
     * @param string $protocol
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProtocol()
    {
        $this->protocol = null;
        return $this;
    }

    /**
     * Getter for netAddress
     *
     * @return string|null
     */
    public function getNetAddress()
    {
        return $this->netAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @param string|null $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress = null)
    {
        if ($netAddress === null) {
            $this->netAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->netAddress = $netAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetAddress()
    {
        $this->netAddress = null;
        return $this;
    }

    /**
     * Getter for port
     *
     * @return int|null
     */
    public function getPort()
    {
        return $this->port instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->port;
    }

    /**
     * Setter for port
     *
     * @param int|null $port
     * @return $this
     */
    public function setPort($port = null)
    {
        if ($port === null) {
            $this->port = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->port = $port;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPort()
    {
        $this->port = null;
        return $this;
    }

    /**
     * Getter for outboundProxyServerNetAddress
     *
     * @return string|null
     */
    public function getOutboundProxyServerNetAddress()
    {
        return $this->outboundProxyServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outboundProxyServerNetAddress;
    }

    /**
     * Setter for outboundProxyServerNetAddress
     *
     * @param string|null $outboundProxyServerNetAddress
     * @return $this
     */
    public function setOutboundProxyServerNetAddress($outboundProxyServerNetAddress = null)
    {
        if ($outboundProxyServerNetAddress === null) {
            $this->outboundProxyServerNetAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->outboundProxyServerNetAddress = $outboundProxyServerNetAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutboundProxyServerNetAddress()
    {
        $this->outboundProxyServerNetAddress = null;
        return $this;
    }

    /**
     * Getter for stunServerNetAddress
     *
     * @return string|null
     */
    public function getStunServerNetAddress()
    {
        return $this->stunServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->stunServerNetAddress;
    }

    /**
     * Setter for stunServerNetAddress
     *
     * @param string|null $stunServerNetAddress
     * @return $this
     */
    public function setStunServerNetAddress($stunServerNetAddress = null)
    {
        if ($stunServerNetAddress === null) {
            $this->stunServerNetAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->stunServerNetAddress = $stunServerNetAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStunServerNetAddress()
    {
        $this->stunServerNetAddress = null;
        return $this;
    }

    /**
     * Getter for macAddress
     *
     * @return string|null
     */
    public function getMacAddress()
    {
        return $this->macAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macAddress;
    }

    /**
     * Setter for macAddress
     *
     * @param string|null $macAddress
     * @return $this
     */
    public function setMacAddress($macAddress = null)
    {
        if ($macAddress === null) {
            $this->macAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->macAddress = $macAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMacAddress()
    {
        $this->macAddress = null;
        return $this;
    }

    /**
     * Getter for serialNumber
     *
     * @return string|null
     */
    public function getSerialNumber()
    {
        return $this->serialNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serialNumber;
    }

    /**
     * Setter for serialNumber
     *
     * @param string|null $serialNumber
     * @return $this
     */
    public function setSerialNumber($serialNumber = null)
    {
        if ($serialNumber === null) {
            $this->serialNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->serialNumber = $serialNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSerialNumber()
    {
        $this->serialNumber = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for physicalLocation
     *
     * @return string|null
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->physicalLocation;
    }

    /**
     * Setter for physicalLocation
     *
     * @param string|null $physicalLocation
     * @return $this
     */
    public function setPhysicalLocation($physicalLocation = null)
    {
        if ($physicalLocation === null) {
            $this->physicalLocation = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->physicalLocation = $physicalLocation;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhysicalLocation()
    {
        $this->physicalLocation = null;
        return $this;
    }

    /**
     * Getter for transportProtocol
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol
     */
    public function getTransportProtocol()
    {
        return $this->transportProtocol instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transportProtocol;
    }

    /**
     * Setter for transportProtocol
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol $transportProtocol
     * @return $this
     */
    public function setTransportProtocol(\CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol $transportProtocol)
    {
        $this->transportProtocol = $transportProtocol;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransportProtocol()
    {
        $this->transportProtocol = null;
        return $this;
    }

    /**
     * Getter for useCustomUserNamePassword
     *
     * @return bool
     */
    public function getUseCustomUserNamePassword()
    {
        return $this->useCustomUserNamePassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useCustomUserNamePassword;
    }

    /**
     * Setter for useCustomUserNamePassword
     *
     * @param bool $useCustomUserNamePassword
     * @return $this
     */
    public function setUseCustomUserNamePassword($useCustomUserNamePassword)
    {
        $this->useCustomUserNamePassword = $useCustomUserNamePassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseCustomUserNamePassword()
    {
        $this->useCustomUserNamePassword = null;
        return $this;
    }

    /**
     * Getter for accessDeviceCredentials
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16|null
     */
    public function getAccessDeviceCredentials()
    {
        return $this->accessDeviceCredentials instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceCredentials;
    }

    /**
     * Setter for accessDeviceCredentials
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16|null $accessDeviceCredentials
     * @return $this
     */
    public function setAccessDeviceCredentials(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16 $accessDeviceCredentials = null)
    {
        if ($accessDeviceCredentials === null) {
            $this->accessDeviceCredentials = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accessDeviceCredentials = $accessDeviceCredentials;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceCredentials()
    {
        $this->accessDeviceCredentials = null;
        return $this;
    }

    /**
     * Getter for isWebexTeamsDevice
     *
     * @return bool
     */
    public function getIsWebexTeamsDevice()
    {
        return $this->isWebexTeamsDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isWebexTeamsDevice;
    }

    /**
     * Setter for isWebexTeamsDevice
     *
     * @param bool $isWebexTeamsDevice
     * @return $this
     */
    public function setIsWebexTeamsDevice($isWebexTeamsDevice)
    {
        $this->isWebexTeamsDevice = $isWebexTeamsDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsWebexTeamsDevice()
    {
        $this->isWebexTeamsDevice = null;
        return $this;
    }

    /**
     * Getter for defaultPathHeader
     *
     * @return string|null
     */
    public function getDefaultPathHeader()
    {
        return $this->defaultPathHeader instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultPathHeader;
    }

    /**
     * Setter for defaultPathHeader
     *
     * @param string|null $defaultPathHeader
     * @return $this
     */
    public function setDefaultPathHeader($defaultPathHeader = null)
    {
        if ($defaultPathHeader === null) {
            $this->defaultPathHeader = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultPathHeader = $defaultPathHeader;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultPathHeader()
    {
        $this->defaultPathHeader = null;
        return $this;
    }

    /**
     * Getter for deviceIPEI
     *
     * @return string|null
     */
    public function getDeviceIPEI()
    {
        return $this->deviceIPEI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceIPEI;
    }

    /**
     * Setter for deviceIPEI
     *
     * @param string|null $deviceIPEI
     * @return $this
     */
    public function setDeviceIPEI($deviceIPEI = null)
    {
        if ($deviceIPEI === null) {
            $this->deviceIPEI = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deviceIPEI = $deviceIPEI;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceIPEI()
    {
        $this->deviceIPEI = null;
        return $this;
    }

    /**
     * Getter for useDeviceCode
     *
     * @return bool
     */
    public function getUseDeviceCode()
    {
        return $this->useDeviceCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDeviceCode;
    }

    /**
     * Setter for useDeviceCode
     *
     * @param bool $useDeviceCode
     * @return $this
     */
    public function setUseDeviceCode($useDeviceCode)
    {
        $this->useDeviceCode = $useDeviceCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDeviceCode()
    {
        $this->useDeviceCode = null;
        return $this;
    }

    /**
     * Getter for deviceCode
     *
     * @return string|null
     */
    public function getDeviceCode()
    {
        return $this->deviceCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceCode;
    }

    /**
     * Setter for deviceCode
     *
     * @param string|null $deviceCode
     * @return $this
     */
    public function setDeviceCode($deviceCode = null)
    {
        if ($deviceCode === null) {
            $this->deviceCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deviceCode = $deviceCode;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceCode()
    {
        $this->deviceCode = null;
        return $this;
    }
}

