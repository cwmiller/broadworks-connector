<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetResponse22V2
 *
 * Response to SystemVoiceMessagingGroupGetRequest22V2.
 *
 *         The following elements are only used in AS/Amplify data mode:
 *            realDeleteForImap
 *            useDnInMailBody
 *            useShortSubjectLine
 *            maxMessageLengthMinutes
 *            maxMailboxLengthMinutes
 *            doesMessageAge
 *            holdPeriodDays
 *            mailServerNetAddress
 *            mailServerProtocol
 *            defaultDeliveryFromAddress
 *            defaultNotificationFromAddress
 *            useOutgoingMWIOnSMDI
 *            mwiDelayInSeconds
 *            voicePortalScope
 *            enterpriseVoicePortalLicensed
 *            networkWideMessaging
 *            useExternalRouting
 *            defaultExternalRoutingAddress
 *            vmOnlySystem, value "false" is returned in Amplify data mode
 *            clientInitiatedMailServerSessionTimeoutMinutes
 *            recordingAudioFileFormat
 *            allowVoicePortalAccessFromVMDepositMenu
 *            
 *            The following elements are only used in AS mode and not returned in XS data mode:
 *            vmBucketName
 *         
 *            The following elements are only used in AS data mode:
 *            storageSelection, value "Mail Server" is returned in XS data mode
 *
 * @see SystemVoiceMessagingGroupGetRequest22V2
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:629","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetResponse22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName realDeleteForImap
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @var bool|null
     */
    private $realDeleteForImap = null;

    /**
     * @ElementName useDnInMailBody
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @var bool|null
     */
    private $useDnInMailBody = null;

    /**
     * @ElementName useShortSubjectLine
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @var bool|null
     */
    private $useShortSubjectLine = null;

    /**
     * @ElementName maxMessageLengthMinutes
     * @Type int
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    private $maxMessageLengthMinutes = null;

    /**
     * @ElementName maxMailboxLengthMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes|null
     */
    private $maxMailboxLengthMinutes = null;

    /**
     * @ElementName doesMessageAge
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @var bool|null
     */
    private $doesMessageAge = null;

    /**
     * @ElementName holdPeriodDays
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingHoldPeriodDays
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingHoldPeriodDays|null
     */
    private $holdPeriodDays = null;

    /**
     * @ElementName mailServerNetAddress
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $mailServerNetAddress = null;

    /**
     * @ElementName mailServerProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol|null
     */
    private $mailServerProtocol = null;

    /**
     * @ElementName defaultDeliveryFromAddress
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $defaultDeliveryFromAddress = null;

    /**
     * @ElementName defaultNotificationFromAddress
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $defaultNotificationFromAddress = null;

    /**
     * @ElementName defaultVoicePortalLockoutFromAddress
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $defaultVoicePortalLockoutFromAddress = null;

    /**
     * @ElementName useOutgoingMWIOnSMDI
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @var bool|null
     */
    private $useOutgoingMWIOnSMDI = null;

    /**
     * @ElementName mwiDelayInSeconds
     * @Type int
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @MinInclusive 0
     * @MaxInclusive 300
     * @var int|null
     */
    private $mwiDelayInSeconds = null;

    /**
     * @ElementName voicePortalScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoicePortalScope
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoicePortalScope|null
     */
    private $voicePortalScope = null;

    /**
     * @ElementName enterpriseVoicePortalLicensed
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @var bool|null
     */
    private $enterpriseVoicePortalLicensed = null;

    /**
     * @ElementName networkWideMessaging
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @var bool|null
     */
    private $networkWideMessaging = null;

    /**
     * @ElementName useExternalRouting
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @var bool|null
     */
    private $useExternalRouting = null;

    /**
     * @ElementName defaultExternalRoutingAddress
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $defaultExternalRoutingAddress = null;

    /**
     * @ElementName vmOnlySystem
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @var bool|null
     */
    private $vmOnlySystem = null;

    /**
     * @ElementName clientInitiatedMailServerSessionTimeoutMinutes
     * @Type int
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    private $clientInitiatedMailServerSessionTimeoutMinutes = null;

    /**
     * @ElementName recordingAudioFileFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingRecordingAudioFileFormat
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingRecordingAudioFileFormat|null
     */
    private $recordingAudioFileFormat = null;

    /**
     * @ElementName allowVoicePortalAccessFromVMDepositMenu
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @var bool|null
     */
    private $allowVoicePortalAccessFromVMDepositMenu = null;

    /**
     * @ElementName storageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingStorageMode
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingStorageMode|null
     */
    private $storageSelection = null;

    /**
     * @ElementName vmBucketName
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:629
     * @MinLength 3
     * @MaxLength 256
     * @var string|null
     */
    private $vmBucketName = null;

    /**
     * Getter for realDeleteForImap
     *
     * @return bool
     */
    public function getRealDeleteForImap()
    {
        return $this->realDeleteForImap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->realDeleteForImap;
    }

    /**
     * Setter for realDeleteForImap
     *
     * @param bool $realDeleteForImap
     * @return $this
     */
    public function setRealDeleteForImap($realDeleteForImap)
    {
        $this->realDeleteForImap = $realDeleteForImap;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRealDeleteForImap()
    {
        $this->realDeleteForImap = null;
        return $this;
    }

    /**
     * Getter for useDnInMailBody
     *
     * @return bool
     */
    public function getUseDnInMailBody()
    {
        return $this->useDnInMailBody instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDnInMailBody;
    }

    /**
     * Setter for useDnInMailBody
     *
     * @param bool $useDnInMailBody
     * @return $this
     */
    public function setUseDnInMailBody($useDnInMailBody)
    {
        $this->useDnInMailBody = $useDnInMailBody;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDnInMailBody()
    {
        $this->useDnInMailBody = null;
        return $this;
    }

    /**
     * Getter for useShortSubjectLine
     *
     * @return bool
     */
    public function getUseShortSubjectLine()
    {
        return $this->useShortSubjectLine instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useShortSubjectLine;
    }

    /**
     * Setter for useShortSubjectLine
     *
     * @param bool $useShortSubjectLine
     * @return $this
     */
    public function setUseShortSubjectLine($useShortSubjectLine)
    {
        $this->useShortSubjectLine = $useShortSubjectLine;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseShortSubjectLine()
    {
        $this->useShortSubjectLine = null;
        return $this;
    }

    /**
     * Getter for maxMessageLengthMinutes
     *
     * @return int
     */
    public function getMaxMessageLengthMinutes()
    {
        return $this->maxMessageLengthMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxMessageLengthMinutes;
    }

    /**
     * Setter for maxMessageLengthMinutes
     *
     * @param int $maxMessageLengthMinutes
     * @return $this
     */
    public function setMaxMessageLengthMinutes($maxMessageLengthMinutes)
    {
        $this->maxMessageLengthMinutes = $maxMessageLengthMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxMessageLengthMinutes()
    {
        $this->maxMessageLengthMinutes = null;
        return $this;
    }

    /**
     * Getter for maxMailboxLengthMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes
     */
    public function getMaxMailboxLengthMinutes()
    {
        return $this->maxMailboxLengthMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxMailboxLengthMinutes;
    }

    /**
     * Setter for maxMailboxLengthMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes $maxMailboxLengthMinutes
     * @return $this
     */
    public function setMaxMailboxLengthMinutes(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes $maxMailboxLengthMinutes)
    {
        $this->maxMailboxLengthMinutes = $maxMailboxLengthMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxMailboxLengthMinutes()
    {
        $this->maxMailboxLengthMinutes = null;
        return $this;
    }

    /**
     * Getter for doesMessageAge
     *
     * @return bool
     */
    public function getDoesMessageAge()
    {
        return $this->doesMessageAge instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->doesMessageAge;
    }

    /**
     * Setter for doesMessageAge
     *
     * @param bool $doesMessageAge
     * @return $this
     */
    public function setDoesMessageAge($doesMessageAge)
    {
        $this->doesMessageAge = $doesMessageAge;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDoesMessageAge()
    {
        $this->doesMessageAge = null;
        return $this;
    }

    /**
     * Getter for holdPeriodDays
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingHoldPeriodDays
     */
    public function getHoldPeriodDays()
    {
        return $this->holdPeriodDays instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holdPeriodDays;
    }

    /**
     * Setter for holdPeriodDays
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingHoldPeriodDays $holdPeriodDays
     * @return $this
     */
    public function setHoldPeriodDays(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingHoldPeriodDays $holdPeriodDays)
    {
        $this->holdPeriodDays = $holdPeriodDays;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoldPeriodDays()
    {
        $this->holdPeriodDays = null;
        return $this;
    }

    /**
     * Getter for mailServerNetAddress
     *
     * @return string
     */
    public function getMailServerNetAddress()
    {
        return $this->mailServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mailServerNetAddress;
    }

    /**
     * Setter for mailServerNetAddress
     *
     * @param string $mailServerNetAddress
     * @return $this
     */
    public function setMailServerNetAddress($mailServerNetAddress)
    {
        $this->mailServerNetAddress = $mailServerNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMailServerNetAddress()
    {
        $this->mailServerNetAddress = null;
        return $this;
    }

    /**
     * Getter for mailServerProtocol
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol
     */
    public function getMailServerProtocol()
    {
        return $this->mailServerProtocol instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mailServerProtocol;
    }

    /**
     * Setter for mailServerProtocol
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol $mailServerProtocol
     * @return $this
     */
    public function setMailServerProtocol(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol $mailServerProtocol)
    {
        $this->mailServerProtocol = $mailServerProtocol;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMailServerProtocol()
    {
        $this->mailServerProtocol = null;
        return $this;
    }

    /**
     * Getter for defaultDeliveryFromAddress
     *
     * @return string
     */
    public function getDefaultDeliveryFromAddress()
    {
        return $this->defaultDeliveryFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultDeliveryFromAddress;
    }

    /**
     * Setter for defaultDeliveryFromAddress
     *
     * @param string $defaultDeliveryFromAddress
     * @return $this
     */
    public function setDefaultDeliveryFromAddress($defaultDeliveryFromAddress)
    {
        $this->defaultDeliveryFromAddress = $defaultDeliveryFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultDeliveryFromAddress()
    {
        $this->defaultDeliveryFromAddress = null;
        return $this;
    }

    /**
     * Getter for defaultNotificationFromAddress
     *
     * @return string
     */
    public function getDefaultNotificationFromAddress()
    {
        return $this->defaultNotificationFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultNotificationFromAddress;
    }

    /**
     * Setter for defaultNotificationFromAddress
     *
     * @param string $defaultNotificationFromAddress
     * @return $this
     */
    public function setDefaultNotificationFromAddress($defaultNotificationFromAddress)
    {
        $this->defaultNotificationFromAddress = $defaultNotificationFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultNotificationFromAddress()
    {
        $this->defaultNotificationFromAddress = null;
        return $this;
    }

    /**
     * Getter for defaultVoicePortalLockoutFromAddress
     *
     * @return string
     */
    public function getDefaultVoicePortalLockoutFromAddress()
    {
        return $this->defaultVoicePortalLockoutFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultVoicePortalLockoutFromAddress;
    }

    /**
     * Setter for defaultVoicePortalLockoutFromAddress
     *
     * @param string $defaultVoicePortalLockoutFromAddress
     * @return $this
     */
    public function setDefaultVoicePortalLockoutFromAddress($defaultVoicePortalLockoutFromAddress)
    {
        $this->defaultVoicePortalLockoutFromAddress = $defaultVoicePortalLockoutFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultVoicePortalLockoutFromAddress()
    {
        $this->defaultVoicePortalLockoutFromAddress = null;
        return $this;
    }

    /**
     * Getter for useOutgoingMWIOnSMDI
     *
     * @return bool
     */
    public function getUseOutgoingMWIOnSMDI()
    {
        return $this->useOutgoingMWIOnSMDI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useOutgoingMWIOnSMDI;
    }

    /**
     * Setter for useOutgoingMWIOnSMDI
     *
     * @param bool $useOutgoingMWIOnSMDI
     * @return $this
     */
    public function setUseOutgoingMWIOnSMDI($useOutgoingMWIOnSMDI)
    {
        $this->useOutgoingMWIOnSMDI = $useOutgoingMWIOnSMDI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseOutgoingMWIOnSMDI()
    {
        $this->useOutgoingMWIOnSMDI = null;
        return $this;
    }

    /**
     * Getter for mwiDelayInSeconds
     *
     * @return int
     */
    public function getMwiDelayInSeconds()
    {
        return $this->mwiDelayInSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mwiDelayInSeconds;
    }

    /**
     * Setter for mwiDelayInSeconds
     *
     * @param int $mwiDelayInSeconds
     * @return $this
     */
    public function setMwiDelayInSeconds($mwiDelayInSeconds)
    {
        $this->mwiDelayInSeconds = $mwiDelayInSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMwiDelayInSeconds()
    {
        $this->mwiDelayInSeconds = null;
        return $this;
    }

    /**
     * Getter for voicePortalScope
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoicePortalScope
     */
    public function getVoicePortalScope()
    {
        return $this->voicePortalScope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalScope;
    }

    /**
     * Setter for voicePortalScope
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoicePortalScope $voicePortalScope
     * @return $this
     */
    public function setVoicePortalScope(\CWM\BroadWorksConnector\Ocip\Models\SystemVoicePortalScope $voicePortalScope)
    {
        $this->voicePortalScope = $voicePortalScope;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalScope()
    {
        $this->voicePortalScope = null;
        return $this;
    }

    /**
     * Getter for enterpriseVoicePortalLicensed
     *
     * @return bool
     */
    public function getEnterpriseVoicePortalLicensed()
    {
        return $this->enterpriseVoicePortalLicensed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseVoicePortalLicensed;
    }

    /**
     * Setter for enterpriseVoicePortalLicensed
     *
     * @param bool $enterpriseVoicePortalLicensed
     * @return $this
     */
    public function setEnterpriseVoicePortalLicensed($enterpriseVoicePortalLicensed)
    {
        $this->enterpriseVoicePortalLicensed = $enterpriseVoicePortalLicensed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseVoicePortalLicensed()
    {
        $this->enterpriseVoicePortalLicensed = null;
        return $this;
    }

    /**
     * Getter for networkWideMessaging
     *
     * @return bool
     */
    public function getNetworkWideMessaging()
    {
        return $this->networkWideMessaging instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkWideMessaging;
    }

    /**
     * Setter for networkWideMessaging
     *
     * @param bool $networkWideMessaging
     * @return $this
     */
    public function setNetworkWideMessaging($networkWideMessaging)
    {
        $this->networkWideMessaging = $networkWideMessaging;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkWideMessaging()
    {
        $this->networkWideMessaging = null;
        return $this;
    }

    /**
     * Getter for useExternalRouting
     *
     * @return bool
     */
    public function getUseExternalRouting()
    {
        return $this->useExternalRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useExternalRouting;
    }

    /**
     * Setter for useExternalRouting
     *
     * @param bool $useExternalRouting
     * @return $this
     */
    public function setUseExternalRouting($useExternalRouting)
    {
        $this->useExternalRouting = $useExternalRouting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseExternalRouting()
    {
        $this->useExternalRouting = null;
        return $this;
    }

    /**
     * Getter for defaultExternalRoutingAddress
     *
     * @return string
     */
    public function getDefaultExternalRoutingAddress()
    {
        return $this->defaultExternalRoutingAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultExternalRoutingAddress;
    }

    /**
     * Setter for defaultExternalRoutingAddress
     *
     * @param string $defaultExternalRoutingAddress
     * @return $this
     */
    public function setDefaultExternalRoutingAddress($defaultExternalRoutingAddress)
    {
        $this->defaultExternalRoutingAddress = $defaultExternalRoutingAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultExternalRoutingAddress()
    {
        $this->defaultExternalRoutingAddress = null;
        return $this;
    }

    /**
     * Getter for vmOnlySystem
     *
     * @return bool
     */
    public function getVmOnlySystem()
    {
        return $this->vmOnlySystem instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->vmOnlySystem;
    }

    /**
     * Setter for vmOnlySystem
     *
     * @param bool $vmOnlySystem
     * @return $this
     */
    public function setVmOnlySystem($vmOnlySystem)
    {
        $this->vmOnlySystem = $vmOnlySystem;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVmOnlySystem()
    {
        $this->vmOnlySystem = null;
        return $this;
    }

    /**
     * Getter for clientInitiatedMailServerSessionTimeoutMinutes
     *
     * @return int
     */
    public function getClientInitiatedMailServerSessionTimeoutMinutes()
    {
        return $this->clientInitiatedMailServerSessionTimeoutMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->clientInitiatedMailServerSessionTimeoutMinutes;
    }

    /**
     * Setter for clientInitiatedMailServerSessionTimeoutMinutes
     *
     * @param int $clientInitiatedMailServerSessionTimeoutMinutes
     * @return $this
     */
    public function setClientInitiatedMailServerSessionTimeoutMinutes($clientInitiatedMailServerSessionTimeoutMinutes)
    {
        $this->clientInitiatedMailServerSessionTimeoutMinutes = $clientInitiatedMailServerSessionTimeoutMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetClientInitiatedMailServerSessionTimeoutMinutes()
    {
        $this->clientInitiatedMailServerSessionTimeoutMinutes = null;
        return $this;
    }

    /**
     * Getter for recordingAudioFileFormat
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingRecordingAudioFileFormat
     */
    public function getRecordingAudioFileFormat()
    {
        return $this->recordingAudioFileFormat instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordingAudioFileFormat;
    }

    /**
     * Setter for recordingAudioFileFormat
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingRecordingAudioFileFormat $recordingAudioFileFormat
     * @return $this
     */
    public function setRecordingAudioFileFormat(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingRecordingAudioFileFormat $recordingAudioFileFormat)
    {
        $this->recordingAudioFileFormat = $recordingAudioFileFormat;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecordingAudioFileFormat()
    {
        $this->recordingAudioFileFormat = null;
        return $this;
    }

    /**
     * Getter for allowVoicePortalAccessFromVMDepositMenu
     *
     * @return bool
     */
    public function getAllowVoicePortalAccessFromVMDepositMenu()
    {
        return $this->allowVoicePortalAccessFromVMDepositMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowVoicePortalAccessFromVMDepositMenu;
    }

    /**
     * Setter for allowVoicePortalAccessFromVMDepositMenu
     *
     * @param bool $allowVoicePortalAccessFromVMDepositMenu
     * @return $this
     */
    public function setAllowVoicePortalAccessFromVMDepositMenu($allowVoicePortalAccessFromVMDepositMenu)
    {
        $this->allowVoicePortalAccessFromVMDepositMenu = $allowVoicePortalAccessFromVMDepositMenu;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowVoicePortalAccessFromVMDepositMenu()
    {
        $this->allowVoicePortalAccessFromVMDepositMenu = null;
        return $this;
    }

    /**
     * Getter for storageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingStorageMode
     */
    public function getStorageSelection()
    {
        return $this->storageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->storageSelection;
    }

    /**
     * Setter for storageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingStorageMode $storageSelection
     * @return $this
     */
    public function setStorageSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingStorageMode $storageSelection)
    {
        $this->storageSelection = $storageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStorageSelection()
    {
        $this->storageSelection = null;
        return $this;
    }

    /**
     * Getter for vmBucketName
     *
     * @return string
     */
    public function getVmBucketName()
    {
        return $this->vmBucketName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->vmBucketName;
    }

    /**
     * Setter for vmBucketName
     *
     * @param string $vmBucketName
     * @return $this
     */
    public function setVmBucketName($vmBucketName)
    {
        $this->vmBucketName = $vmBucketName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVmBucketName()
    {
        $this->vmBucketName = null;
        return $this;
    }


}

