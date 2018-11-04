<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceModifyRequest14
 *
 * Request to modify a specified service provider access device.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderAccessDeviceModifyRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName deviceName
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName protocol
     * @var string|null
     */
    private $protocol = null;

    /**
     * @ElementName netAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $netAddress = null;

    /**
     * @ElementName port
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $port = null;

    /**
     * @ElementName outboundProxyServerNetAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $outboundProxyServerNetAddress = null;

    /**
     * @ElementName stunServerNetAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $stunServerNetAddress = null;

    /**
     * @ElementName macAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $macAddress = null;

    /**
     * @ElementName serialNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serialNumber = null;

    /**
     * @ElementName description
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName physicalLocation
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $physicalLocation = null;

    /**
     * @ElementName transportProtocol
     * @var string|null
     */
    private $transportProtocol = null;

    /**
     * @ElementName mobilityManagerProvisioningURL
     * @var string|null
     */
    private $mobilityManagerProvisioningURL = null;

    /**
     * @ElementName mobilityManagerProvisioningUserName
     * @var string|null
     */
    private $mobilityManagerProvisioningUserName = null;

    /**
     * @ElementName mobilityManagerProvisioningPassword
     * @var string|null
     */
    private $mobilityManagerProvisioningPassword = null;

    /**
     * @ElementName mobilityManagerDefaultOriginatingServiceKey
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $mobilityManagerDefaultOriginatingServiceKey = null;

    /**
     * @ElementName mobilityManagerDefaultTerminatingServiceKey
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $mobilityManagerDefaultTerminatingServiceKey = null;

    /**
     * @ElementName useCustomUserNamePassword
     * @var bool|null
     */
    private $useCustomUserNamePassword = null;

    /**
     * @ElementName accessDeviceCredentials
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessDeviceCredentials = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for deviceName
     *
     * @ElementName deviceName
     * @return string|null
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @ElementName deviceName
     * @param string|null $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * Getter for protocol
     *
     * @ElementName protocol
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Setter for protocol
     *
     * @ElementName protocol
     * @param string|null $protocol
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * Getter for netAddress
     *
     * @ElementName netAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getNetAddress()
    {
        return $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @ElementName netAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * Getter for port
     *
     * @ElementName port
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Setter for port
     *
     * @ElementName port
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }

    /**
     * Getter for outboundProxyServerNetAddress
     *
     * @ElementName outboundProxyServerNetAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getOutboundProxyServerNetAddress()
    {
        return $this->outboundProxyServerNetAddress;
    }

    /**
     * Setter for outboundProxyServerNetAddress
     *
     * @ElementName outboundProxyServerNetAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $outboundProxyServerNetAddress
     * @return $this
     */
    public function setOutboundProxyServerNetAddress($outboundProxyServerNetAddress)
    {
        $this->outboundProxyServerNetAddress = $outboundProxyServerNetAddress;
        return $this;
    }

    /**
     * Getter for stunServerNetAddress
     *
     * @ElementName stunServerNetAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getStunServerNetAddress()
    {
        return $this->stunServerNetAddress;
    }

    /**
     * Setter for stunServerNetAddress
     *
     * @ElementName stunServerNetAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $stunServerNetAddress
     * @return $this
     */
    public function setStunServerNetAddress($stunServerNetAddress)
    {
        $this->stunServerNetAddress = $stunServerNetAddress;
        return $this;
    }

    /**
     * Getter for macAddress
     *
     * @ElementName macAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMacAddress()
    {
        return $this->macAddress;
    }

    /**
     * Setter for macAddress
     *
     * @ElementName macAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $macAddress
     * @return $this
     */
    public function setMacAddress($macAddress)
    {
        $this->macAddress = $macAddress;
        return $this;
    }

    /**
     * Getter for serialNumber
     *
     * @ElementName serialNumber
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Setter for serialNumber
     *
     * @ElementName serialNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $serialNumber
     * @return $this
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for physicalLocation
     *
     * @ElementName physicalLocation
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation;
    }

    /**
     * Setter for physicalLocation
     *
     * @ElementName physicalLocation
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $physicalLocation
     * @return $this
     */
    public function setPhysicalLocation($physicalLocation)
    {
        $this->physicalLocation = $physicalLocation;
        return $this;
    }

    /**
     * Getter for transportProtocol
     *
     * @ElementName transportProtocol
     * @return string|null
     */
    public function getTransportProtocol()
    {
        return $this->transportProtocol;
    }

    /**
     * Setter for transportProtocol
     *
     * @ElementName transportProtocol
     * @param string|null $transportProtocol
     * @return $this
     */
    public function setTransportProtocol($transportProtocol)
    {
        $this->transportProtocol = $transportProtocol;
        return $this;
    }

    /**
     * Getter for mobilityManagerProvisioningURL
     *
     * @ElementName mobilityManagerProvisioningURL
     * @return string|null
     */
    public function getMobilityManagerProvisioningURL()
    {
        return $this->mobilityManagerProvisioningURL;
    }

    /**
     * Setter for mobilityManagerProvisioningURL
     *
     * @ElementName mobilityManagerProvisioningURL
     * @param string|null $mobilityManagerProvisioningURL
     * @return $this
     */
    public function setMobilityManagerProvisioningURL($mobilityManagerProvisioningURL)
    {
        $this->mobilityManagerProvisioningURL = $mobilityManagerProvisioningURL;
        return $this;
    }

    /**
     * Getter for mobilityManagerProvisioningUserName
     *
     * @ElementName mobilityManagerProvisioningUserName
     * @return string|null
     */
    public function getMobilityManagerProvisioningUserName()
    {
        return $this->mobilityManagerProvisioningUserName;
    }

    /**
     * Setter for mobilityManagerProvisioningUserName
     *
     * @ElementName mobilityManagerProvisioningUserName
     * @param string|null $mobilityManagerProvisioningUserName
     * @return $this
     */
    public function setMobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName)
    {
        $this->mobilityManagerProvisioningUserName = $mobilityManagerProvisioningUserName;
        return $this;
    }

    /**
     * Getter for mobilityManagerProvisioningPassword
     *
     * @ElementName mobilityManagerProvisioningPassword
     * @return string|null
     */
    public function getMobilityManagerProvisioningPassword()
    {
        return $this->mobilityManagerProvisioningPassword;
    }

    /**
     * Setter for mobilityManagerProvisioningPassword
     *
     * @ElementName mobilityManagerProvisioningPassword
     * @param string|null $mobilityManagerProvisioningPassword
     * @return $this
     */
    public function setMobilityManagerProvisioningPassword($mobilityManagerProvisioningPassword)
    {
        $this->mobilityManagerProvisioningPassword = $mobilityManagerProvisioningPassword;
        return $this;
    }

    /**
     * Getter for mobilityManagerDefaultOriginatingServiceKey
     *
     * @ElementName mobilityManagerDefaultOriginatingServiceKey
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMobilityManagerDefaultOriginatingServiceKey()
    {
        return $this->mobilityManagerDefaultOriginatingServiceKey;
    }

    /**
     * Setter for mobilityManagerDefaultOriginatingServiceKey
     *
     * @ElementName mobilityManagerDefaultOriginatingServiceKey
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $mobilityManagerDefaultOriginatingServiceKey
     * @return $this
     */
    public function setMobilityManagerDefaultOriginatingServiceKey($mobilityManagerDefaultOriginatingServiceKey)
    {
        $this->mobilityManagerDefaultOriginatingServiceKey = $mobilityManagerDefaultOriginatingServiceKey;
        return $this;
    }

    /**
     * Getter for mobilityManagerDefaultTerminatingServiceKey
     *
     * @ElementName mobilityManagerDefaultTerminatingServiceKey
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMobilityManagerDefaultTerminatingServiceKey()
    {
        return $this->mobilityManagerDefaultTerminatingServiceKey;
    }

    /**
     * Setter for mobilityManagerDefaultTerminatingServiceKey
     *
     * @ElementName mobilityManagerDefaultTerminatingServiceKey
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $mobilityManagerDefaultTerminatingServiceKey
     * @return $this
     */
    public function setMobilityManagerDefaultTerminatingServiceKey($mobilityManagerDefaultTerminatingServiceKey)
    {
        $this->mobilityManagerDefaultTerminatingServiceKey = $mobilityManagerDefaultTerminatingServiceKey;
        return $this;
    }

    /**
     * Getter for useCustomUserNamePassword
     *
     * @ElementName useCustomUserNamePassword
     * @return bool|null
     */
    public function getUseCustomUserNamePassword()
    {
        return $this->useCustomUserNamePassword;
    }

    /**
     * Setter for useCustomUserNamePassword
     *
     * @ElementName useCustomUserNamePassword
     * @param bool|null $useCustomUserNamePassword
     * @return $this
     */
    public function setUseCustomUserNamePassword($useCustomUserNamePassword)
    {
        $this->useCustomUserNamePassword = $useCustomUserNamePassword;
        return $this;
    }

    /**
     * Getter for accessDeviceCredentials
     *
     * @ElementName accessDeviceCredentials
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAccessDeviceCredentials()
    {
        return $this->accessDeviceCredentials;
    }

    /**
     * Setter for accessDeviceCredentials
     *
     * @ElementName accessDeviceCredentials
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16|null|\CWM\BroadWorksConnector\Ocip\Nil $accessDeviceCredentials
     * @return $this
     */
    public function setAccessDeviceCredentials($accessDeviceCredentials)
    {
        $this->accessDeviceCredentials = $accessDeviceCredentials;
        return $this;
    }


}

