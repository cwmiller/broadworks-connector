<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceAddRequest22
 *
 * Request to add a system-level access device.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in AS data mode and ignored in XS data mode: 
 *           useHotline
 *           hotlineContact
 *           deviceExternalId
 *           
 *         Replaced by: SystemAccessDeviceAddRequest22V2
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemAccessDeviceAddRequest22V2
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:7403","type":"sequence","children":[{"id":"240b50f54d060859e5e275082fdf49f9:7404","type":"choice"}]}]
 */
class SystemAccessDeviceAddRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceName
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:7404
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName deviceExternalId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:7404
     * @MaxLength 36
     * @var string|null
     */
    protected $deviceExternalId = null;

    /**
     * @ElementName deviceType
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * @ElementName protocol
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @MinLength 1
     * @MaxLength 20
     * @var string|null
     */
    protected $protocol = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $netAddress = null;

    /**
     * @ElementName port
     * @Type int
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $port = null;

    /**
     * @ElementName outboundProxyServerNetAddress
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $outboundProxyServerNetAddress = null;

    /**
     * @ElementName stunServerNetAddress
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $stunServerNetAddress = null;

    /**
     * @ElementName macAddress
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @MinLength 1
     * @MaxLength 12
     * @var string|null
     */
    protected $macAddress = null;

    /**
     * @ElementName serialNumber
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $serialNumber = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName physicalLocation
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null
     */
    protected $physicalLocation = null;

    /**
     * @ElementName transportProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol|null
     */
    protected $transportProtocol = null;

    /**
     * @ElementName mobilityManagerProvisioningURL
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $mobilityManagerProvisioningURL = null;

    /**
     * @ElementName mobilityManagerProvisioningUserName
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @MinLength 1
     * @MaxLength 15
     * @var string|null
     */
    protected $mobilityManagerProvisioningUserName = null;

    /**
     * @ElementName mobilityManagerProvisioningPassword
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @MinLength 1
     * @MaxLength 15
     * @var string|null
     */
    protected $mobilityManagerProvisioningPassword = null;

    /**
     * @ElementName mobilityManagerDefaultOriginatingServiceKey
     * @Type int
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @MinInclusive 0
     * @MaxInclusive 999
     * @var int|null
     */
    protected $mobilityManagerDefaultOriginatingServiceKey = null;

    /**
     * @ElementName mobilityManagerDefaultTerminatingServiceKey
     * @Type int
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @MinInclusive 0
     * @MaxInclusive 999
     * @var int|null
     */
    protected $mobilityManagerDefaultTerminatingServiceKey = null;

    /**
     * @ElementName useCustomUserNamePassword
     * @Type bool
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @var bool|null
     */
    protected $useCustomUserNamePassword = null;

    /**
     * @ElementName accessDeviceCredentials
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16|null
     */
    protected $accessDeviceCredentials = null;

    /**
     * @ElementName useHotline
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @var bool|null
     */
    protected $useHotline = null;

    /**
     * @ElementName hotlineContact
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7403
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $hotlineContact = null;

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
     * Getter for mobilityManagerProvisioningURL
     *
     * @return string
     */
    public function getMobilityManagerProvisioningURL()
    {
        return $this->mobilityManagerProvisioningURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobilityManagerProvisioningURL;
    }

    /**
     * Setter for mobilityManagerProvisioningURL
     *
     * @param string $mobilityManagerProvisioningURL
     * @return $this
     */
    public function setMobilityManagerProvisioningURL($mobilityManagerProvisioningURL)
    {
        $this->mobilityManagerProvisioningURL = $mobilityManagerProvisioningURL;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobilityManagerProvisioningURL()
    {
        $this->mobilityManagerProvisioningURL = null;
        return $this;
    }

    /**
     * Getter for mobilityManagerProvisioningUserName
     *
     * @return string
     */
    public function getMobilityManagerProvisioningUserName()
    {
        return $this->mobilityManagerProvisioningUserName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobilityManagerProvisioningUserName;
    }

    /**
     * Setter for mobilityManagerProvisioningUserName
     *
     * @param string $mobilityManagerProvisioningUserName
     * @return $this
     */
    public function setMobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName)
    {
        $this->mobilityManagerProvisioningUserName = $mobilityManagerProvisioningUserName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobilityManagerProvisioningUserName()
    {
        $this->mobilityManagerProvisioningUserName = null;
        return $this;
    }

    /**
     * Getter for mobilityManagerProvisioningPassword
     *
     * @return string
     */
    public function getMobilityManagerProvisioningPassword()
    {
        return $this->mobilityManagerProvisioningPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobilityManagerProvisioningPassword;
    }

    /**
     * Setter for mobilityManagerProvisioningPassword
     *
     * @param string $mobilityManagerProvisioningPassword
     * @return $this
     */
    public function setMobilityManagerProvisioningPassword($mobilityManagerProvisioningPassword)
    {
        $this->mobilityManagerProvisioningPassword = $mobilityManagerProvisioningPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobilityManagerProvisioningPassword()
    {
        $this->mobilityManagerProvisioningPassword = null;
        return $this;
    }

    /**
     * Getter for mobilityManagerDefaultOriginatingServiceKey
     *
     * @return int
     */
    public function getMobilityManagerDefaultOriginatingServiceKey()
    {
        return $this->mobilityManagerDefaultOriginatingServiceKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobilityManagerDefaultOriginatingServiceKey;
    }

    /**
     * Setter for mobilityManagerDefaultOriginatingServiceKey
     *
     * @param int $mobilityManagerDefaultOriginatingServiceKey
     * @return $this
     */
    public function setMobilityManagerDefaultOriginatingServiceKey($mobilityManagerDefaultOriginatingServiceKey)
    {
        $this->mobilityManagerDefaultOriginatingServiceKey = $mobilityManagerDefaultOriginatingServiceKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobilityManagerDefaultOriginatingServiceKey()
    {
        $this->mobilityManagerDefaultOriginatingServiceKey = null;
        return $this;
    }

    /**
     * Getter for mobilityManagerDefaultTerminatingServiceKey
     *
     * @return int
     */
    public function getMobilityManagerDefaultTerminatingServiceKey()
    {
        return $this->mobilityManagerDefaultTerminatingServiceKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobilityManagerDefaultTerminatingServiceKey;
    }

    /**
     * Setter for mobilityManagerDefaultTerminatingServiceKey
     *
     * @param int $mobilityManagerDefaultTerminatingServiceKey
     * @return $this
     */
    public function setMobilityManagerDefaultTerminatingServiceKey($mobilityManagerDefaultTerminatingServiceKey)
    {
        $this->mobilityManagerDefaultTerminatingServiceKey = $mobilityManagerDefaultTerminatingServiceKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobilityManagerDefaultTerminatingServiceKey()
    {
        $this->mobilityManagerDefaultTerminatingServiceKey = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16
     */
    public function getAccessDeviceCredentials()
    {
        return $this->accessDeviceCredentials instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceCredentials;
    }

    /**
     * Setter for accessDeviceCredentials
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16 $accessDeviceCredentials
     * @return $this
     */
    public function setAccessDeviceCredentials(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16 $accessDeviceCredentials)
    {
        $this->accessDeviceCredentials = $accessDeviceCredentials;
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
     * Getter for useHotline
     *
     * @return bool
     */
    public function getUseHotline()
    {
        return $this->useHotline instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useHotline;
    }

    /**
     * Setter for useHotline
     *
     * @param bool $useHotline
     * @return $this
     */
    public function setUseHotline($useHotline)
    {
        $this->useHotline = $useHotline;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseHotline()
    {
        $this->useHotline = null;
        return $this;
    }

    /**
     * Getter for hotlineContact
     *
     * @return string
     */
    public function getHotlineContact()
    {
        return $this->hotlineContact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hotlineContact;
    }

    /**
     * Setter for hotlineContact
     *
     * @param string $hotlineContact
     * @return $this
     */
    public function setHotlineContact($hotlineContact)
    {
        $this->hotlineContact = $hotlineContact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHotlineContact()
    {
        $this->hotlineContact = null;
        return $this;
    }
}

