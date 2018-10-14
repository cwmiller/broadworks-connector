<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeGetResponse22V4
 *
 * Response to SystemSIPDeviceTypeGetRequest22V4.
 *         The following elements are only used in AS data mode:
 *           supportClientSessionInfo, value "false" is returned in XS data mode
 *           supportCallInfoConferenceSubscriptionURI, value "false" is returned in
 * XS data mode
 *           supportRemotePartyInfo, value "false" is returned in XS data mode
 *           supportVisualDeviceManagement, value "false" is returned in XS data
 * mode
 *           bypassMediaTreatment, value "false" is returned in XS data mode
 *           supportCauseParameter, value "false" is returned in XS data mode
 *           resellerId
 *
 *         The following elements are only used in XS data mode:
 *           enhancedForICS, value "false" is returned in AS data mode
 *           supports3G4GContinuity, value "false" is returned in AS data mode
 *           publishesOwnPresence, value "false" is returned in AS data mode
 *           locationNetwork, value "Fixed" is returned in AS data mode
 *           allowTerminationBasedOnICSI, value "false" is returned in AS data mode
 *           roamingMode, value "None" is returned in AS data mode
 *
 * @see SystemSIPDeviceTypeGetRequest22
 */
class SystemSIPDeviceTypeGetResponse22V4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @var \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType|null
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
     * @ElementName isMobilityManagerDevice
     * @var bool|null
     */
    private $isMobilityManagerDevice = null;

    /**
     * @ElementName isMusicOnHoldDevice
     * @var bool|null
     */
    private $isMusicOnHoldDevice = null;

    /**
     * @ElementName holdNormalization
     * @var \CWM\BroadWorksConnector\Ocip\Models\HoldNormalizationMode|null
     */
    private $holdNormalization = null;

    /**
     * @ElementName holdAnnouncementMethod
     * @var \CWM\BroadWorksConnector\Ocip\Models\HoldAnnouncementMethodMode|null
     */
    private $holdAnnouncementMethod = null;

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
     * @ElementName staticRegistrationCapable
     * @var bool|null
     */
    private $staticRegistrationCapable = null;

    /**
     * @ElementName cpeDeviceOptions
     * @var \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptionsRead22|null
     */
    private $cpeDeviceOptions = null;

    /**
     * @ElementName protocolChoice
     * @var string[]
     */
    private $protocolChoice = array(
        
    );

    /**
     * @ElementName earlyMediaSupport
     * @var \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType|null
     */
    private $earlyMediaSupport = null;

    /**
     * @ElementName authenticateRefer
     * @var bool|null
     */
    private $authenticateRefer = null;

    /**
     * @ElementName autoConfigSoftClient
     * @var bool|null
     */
    private $autoConfigSoftClient = null;

    /**
     * @ElementName authenticationMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationMode22|null
     */
    private $authenticationMode = null;

    /**
     * @ElementName requiresBroadWorksDigitCollection
     * @var bool|null
     */
    private $requiresBroadWorksDigitCollection = null;

    /**
     * @ElementName requiresBroadWorksCallWaitingTone
     * @var bool|null
     */
    private $requiresBroadWorksCallWaitingTone = null;

    /**
     * @ElementName requiresMWISubscription
     * @var bool|null
     */
    private $requiresMWISubscription = null;

    /**
     * @ElementName useHistoryInfoHeaderOnAccessSide
     * @var bool|null
     */
    private $useHistoryInfoHeaderOnAccessSide = null;

    /**
     * @ElementName adviceOfChargeCapable
     * @var bool|null
     */
    private $adviceOfChargeCapable = null;

    /**
     * @ElementName resetEvent
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceResetEvent|null
     */
    private $resetEvent = null;

    /**
     * @ElementName supportCallCenterMIMEType
     * @var bool|null
     */
    private $supportCallCenterMIMEType = null;

    /**
     * @ElementName trunkMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkMode|null
     */
    private $trunkMode = null;

    /**
     * @ElementName addPCalledPartyId
     * @var bool|null
     */
    private $addPCalledPartyId = null;

    /**
     * @ElementName supportIdentityInUpdateAndReInvite
     * @var bool|null
     */
    private $supportIdentityInUpdateAndReInvite = null;

    /**
     * @ElementName unscreenedPresentationIdentityPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnscreenedPresentationIdentityPolicy|null
     */
    private $unscreenedPresentationIdentityPolicy = null;

    /**
     * @ElementName enhancedForICS
     * @var bool|null
     */
    private $enhancedForICS = null;

    /**
     * @ElementName supportEmergencyDisconnectControl
     * @var bool|null
     */
    private $supportEmergencyDisconnectControl = null;

    /**
     * @ElementName deviceTypeConfigurationOption
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType|null
     */
    private $deviceTypeConfigurationOption = null;

    /**
     * @ElementName supportRFC3398
     * @var bool|null
     */
    private $supportRFC3398 = null;

    /**
     * @ElementName staticLineOrdering
     * @var bool|null
     */
    private $staticLineOrdering = null;

    /**
     * @ElementName supportClientSessionInfo
     * @var bool|null
     */
    private $supportClientSessionInfo = null;

    /**
     * @ElementName supportCallInfoConferenceSubscriptionURI
     * @var bool|null
     */
    private $supportCallInfoConferenceSubscriptionURI = null;

    /**
     * @ElementName supportRemotePartyInfo
     * @var bool|null
     */
    private $supportRemotePartyInfo = null;

    /**
     * @ElementName supportVisualDeviceManagement
     * @var bool|null
     */
    private $supportVisualDeviceManagement = null;

    /**
     * @ElementName bypassMediaTreatment
     * @var bool|null
     */
    private $bypassMediaTreatment = null;

    /**
     * @ElementName supports3G4GContinuity
     * @var bool|null
     */
    private $supports3G4GContinuity = null;

    /**
     * @ElementName publishesOwnPresence
     * @var bool|null
     */
    private $publishesOwnPresence = null;

    /**
     * @ElementName supportCauseParameter
     * @var bool|null
     */
    private $supportCauseParameter = null;

    /**
     * @ElementName locationNetwork
     * @var \CWM\BroadWorksConnector\Ocip\Models\LocationNetworkType|null
     */
    private $locationNetwork = null;

    /**
     * @ElementName resellerId
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName allowTerminationBasedOnICSI
     * @var bool|null
     */
    private $allowTerminationBasedOnICSI = null;

    /**
     * @ElementName roamingMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\RoamingMode|null
     */
    private $roamingMode = null;

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
    public function setNumberOfPorts(\CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $numberOfPorts)
    {
        $this->numberOfPorts = $numberOfPorts;
        return $this;
    }

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
     * Getter for holdNormalization
     *
     * @ElementName holdNormalization
     * @return \CWM\BroadWorksConnector\Ocip\Models\HoldNormalizationMode|null
     */
    public function getHoldNormalization()
    {
        return $this->holdNormalization;
    }

    /**
     * Setter for holdNormalization
     *
     * @ElementName holdNormalization
     * @param \CWM\BroadWorksConnector\Ocip\Models\HoldNormalizationMode|null $holdNormalization
     * @return $this
     */
    public function setHoldNormalization(\CWM\BroadWorksConnector\Ocip\Models\HoldNormalizationMode $holdNormalization)
    {
        $this->holdNormalization = $holdNormalization;
        return $this;
    }

    /**
     * Getter for holdAnnouncementMethod
     *
     * @ElementName holdAnnouncementMethod
     * @return \CWM\BroadWorksConnector\Ocip\Models\HoldAnnouncementMethodMode|null
     */
    public function getHoldAnnouncementMethod()
    {
        return $this->holdAnnouncementMethod;
    }

    /**
     * Setter for holdAnnouncementMethod
     *
     * @ElementName holdAnnouncementMethod
     * @param \CWM\BroadWorksConnector\Ocip\Models\HoldAnnouncementMethodMode|null $holdAnnouncementMethod
     * @return $this
     */
    public function setHoldAnnouncementMethod(\CWM\BroadWorksConnector\Ocip\Models\HoldAnnouncementMethodMode $holdAnnouncementMethod)
    {
        $this->holdAnnouncementMethod = $holdAnnouncementMethod;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptionsRead22|null
     */
    public function getCpeDeviceOptions()
    {
        return $this->cpeDeviceOptions;
    }

    /**
     * Setter for cpeDeviceOptions
     *
     * @ElementName cpeDeviceOptions
     * @param \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptionsRead22|null $cpeDeviceOptions
     * @return $this
     */
    public function setCpeDeviceOptions(\CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptionsRead22 $cpeDeviceOptions)
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
     * Getter for earlyMediaSupport
     *
     * @ElementName earlyMediaSupport
     * @return \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType|null
     */
    public function getEarlyMediaSupport()
    {
        return $this->earlyMediaSupport;
    }

    /**
     * Setter for earlyMediaSupport
     *
     * @ElementName earlyMediaSupport
     * @param \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType|null $earlyMediaSupport
     * @return $this
     */
    public function setEarlyMediaSupport(\CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType $earlyMediaSupport)
    {
        $this->earlyMediaSupport = $earlyMediaSupport;
        return $this;
    }

    /**
     * Getter for authenticateRefer
     *
     * @ElementName authenticateRefer
     * @return bool|null
     */
    public function getAuthenticateRefer()
    {
        return $this->authenticateRefer;
    }

    /**
     * Setter for authenticateRefer
     *
     * @ElementName authenticateRefer
     * @param bool|null $authenticateRefer
     * @return $this
     */
    public function setAuthenticateRefer($authenticateRefer)
    {
        $this->authenticateRefer = $authenticateRefer;
        return $this;
    }

    /**
     * Getter for autoConfigSoftClient
     *
     * @ElementName autoConfigSoftClient
     * @return bool|null
     */
    public function getAutoConfigSoftClient()
    {
        return $this->autoConfigSoftClient;
    }

    /**
     * Setter for autoConfigSoftClient
     *
     * @ElementName autoConfigSoftClient
     * @param bool|null $autoConfigSoftClient
     * @return $this
     */
    public function setAutoConfigSoftClient($autoConfigSoftClient)
    {
        $this->autoConfigSoftClient = $autoConfigSoftClient;
        return $this;
    }

    /**
     * Getter for authenticationMode
     *
     * @ElementName authenticationMode
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationMode22|null
     */
    public function getAuthenticationMode()
    {
        return $this->authenticationMode;
    }

    /**
     * Setter for authenticationMode
     *
     * @ElementName authenticationMode
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationMode22|null $authenticationMode
     * @return $this
     */
    public function setAuthenticationMode(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationMode22 $authenticationMode)
    {
        $this->authenticationMode = $authenticationMode;
        return $this;
    }

    /**
     * Getter for requiresBroadWorksDigitCollection
     *
     * @ElementName requiresBroadWorksDigitCollection
     * @return bool|null
     */
    public function getRequiresBroadWorksDigitCollection()
    {
        return $this->requiresBroadWorksDigitCollection;
    }

    /**
     * Setter for requiresBroadWorksDigitCollection
     *
     * @ElementName requiresBroadWorksDigitCollection
     * @param bool|null $requiresBroadWorksDigitCollection
     * @return $this
     */
    public function setRequiresBroadWorksDigitCollection($requiresBroadWorksDigitCollection)
    {
        $this->requiresBroadWorksDigitCollection = $requiresBroadWorksDigitCollection;
        return $this;
    }

    /**
     * Getter for requiresBroadWorksCallWaitingTone
     *
     * @ElementName requiresBroadWorksCallWaitingTone
     * @return bool|null
     */
    public function getRequiresBroadWorksCallWaitingTone()
    {
        return $this->requiresBroadWorksCallWaitingTone;
    }

    /**
     * Setter for requiresBroadWorksCallWaitingTone
     *
     * @ElementName requiresBroadWorksCallWaitingTone
     * @param bool|null $requiresBroadWorksCallWaitingTone
     * @return $this
     */
    public function setRequiresBroadWorksCallWaitingTone($requiresBroadWorksCallWaitingTone)
    {
        $this->requiresBroadWorksCallWaitingTone = $requiresBroadWorksCallWaitingTone;
        return $this;
    }

    /**
     * Getter for requiresMWISubscription
     *
     * @ElementName requiresMWISubscription
     * @return bool|null
     */
    public function getRequiresMWISubscription()
    {
        return $this->requiresMWISubscription;
    }

    /**
     * Setter for requiresMWISubscription
     *
     * @ElementName requiresMWISubscription
     * @param bool|null $requiresMWISubscription
     * @return $this
     */
    public function setRequiresMWISubscription($requiresMWISubscription)
    {
        $this->requiresMWISubscription = $requiresMWISubscription;
        return $this;
    }

    /**
     * Getter for useHistoryInfoHeaderOnAccessSide
     *
     * @ElementName useHistoryInfoHeaderOnAccessSide
     * @return bool|null
     */
    public function getUseHistoryInfoHeaderOnAccessSide()
    {
        return $this->useHistoryInfoHeaderOnAccessSide;
    }

    /**
     * Setter for useHistoryInfoHeaderOnAccessSide
     *
     * @ElementName useHistoryInfoHeaderOnAccessSide
     * @param bool|null $useHistoryInfoHeaderOnAccessSide
     * @return $this
     */
    public function setUseHistoryInfoHeaderOnAccessSide($useHistoryInfoHeaderOnAccessSide)
    {
        $this->useHistoryInfoHeaderOnAccessSide = $useHistoryInfoHeaderOnAccessSide;
        return $this;
    }

    /**
     * Getter for adviceOfChargeCapable
     *
     * @ElementName adviceOfChargeCapable
     * @return bool|null
     */
    public function getAdviceOfChargeCapable()
    {
        return $this->adviceOfChargeCapable;
    }

    /**
     * Setter for adviceOfChargeCapable
     *
     * @ElementName adviceOfChargeCapable
     * @param bool|null $adviceOfChargeCapable
     * @return $this
     */
    public function setAdviceOfChargeCapable($adviceOfChargeCapable)
    {
        $this->adviceOfChargeCapable = $adviceOfChargeCapable;
        return $this;
    }

    /**
     * Getter for resetEvent
     *
     * @ElementName resetEvent
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceResetEvent|null
     */
    public function getResetEvent()
    {
        return $this->resetEvent;
    }

    /**
     * Setter for resetEvent
     *
     * @ElementName resetEvent
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceResetEvent|null $resetEvent
     * @return $this
     */
    public function setResetEvent(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceResetEvent $resetEvent)
    {
        $this->resetEvent = $resetEvent;
        return $this;
    }

    /**
     * Getter for supportCallCenterMIMEType
     *
     * @ElementName supportCallCenterMIMEType
     * @return bool|null
     */
    public function getSupportCallCenterMIMEType()
    {
        return $this->supportCallCenterMIMEType;
    }

    /**
     * Setter for supportCallCenterMIMEType
     *
     * @ElementName supportCallCenterMIMEType
     * @param bool|null $supportCallCenterMIMEType
     * @return $this
     */
    public function setSupportCallCenterMIMEType($supportCallCenterMIMEType)
    {
        $this->supportCallCenterMIMEType = $supportCallCenterMIMEType;
        return $this;
    }

    /**
     * Getter for trunkMode
     *
     * @ElementName trunkMode
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkMode|null
     */
    public function getTrunkMode()
    {
        return $this->trunkMode;
    }

    /**
     * Setter for trunkMode
     *
     * @ElementName trunkMode
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkMode|null $trunkMode
     * @return $this
     */
    public function setTrunkMode(\CWM\BroadWorksConnector\Ocip\Models\TrunkMode $trunkMode)
    {
        $this->trunkMode = $trunkMode;
        return $this;
    }

    /**
     * Getter for addPCalledPartyId
     *
     * @ElementName addPCalledPartyId
     * @return bool|null
     */
    public function getAddPCalledPartyId()
    {
        return $this->addPCalledPartyId;
    }

    /**
     * Setter for addPCalledPartyId
     *
     * @ElementName addPCalledPartyId
     * @param bool|null $addPCalledPartyId
     * @return $this
     */
    public function setAddPCalledPartyId($addPCalledPartyId)
    {
        $this->addPCalledPartyId = $addPCalledPartyId;
        return $this;
    }

    /**
     * Getter for supportIdentityInUpdateAndReInvite
     *
     * @ElementName supportIdentityInUpdateAndReInvite
     * @return bool|null
     */
    public function getSupportIdentityInUpdateAndReInvite()
    {
        return $this->supportIdentityInUpdateAndReInvite;
    }

    /**
     * Setter for supportIdentityInUpdateAndReInvite
     *
     * @ElementName supportIdentityInUpdateAndReInvite
     * @param bool|null $supportIdentityInUpdateAndReInvite
     * @return $this
     */
    public function setSupportIdentityInUpdateAndReInvite($supportIdentityInUpdateAndReInvite)
    {
        $this->supportIdentityInUpdateAndReInvite = $supportIdentityInUpdateAndReInvite;
        return $this;
    }

    /**
     * Getter for unscreenedPresentationIdentityPolicy
     *
     * @ElementName unscreenedPresentationIdentityPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnscreenedPresentationIdentityPolicy|null
     */
    public function getUnscreenedPresentationIdentityPolicy()
    {
        return $this->unscreenedPresentationIdentityPolicy;
    }

    /**
     * Setter for unscreenedPresentationIdentityPolicy
     *
     * @ElementName unscreenedPresentationIdentityPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnscreenedPresentationIdentityPolicy|null $unscreenedPresentationIdentityPolicy
     * @return $this
     */
    public function setUnscreenedPresentationIdentityPolicy(\CWM\BroadWorksConnector\Ocip\Models\UnscreenedPresentationIdentityPolicy $unscreenedPresentationIdentityPolicy)
    {
        $this->unscreenedPresentationIdentityPolicy = $unscreenedPresentationIdentityPolicy;
        return $this;
    }

    /**
     * Getter for enhancedForICS
     *
     * @ElementName enhancedForICS
     * @return bool|null
     */
    public function getEnhancedForICS()
    {
        return $this->enhancedForICS;
    }

    /**
     * Setter for enhancedForICS
     *
     * @ElementName enhancedForICS
     * @param bool|null $enhancedForICS
     * @return $this
     */
    public function setEnhancedForICS($enhancedForICS)
    {
        $this->enhancedForICS = $enhancedForICS;
        return $this;
    }

    /**
     * Getter for supportEmergencyDisconnectControl
     *
     * @ElementName supportEmergencyDisconnectControl
     * @return bool|null
     */
    public function getSupportEmergencyDisconnectControl()
    {
        return $this->supportEmergencyDisconnectControl;
    }

    /**
     * Setter for supportEmergencyDisconnectControl
     *
     * @ElementName supportEmergencyDisconnectControl
     * @param bool|null $supportEmergencyDisconnectControl
     * @return $this
     */
    public function setSupportEmergencyDisconnectControl($supportEmergencyDisconnectControl)
    {
        $this->supportEmergencyDisconnectControl = $supportEmergencyDisconnectControl;
        return $this;
    }

    /**
     * Getter for deviceTypeConfigurationOption
     *
     * @ElementName deviceTypeConfigurationOption
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType|null
     */
    public function getDeviceTypeConfigurationOption()
    {
        return $this->deviceTypeConfigurationOption;
    }

    /**
     * Setter for deviceTypeConfigurationOption
     *
     * @ElementName deviceTypeConfigurationOption
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType|null $deviceTypeConfigurationOption
     * @return $this
     */
    public function setDeviceTypeConfigurationOption(\CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType $deviceTypeConfigurationOption)
    {
        $this->deviceTypeConfigurationOption = $deviceTypeConfigurationOption;
        return $this;
    }

    /**
     * Getter for supportRFC3398
     *
     * @ElementName supportRFC3398
     * @return bool|null
     */
    public function getSupportRFC3398()
    {
        return $this->supportRFC3398;
    }

    /**
     * Setter for supportRFC3398
     *
     * @ElementName supportRFC3398
     * @param bool|null $supportRFC3398
     * @return $this
     */
    public function setSupportRFC3398($supportRFC3398)
    {
        $this->supportRFC3398 = $supportRFC3398;
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
     * Getter for supportClientSessionInfo
     *
     * @ElementName supportClientSessionInfo
     * @return bool|null
     */
    public function getSupportClientSessionInfo()
    {
        return $this->supportClientSessionInfo;
    }

    /**
     * Setter for supportClientSessionInfo
     *
     * @ElementName supportClientSessionInfo
     * @param bool|null $supportClientSessionInfo
     * @return $this
     */
    public function setSupportClientSessionInfo($supportClientSessionInfo)
    {
        $this->supportClientSessionInfo = $supportClientSessionInfo;
        return $this;
    }

    /**
     * Getter for supportCallInfoConferenceSubscriptionURI
     *
     * @ElementName supportCallInfoConferenceSubscriptionURI
     * @return bool|null
     */
    public function getSupportCallInfoConferenceSubscriptionURI()
    {
        return $this->supportCallInfoConferenceSubscriptionURI;
    }

    /**
     * Setter for supportCallInfoConferenceSubscriptionURI
     *
     * @ElementName supportCallInfoConferenceSubscriptionURI
     * @param bool|null $supportCallInfoConferenceSubscriptionURI
     * @return $this
     */
    public function setSupportCallInfoConferenceSubscriptionURI($supportCallInfoConferenceSubscriptionURI)
    {
        $this->supportCallInfoConferenceSubscriptionURI = $supportCallInfoConferenceSubscriptionURI;
        return $this;
    }

    /**
     * Getter for supportRemotePartyInfo
     *
     * @ElementName supportRemotePartyInfo
     * @return bool|null
     */
    public function getSupportRemotePartyInfo()
    {
        return $this->supportRemotePartyInfo;
    }

    /**
     * Setter for supportRemotePartyInfo
     *
     * @ElementName supportRemotePartyInfo
     * @param bool|null $supportRemotePartyInfo
     * @return $this
     */
    public function setSupportRemotePartyInfo($supportRemotePartyInfo)
    {
        $this->supportRemotePartyInfo = $supportRemotePartyInfo;
        return $this;
    }

    /**
     * Getter for supportVisualDeviceManagement
     *
     * @ElementName supportVisualDeviceManagement
     * @return bool|null
     */
    public function getSupportVisualDeviceManagement()
    {
        return $this->supportVisualDeviceManagement;
    }

    /**
     * Setter for supportVisualDeviceManagement
     *
     * @ElementName supportVisualDeviceManagement
     * @param bool|null $supportVisualDeviceManagement
     * @return $this
     */
    public function setSupportVisualDeviceManagement($supportVisualDeviceManagement)
    {
        $this->supportVisualDeviceManagement = $supportVisualDeviceManagement;
        return $this;
    }

    /**
     * Getter for bypassMediaTreatment
     *
     * @ElementName bypassMediaTreatment
     * @return bool|null
     */
    public function getBypassMediaTreatment()
    {
        return $this->bypassMediaTreatment;
    }

    /**
     * Setter for bypassMediaTreatment
     *
     * @ElementName bypassMediaTreatment
     * @param bool|null $bypassMediaTreatment
     * @return $this
     */
    public function setBypassMediaTreatment($bypassMediaTreatment)
    {
        $this->bypassMediaTreatment = $bypassMediaTreatment;
        return $this;
    }

    /**
     * Getter for supports3G4GContinuity
     *
     * @ElementName supports3G4GContinuity
     * @return bool|null
     */
    public function getSupports3G4GContinuity()
    {
        return $this->supports3G4GContinuity;
    }

    /**
     * Setter for supports3G4GContinuity
     *
     * @ElementName supports3G4GContinuity
     * @param bool|null $supports3G4GContinuity
     * @return $this
     */
    public function setSupports3G4GContinuity($supports3G4GContinuity)
    {
        $this->supports3G4GContinuity = $supports3G4GContinuity;
        return $this;
    }

    /**
     * Getter for publishesOwnPresence
     *
     * @ElementName publishesOwnPresence
     * @return bool|null
     */
    public function getPublishesOwnPresence()
    {
        return $this->publishesOwnPresence;
    }

    /**
     * Setter for publishesOwnPresence
     *
     * @ElementName publishesOwnPresence
     * @param bool|null $publishesOwnPresence
     * @return $this
     */
    public function setPublishesOwnPresence($publishesOwnPresence)
    {
        $this->publishesOwnPresence = $publishesOwnPresence;
        return $this;
    }

    /**
     * Getter for supportCauseParameter
     *
     * @ElementName supportCauseParameter
     * @return bool|null
     */
    public function getSupportCauseParameter()
    {
        return $this->supportCauseParameter;
    }

    /**
     * Setter for supportCauseParameter
     *
     * @ElementName supportCauseParameter
     * @param bool|null $supportCauseParameter
     * @return $this
     */
    public function setSupportCauseParameter($supportCauseParameter)
    {
        $this->supportCauseParameter = $supportCauseParameter;
        return $this;
    }

    /**
     * Getter for locationNetwork
     *
     * @ElementName locationNetwork
     * @return \CWM\BroadWorksConnector\Ocip\Models\LocationNetworkType|null
     */
    public function getLocationNetwork()
    {
        return $this->locationNetwork;
    }

    /**
     * Setter for locationNetwork
     *
     * @ElementName locationNetwork
     * @param \CWM\BroadWorksConnector\Ocip\Models\LocationNetworkType|null $locationNetwork
     * @return $this
     */
    public function setLocationNetwork(\CWM\BroadWorksConnector\Ocip\Models\LocationNetworkType $locationNetwork)
    {
        $this->locationNetwork = $locationNetwork;
        return $this;
    }

    /**
     * Getter for resellerId
     *
     * @ElementName resellerId
     * @return string|null
     */
    public function getResellerId()
    {
        return $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @ElementName resellerId
     * @param string|null $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * Getter for allowTerminationBasedOnICSI
     *
     * @ElementName allowTerminationBasedOnICSI
     * @return bool|null
     */
    public function getAllowTerminationBasedOnICSI()
    {
        return $this->allowTerminationBasedOnICSI;
    }

    /**
     * Setter for allowTerminationBasedOnICSI
     *
     * @ElementName allowTerminationBasedOnICSI
     * @param bool|null $allowTerminationBasedOnICSI
     * @return $this
     */
    public function setAllowTerminationBasedOnICSI($allowTerminationBasedOnICSI)
    {
        $this->allowTerminationBasedOnICSI = $allowTerminationBasedOnICSI;
        return $this;
    }

    /**
     * Getter for roamingMode
     *
     * @ElementName roamingMode
     * @return \CWM\BroadWorksConnector\Ocip\Models\RoamingMode|null
     */
    public function getRoamingMode()
    {
        return $this->roamingMode;
    }

    /**
     * Setter for roamingMode
     *
     * @ElementName roamingMode
     * @param \CWM\BroadWorksConnector\Ocip\Models\RoamingMode|null $roamingMode
     * @return $this
     */
    public function setRoamingMode(\CWM\BroadWorksConnector\Ocip\Models\RoamingMode $roamingMode)
    {
        $this->roamingMode = $roamingMode;
        return $this;
    }


}

