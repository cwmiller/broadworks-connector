<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityMobileIdentityModifyRequest
 *
 * Modify the settings for one of the user's BroadWorks Mobility mobile Identities.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The request fails when enableAlerting or timeSchedule or holidaySchedule are included in the request when the user's use mobile identity call anchoring controls is disabled.
 *
 *         The description, enableAlerting, alertAgentCalls, alertClickToDialCalls, alertGroupPagingCalls, useMobilityCallingLineID, enableDiversionInhibitor, requireAnswerConfirmation, broadworksCallControl, devicesToRing, includeSharedCallAppearance, includeBroadworksAnywhere, includeExecutiveAssistance, mobileNumberAlerted, enableCallAnchoring, timeSchedule, holidaySchedule and useMobilityConnectedIdentity parameters require an authorization level of User for modification when the BroadWorks Mobility service is on. 
 *         The isPrimary, useSettingLevel, denyCallOrigination, denyCallTerminations, accessDeviceEndpoint, outboundAlternateNumber, enableDirectRouting, markCDRAsEnterpriseGroupCalls and networkTranslationIndex  parameters require an authorization level of Group for modification.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:1689","type":"sequence","children":[{"id":"f7ae3539fd471e995b07dc1bf8836e2d:1713","type":"choice","optional":true}]}]
 */
class UserBroadWorksMobilityMobileIdentityModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName mobileNumber
     * @Type string
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $mobileNumber = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @MinLength 1
     * @MaxLength 40
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName isPrimary
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $isPrimary = null;

    /**
     * @ElementName enableAlerting
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $enableAlerting = null;

    /**
     * @ElementName alertAgentCalls
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $alertAgentCalls = null;

    /**
     * @ElementName alertClickToDialCalls
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $alertClickToDialCalls = null;

    /**
     * @ElementName alertGroupPagingCalls
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $alertGroupPagingCalls = null;

    /**
     * @ElementName useMobilityCallingLineID
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $useMobilityCallingLineID = null;

    /**
     * @ElementName enableDiversionInhibitor
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $enableDiversionInhibitor = null;

    /**
     * @ElementName requireAnswerConfirmation
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $requireAnswerConfirmation = null;

    /**
     * @ElementName broadworksCallControl
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $broadworksCallControl = null;

    /**
     * @ElementName useSettingLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserSettingLevel
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserSettingLevel|null
     */
    private $useSettingLevel = null;

    /**
     * @ElementName denyCallOriginations
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $denyCallOriginations = null;

    /**
     * @ElementName denyCallTerminations
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $denyCallTerminations = null;

    /**
     * @ElementName devicesToRing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing|null
     */
    private $devicesToRing = null;

    /**
     * @ElementName includeSharedCallAppearance
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $includeSharedCallAppearance = null;

    /**
     * @ElementName includeBroadworksAnywhere
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $includeBroadworksAnywhere = null;

    /**
     * @ElementName includeExecutiveAssistant
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $includeExecutiveAssistant = null;

    /**
     * @ElementName mobileNumbersAlerted
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityAlertingMobileNumberReplacementList
     * @Nillable
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityAlertingMobileNumberReplacementList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $mobileNumbersAlerted = null;

    /**
     * @ElementName enableCallAnchoring
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $enableCallAnchoring = null;

    /**
     * @ElementName timeSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey
     * @Nillable
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey
     * @Nillable
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holidaySchedule = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify
     * @Nillable
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1713
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName outboundAlternateNumber
     * @Type string
     * @Nillable
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1713
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $outboundAlternateNumber = null;

    /**
     * @ElementName enableDirectRouting
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $enableDirectRouting = null;

    /**
     * @ElementName markCDRAsEnterpriseGroupCalls
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $markCDRAsEnterpriseGroupCalls = null;

    /**
     * @ElementName useMobilityConnectedIdentity
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @var bool|null
     */
    private $useMobilityConnectedIdentity = null;

    /**
     * @ElementName networkTranslationIndex
     * @Type string
     * @Nillable
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1689
     * @MinLength 1
     * @MaxLength 128
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $networkTranslationIndex = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for mobileNumber
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileNumber;
    }

    /**
     * Setter for mobileNumber
     *
     * @param string $mobileNumber
     * @return $this
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileNumber()
    {
        $this->mobileNumber = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for isPrimary
     *
     * @return bool
     */
    public function getIsPrimary()
    {
        return $this->isPrimary instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isPrimary;
    }

    /**
     * Setter for isPrimary
     *
     * @param bool $isPrimary
     * @return $this
     */
    public function setIsPrimary($isPrimary)
    {
        $this->isPrimary = $isPrimary;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsPrimary()
    {
        $this->isPrimary = null;
        return $this;
    }

    /**
     * Getter for enableAlerting
     *
     * @return bool
     */
    public function getEnableAlerting()
    {
        return $this->enableAlerting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAlerting;
    }

    /**
     * Setter for enableAlerting
     *
     * @param bool $enableAlerting
     * @return $this
     */
    public function setEnableAlerting($enableAlerting)
    {
        $this->enableAlerting = $enableAlerting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAlerting()
    {
        $this->enableAlerting = null;
        return $this;
    }

    /**
     * Getter for alertAgentCalls
     *
     * @return bool
     */
    public function getAlertAgentCalls()
    {
        return $this->alertAgentCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertAgentCalls;
    }

    /**
     * Setter for alertAgentCalls
     *
     * @param bool $alertAgentCalls
     * @return $this
     */
    public function setAlertAgentCalls($alertAgentCalls)
    {
        $this->alertAgentCalls = $alertAgentCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertAgentCalls()
    {
        $this->alertAgentCalls = null;
        return $this;
    }

    /**
     * Getter for alertClickToDialCalls
     *
     * @return bool
     */
    public function getAlertClickToDialCalls()
    {
        return $this->alertClickToDialCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertClickToDialCalls;
    }

    /**
     * Setter for alertClickToDialCalls
     *
     * @param bool $alertClickToDialCalls
     * @return $this
     */
    public function setAlertClickToDialCalls($alertClickToDialCalls)
    {
        $this->alertClickToDialCalls = $alertClickToDialCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertClickToDialCalls()
    {
        $this->alertClickToDialCalls = null;
        return $this;
    }

    /**
     * Getter for alertGroupPagingCalls
     *
     * @return bool
     */
    public function getAlertGroupPagingCalls()
    {
        return $this->alertGroupPagingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertGroupPagingCalls;
    }

    /**
     * Setter for alertGroupPagingCalls
     *
     * @param bool $alertGroupPagingCalls
     * @return $this
     */
    public function setAlertGroupPagingCalls($alertGroupPagingCalls)
    {
        $this->alertGroupPagingCalls = $alertGroupPagingCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertGroupPagingCalls()
    {
        $this->alertGroupPagingCalls = null;
        return $this;
    }

    /**
     * Getter for useMobilityCallingLineID
     *
     * @return bool
     */
    public function getUseMobilityCallingLineID()
    {
        return $this->useMobilityCallingLineID instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMobilityCallingLineID;
    }

    /**
     * Setter for useMobilityCallingLineID
     *
     * @param bool $useMobilityCallingLineID
     * @return $this
     */
    public function setUseMobilityCallingLineID($useMobilityCallingLineID)
    {
        $this->useMobilityCallingLineID = $useMobilityCallingLineID;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMobilityCallingLineID()
    {
        $this->useMobilityCallingLineID = null;
        return $this;
    }

    /**
     * Getter for enableDiversionInhibitor
     *
     * @return bool
     */
    public function getEnableDiversionInhibitor()
    {
        return $this->enableDiversionInhibitor instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableDiversionInhibitor;
    }

    /**
     * Setter for enableDiversionInhibitor
     *
     * @param bool $enableDiversionInhibitor
     * @return $this
     */
    public function setEnableDiversionInhibitor($enableDiversionInhibitor)
    {
        $this->enableDiversionInhibitor = $enableDiversionInhibitor;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableDiversionInhibitor()
    {
        $this->enableDiversionInhibitor = null;
        return $this;
    }

    /**
     * Getter for requireAnswerConfirmation
     *
     * @return bool
     */
    public function getRequireAnswerConfirmation()
    {
        return $this->requireAnswerConfirmation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requireAnswerConfirmation;
    }

    /**
     * Setter for requireAnswerConfirmation
     *
     * @param bool $requireAnswerConfirmation
     * @return $this
     */
    public function setRequireAnswerConfirmation($requireAnswerConfirmation)
    {
        $this->requireAnswerConfirmation = $requireAnswerConfirmation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequireAnswerConfirmation()
    {
        $this->requireAnswerConfirmation = null;
        return $this;
    }

    /**
     * Getter for broadworksCallControl
     *
     * @return bool
     */
    public function getBroadworksCallControl()
    {
        return $this->broadworksCallControl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->broadworksCallControl;
    }

    /**
     * Setter for broadworksCallControl
     *
     * @param bool $broadworksCallControl
     * @return $this
     */
    public function setBroadworksCallControl($broadworksCallControl)
    {
        $this->broadworksCallControl = $broadworksCallControl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBroadworksCallControl()
    {
        $this->broadworksCallControl = null;
        return $this;
    }

    /**
     * Getter for useSettingLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserSettingLevel
     */
    public function getUseSettingLevel()
    {
        return $this->useSettingLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSettingLevel;
    }

    /**
     * Setter for useSettingLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserSettingLevel $useSettingLevel
     * @return $this
     */
    public function setUseSettingLevel(\CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserSettingLevel $useSettingLevel)
    {
        $this->useSettingLevel = $useSettingLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSettingLevel()
    {
        $this->useSettingLevel = null;
        return $this;
    }

    /**
     * Getter for denyCallOriginations
     *
     * @return bool
     */
    public function getDenyCallOriginations()
    {
        return $this->denyCallOriginations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->denyCallOriginations;
    }

    /**
     * Setter for denyCallOriginations
     *
     * @param bool $denyCallOriginations
     * @return $this
     */
    public function setDenyCallOriginations($denyCallOriginations)
    {
        $this->denyCallOriginations = $denyCallOriginations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDenyCallOriginations()
    {
        $this->denyCallOriginations = null;
        return $this;
    }

    /**
     * Getter for denyCallTerminations
     *
     * @return bool
     */
    public function getDenyCallTerminations()
    {
        return $this->denyCallTerminations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->denyCallTerminations;
    }

    /**
     * Setter for denyCallTerminations
     *
     * @param bool $denyCallTerminations
     * @return $this
     */
    public function setDenyCallTerminations($denyCallTerminations)
    {
        $this->denyCallTerminations = $denyCallTerminations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDenyCallTerminations()
    {
        $this->denyCallTerminations = null;
        return $this;
    }

    /**
     * Getter for devicesToRing
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing
     */
    public function getDevicesToRing()
    {
        return $this->devicesToRing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->devicesToRing;
    }

    /**
     * Setter for devicesToRing
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing $devicesToRing
     * @return $this
     */
    public function setDevicesToRing(\CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing $devicesToRing)
    {
        $this->devicesToRing = $devicesToRing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDevicesToRing()
    {
        $this->devicesToRing = null;
        return $this;
    }

    /**
     * Getter for includeSharedCallAppearance
     *
     * @return bool
     */
    public function getIncludeSharedCallAppearance()
    {
        return $this->includeSharedCallAppearance instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeSharedCallAppearance;
    }

    /**
     * Setter for includeSharedCallAppearance
     *
     * @param bool $includeSharedCallAppearance
     * @return $this
     */
    public function setIncludeSharedCallAppearance($includeSharedCallAppearance)
    {
        $this->includeSharedCallAppearance = $includeSharedCallAppearance;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeSharedCallAppearance()
    {
        $this->includeSharedCallAppearance = null;
        return $this;
    }

    /**
     * Getter for includeBroadworksAnywhere
     *
     * @return bool
     */
    public function getIncludeBroadworksAnywhere()
    {
        return $this->includeBroadworksAnywhere instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeBroadworksAnywhere;
    }

    /**
     * Setter for includeBroadworksAnywhere
     *
     * @param bool $includeBroadworksAnywhere
     * @return $this
     */
    public function setIncludeBroadworksAnywhere($includeBroadworksAnywhere)
    {
        $this->includeBroadworksAnywhere = $includeBroadworksAnywhere;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeBroadworksAnywhere()
    {
        $this->includeBroadworksAnywhere = null;
        return $this;
    }

    /**
     * Getter for includeExecutiveAssistant
     *
     * @return bool
     */
    public function getIncludeExecutiveAssistant()
    {
        return $this->includeExecutiveAssistant instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeExecutiveAssistant;
    }

    /**
     * Setter for includeExecutiveAssistant
     *
     * @param bool $includeExecutiveAssistant
     * @return $this
     */
    public function setIncludeExecutiveAssistant($includeExecutiveAssistant)
    {
        $this->includeExecutiveAssistant = $includeExecutiveAssistant;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeExecutiveAssistant()
    {
        $this->includeExecutiveAssistant = null;
        return $this;
    }

    /**
     * Getter for mobileNumbersAlerted
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityAlertingMobileNumberReplacementList|null
     */
    public function getMobileNumbersAlerted()
    {
        return $this->mobileNumbersAlerted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileNumbersAlerted;
    }

    /**
     * Setter for mobileNumbersAlerted
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityAlertingMobileNumberReplacementList|null $mobileNumbersAlerted
     * @return $this
     */
    public function setMobileNumbersAlerted(\CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityAlertingMobileNumberReplacementList $mobileNumbersAlerted = null)
    {
        if ($mobileNumbersAlerted === null) {
            $this->mobileNumbersAlerted = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->mobileNumbersAlerted = $mobileNumbersAlerted;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileNumbersAlerted()
    {
        $this->mobileNumbersAlerted = null;
        return $this;
    }

    /**
     * Getter for enableCallAnchoring
     *
     * @return bool
     */
    public function getEnableCallAnchoring()
    {
        return $this->enableCallAnchoring instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCallAnchoring;
    }

    /**
     * Setter for enableCallAnchoring
     *
     * @param bool $enableCallAnchoring
     * @return $this
     */
    public function setEnableCallAnchoring($enableCallAnchoring)
    {
        $this->enableCallAnchoring = $enableCallAnchoring;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCallAnchoring()
    {
        $this->enableCallAnchoring = null;
        return $this;
    }

    /**
     * Getter for timeSchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null $timeSchedule
     * @return $this
     */
    public function setTimeSchedule(\CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey $timeSchedule = null)
    {
        if ($timeSchedule === null) {
            $this->timeSchedule = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeSchedule = $timeSchedule;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeSchedule()
    {
        $this->timeSchedule = null;
        return $this;
    }

    /**
     * Getter for holidaySchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule(\CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey $holidaySchedule = null)
    {
        if ($holidaySchedule === null) {
            $this->holidaySchedule = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holidaySchedule = $holidaySchedule;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHolidaySchedule()
    {
        $this->holidaySchedule = null;
        return $this;
    }

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify $accessDeviceEndpoint = null)
    {
        if ($accessDeviceEndpoint === null) {
            $this->accessDeviceEndpoint = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceEndpoint()
    {
        $this->accessDeviceEndpoint = null;
        return $this;
    }

    /**
     * Getter for outboundAlternateNumber
     *
     * @return string|null
     */
    public function getOutboundAlternateNumber()
    {
        return $this->outboundAlternateNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outboundAlternateNumber;
    }

    /**
     * Setter for outboundAlternateNumber
     *
     * @param string|null $outboundAlternateNumber
     * @return $this
     */
    public function setOutboundAlternateNumber($outboundAlternateNumber = null)
    {
        if ($outboundAlternateNumber === null) {
            $this->outboundAlternateNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->outboundAlternateNumber = $outboundAlternateNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutboundAlternateNumber()
    {
        $this->outboundAlternateNumber = null;
        return $this;
    }

    /**
     * Getter for enableDirectRouting
     *
     * @return bool
     */
    public function getEnableDirectRouting()
    {
        return $this->enableDirectRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableDirectRouting;
    }

    /**
     * Setter for enableDirectRouting
     *
     * @param bool $enableDirectRouting
     * @return $this
     */
    public function setEnableDirectRouting($enableDirectRouting)
    {
        $this->enableDirectRouting = $enableDirectRouting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableDirectRouting()
    {
        $this->enableDirectRouting = null;
        return $this;
    }

    /**
     * Getter for markCDRAsEnterpriseGroupCalls
     *
     * @return bool
     */
    public function getMarkCDRAsEnterpriseGroupCalls()
    {
        return $this->markCDRAsEnterpriseGroupCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->markCDRAsEnterpriseGroupCalls;
    }

    /**
     * Setter for markCDRAsEnterpriseGroupCalls
     *
     * @param bool $markCDRAsEnterpriseGroupCalls
     * @return $this
     */
    public function setMarkCDRAsEnterpriseGroupCalls($markCDRAsEnterpriseGroupCalls)
    {
        $this->markCDRAsEnterpriseGroupCalls = $markCDRAsEnterpriseGroupCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMarkCDRAsEnterpriseGroupCalls()
    {
        $this->markCDRAsEnterpriseGroupCalls = null;
        return $this;
    }

    /**
     * Getter for useMobilityConnectedIdentity
     *
     * @return bool
     */
    public function getUseMobilityConnectedIdentity()
    {
        return $this->useMobilityConnectedIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMobilityConnectedIdentity;
    }

    /**
     * Setter for useMobilityConnectedIdentity
     *
     * @param bool $useMobilityConnectedIdentity
     * @return $this
     */
    public function setUseMobilityConnectedIdentity($useMobilityConnectedIdentity)
    {
        $this->useMobilityConnectedIdentity = $useMobilityConnectedIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMobilityConnectedIdentity()
    {
        $this->useMobilityConnectedIdentity = null;
        return $this;
    }

    /**
     * Getter for networkTranslationIndex
     *
     * @return string|null
     */
    public function getNetworkTranslationIndex()
    {
        return $this->networkTranslationIndex instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkTranslationIndex;
    }

    /**
     * Setter for networkTranslationIndex
     *
     * @param string|null $networkTranslationIndex
     * @return $this
     */
    public function setNetworkTranslationIndex($networkTranslationIndex = null)
    {
        if ($networkTranslationIndex === null) {
            $this->networkTranslationIndex = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->networkTranslationIndex = $networkTranslationIndex;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkTranslationIndex()
    {
        $this->networkTranslationIndex = null;
        return $this;
    }


}

