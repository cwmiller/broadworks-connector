<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceModifyRequest14
 *
 * Request to modify a specified group access device.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupAccessDeviceModifyRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

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
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName port
     * @var int|null
     */
    private $port = null;

    /**
     * @ElementName outboundProxyServerNetAddress
     * @var string|null
     */
    private $outboundProxyServerNetAddress = null;

    /**
     * @ElementName stunServerNetAddress
     * @var string|null
     */
    private $stunServerNetAddress = null;

    /**
     * @ElementName macAddress
     * @var string|null
     */
    private $macAddress = null;

    /**
     * @ElementName serialNumber
     * @var string|null
     */
    private $serialNumber = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName configurationMode
     * @var string|null
     */
    private $configurationMode = null;

    /**
     * @ElementName configurationFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileResource|null
     */
    private $configurationFile = null;

    /**
     * @ElementName physicalLocation
     * @var string|null
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
     * @var int|null
     */
    private $mobilityManagerDefaultOriginatingServiceKey = null;

    /**
     * @ElementName mobilityManagerDefaultTerminatingServiceKey
     * @var int|null
     */
    private $mobilityManagerDefaultTerminatingServiceKey = null;

    /**
     * @ElementName useCustomUserNamePassword
     * @var bool|null
     */
    private $useCustomUserNamePassword = null;

    /**
     * @ElementName accessDeviceCredentials
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16|null
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
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
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
     * @return string|null
     */
    public function getNetAddress()
    {
        return $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @ElementName netAddress
     * @param string|null $netAddress
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
     * @return int|null
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Setter for port
     *
     * @ElementName port
     * @param int|null $port
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
     * @return string|null
     */
    public function getOutboundProxyServerNetAddress()
    {
        return $this->outboundProxyServerNetAddress;
    }

    /**
     * Setter for outboundProxyServerNetAddress
     *
     * @ElementName outboundProxyServerNetAddress
     * @param string|null $outboundProxyServerNetAddress
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
     * @return string|null
     */
    public function getStunServerNetAddress()
    {
        return $this->stunServerNetAddress;
    }

    /**
     * Setter for stunServerNetAddress
     *
     * @ElementName stunServerNetAddress
     * @param string|null $stunServerNetAddress
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
     * @return string|null
     */
    public function getMacAddress()
    {
        return $this->macAddress;
    }

    /**
     * Setter for macAddress
     *
     * @ElementName macAddress
     * @param string|null $macAddress
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
     * @return string|null
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Setter for serialNumber
     *
     * @ElementName serialNumber
     * @param string|null $serialNumber
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
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for configurationMode
     *
     * @ElementName configurationMode
     * @return string|null
     */
    public function getConfigurationMode()
    {
        return $this->configurationMode;
    }

    /**
     * Setter for configurationMode
     *
     * @ElementName configurationMode
     * @param string|null $configurationMode
     * @return $this
     */
    public function setConfigurationMode($configurationMode)
    {
        $this->configurationMode = $configurationMode;
        return $this;
    }

    /**
     * Getter for configurationFile
     *
     * @ElementName configurationFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileResource|null
     */
    public function getConfigurationFile()
    {
        return $this->configurationFile;
    }

    /**
     * Setter for configurationFile
     *
     * @ElementName configurationFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileResource|null $configurationFile
     * @return $this
     */
    public function setConfigurationFile($configurationFile)
    {
        $this->configurationFile = $configurationFile;
        return $this;
    }

    /**
     * Getter for physicalLocation
     *
     * @ElementName physicalLocation
     * @return string|null
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation;
    }

    /**
     * Setter for physicalLocation
     *
     * @ElementName physicalLocation
     * @param string|null $physicalLocation
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
     * @return int|null
     */
    public function getMobilityManagerDefaultOriginatingServiceKey()
    {
        return $this->mobilityManagerDefaultOriginatingServiceKey;
    }

    /**
     * Setter for mobilityManagerDefaultOriginatingServiceKey
     *
     * @ElementName mobilityManagerDefaultOriginatingServiceKey
     * @param int|null $mobilityManagerDefaultOriginatingServiceKey
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
     * @return int|null
     */
    public function getMobilityManagerDefaultTerminatingServiceKey()
    {
        return $this->mobilityManagerDefaultTerminatingServiceKey;
    }

    /**
     * Setter for mobilityManagerDefaultTerminatingServiceKey
     *
     * @ElementName mobilityManagerDefaultTerminatingServiceKey
     * @param int|null $mobilityManagerDefaultTerminatingServiceKey
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16|null
     */
    public function getAccessDeviceCredentials()
    {
        return $this->accessDeviceCredentials;
    }

    /**
     * Setter for accessDeviceCredentials
     *
     * @ElementName accessDeviceCredentials
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16|null $accessDeviceCredentials
     * @return $this
     */
    public function setAccessDeviceCredentials($accessDeviceCredentials)
    {
        $this->accessDeviceCredentials = $accessDeviceCredentials;
        return $this;
    }


}

