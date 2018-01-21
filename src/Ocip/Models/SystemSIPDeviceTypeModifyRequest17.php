<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeModifyRequest17
 *
 * Request to modify a sip device type.
 *         The following elements are not changeable:
 *           numberOfPorts
 *           SignalingAddressType
 *           isConferenceDevice
 *           isMusicOnHoldDevice
 *           isMobilityManagerDevice
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         The following elements are only used in XS data mode:
 *           enable3G4GContinuity        
 *         
 *         Replaced by: SystemSIPDeviceTypeModifyRequest19
 */
class SystemSIPDeviceTypeModifyRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName isObsolete
     * @var bool|null
     */
    private $isObsolete = null;

    /**
     * @ElementName registrationCapable
     * @var bool|null
     */
    private $registrationCapable = null;

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
     * @ElementName staticRegistrationCapable
     * @var bool|null
     */
    private $staticRegistrationCapable = null;

    /**
     * @ElementName cpeDeviceOptions
     * @var \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceModifyOptions16sp1|null
     */
    private $cpeDeviceOptions = null;

    /**
     * @ElementName earlyMediaSupport
     * @var string|null
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
     * @var string|null
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
     * @var string|null
     */
    private $resetEvent = null;

    /**
     * @ElementName supportCallCenterMIMEType
     * @var bool|null
     */
    private $supportCallCenterMIMEType = null;

    /**
     * @ElementName trunkMode
     * @var string|null
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
     * @var string|null
     */
    private $unscreenedPresentationIdentityPolicy = null;

    /**
     * @ElementName enable3G4GContinuity
     * @var bool|null
     */
    private $enable3G4GContinuity = null;

    /**
     * @ElementName supportEmergencyDisconnectControl
     * @var bool|null
     */
    private $supportEmergencyDisconnectControl = null;

    /**
     * Getter for deviceType
     *
     * @ElementName deviceType
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @ElementName deviceType
     * @param string|null $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceModifyOptions16sp1|null
     */
    public function getCpeDeviceOptions()
    {
        return $this->cpeDeviceOptions;
    }

    /**
     * Setter for cpeDeviceOptions
     *
     * @ElementName cpeDeviceOptions
     * @param \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceModifyOptions16sp1|null $cpeDeviceOptions
     * @return $this
     */
    public function setCpeDeviceOptions($cpeDeviceOptions)
    {
        $this->cpeDeviceOptions = $cpeDeviceOptions;
        return $this;
    }

    /**
     * Getter for earlyMediaSupport
     *
     * @ElementName earlyMediaSupport
     * @return string|null
     */
    public function getEarlyMediaSupport()
    {
        return $this->earlyMediaSupport;
    }

    /**
     * Setter for earlyMediaSupport
     *
     * @ElementName earlyMediaSupport
     * @param string|null $earlyMediaSupport
     * @return $this
     */
    public function setEarlyMediaSupport($earlyMediaSupport)
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
     * @return string|null
     */
    public function getAuthenticationMode()
    {
        return $this->authenticationMode;
    }

    /**
     * Setter for authenticationMode
     *
     * @ElementName authenticationMode
     * @param string|null $authenticationMode
     * @return $this
     */
    public function setAuthenticationMode($authenticationMode)
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
     * @return string|null
     */
    public function getResetEvent()
    {
        return $this->resetEvent;
    }

    /**
     * Setter for resetEvent
     *
     * @ElementName resetEvent
     * @param string|null $resetEvent
     * @return $this
     */
    public function setResetEvent($resetEvent)
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
     * @return string|null
     */
    public function getTrunkMode()
    {
        return $this->trunkMode;
    }

    /**
     * Setter for trunkMode
     *
     * @ElementName trunkMode
     * @param string|null $trunkMode
     * @return $this
     */
    public function setTrunkMode($trunkMode)
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
     * @return string|null
     */
    public function getUnscreenedPresentationIdentityPolicy()
    {
        return $this->unscreenedPresentationIdentityPolicy;
    }

    /**
     * Setter for unscreenedPresentationIdentityPolicy
     *
     * @ElementName unscreenedPresentationIdentityPolicy
     * @param string|null $unscreenedPresentationIdentityPolicy
     * @return $this
     */
    public function setUnscreenedPresentationIdentityPolicy($unscreenedPresentationIdentityPolicy)
    {
        $this->unscreenedPresentationIdentityPolicy = $unscreenedPresentationIdentityPolicy;
        return $this;
    }

    /**
     * Getter for enable3G4GContinuity
     *
     * @ElementName enable3G4GContinuity
     * @return bool|null
     */
    public function getEnable3G4GContinuity()
    {
        return $this->enable3G4GContinuity;
    }

    /**
     * Setter for enable3G4GContinuity
     *
     * @ElementName enable3G4GContinuity
     * @param bool|null $enable3G4GContinuity
     * @return $this
     */
    public function setEnable3G4GContinuity($enable3G4GContinuity)
    {
        $this->enable3G4GContinuity = $enable3G4GContinuity;
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


}

