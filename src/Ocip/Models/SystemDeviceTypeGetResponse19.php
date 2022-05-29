<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetResponse19
 *
 * Response to SystemDeviceTypeGetRequest19.
 *
 * @see SystemDeviceTypeGetRequest19
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:26246","type":"sequence"}]
 */
class SystemDeviceTypeGetResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isObsolete
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26246
     * @var bool|null
     */
    protected $isObsolete = null;

    /**
     * @ElementName profile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26246
     * @var \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType|null
     */
    protected $profile = null;

    /**
     * @ElementName webBasedConfigURL
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26246
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $webBasedConfigURL = null;

    /**
     * @ElementName staticRegistrationCapable
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26246
     * @var bool|null
     */
    protected $staticRegistrationCapable = null;

    /**
     * @ElementName cpeDeviceOptions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptionsRead16sp1
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26246
     * @var \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptionsRead16sp1|null
     */
    protected $cpeDeviceOptions = null;

    /**
     * @ElementName protocolChoice
     * @Type string
     * @Array
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26246
     * @MinLength 1
     * @MaxLength 20
     * @var string[]
     */
    protected $protocolChoice = array(
        
    );

    /**
     * @ElementName isIpAddressOptional
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26246
     * @var bool|null
     */
    protected $isIpAddressOptional = null;

    /**
     * @ElementName useDomain
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26246
     * @var bool|null
     */
    protected $useDomain = null;

    /**
     * @ElementName isMobilityManagerDevice
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26246
     * @var bool|null
     */
    protected $isMobilityManagerDevice = null;

    /**
     * @ElementName deviceTypeConfigurationOption
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26246
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType|null
     */
    protected $deviceTypeConfigurationOption = null;

    /**
     * @ElementName staticLineOrdering
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26246
     * @var bool|null
     */
    protected $staticLineOrdering = null;

    /**
     * Getter for isObsolete
     *
     * @return bool
     */
    public function getIsObsolete()
    {
        return $this->isObsolete instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isObsolete;
    }

    /**
     * Setter for isObsolete
     *
     * @param bool $isObsolete
     * @return $this
     */
    public function setIsObsolete($isObsolete)
    {
        $this->isObsolete = $isObsolete;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsObsolete()
    {
        $this->isObsolete = null;
        return $this;
    }

    /**
     * Getter for profile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType
     */
    public function getProfile()
    {
        return $this->profile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profile;
    }

    /**
     * Setter for profile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType $profile
     * @return $this
     */
    public function setProfile(\CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfile()
    {
        $this->profile = null;
        return $this;
    }

    /**
     * Getter for webBasedConfigURL
     *
     * @return string
     */
    public function getWebBasedConfigURL()
    {
        return $this->webBasedConfigURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->webBasedConfigURL;
    }

    /**
     * Setter for webBasedConfigURL
     *
     * @param string $webBasedConfigURL
     * @return $this
     */
    public function setWebBasedConfigURL($webBasedConfigURL)
    {
        $this->webBasedConfigURL = $webBasedConfigURL;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWebBasedConfigURL()
    {
        $this->webBasedConfigURL = null;
        return $this;
    }

    /**
     * Getter for staticRegistrationCapable
     *
     * @return bool
     */
    public function getStaticRegistrationCapable()
    {
        return $this->staticRegistrationCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->staticRegistrationCapable;
    }

    /**
     * Setter for staticRegistrationCapable
     *
     * @param bool $staticRegistrationCapable
     * @return $this
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable)
    {
        $this->staticRegistrationCapable = $staticRegistrationCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStaticRegistrationCapable()
    {
        $this->staticRegistrationCapable = null;
        return $this;
    }

    /**
     * Getter for cpeDeviceOptions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptionsRead16sp1
     */
    public function getCpeDeviceOptions()
    {
        return $this->cpeDeviceOptions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cpeDeviceOptions;
    }

    /**
     * Setter for cpeDeviceOptions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptionsRead16sp1 $cpeDeviceOptions
     * @return $this
     */
    public function setCpeDeviceOptions(\CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptionsRead16sp1 $cpeDeviceOptions)
    {
        $this->cpeDeviceOptions = $cpeDeviceOptions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCpeDeviceOptions()
    {
        $this->cpeDeviceOptions = null;
        return $this;
    }

    /**
     * Getter for protocolChoice
     *
     * @return string[]
     */
    public function getProtocolChoice()
    {
        return $this->protocolChoice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocolChoice;
    }

    /**
     * Setter for protocolChoice
     *
     * @param string[] $protocolChoice
     * @return $this
     */
    public function setProtocolChoice(array $protocolChoice)
    {
        $this->protocolChoice = $protocolChoice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProtocolChoice()
    {
        $this->protocolChoice = null;
        return $this;
    }

    /**
     * Adder for protocolChoice
     *
     * @param string $protocolChoice
     * @return $this
     */
    public function addProtocolChoice(string $protocolChoice)
    {
        $this->protocolChoice[] = $protocolChoice;
        return $this;
    }

    /**
     * Getter for isIpAddressOptional
     *
     * @return bool
     */
    public function getIsIpAddressOptional()
    {
        return $this->isIpAddressOptional instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isIpAddressOptional;
    }

    /**
     * Setter for isIpAddressOptional
     *
     * @param bool $isIpAddressOptional
     * @return $this
     */
    public function setIsIpAddressOptional($isIpAddressOptional)
    {
        $this->isIpAddressOptional = $isIpAddressOptional;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsIpAddressOptional()
    {
        $this->isIpAddressOptional = null;
        return $this;
    }

    /**
     * Getter for useDomain
     *
     * @return bool
     */
    public function getUseDomain()
    {
        return $this->useDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDomain;
    }

    /**
     * Setter for useDomain
     *
     * @param bool $useDomain
     * @return $this
     */
    public function setUseDomain($useDomain)
    {
        $this->useDomain = $useDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDomain()
    {
        $this->useDomain = null;
        return $this;
    }

    /**
     * Getter for isMobilityManagerDevice
     *
     * @return bool
     */
    public function getIsMobilityManagerDevice()
    {
        return $this->isMobilityManagerDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isMobilityManagerDevice;
    }

    /**
     * Setter for isMobilityManagerDevice
     *
     * @param bool $isMobilityManagerDevice
     * @return $this
     */
    public function setIsMobilityManagerDevice($isMobilityManagerDevice)
    {
        $this->isMobilityManagerDevice = $isMobilityManagerDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsMobilityManagerDevice()
    {
        $this->isMobilityManagerDevice = null;
        return $this;
    }

    /**
     * Getter for deviceTypeConfigurationOption
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType
     */
    public function getDeviceTypeConfigurationOption()
    {
        return $this->deviceTypeConfigurationOption instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceTypeConfigurationOption;
    }

    /**
     * Setter for deviceTypeConfigurationOption
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType $deviceTypeConfigurationOption
     * @return $this
     */
    public function setDeviceTypeConfigurationOption(\CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType $deviceTypeConfigurationOption)
    {
        $this->deviceTypeConfigurationOption = $deviceTypeConfigurationOption;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceTypeConfigurationOption()
    {
        $this->deviceTypeConfigurationOption = null;
        return $this;
    }

    /**
     * Getter for staticLineOrdering
     *
     * @return bool
     */
    public function getStaticLineOrdering()
    {
        return $this->staticLineOrdering instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->staticLineOrdering;
    }

    /**
     * Setter for staticLineOrdering
     *
     * @param bool $staticLineOrdering
     * @return $this
     */
    public function setStaticLineOrdering($staticLineOrdering)
    {
        $this->staticLineOrdering = $staticLineOrdering;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStaticLineOrdering()
    {
        $this->staticLineOrdering = null;
        return $this;
    }


}

