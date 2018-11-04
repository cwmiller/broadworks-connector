<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyRequest16
 *
 * Modify the system level data associated with Voice Messaging.
 *         The response is either a SuccessResponse or an ErrorResponse.
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
 *            vmOnlySystem, element is ignored in Amplify data mode.
 *            clientInitiatedMailServerSessionTimeoutMinutes
 *            recordingAudioFileFormat
 *            allowVoicePortalAccessFromVMDepositMenu
 *                       
 *         The following elements are only used in Amplify data mode and ignored in
 * AS and XS data mode:
 *            storageSelection
 *            vmBucketName
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemVoiceMessagingGroupModifyRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName realDeleteForImap
     * @var bool|null
     */
    private $realDeleteForImap = null;

    /**
     * @ElementName useDnInMailBody
     * @var bool|null
     */
    private $useDnInMailBody = null;

    /**
     * @ElementName useShortSubjectLine
     * @var bool|null
     */
    private $useShortSubjectLine = null;

    /**
     * @ElementName maxMessageLengthMinutes
     * @var int|null
     */
    private $maxMessageLengthMinutes = null;

    /**
     * @ElementName maxMailboxLengthMinutes
     * @var int|null
     */
    private $maxMailboxLengthMinutes = null;

    /**
     * @ElementName doesMessageAge
     * @var bool|null
     */
    private $doesMessageAge = null;

    /**
     * @ElementName holdPeriodDays
     * @var int|null
     */
    private $holdPeriodDays = null;

    /**
     * @ElementName mailServerNetAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $mailServerNetAddress = null;

    /**
     * @ElementName mailServerProtocol
     * @var string|null
     */
    private $mailServerProtocol = null;

    /**
     * @ElementName defaultDeliveryFromAddress
     * @var string|null
     */
    private $defaultDeliveryFromAddress = null;

    /**
     * @ElementName defaultNotificationFromAddress
     * @var string|null
     */
    private $defaultNotificationFromAddress = null;

    /**
     * @ElementName defaultVoicePortalLockoutFromAddress
     * @var string|null
     */
    private $defaultVoicePortalLockoutFromAddress = null;

    /**
     * @ElementName useOutgoingMWIOnSMDI
     * @var bool|null
     */
    private $useOutgoingMWIOnSMDI = null;

    /**
     * @ElementName mwiDelayInSeconds
     * @var int|null
     */
    private $mwiDelayInSeconds = null;

    /**
     * @ElementName voicePortalScope
     * @var string|null
     */
    private $voicePortalScope = null;

    /**
     * @ElementName networkWideMessaging
     * @var bool|null
     */
    private $networkWideMessaging = null;

    /**
     * @ElementName useExternalRouting
     * @var bool|null
     */
    private $useExternalRouting = null;

    /**
     * @ElementName defaultExternalRoutingAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultExternalRoutingAddress = null;

    /**
     * @ElementName vmOnlySystem
     * @var bool|null
     */
    private $vmOnlySystem = null;

    /**
     * @ElementName clientInitiatedMailServerSessionTimeoutMinutes
     * @var int|null
     */
    private $clientInitiatedMailServerSessionTimeoutMinutes = null;

    /**
     * @ElementName recordingAudioFileFormat
     * @var string|null
     */
    private $recordingAudioFileFormat = null;

    /**
     * @ElementName allowVoicePortalAccessFromVMDepositMenu
     * @var bool|null
     */
    private $allowVoicePortalAccessFromVMDepositMenu = null;

    /**
     * @ElementName storageSelection
     * @var string|null
     */
    private $storageSelection = null;

    /**
     * @ElementName vmBucketName
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $vmBucketName = null;

    /**
     * Getter for realDeleteForImap
     *
     * @ElementName realDeleteForImap
     * @return bool|null
     */
    public function getRealDeleteForImap()
    {
        return $this->realDeleteForImap;
    }

    /**
     * Setter for realDeleteForImap
     *
     * @ElementName realDeleteForImap
     * @param bool|null $realDeleteForImap
     * @return $this
     */
    public function setRealDeleteForImap($realDeleteForImap)
    {
        $this->realDeleteForImap = $realDeleteForImap;
        return $this;
    }

    /**
     * Getter for useDnInMailBody
     *
     * @ElementName useDnInMailBody
     * @return bool|null
     */
    public function getUseDnInMailBody()
    {
        return $this->useDnInMailBody;
    }

    /**
     * Setter for useDnInMailBody
     *
     * @ElementName useDnInMailBody
     * @param bool|null $useDnInMailBody
     * @return $this
     */
    public function setUseDnInMailBody($useDnInMailBody)
    {
        $this->useDnInMailBody = $useDnInMailBody;
        return $this;
    }

    /**
     * Getter for useShortSubjectLine
     *
     * @ElementName useShortSubjectLine
     * @return bool|null
     */
    public function getUseShortSubjectLine()
    {
        return $this->useShortSubjectLine;
    }

    /**
     * Setter for useShortSubjectLine
     *
     * @ElementName useShortSubjectLine
     * @param bool|null $useShortSubjectLine
     * @return $this
     */
    public function setUseShortSubjectLine($useShortSubjectLine)
    {
        $this->useShortSubjectLine = $useShortSubjectLine;
        return $this;
    }

    /**
     * Getter for maxMessageLengthMinutes
     *
     * @ElementName maxMessageLengthMinutes
     * @return int|null
     */
    public function getMaxMessageLengthMinutes()
    {
        return $this->maxMessageLengthMinutes;
    }

    /**
     * Setter for maxMessageLengthMinutes
     *
     * @ElementName maxMessageLengthMinutes
     * @param int|null $maxMessageLengthMinutes
     * @return $this
     */
    public function setMaxMessageLengthMinutes($maxMessageLengthMinutes)
    {
        $this->maxMessageLengthMinutes = $maxMessageLengthMinutes;
        return $this;
    }

    /**
     * Getter for maxMailboxLengthMinutes
     *
     * @ElementName maxMailboxLengthMinutes
     * @return int|null
     */
    public function getMaxMailboxLengthMinutes()
    {
        return $this->maxMailboxLengthMinutes;
    }

    /**
     * Setter for maxMailboxLengthMinutes
     *
     * @ElementName maxMailboxLengthMinutes
     * @param int|null $maxMailboxLengthMinutes
     * @return $this
     */
    public function setMaxMailboxLengthMinutes($maxMailboxLengthMinutes)
    {
        $this->maxMailboxLengthMinutes = $maxMailboxLengthMinutes;
        return $this;
    }

    /**
     * Getter for doesMessageAge
     *
     * @ElementName doesMessageAge
     * @return bool|null
     */
    public function getDoesMessageAge()
    {
        return $this->doesMessageAge;
    }

    /**
     * Setter for doesMessageAge
     *
     * @ElementName doesMessageAge
     * @param bool|null $doesMessageAge
     * @return $this
     */
    public function setDoesMessageAge($doesMessageAge)
    {
        $this->doesMessageAge = $doesMessageAge;
        return $this;
    }

    /**
     * Getter for holdPeriodDays
     *
     * @ElementName holdPeriodDays
     * @return int|null
     */
    public function getHoldPeriodDays()
    {
        return $this->holdPeriodDays;
    }

    /**
     * Setter for holdPeriodDays
     *
     * @ElementName holdPeriodDays
     * @param int|null $holdPeriodDays
     * @return $this
     */
    public function setHoldPeriodDays($holdPeriodDays)
    {
        $this->holdPeriodDays = $holdPeriodDays;
        return $this;
    }

    /**
     * Getter for mailServerNetAddress
     *
     * @ElementName mailServerNetAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMailServerNetAddress()
    {
        return $this->mailServerNetAddress;
    }

    /**
     * Setter for mailServerNetAddress
     *
     * @ElementName mailServerNetAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $mailServerNetAddress
     * @return $this
     */
    public function setMailServerNetAddress($mailServerNetAddress)
    {
        $this->mailServerNetAddress = $mailServerNetAddress;
        return $this;
    }

    /**
     * Getter for mailServerProtocol
     *
     * @ElementName mailServerProtocol
     * @return string|null
     */
    public function getMailServerProtocol()
    {
        return $this->mailServerProtocol;
    }

    /**
     * Setter for mailServerProtocol
     *
     * @ElementName mailServerProtocol
     * @param string|null $mailServerProtocol
     * @return $this
     */
    public function setMailServerProtocol($mailServerProtocol)
    {
        $this->mailServerProtocol = $mailServerProtocol;
        return $this;
    }

    /**
     * Getter for defaultDeliveryFromAddress
     *
     * @ElementName defaultDeliveryFromAddress
     * @return string|null
     */
    public function getDefaultDeliveryFromAddress()
    {
        return $this->defaultDeliveryFromAddress;
    }

    /**
     * Setter for defaultDeliveryFromAddress
     *
     * @ElementName defaultDeliveryFromAddress
     * @param string|null $defaultDeliveryFromAddress
     * @return $this
     */
    public function setDefaultDeliveryFromAddress($defaultDeliveryFromAddress)
    {
        $this->defaultDeliveryFromAddress = $defaultDeliveryFromAddress;
        return $this;
    }

    /**
     * Getter for defaultNotificationFromAddress
     *
     * @ElementName defaultNotificationFromAddress
     * @return string|null
     */
    public function getDefaultNotificationFromAddress()
    {
        return $this->defaultNotificationFromAddress;
    }

    /**
     * Setter for defaultNotificationFromAddress
     *
     * @ElementName defaultNotificationFromAddress
     * @param string|null $defaultNotificationFromAddress
     * @return $this
     */
    public function setDefaultNotificationFromAddress($defaultNotificationFromAddress)
    {
        $this->defaultNotificationFromAddress = $defaultNotificationFromAddress;
        return $this;
    }

    /**
     * Getter for defaultVoicePortalLockoutFromAddress
     *
     * @ElementName defaultVoicePortalLockoutFromAddress
     * @return string|null
     */
    public function getDefaultVoicePortalLockoutFromAddress()
    {
        return $this->defaultVoicePortalLockoutFromAddress;
    }

    /**
     * Setter for defaultVoicePortalLockoutFromAddress
     *
     * @ElementName defaultVoicePortalLockoutFromAddress
     * @param string|null $defaultVoicePortalLockoutFromAddress
     * @return $this
     */
    public function setDefaultVoicePortalLockoutFromAddress($defaultVoicePortalLockoutFromAddress)
    {
        $this->defaultVoicePortalLockoutFromAddress = $defaultVoicePortalLockoutFromAddress;
        return $this;
    }

    /**
     * Getter for useOutgoingMWIOnSMDI
     *
     * @ElementName useOutgoingMWIOnSMDI
     * @return bool|null
     */
    public function getUseOutgoingMWIOnSMDI()
    {
        return $this->useOutgoingMWIOnSMDI;
    }

    /**
     * Setter for useOutgoingMWIOnSMDI
     *
     * @ElementName useOutgoingMWIOnSMDI
     * @param bool|null $useOutgoingMWIOnSMDI
     * @return $this
     */
    public function setUseOutgoingMWIOnSMDI($useOutgoingMWIOnSMDI)
    {
        $this->useOutgoingMWIOnSMDI = $useOutgoingMWIOnSMDI;
        return $this;
    }

    /**
     * Getter for mwiDelayInSeconds
     *
     * @ElementName mwiDelayInSeconds
     * @return int|null
     */
    public function getMwiDelayInSeconds()
    {
        return $this->mwiDelayInSeconds;
    }

    /**
     * Setter for mwiDelayInSeconds
     *
     * @ElementName mwiDelayInSeconds
     * @param int|null $mwiDelayInSeconds
     * @return $this
     */
    public function setMwiDelayInSeconds($mwiDelayInSeconds)
    {
        $this->mwiDelayInSeconds = $mwiDelayInSeconds;
        return $this;
    }

    /**
     * Getter for voicePortalScope
     *
     * @ElementName voicePortalScope
     * @return string|null
     */
    public function getVoicePortalScope()
    {
        return $this->voicePortalScope;
    }

    /**
     * Setter for voicePortalScope
     *
     * @ElementName voicePortalScope
     * @param string|null $voicePortalScope
     * @return $this
     */
    public function setVoicePortalScope($voicePortalScope)
    {
        $this->voicePortalScope = $voicePortalScope;
        return $this;
    }

    /**
     * Getter for networkWideMessaging
     *
     * @ElementName networkWideMessaging
     * @return bool|null
     */
    public function getNetworkWideMessaging()
    {
        return $this->networkWideMessaging;
    }

    /**
     * Setter for networkWideMessaging
     *
     * @ElementName networkWideMessaging
     * @param bool|null $networkWideMessaging
     * @return $this
     */
    public function setNetworkWideMessaging($networkWideMessaging)
    {
        $this->networkWideMessaging = $networkWideMessaging;
        return $this;
    }

    /**
     * Getter for useExternalRouting
     *
     * @ElementName useExternalRouting
     * @return bool|null
     */
    public function getUseExternalRouting()
    {
        return $this->useExternalRouting;
    }

    /**
     * Setter for useExternalRouting
     *
     * @ElementName useExternalRouting
     * @param bool|null $useExternalRouting
     * @return $this
     */
    public function setUseExternalRouting($useExternalRouting)
    {
        $this->useExternalRouting = $useExternalRouting;
        return $this;
    }

    /**
     * Getter for defaultExternalRoutingAddress
     *
     * @ElementName defaultExternalRoutingAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDefaultExternalRoutingAddress()
    {
        return $this->defaultExternalRoutingAddress;
    }

    /**
     * Setter for defaultExternalRoutingAddress
     *
     * @ElementName defaultExternalRoutingAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $defaultExternalRoutingAddress
     * @return $this
     */
    public function setDefaultExternalRoutingAddress($defaultExternalRoutingAddress)
    {
        $this->defaultExternalRoutingAddress = $defaultExternalRoutingAddress;
        return $this;
    }

    /**
     * Getter for vmOnlySystem
     *
     * @ElementName vmOnlySystem
     * @return bool|null
     */
    public function getVmOnlySystem()
    {
        return $this->vmOnlySystem;
    }

    /**
     * Setter for vmOnlySystem
     *
     * @ElementName vmOnlySystem
     * @param bool|null $vmOnlySystem
     * @return $this
     */
    public function setVmOnlySystem($vmOnlySystem)
    {
        $this->vmOnlySystem = $vmOnlySystem;
        return $this;
    }

    /**
     * Getter for clientInitiatedMailServerSessionTimeoutMinutes
     *
     * @ElementName clientInitiatedMailServerSessionTimeoutMinutes
     * @return int|null
     */
    public function getClientInitiatedMailServerSessionTimeoutMinutes()
    {
        return $this->clientInitiatedMailServerSessionTimeoutMinutes;
    }

    /**
     * Setter for clientInitiatedMailServerSessionTimeoutMinutes
     *
     * @ElementName clientInitiatedMailServerSessionTimeoutMinutes
     * @param int|null $clientInitiatedMailServerSessionTimeoutMinutes
     * @return $this
     */
    public function setClientInitiatedMailServerSessionTimeoutMinutes($clientInitiatedMailServerSessionTimeoutMinutes)
    {
        $this->clientInitiatedMailServerSessionTimeoutMinutes = $clientInitiatedMailServerSessionTimeoutMinutes;
        return $this;
    }

    /**
     * Getter for recordingAudioFileFormat
     *
     * @ElementName recordingAudioFileFormat
     * @return string|null
     */
    public function getRecordingAudioFileFormat()
    {
        return $this->recordingAudioFileFormat;
    }

    /**
     * Setter for recordingAudioFileFormat
     *
     * @ElementName recordingAudioFileFormat
     * @param string|null $recordingAudioFileFormat
     * @return $this
     */
    public function setRecordingAudioFileFormat($recordingAudioFileFormat)
    {
        $this->recordingAudioFileFormat = $recordingAudioFileFormat;
        return $this;
    }

    /**
     * Getter for allowVoicePortalAccessFromVMDepositMenu
     *
     * @ElementName allowVoicePortalAccessFromVMDepositMenu
     * @return bool|null
     */
    public function getAllowVoicePortalAccessFromVMDepositMenu()
    {
        return $this->allowVoicePortalAccessFromVMDepositMenu;
    }

    /**
     * Setter for allowVoicePortalAccessFromVMDepositMenu
     *
     * @ElementName allowVoicePortalAccessFromVMDepositMenu
     * @param bool|null $allowVoicePortalAccessFromVMDepositMenu
     * @return $this
     */
    public function setAllowVoicePortalAccessFromVMDepositMenu($allowVoicePortalAccessFromVMDepositMenu)
    {
        $this->allowVoicePortalAccessFromVMDepositMenu = $allowVoicePortalAccessFromVMDepositMenu;
        return $this;
    }

    /**
     * Getter for storageSelection
     *
     * @ElementName storageSelection
     * @return string|null
     */
    public function getStorageSelection()
    {
        return $this->storageSelection;
    }

    /**
     * Setter for storageSelection
     *
     * @ElementName storageSelection
     * @param string|null $storageSelection
     * @return $this
     */
    public function setStorageSelection($storageSelection)
    {
        $this->storageSelection = $storageSelection;
        return $this;
    }

    /**
     * Getter for vmBucketName
     *
     * @ElementName vmBucketName
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getVmBucketName()
    {
        return $this->vmBucketName;
    }

    /**
     * Setter for vmBucketName
     *
     * @ElementName vmBucketName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $vmBucketName
     * @return $this
     */
    public function setVmBucketName($vmBucketName)
    {
        $this->vmBucketName = $vmBucketName;
        return $this;
    }


}

