<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadworksMobilityAddMobileIdentityUsingSharedCallAppearanceRequest22
 *
 * Adding a new mobile identity using the Share Call Appearance.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *           
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           useHotline, use value false in XS data mode
 *           hotlineContact
 *   
 *         The request fails when the devicesToRing is set to Mobile and the mobileNumberAlerted list is empty.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:1483","type":"sequence"}]
 */
class UserBroadworksMobilityAddMobileIdentityUsingSharedCallAppearanceRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointKey
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointKey|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName mobileNumber
     * @Type string
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $mobileNumber = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName isPrimary
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $isPrimary = null;

    /**
     * @ElementName enableAlerting
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $enableAlerting = null;

    /**
     * @ElementName alertAgentCalls
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $alertAgentCalls = null;

    /**
     * @ElementName alertClickToDialCalls
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $alertClickToDialCalls = null;

    /**
     * @ElementName alertGroupPagingCalls
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $alertGroupPagingCalls = null;

    /**
     * @ElementName useMobilityCallingLineID
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $useMobilityCallingLineID = null;

    /**
     * @ElementName enableDiversionInhibitor
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $enableDiversionInhibitor = null;

    /**
     * @ElementName requireAnswerConfirmation
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $requireAnswerConfirmation = null;

    /**
     * @ElementName broadworksCallControl
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $broadworksCallControl = null;

    /**
     * @ElementName useSettingLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserSettingLevel
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserSettingLevel|null
     */
    private $useSettingLevel = null;

    /**
     * @ElementName denyCallOriginations
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $denyCallOriginations = null;

    /**
     * @ElementName denyCallTerminations
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $denyCallTerminations = null;

    /**
     * @ElementName devicesToRing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing|null
     */
    private $devicesToRing = null;

    /**
     * @ElementName includeSharedCallAppearance
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $includeSharedCallAppearance = null;

    /**
     * @ElementName includeBroadworksAnywhere
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $includeBroadworksAnywhere = null;

    /**
     * @ElementName includeExecutiveAssistant
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $includeExecutiveAssistant = null;

    /**
     * @ElementName mobileNumberAlerted
     * @Type string
     * @Array
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    private $mobileNumberAlerted = array(
        
    );

    /**
     * @ElementName enableCallAnchoring
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $enableCallAnchoring = null;

    /**
     * @ElementName timeSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null
     */
    private $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null
     */
    private $holidaySchedule = null;

    /**
     * @ElementName enableDirectRouting
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $enableDirectRouting = null;

    /**
     * @ElementName markCDRAsEnterpriseGroupCalls
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $markCDRAsEnterpriseGroupCalls = null;

    /**
     * @ElementName useHotline
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @var bool|null
     */
    private $useHotline = null;

    /**
     * @ElementName hotlineContact
     * @Type string
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1483
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $hotlineContact = null;

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
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointKey
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointKey $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointKey $accessDeviceEndpoint)
    {
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
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
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * Getter for mobileNumberAlerted
     *
     * @return string[]
     */
    public function getMobileNumberAlerted()
    {
        return $this->mobileNumberAlerted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileNumberAlerted;
    }

    /**
     * Setter for mobileNumberAlerted
     *
     * @param string[] $mobileNumberAlerted
     * @return $this
     */
    public function setMobileNumberAlerted(array $mobileNumberAlerted)
    {
        $this->mobileNumberAlerted = $mobileNumberAlerted;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileNumberAlerted()
    {
        $this->mobileNumberAlerted = null;
        return $this;
    }

    /**
     * Adder for mobileNumberAlerted
     *
     * @param string $mobileNumberAlerted
     * @return $this
     */
    public function addMobileNumberAlerted(string $mobileNumberAlerted)
    {
        $this->mobileNumberAlerted[] = $mobileNumberAlerted;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey $timeSchedule
     * @return $this
     */
    public function setTimeSchedule(\CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey $timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule(\CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey $holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
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
     * Getter for useHotline
     *
     * @return bool
     */
    public function getUseHotline()
    {
        return $this->useHotline instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useHotline;
    }

    /**
     * Setter for useHotline
     *
     * @param bool $useHotline
     * @return $this
     */
    public function setUseHotline($useHotline)
    {
        $this->useHotline = $useHotline;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseHotline()
    {
        $this->useHotline = null;
        return $this;
    }

    /**
     * Getter for hotlineContact
     *
     * @return string
     */
    public function getHotlineContact()
    {
        return $this->hotlineContact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hotlineContact;
    }

    /**
     * Setter for hotlineContact
     *
     * @param string $hotlineContact
     * @return $this
     */
    public function setHotlineContact($hotlineContact)
    {
        $this->hotlineContact = $hotlineContact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHotlineContact()
    {
        $this->hotlineContact = null;
        return $this;
    }


}

