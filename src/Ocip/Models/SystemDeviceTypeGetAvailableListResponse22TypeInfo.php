<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetAvailableListResponse22TypeInfo
 */
class SystemDeviceTypeGetAvailableListResponse22TypeInfo
{

    /**
     * @ElementName profile
     * @var \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType|null
     */
    private $profile = null;

    /**
     * @ElementName staticRegistrationCapable
     * @var bool|null
     */
    private $staticRegistrationCapable = null;

    /**
     * @ElementName configType
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14|null
     */
    private $configType = null;

    /**
     * @ElementName protocolChoice
     * @var string[]
     */
    private $protocolChoice = array(
        
    );

    /**
     * @ElementName isIpAddressOptional
     * @var bool|null
     */
    private $isIpAddressOptional = null;

    /**
     * @ElementName useDomain
     * @var bool|null
     */
    private $useDomain = null;

    /**
     * @ElementName isMobilityManagerDevice
     * @var bool|null
     */
    private $isMobilityManagerDevice = null;

    /**
     * @ElementName deviceConfigurationOption
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType|null
     */
    private $deviceConfigurationOption = null;

    /**
     * @ElementName staticLineOrdering
     * @var bool|null
     */
    private $staticLineOrdering = null;

    /**
     * @ElementName numberOfPorts
     * @var int|null
     */
    private $numberOfPorts = null;

    /**
     * @ElementName deviceTypeLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeLevel|null
     */
    private $deviceTypeLevel = null;

    /**
     * Getter for profile
     *
     * @ElementName profile
     * @return \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Setter for profile
     *
     * @ElementName profile
     * @param \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType|null $profile
     * @return $this
     */
    public function setProfile(\CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Getter for staticRegistrationCapable
     *
     * @ElementName staticRegistrationCapable
     * @return bool|null
     */
    public function getStaticRegistrationCapable()
    {
        return $this->staticRegistrationCapable;
    }

    /**
     * Setter for staticRegistrationCapable
     *
     * @ElementName staticRegistrationCapable
     * @param bool|null $staticRegistrationCapable
     * @return $this
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable)
    {
        $this->staticRegistrationCapable = $staticRegistrationCapable;
        return $this;
    }

    /**
     * Getter for configType
     *
     * @ElementName configType
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14|null
     */
    public function getConfigType()
    {
        return $this->configType;
    }

    /**
     * Setter for configType
     *
     * @ElementName configType
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14|null $configType
     * @return $this
     */
    public function setConfigType(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14 $configType)
    {
        $this->configType = $configType;
        return $this;
    }

    /**
     * Getter for protocolChoice
     *
     * @ElementName protocolChoice
     * @return string[]
     */
    public function getProtocolChoice()
    {
        return $this->protocolChoice;
    }

    /**
     * Setter for protocolChoice
     *
     * @ElementName protocolChoice
     * @param string[] $protocolChoice
     * @return $this
     */
    public function setProtocolChoice(array $protocolChoice)
    {
        $this->protocolChoice = $protocolChoice;
        return $this;
    }

    /**
     * Adder for protocolChoice
     *
     * @ElementName protocolChoice
     * @param string $protocolChoice
     * @return $this
     */
    public function addProtocolChoice(string $protocolChoice)
    {
        $this->protocolChoice []= $protocolChoice;
        return $this;
    }

    /**
     * Getter for isIpAddressOptional
     *
     * @ElementName isIpAddressOptional
     * @return bool|null
     */
    public function getIsIpAddressOptional()
    {
        return $this->isIpAddressOptional;
    }

    /**
     * Setter for isIpAddressOptional
     *
     * @ElementName isIpAddressOptional
     * @param bool|null $isIpAddressOptional
     * @return $this
     */
    public function setIsIpAddressOptional($isIpAddressOptional)
    {
        $this->isIpAddressOptional = $isIpAddressOptional;
        return $this;
    }

    /**
     * Getter for useDomain
     *
     * @ElementName useDomain
     * @return bool|null
     */
    public function getUseDomain()
    {
        return $this->useDomain;
    }

    /**
     * Setter for useDomain
     *
     * @ElementName useDomain
     * @param bool|null $useDomain
     * @return $this
     */
    public function setUseDomain($useDomain)
    {
        $this->useDomain = $useDomain;
        return $this;
    }

    /**
     * Getter for isMobilityManagerDevice
     *
     * @ElementName isMobilityManagerDevice
     * @return bool|null
     */
    public function getIsMobilityManagerDevice()
    {
        return $this->isMobilityManagerDevice;
    }

    /**
     * Setter for isMobilityManagerDevice
     *
     * @ElementName isMobilityManagerDevice
     * @param bool|null $isMobilityManagerDevice
     * @return $this
     */
    public function setIsMobilityManagerDevice($isMobilityManagerDevice)
    {
        $this->isMobilityManagerDevice = $isMobilityManagerDevice;
        return $this;
    }

    /**
     * Getter for deviceConfigurationOption
     *
     * @ElementName deviceConfigurationOption
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType|null
     */
    public function getDeviceConfigurationOption()
    {
        return $this->deviceConfigurationOption;
    }

    /**
     * Setter for deviceConfigurationOption
     *
     * @ElementName deviceConfigurationOption
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType|null $deviceConfigurationOption
     * @return $this
     */
    public function setDeviceConfigurationOption(\CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType $deviceConfigurationOption)
    {
        $this->deviceConfigurationOption = $deviceConfigurationOption;
        return $this;
    }

    /**
     * Getter for staticLineOrdering
     *
     * @ElementName staticLineOrdering
     * @return bool|null
     */
    public function getStaticLineOrdering()
    {
        return $this->staticLineOrdering;
    }

    /**
     * Setter for staticLineOrdering
     *
     * @ElementName staticLineOrdering
     * @param bool|null $staticLineOrdering
     * @return $this
     */
    public function setStaticLineOrdering($staticLineOrdering)
    {
        $this->staticLineOrdering = $staticLineOrdering;
        return $this;
    }

    /**
     * Getter for numberOfPorts
     *
     * @ElementName numberOfPorts
     * @return int|null
     */
    public function getNumberOfPorts()
    {
        return $this->numberOfPorts;
    }

    /**
     * Setter for numberOfPorts
     *
     * @ElementName numberOfPorts
     * @param int|null $numberOfPorts
     * @return $this
     */
    public function setNumberOfPorts($numberOfPorts)
    {
        $this->numberOfPorts = $numberOfPorts;
        return $this;
    }

    /**
     * Getter for deviceTypeLevel
     *
     * @ElementName deviceTypeLevel
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeLevel|null
     */
    public function getDeviceTypeLevel()
    {
        return $this->deviceTypeLevel;
    }

    /**
     * Setter for deviceTypeLevel
     *
     * @ElementName deviceTypeLevel
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeLevel|null $deviceTypeLevel
     * @return $this
     */
    public function setDeviceTypeLevel(\CWM\BroadWorksConnector\Ocip\Models\DeviceTypeLevel $deviceTypeLevel)
    {
        $this->deviceTypeLevel = $deviceTypeLevel;
        return $this;
    }


}

