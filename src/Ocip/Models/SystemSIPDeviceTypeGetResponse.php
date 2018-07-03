<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeGetResponse
 *
 * Response to SystemSIPDeviceTypeGetRequest.
 *
 * @see SystemSIPDeviceTypeGetRequest
 */
class SystemSIPDeviceTypeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isObsolete
     * @var bool|null
     */
    private $isObsolete = null;

    /**
     * @ElementName numberOfPorts
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $numberOfPorts = null;

    /**
     * @ElementName profile
     * @var string|null
     */
    private $profile = null;

    /**
     * @ElementName registrationCapable
     * @var bool|null
     */
    private $registrationCapable = null;

    /**
     * @ElementName isConferenceDevice
     * @var bool|null
     */
    private $isConferenceDevice = null;

    /**
     * @ElementName isMusicOnHoldDevice
     * @var bool|null
     */
    private $isMusicOnHoldDevice = null;

    /**
     * @ElementName authenticationOverride
     * @var bool|null
     */
    private $authenticationOverride = null;

    /**
     * @ElementName RFC3264Hold
     * @var bool|null
     */
    private $RFC3264Hold = null;

    /**
     * @ElementName isTrusted
     * @var bool|null
     */
    private $isTrusted = null;

    /**
     * @ElementName E164Capable
     * @var bool|null
     */
    private $E164Capable = null;

    /**
     * @ElementName routeAdvance
     * @var bool|null
     */
    private $routeAdvance = null;

    /**
     * @ElementName forwardingOverride
     * @var bool|null
     */
    private $forwardingOverride = null;

    /**
     * @ElementName wirelessIntegration
     * @var bool|null
     */
    private $wirelessIntegration = null;

    /**
     * @ElementName webBasedConfigURL
     * @var string|null
     */
    private $webBasedConfigURL = null;

    /**
     * @ElementName isVideoCapable
     * @var bool|null
     */
    private $isVideoCapable = null;

    /**
     * @ElementName PBXIntegration
     * @var bool|null
     */
    private $PBXIntegration = null;

    /**
     * @ElementName useBusinessTrunkingContact
     * @var bool|null
     */
    private $useBusinessTrunkingContact = null;

    /**
     * @ElementName staticRegistrationCapable
     * @var bool|null
     */
    private $staticRegistrationCapable = null;

    /**
     * @ElementName cpeDeviceOptions
     * @var \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions|null
     */
    private $cpeDeviceOptions = null;

    /**
     * @ElementName protocolChoice
     * @var string[]
     */
    private $protocolChoice = array(
        
    );

    /**
     * Getter for isObsolete
     *
     * @ElementName isObsolete
     * @return bool|null
     */
    public function getIsObsolete()
    {
        return $this->isObsolete;
    }

    /**
     * Setter for isObsolete
     *
     * @ElementName isObsolete
     * @param bool|null $isObsolete
     * @return $this
     */
    public function setIsObsolete($isObsolete)
    {
        $this->isObsolete = $isObsolete;
        return $this;
    }

    /**
     * Getter for numberOfPorts
     *
     * @ElementName numberOfPorts
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    public function getNumberOfPorts()
    {
        return $this->numberOfPorts;
    }

    /**
     * Setter for numberOfPorts
     *
     * @ElementName numberOfPorts
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null $numberOfPorts
     * @return $this
     */
    public function setNumberOfPorts($numberOfPorts)
    {
        $this->numberOfPorts = $numberOfPorts;
        return $this;
    }

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
     * Getter for registrationCapable
     *
     * @ElementName registrationCapable
     * @return bool|null
     */
    public function getRegistrationCapable()
    {
        return $this->registrationCapable;
    }

    /**
     * Setter for registrationCapable
     *
     * @ElementName registrationCapable
     * @param bool|null $registrationCapable
     * @return $this
     */
    public function setRegistrationCapable($registrationCapable)
    {
        $this->registrationCapable = $registrationCapable;
        return $this;
    }

    /**
     * Getter for isConferenceDevice
     *
     * @ElementName isConferenceDevice
     * @return bool|null
     */
    public function getIsConferenceDevice()
    {
        return $this->isConferenceDevice;
    }

    /**
     * Setter for isConferenceDevice
     *
     * @ElementName isConferenceDevice
     * @param bool|null $isConferenceDevice
     * @return $this
     */
    public function setIsConferenceDevice($isConferenceDevice)
    {
        $this->isConferenceDevice = $isConferenceDevice;
        return $this;
    }

    /**
     * Getter for isMusicOnHoldDevice
     *
     * @ElementName isMusicOnHoldDevice
     * @return bool|null
     */
    public function getIsMusicOnHoldDevice()
    {
        return $this->isMusicOnHoldDevice;
    }

    /**
     * Setter for isMusicOnHoldDevice
     *
     * @ElementName isMusicOnHoldDevice
     * @param bool|null $isMusicOnHoldDevice
     * @return $this
     */
    public function setIsMusicOnHoldDevice($isMusicOnHoldDevice)
    {
        $this->isMusicOnHoldDevice = $isMusicOnHoldDevice;
        return $this;
    }

    /**
     * Getter for authenticationOverride
     *
     * @ElementName authenticationOverride
     * @return bool|null
     */
    public function getAuthenticationOverride()
    {
        return $this->authenticationOverride;
    }

    /**
     * Setter for authenticationOverride
     *
     * @ElementName authenticationOverride
     * @param bool|null $authenticationOverride
     * @return $this
     */
    public function setAuthenticationOverride($authenticationOverride)
    {
        $this->authenticationOverride = $authenticationOverride;
        return $this;
    }

    /**
     * Getter for RFC3264Hold
     *
     * @ElementName RFC3264Hold
     * @return bool|null
     */
    public function getRFC3264Hold()
    {
        return $this->RFC3264Hold;
    }

    /**
     * Setter for RFC3264Hold
     *
     * @ElementName RFC3264Hold
     * @param bool|null $RFC3264Hold
     * @return $this
     */
    public function setRFC3264Hold($RFC3264Hold)
    {
        $this->RFC3264Hold = $RFC3264Hold;
        return $this;
    }

    /**
     * Getter for isTrusted
     *
     * @ElementName isTrusted
     * @return bool|null
     */
    public function getIsTrusted()
    {
        return $this->isTrusted;
    }

    /**
     * Setter for isTrusted
     *
     * @ElementName isTrusted
     * @param bool|null $isTrusted
     * @return $this
     */
    public function setIsTrusted($isTrusted)
    {
        $this->isTrusted = $isTrusted;
        return $this;
    }

    /**
     * Getter for E164Capable
     *
     * @ElementName E164Capable
     * @return bool|null
     */
    public function getE164Capable()
    {
        return $this->E164Capable;
    }

    /**
     * Setter for E164Capable
     *
     * @ElementName E164Capable
     * @param bool|null $E164Capable
     * @return $this
     */
    public function setE164Capable($E164Capable)
    {
        $this->E164Capable = $E164Capable;
        return $this;
    }

    /**
     * Getter for routeAdvance
     *
     * @ElementName routeAdvance
     * @return bool|null
     */
    public function getRouteAdvance()
    {
        return $this->routeAdvance;
    }

    /**
     * Setter for routeAdvance
     *
     * @ElementName routeAdvance
     * @param bool|null $routeAdvance
     * @return $this
     */
    public function setRouteAdvance($routeAdvance)
    {
        $this->routeAdvance = $routeAdvance;
        return $this;
    }

    /**
     * Getter for forwardingOverride
     *
     * @ElementName forwardingOverride
     * @return bool|null
     */
    public function getForwardingOverride()
    {
        return $this->forwardingOverride;
    }

    /**
     * Setter for forwardingOverride
     *
     * @ElementName forwardingOverride
     * @param bool|null $forwardingOverride
     * @return $this
     */
    public function setForwardingOverride($forwardingOverride)
    {
        $this->forwardingOverride = $forwardingOverride;
        return $this;
    }

    /**
     * Getter for wirelessIntegration
     *
     * @ElementName wirelessIntegration
     * @return bool|null
     */
    public function getWirelessIntegration()
    {
        return $this->wirelessIntegration;
    }

    /**
     * Setter for wirelessIntegration
     *
     * @ElementName wirelessIntegration
     * @param bool|null $wirelessIntegration
     * @return $this
     */
    public function setWirelessIntegration($wirelessIntegration)
    {
        $this->wirelessIntegration = $wirelessIntegration;
        return $this;
    }

    /**
     * Getter for webBasedConfigURL
     *
     * @ElementName webBasedConfigURL
     * @return string|null
     */
    public function getWebBasedConfigURL()
    {
        return $this->webBasedConfigURL;
    }

    /**
     * Setter for webBasedConfigURL
     *
     * @ElementName webBasedConfigURL
     * @param string|null $webBasedConfigURL
     * @return $this
     */
    public function setWebBasedConfigURL($webBasedConfigURL)
    {
        $this->webBasedConfigURL = $webBasedConfigURL;
        return $this;
    }

    /**
     * Getter for isVideoCapable
     *
     * @ElementName isVideoCapable
     * @return bool|null
     */
    public function getIsVideoCapable()
    {
        return $this->isVideoCapable;
    }

    /**
     * Setter for isVideoCapable
     *
     * @ElementName isVideoCapable
     * @param bool|null $isVideoCapable
     * @return $this
     */
    public function setIsVideoCapable($isVideoCapable)
    {
        $this->isVideoCapable = $isVideoCapable;
        return $this;
    }

    /**
     * Getter for PBXIntegration
     *
     * @ElementName PBXIntegration
     * @return bool|null
     */
    public function getPBXIntegration()
    {
        return $this->PBXIntegration;
    }

    /**
     * Setter for PBXIntegration
     *
     * @ElementName PBXIntegration
     * @param bool|null $PBXIntegration
     * @return $this
     */
    public function setPBXIntegration($PBXIntegration)
    {
        $this->PBXIntegration = $PBXIntegration;
        return $this;
    }

    /**
     * Getter for useBusinessTrunkingContact
     *
     * @ElementName useBusinessTrunkingContact
     * @return bool|null
     */
    public function getUseBusinessTrunkingContact()
    {
        return $this->useBusinessTrunkingContact;
    }

    /**
     * Setter for useBusinessTrunkingContact
     *
     * @ElementName useBusinessTrunkingContact
     * @param bool|null $useBusinessTrunkingContact
     * @return $this
     */
    public function setUseBusinessTrunkingContact($useBusinessTrunkingContact)
    {
        $this->useBusinessTrunkingContact = $useBusinessTrunkingContact;
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
     * Getter for cpeDeviceOptions
     *
     * @ElementName cpeDeviceOptions
     * @return \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions|null
     */
    public function getCpeDeviceOptions()
    {
        return $this->cpeDeviceOptions;
    }

    /**
     * Setter for cpeDeviceOptions
     *
     * @ElementName cpeDeviceOptions
     * @param \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions|null $cpeDeviceOptions
     * @return $this
     */
    public function setCpeDeviceOptions($cpeDeviceOptions)
    {
        $this->cpeDeviceOptions = $cpeDeviceOptions;
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


}

