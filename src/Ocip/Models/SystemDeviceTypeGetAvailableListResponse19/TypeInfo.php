<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse19;

/**
 * TypeInfo
 */
class TypeInfo
{

    /**
     * @ElementName profile
     * @var string|null
     */
    private $profile = null;

    /**
     * @ElementName staticRegistrationCapable
     * @var bool|null
     */
    private $staticRegistrationCapable = null;

    /**
     * @ElementName configType
     * @var string|null
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
     * @var string|null
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
     * Getter for profile
     *
     * @ElementName profile
     * @return string|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Setter for profile
     *
     * @ElementName profile
     * @param string|null $profile
     * @return $this
     */
    public function setProfile($profile)
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
     * @return string|null
     */
    public function getConfigType()
    {
        return $this->configType;
    }

    /**
     * Setter for configType
     *
     * @ElementName configType
     * @param string|null $configType
     * @return $this
     */
    public function setConfigType($configType)
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
    public function setProtocolChoice($protocolChoice)
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
    public function addProtocolChoice($protocolChoice)
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
     * @return string|null
     */
    public function getDeviceConfigurationOption()
    {
        return $this->deviceConfigurationOption;
    }

    /**
     * Setter for deviceConfigurationOption
     *
     * @ElementName deviceConfigurationOption
     * @param string|null $deviceConfigurationOption
     * @return $this
     */
    public function setDeviceConfigurationOption($deviceConfigurationOption)
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


}

