<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetResponse24V3
 *
 * Response to SystemAccessDeviceGetRequest24V3
 *
 *         The following elements are only used in AS data mode:
 *            version
 *            deviceName 
 *            deviceExternalId
 *            
 *         The following elements are only used in AS data mode and not returned in XS data mode:
 *            isWebexTeamsDevice
 *            defaultPathHeader           
 *            deviceCode
 *            deviceIPEI
 *            deviceIndex
 *            useDeviceCode      
 *            authBearerSubject
 *
 * @see SystemAccessDeviceGetRequest24V3
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:1412","type":"sequence"}]
 */
class SystemAccessDeviceGetResponse24V3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * @ElementName protocol
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @MinLength 1
     * @MaxLength 20
     * @var string|null
     */
    protected $protocol = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $netAddress = null;

    /**
     * @ElementName port
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $port = null;

    /**
     * @ElementName outboundProxyServerNetAddress
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $outboundProxyServerNetAddress = null;

    /**
     * @ElementName stunServerNetAddress
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $stunServerNetAddress = null;

    /**
     * @ElementName macAddress
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @MinLength 1
     * @MaxLength 12
     * @var string|null
     */
    protected $macAddress = null;

    /**
     * @ElementName serialNumber
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $serialNumber = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName numberOfPorts
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    protected $numberOfPorts = null;

    /**
     * @ElementName numberOfAssignedPorts
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @var int|null
     */
    protected $numberOfAssignedPorts = null;

    /**
     * @ElementName status
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceStatus
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceStatus|null
     */
    protected $status = null;

    /**
     * @ElementName physicalLocation
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null
     */
    protected $physicalLocation = null;

    /**
     * @ElementName transportProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol|null
     */
    protected $transportProtocol = null;

    /**
     * @ElementName useCustomUserNamePassword
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @var bool|null
     */
    protected $useCustomUserNamePassword = null;

    /**
     * @ElementName userName
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userName = null;

    /**
     * @ElementName version
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null
     */
    protected $version = null;

    /**
     * @ElementName isWebexTeamsDevice
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @var bool|null
     */
    protected $isWebexTeamsDevice = null;

    /**
     * @ElementName defaultPathHeader
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null
     */
    protected $defaultPathHeader = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName deviceExternalId
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @MaxLength 36
     * @var string|null
     */
    protected $deviceExternalId = null;

    /**
     * @ElementName deviceCode
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @Length 4
     * @Pattern [0-9][0-9][0-9][0-9]
     * @var string|null
     */
    protected $deviceCode = null;

    /**
     * @ElementName deviceIPEI
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $deviceIPEI = null;

    /**
     * @ElementName deviceIndex
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @var int|null
     */
    protected $deviceIndex = null;

    /**
     * @ElementName useDeviceCode
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @var bool|null
     */
    protected $useDeviceCode = null;

    /**
     * @ElementName authBearerSubject
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1412
     * @var string|null
     */
    protected $authBearerSubject = null;

    /**
     * Getter for deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @param string $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceType()
    {
        $this->deviceType = null;
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
     * @return string
     */
    public function getNetAddress()
    {
        return $this->netAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @param string $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
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
     * @return int
     */
    public function getPort()
    {
        return $this->port instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->port;
    }

    /**
     * Setter for port
     *
     * @param int $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;
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
     * @return string
     */
    public function getOutboundProxyServerNetAddress()
    {
        return $this->outboundProxyServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outboundProxyServerNetAddress;
    }

    /**
     * Setter for outboundProxyServerNetAddress
     *
     * @param string $outboundProxyServerNetAddress
     * @return $this
     */
    public function setOutboundProxyServerNetAddress($outboundProxyServerNetAddress)
    {
        $this->outboundProxyServerNetAddress = $outboundProxyServerNetAddress;
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
     * @return string
     */
    public function getStunServerNetAddress()
    {
        return $this->stunServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->stunServerNetAddress;
    }

    /**
     * Setter for stunServerNetAddress
     *
     * @param string $stunServerNetAddress
     * @return $this
     */
    public function setStunServerNetAddress($stunServerNetAddress)
    {
        $this->stunServerNetAddress = $stunServerNetAddress;
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
     * @return string
     */
    public function getMacAddress()
    {
        return $this->macAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macAddress;
    }

    /**
     * Setter for macAddress
     *
     * @param string $macAddress
     * @return $this
     */
    public function setMacAddress($macAddress)
    {
        $this->macAddress = $macAddress;
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
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serialNumber;
    }

    /**
     * Setter for serialNumber
     *
     * @param string $serialNumber
     * @return $this
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
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
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * Getter for numberOfPorts
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     */
    public function getNumberOfPorts()
    {
        return $this->numberOfPorts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfPorts;
    }

    /**
     * Setter for numberOfPorts
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $numberOfPorts
     * @return $this
     */
    public function setNumberOfPorts(\CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $numberOfPorts)
    {
        $this->numberOfPorts = $numberOfPorts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfPorts()
    {
        $this->numberOfPorts = null;
        return $this;
    }

    /**
     * Getter for numberOfAssignedPorts
     *
     * @return int
     */
    public function getNumberOfAssignedPorts()
    {
        return $this->numberOfAssignedPorts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfAssignedPorts;
    }

    /**
     * Setter for numberOfAssignedPorts
     *
     * @param int $numberOfAssignedPorts
     * @return $this
     */
    public function setNumberOfAssignedPorts($numberOfAssignedPorts)
    {
        $this->numberOfAssignedPorts = $numberOfAssignedPorts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfAssignedPorts()
    {
        $this->numberOfAssignedPorts = null;
        return $this;
    }

    /**
     * Getter for status
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceStatus
     */
    public function getStatus()
    {
        return $this->status instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->status;
    }

    /**
     * Setter for status
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceStatus $status
     * @return $this
     */
    public function setStatus(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceStatus $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatus()
    {
        $this->status = null;
        return $this;
    }

    /**
     * Getter for physicalLocation
     *
     * @return string
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->physicalLocation;
    }

    /**
     * Setter for physicalLocation
     *
     * @param string $physicalLocation
     * @return $this
     */
    public function setPhysicalLocation($physicalLocation)
    {
        $this->physicalLocation = $physicalLocation;
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
     * Getter for userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userName;
    }

    /**
     * Setter for userName
     *
     * @param string $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserName()
    {
        $this->userName = null;
        return $this;
    }

    /**
     * Getter for version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->version;
    }

    /**
     * Setter for version
     *
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVersion()
    {
        $this->version = null;
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
     * @return string
     */
    public function getDefaultPathHeader()
    {
        return $this->defaultPathHeader instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultPathHeader;
    }

    /**
     * Setter for defaultPathHeader
     *
     * @param string $defaultPathHeader
     * @return $this
     */
    public function setDefaultPathHeader($defaultPathHeader)
    {
        $this->defaultPathHeader = $defaultPathHeader;
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
     * Getter for deviceCode
     *
     * @return string
     */
    public function getDeviceCode()
    {
        return $this->deviceCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceCode;
    }

    /**
     * Setter for deviceCode
     *
     * @param string $deviceCode
     * @return $this
     */
    public function setDeviceCode($deviceCode)
    {
        $this->deviceCode = $deviceCode;
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

    /**
     * Getter for deviceIPEI
     *
     * @return string
     */
    public function getDeviceIPEI()
    {
        return $this->deviceIPEI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceIPEI;
    }

    /**
     * Setter for deviceIPEI
     *
     * @param string $deviceIPEI
     * @return $this
     */
    public function setDeviceIPEI($deviceIPEI)
    {
        $this->deviceIPEI = $deviceIPEI;
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
     * Getter for deviceIndex
     *
     * @return int
     */
    public function getDeviceIndex()
    {
        return $this->deviceIndex instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceIndex;
    }

    /**
     * Setter for deviceIndex
     *
     * @param int $deviceIndex
     * @return $this
     */
    public function setDeviceIndex($deviceIndex)
    {
        $this->deviceIndex = $deviceIndex;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceIndex()
    {
        $this->deviceIndex = null;
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
     * Getter for authBearerSubject
     *
     * @return string
     */
    public function getAuthBearerSubject()
    {
        return $this->authBearerSubject instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->authBearerSubject;
    }

    /**
     * Setter for authBearerSubject
     *
     * @param string $authBearerSubject
     * @return $this
     */
    public function setAuthBearerSubject($authBearerSubject)
    {
        $this->authBearerSubject = $authBearerSubject;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuthBearerSubject()
    {
        $this->authBearerSubject = null;
        return $this;
    }
}

