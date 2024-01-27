<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeAddRequest14sp1
 *
 * Request to add a sip device type.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: SystemSIPDeviceTypeAddRequest14sp2
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemSIPDeviceTypeAddRequest14sp2
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:30072","type":"sequence"}]
 */
class SystemSIPDeviceTypeAddRequest14sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * @ElementName numberOfPorts
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    protected $numberOfPorts = null;

    /**
     * @ElementName profile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType|null
     */
    protected $profile = null;

    /**
     * @ElementName registrationCapable
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var bool|null
     */
    protected $registrationCapable = null;

    /**
     * @ElementName isConferenceDevice
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var bool|null
     */
    protected $isConferenceDevice = null;

    /**
     * @ElementName isMusicOnHoldDevice
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var bool|null
     */
    protected $isMusicOnHoldDevice = null;

    /**
     * @ElementName authenticationOverride
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var bool|null
     */
    protected $authenticationOverride = null;

    /**
     * @ElementName RFC3264Hold
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var bool|null
     */
    protected $RFC3264Hold = null;

    /**
     * @ElementName isTrusted
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var bool|null
     */
    protected $isTrusted = null;

    /**
     * @ElementName E164Capable
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var bool|null
     */
    protected $E164Capable = null;

    /**
     * @ElementName routeAdvance
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var bool|null
     */
    protected $routeAdvance = null;

    /**
     * @ElementName forwardingOverride
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var bool|null
     */
    protected $forwardingOverride = null;

    /**
     * @ElementName wirelessIntegration
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var bool|null
     */
    protected $wirelessIntegration = null;

    /**
     * @ElementName webBasedConfigURL
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $webBasedConfigURL = null;

    /**
     * @ElementName isVideoCapable
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var bool|null
     */
    protected $isVideoCapable = null;

    /**
     * @ElementName PBXIntegration
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var bool|null
     */
    protected $PBXIntegration = null;

    /**
     * @ElementName useBusinessTrunkingContact
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var bool|null
     */
    protected $useBusinessTrunkingContact = null;

    /**
     * @ElementName staticRegistrationCapable
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var bool|null
     */
    protected $staticRegistrationCapable = null;

    /**
     * @ElementName cpeDeviceOptions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions|null
     */
    protected $cpeDeviceOptions = null;

    /**
     * @ElementName earlyMediaSupport
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType
     * @Group d8f04177e438f303b41c211e518706bf:30072
     * @var \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType|null
     */
    protected $earlyMediaSupport = null;

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
     * Getter for registrationCapable
     *
     * @return bool
     */
    public function getRegistrationCapable()
    {
        return $this->registrationCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->registrationCapable;
    }

    /**
     * Setter for registrationCapable
     *
     * @param bool $registrationCapable
     * @return $this
     */
    public function setRegistrationCapable($registrationCapable)
    {
        $this->registrationCapable = $registrationCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRegistrationCapable()
    {
        $this->registrationCapable = null;
        return $this;
    }

    /**
     * Getter for isConferenceDevice
     *
     * @return bool
     */
    public function getIsConferenceDevice()
    {
        return $this->isConferenceDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isConferenceDevice;
    }

    /**
     * Setter for isConferenceDevice
     *
     * @param bool $isConferenceDevice
     * @return $this
     */
    public function setIsConferenceDevice($isConferenceDevice)
    {
        $this->isConferenceDevice = $isConferenceDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsConferenceDevice()
    {
        $this->isConferenceDevice = null;
        return $this;
    }

    /**
     * Getter for isMusicOnHoldDevice
     *
     * @return bool
     */
    public function getIsMusicOnHoldDevice()
    {
        return $this->isMusicOnHoldDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isMusicOnHoldDevice;
    }

    /**
     * Setter for isMusicOnHoldDevice
     *
     * @param bool $isMusicOnHoldDevice
     * @return $this
     */
    public function setIsMusicOnHoldDevice($isMusicOnHoldDevice)
    {
        $this->isMusicOnHoldDevice = $isMusicOnHoldDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsMusicOnHoldDevice()
    {
        $this->isMusicOnHoldDevice = null;
        return $this;
    }

    /**
     * Getter for authenticationOverride
     *
     * @return bool
     */
    public function getAuthenticationOverride()
    {
        return $this->authenticationOverride instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->authenticationOverride;
    }

    /**
     * Setter for authenticationOverride
     *
     * @param bool $authenticationOverride
     * @return $this
     */
    public function setAuthenticationOverride($authenticationOverride)
    {
        $this->authenticationOverride = $authenticationOverride;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuthenticationOverride()
    {
        $this->authenticationOverride = null;
        return $this;
    }

    /**
     * Getter for RFC3264Hold
     *
     * @return bool
     */
    public function getRFC3264Hold()
    {
        return $this->RFC3264Hold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->RFC3264Hold;
    }

    /**
     * Setter for RFC3264Hold
     *
     * @param bool $RFC3264Hold
     * @return $this
     */
    public function setRFC3264Hold($RFC3264Hold)
    {
        $this->RFC3264Hold = $RFC3264Hold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRFC3264Hold()
    {
        $this->RFC3264Hold = null;
        return $this;
    }

    /**
     * Getter for isTrusted
     *
     * @return bool
     */
    public function getIsTrusted()
    {
        return $this->isTrusted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isTrusted;
    }

    /**
     * Setter for isTrusted
     *
     * @param bool $isTrusted
     * @return $this
     */
    public function setIsTrusted($isTrusted)
    {
        $this->isTrusted = $isTrusted;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsTrusted()
    {
        $this->isTrusted = null;
        return $this;
    }

    /**
     * Getter for E164Capable
     *
     * @return bool
     */
    public function getE164Capable()
    {
        return $this->E164Capable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->E164Capable;
    }

    /**
     * Setter for E164Capable
     *
     * @param bool $E164Capable
     * @return $this
     */
    public function setE164Capable($E164Capable)
    {
        $this->E164Capable = $E164Capable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetE164Capable()
    {
        $this->E164Capable = null;
        return $this;
    }

    /**
     * Getter for routeAdvance
     *
     * @return bool
     */
    public function getRouteAdvance()
    {
        return $this->routeAdvance instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeAdvance;
    }

    /**
     * Setter for routeAdvance
     *
     * @param bool $routeAdvance
     * @return $this
     */
    public function setRouteAdvance($routeAdvance)
    {
        $this->routeAdvance = $routeAdvance;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteAdvance()
    {
        $this->routeAdvance = null;
        return $this;
    }

    /**
     * Getter for forwardingOverride
     *
     * @return bool
     */
    public function getForwardingOverride()
    {
        return $this->forwardingOverride instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardingOverride;
    }

    /**
     * Setter for forwardingOverride
     *
     * @param bool $forwardingOverride
     * @return $this
     */
    public function setForwardingOverride($forwardingOverride)
    {
        $this->forwardingOverride = $forwardingOverride;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardingOverride()
    {
        $this->forwardingOverride = null;
        return $this;
    }

    /**
     * Getter for wirelessIntegration
     *
     * @return bool
     */
    public function getWirelessIntegration()
    {
        return $this->wirelessIntegration instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->wirelessIntegration;
    }

    /**
     * Setter for wirelessIntegration
     *
     * @param bool $wirelessIntegration
     * @return $this
     */
    public function setWirelessIntegration($wirelessIntegration)
    {
        $this->wirelessIntegration = $wirelessIntegration;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWirelessIntegration()
    {
        $this->wirelessIntegration = null;
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
     * Getter for isVideoCapable
     *
     * @return bool
     */
    public function getIsVideoCapable()
    {
        return $this->isVideoCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isVideoCapable;
    }

    /**
     * Setter for isVideoCapable
     *
     * @param bool $isVideoCapable
     * @return $this
     */
    public function setIsVideoCapable($isVideoCapable)
    {
        $this->isVideoCapable = $isVideoCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsVideoCapable()
    {
        $this->isVideoCapable = null;
        return $this;
    }

    /**
     * Getter for PBXIntegration
     *
     * @return bool
     */
    public function getPBXIntegration()
    {
        return $this->PBXIntegration instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->PBXIntegration;
    }

    /**
     * Setter for PBXIntegration
     *
     * @param bool $PBXIntegration
     * @return $this
     */
    public function setPBXIntegration($PBXIntegration)
    {
        $this->PBXIntegration = $PBXIntegration;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPBXIntegration()
    {
        $this->PBXIntegration = null;
        return $this;
    }

    /**
     * Getter for useBusinessTrunkingContact
     *
     * @return bool
     */
    public function getUseBusinessTrunkingContact()
    {
        return $this->useBusinessTrunkingContact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useBusinessTrunkingContact;
    }

    /**
     * Setter for useBusinessTrunkingContact
     *
     * @param bool $useBusinessTrunkingContact
     * @return $this
     */
    public function setUseBusinessTrunkingContact($useBusinessTrunkingContact)
    {
        $this->useBusinessTrunkingContact = $useBusinessTrunkingContact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseBusinessTrunkingContact()
    {
        $this->useBusinessTrunkingContact = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions
     */
    public function getCpeDeviceOptions()
    {
        return $this->cpeDeviceOptions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cpeDeviceOptions;
    }

    /**
     * Setter for cpeDeviceOptions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions $cpeDeviceOptions
     * @return $this
     */
    public function setCpeDeviceOptions(\CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions $cpeDeviceOptions)
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
     * Getter for earlyMediaSupport
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType
     */
    public function getEarlyMediaSupport()
    {
        return $this->earlyMediaSupport instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->earlyMediaSupport;
    }

    /**
     * Setter for earlyMediaSupport
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType $earlyMediaSupport
     * @return $this
     */
    public function setEarlyMediaSupport(\CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType $earlyMediaSupport)
    {
        $this->earlyMediaSupport = $earlyMediaSupport;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEarlyMediaSupport()
    {
        $this->earlyMediaSupport = null;
        return $this;
    }
}

