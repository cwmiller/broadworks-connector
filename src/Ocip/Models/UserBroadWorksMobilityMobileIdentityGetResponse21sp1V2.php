<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityMobileIdentityGetResponse21sp1V2
 *
 * Response to a UserBroadWorksMobilityMobileIdentityGetRequest21sp1V2.
 *          
 *          Columns for the mobileNumberAlertedTable are as follows: "Mobile
 * Number", "Country Code", "National Prefix"
 *
 * @see UserBroadWorksMobilityMobileIdentityGetRequest21sp1V2
 */
class UserBroadWorksMobilityMobileIdentityGetResponse21sp1V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName isPrimary
     * @var bool|null
     */
    private $isPrimary = null;

    /**
     * @ElementName enableAlerting
     * @var bool|null
     */
    private $enableAlerting = null;

    /**
     * @ElementName alertAgentCalls
     * @var bool|null
     */
    private $alertAgentCalls = null;

    /**
     * @ElementName alertClickToDialCalls
     * @var bool|null
     */
    private $alertClickToDialCalls = null;

    /**
     * @ElementName alertGroupPagingCalls
     * @var bool|null
     */
    private $alertGroupPagingCalls = null;

    /**
     * @ElementName useMobilityCallingLineID
     * @var bool|null
     */
    private $useMobilityCallingLineID = null;

    /**
     * @ElementName enableDiversionInhibitor
     * @var bool|null
     */
    private $enableDiversionInhibitor = null;

    /**
     * @ElementName requireAnswerConfirmation
     * @var bool|null
     */
    private $requireAnswerConfirmation = null;

    /**
     * @ElementName broadworksCallControl
     * @var bool|null
     */
    private $broadworksCallControl = null;

    /**
     * @ElementName useSettingLevel
     * @var string|null
     */
    private $useSettingLevel = null;

    /**
     * @ElementName denyCallOriginations
     * @var bool|null
     */
    private $denyCallOriginations = null;

    /**
     * @ElementName denyCallTerminations
     * @var bool|null
     */
    private $denyCallTerminations = null;

    /**
     * @ElementName effectiveEnableLocationServices
     * @var bool|null
     */
    private $effectiveEnableLocationServices = null;

    /**
     * @ElementName effectiveEnableMSRNLookup
     * @var bool|null
     */
    private $effectiveEnableMSRNLookup = null;

    /**
     * @ElementName effectiveEnableMobileStateChecking
     * @var bool|null
     */
    private $effectiveEnableMobileStateChecking = null;

    /**
     * @ElementName effectiveEnableAnnouncementSuppression
     * @var bool|null
     */
    private $effectiveEnableAnnouncementSuppression = null;

    /**
     * @ElementName effectiveDenyCallOriginations
     * @var bool|null
     */
    private $effectiveDenyCallOriginations = null;

    /**
     * @ElementName effectiveDenyCallTerminations
     * @var bool|null
     */
    private $effectiveDenyCallTerminations = null;

    /**
     * @ElementName devicesToRing
     * @var string|null
     */
    private $devicesToRing = null;

    /**
     * @ElementName includeSharedCallAppearance
     * @var bool|null
     */
    private $includeSharedCallAppearance = null;

    /**
     * @ElementName includeBroadworksAnywhere
     * @var bool|null
     */
    private $includeBroadworksAnywhere = null;

    /**
     * @ElementName includeExecutiveAssistant
     * @var bool|null
     */
    private $includeExecutiveAssistant = null;

    /**
     * @ElementName enableCallAnchoring
     * @var bool|null
     */
    private $enableCallAnchoring = null;

    /**
     * @ElementName timeSchedule
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null
     */
    private $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null
     */
    private $holidaySchedule = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName outboundAlternateNumber
     * @var string|null
     */
    private $outboundAlternateNumber = null;

    /**
     * @ElementName enableDirectRouting
     * @var bool|null
     */
    private $enableDirectRouting = null;

    /**
     * @ElementName markCDRAsEnterpriseGroupCalls
     * @var bool|null
     */
    private $markCDRAsEnterpriseGroupCalls = null;

    /**
     * @ElementName mobileNumberAlertedTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $mobileNumberAlertedTable = null;

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for isPrimary
     *
     * @ElementName isPrimary
     * @return bool|null
     */
    public function getIsPrimary()
    {
        return $this->isPrimary;
    }

    /**
     * Setter for isPrimary
     *
     * @ElementName isPrimary
     * @param bool|null $isPrimary
     * @return $this
     */
    public function setIsPrimary($isPrimary)
    {
        $this->isPrimary = $isPrimary;
        return $this;
    }

    /**
     * Getter for enableAlerting
     *
     * @ElementName enableAlerting
     * @return bool|null
     */
    public function getEnableAlerting()
    {
        return $this->enableAlerting;
    }

    /**
     * Setter for enableAlerting
     *
     * @ElementName enableAlerting
     * @param bool|null $enableAlerting
     * @return $this
     */
    public function setEnableAlerting($enableAlerting)
    {
        $this->enableAlerting = $enableAlerting;
        return $this;
    }

    /**
     * Getter for alertAgentCalls
     *
     * @ElementName alertAgentCalls
     * @return bool|null
     */
    public function getAlertAgentCalls()
    {
        return $this->alertAgentCalls;
    }

    /**
     * Setter for alertAgentCalls
     *
     * @ElementName alertAgentCalls
     * @param bool|null $alertAgentCalls
     * @return $this
     */
    public function setAlertAgentCalls($alertAgentCalls)
    {
        $this->alertAgentCalls = $alertAgentCalls;
        return $this;
    }

    /**
     * Getter for alertClickToDialCalls
     *
     * @ElementName alertClickToDialCalls
     * @return bool|null
     */
    public function getAlertClickToDialCalls()
    {
        return $this->alertClickToDialCalls;
    }

    /**
     * Setter for alertClickToDialCalls
     *
     * @ElementName alertClickToDialCalls
     * @param bool|null $alertClickToDialCalls
     * @return $this
     */
    public function setAlertClickToDialCalls($alertClickToDialCalls)
    {
        $this->alertClickToDialCalls = $alertClickToDialCalls;
        return $this;
    }

    /**
     * Getter for alertGroupPagingCalls
     *
     * @ElementName alertGroupPagingCalls
     * @return bool|null
     */
    public function getAlertGroupPagingCalls()
    {
        return $this->alertGroupPagingCalls;
    }

    /**
     * Setter for alertGroupPagingCalls
     *
     * @ElementName alertGroupPagingCalls
     * @param bool|null $alertGroupPagingCalls
     * @return $this
     */
    public function setAlertGroupPagingCalls($alertGroupPagingCalls)
    {
        $this->alertGroupPagingCalls = $alertGroupPagingCalls;
        return $this;
    }

    /**
     * Getter for useMobilityCallingLineID
     *
     * @ElementName useMobilityCallingLineID
     * @return bool|null
     */
    public function getUseMobilityCallingLineID()
    {
        return $this->useMobilityCallingLineID;
    }

    /**
     * Setter for useMobilityCallingLineID
     *
     * @ElementName useMobilityCallingLineID
     * @param bool|null $useMobilityCallingLineID
     * @return $this
     */
    public function setUseMobilityCallingLineID($useMobilityCallingLineID)
    {
        $this->useMobilityCallingLineID = $useMobilityCallingLineID;
        return $this;
    }

    /**
     * Getter for enableDiversionInhibitor
     *
     * @ElementName enableDiversionInhibitor
     * @return bool|null
     */
    public function getEnableDiversionInhibitor()
    {
        return $this->enableDiversionInhibitor;
    }

    /**
     * Setter for enableDiversionInhibitor
     *
     * @ElementName enableDiversionInhibitor
     * @param bool|null $enableDiversionInhibitor
     * @return $this
     */
    public function setEnableDiversionInhibitor($enableDiversionInhibitor)
    {
        $this->enableDiversionInhibitor = $enableDiversionInhibitor;
        return $this;
    }

    /**
     * Getter for requireAnswerConfirmation
     *
     * @ElementName requireAnswerConfirmation
     * @return bool|null
     */
    public function getRequireAnswerConfirmation()
    {
        return $this->requireAnswerConfirmation;
    }

    /**
     * Setter for requireAnswerConfirmation
     *
     * @ElementName requireAnswerConfirmation
     * @param bool|null $requireAnswerConfirmation
     * @return $this
     */
    public function setRequireAnswerConfirmation($requireAnswerConfirmation)
    {
        $this->requireAnswerConfirmation = $requireAnswerConfirmation;
        return $this;
    }

    /**
     * Getter for broadworksCallControl
     *
     * @ElementName broadworksCallControl
     * @return bool|null
     */
    public function getBroadworksCallControl()
    {
        return $this->broadworksCallControl;
    }

    /**
     * Setter for broadworksCallControl
     *
     * @ElementName broadworksCallControl
     * @param bool|null $broadworksCallControl
     * @return $this
     */
    public function setBroadworksCallControl($broadworksCallControl)
    {
        $this->broadworksCallControl = $broadworksCallControl;
        return $this;
    }

    /**
     * Getter for useSettingLevel
     *
     * @ElementName useSettingLevel
     * @return string|null
     */
    public function getUseSettingLevel()
    {
        return $this->useSettingLevel;
    }

    /**
     * Setter for useSettingLevel
     *
     * @ElementName useSettingLevel
     * @param string|null $useSettingLevel
     * @return $this
     */
    public function setUseSettingLevel($useSettingLevel)
    {
        $this->useSettingLevel = $useSettingLevel;
        return $this;
    }

    /**
     * Getter for denyCallOriginations
     *
     * @ElementName denyCallOriginations
     * @return bool|null
     */
    public function getDenyCallOriginations()
    {
        return $this->denyCallOriginations;
    }

    /**
     * Setter for denyCallOriginations
     *
     * @ElementName denyCallOriginations
     * @param bool|null $denyCallOriginations
     * @return $this
     */
    public function setDenyCallOriginations($denyCallOriginations)
    {
        $this->denyCallOriginations = $denyCallOriginations;
        return $this;
    }

    /**
     * Getter for denyCallTerminations
     *
     * @ElementName denyCallTerminations
     * @return bool|null
     */
    public function getDenyCallTerminations()
    {
        return $this->denyCallTerminations;
    }

    /**
     * Setter for denyCallTerminations
     *
     * @ElementName denyCallTerminations
     * @param bool|null $denyCallTerminations
     * @return $this
     */
    public function setDenyCallTerminations($denyCallTerminations)
    {
        $this->denyCallTerminations = $denyCallTerminations;
        return $this;
    }

    /**
     * Getter for effectiveEnableLocationServices
     *
     * @ElementName effectiveEnableLocationServices
     * @return bool|null
     */
    public function getEffectiveEnableLocationServices()
    {
        return $this->effectiveEnableLocationServices;
    }

    /**
     * Setter for effectiveEnableLocationServices
     *
     * @ElementName effectiveEnableLocationServices
     * @param bool|null $effectiveEnableLocationServices
     * @return $this
     */
    public function setEffectiveEnableLocationServices($effectiveEnableLocationServices)
    {
        $this->effectiveEnableLocationServices = $effectiveEnableLocationServices;
        return $this;
    }

    /**
     * Getter for effectiveEnableMSRNLookup
     *
     * @ElementName effectiveEnableMSRNLookup
     * @return bool|null
     */
    public function getEffectiveEnableMSRNLookup()
    {
        return $this->effectiveEnableMSRNLookup;
    }

    /**
     * Setter for effectiveEnableMSRNLookup
     *
     * @ElementName effectiveEnableMSRNLookup
     * @param bool|null $effectiveEnableMSRNLookup
     * @return $this
     */
    public function setEffectiveEnableMSRNLookup($effectiveEnableMSRNLookup)
    {
        $this->effectiveEnableMSRNLookup = $effectiveEnableMSRNLookup;
        return $this;
    }

    /**
     * Getter for effectiveEnableMobileStateChecking
     *
     * @ElementName effectiveEnableMobileStateChecking
     * @return bool|null
     */
    public function getEffectiveEnableMobileStateChecking()
    {
        return $this->effectiveEnableMobileStateChecking;
    }

    /**
     * Setter for effectiveEnableMobileStateChecking
     *
     * @ElementName effectiveEnableMobileStateChecking
     * @param bool|null $effectiveEnableMobileStateChecking
     * @return $this
     */
    public function setEffectiveEnableMobileStateChecking($effectiveEnableMobileStateChecking)
    {
        $this->effectiveEnableMobileStateChecking = $effectiveEnableMobileStateChecking;
        return $this;
    }

    /**
     * Getter for effectiveEnableAnnouncementSuppression
     *
     * @ElementName effectiveEnableAnnouncementSuppression
     * @return bool|null
     */
    public function getEffectiveEnableAnnouncementSuppression()
    {
        return $this->effectiveEnableAnnouncementSuppression;
    }

    /**
     * Setter for effectiveEnableAnnouncementSuppression
     *
     * @ElementName effectiveEnableAnnouncementSuppression
     * @param bool|null $effectiveEnableAnnouncementSuppression
     * @return $this
     */
    public function setEffectiveEnableAnnouncementSuppression($effectiveEnableAnnouncementSuppression)
    {
        $this->effectiveEnableAnnouncementSuppression = $effectiveEnableAnnouncementSuppression;
        return $this;
    }

    /**
     * Getter for effectiveDenyCallOriginations
     *
     * @ElementName effectiveDenyCallOriginations
     * @return bool|null
     */
    public function getEffectiveDenyCallOriginations()
    {
        return $this->effectiveDenyCallOriginations;
    }

    /**
     * Setter for effectiveDenyCallOriginations
     *
     * @ElementName effectiveDenyCallOriginations
     * @param bool|null $effectiveDenyCallOriginations
     * @return $this
     */
    public function setEffectiveDenyCallOriginations($effectiveDenyCallOriginations)
    {
        $this->effectiveDenyCallOriginations = $effectiveDenyCallOriginations;
        return $this;
    }

    /**
     * Getter for effectiveDenyCallTerminations
     *
     * @ElementName effectiveDenyCallTerminations
     * @return bool|null
     */
    public function getEffectiveDenyCallTerminations()
    {
        return $this->effectiveDenyCallTerminations;
    }

    /**
     * Setter for effectiveDenyCallTerminations
     *
     * @ElementName effectiveDenyCallTerminations
     * @param bool|null $effectiveDenyCallTerminations
     * @return $this
     */
    public function setEffectiveDenyCallTerminations($effectiveDenyCallTerminations)
    {
        $this->effectiveDenyCallTerminations = $effectiveDenyCallTerminations;
        return $this;
    }

    /**
     * Getter for devicesToRing
     *
     * @ElementName devicesToRing
     * @return string|null
     */
    public function getDevicesToRing()
    {
        return $this->devicesToRing;
    }

    /**
     * Setter for devicesToRing
     *
     * @ElementName devicesToRing
     * @param string|null $devicesToRing
     * @return $this
     */
    public function setDevicesToRing($devicesToRing)
    {
        $this->devicesToRing = $devicesToRing;
        return $this;
    }

    /**
     * Getter for includeSharedCallAppearance
     *
     * @ElementName includeSharedCallAppearance
     * @return bool|null
     */
    public function getIncludeSharedCallAppearance()
    {
        return $this->includeSharedCallAppearance;
    }

    /**
     * Setter for includeSharedCallAppearance
     *
     * @ElementName includeSharedCallAppearance
     * @param bool|null $includeSharedCallAppearance
     * @return $this
     */
    public function setIncludeSharedCallAppearance($includeSharedCallAppearance)
    {
        $this->includeSharedCallAppearance = $includeSharedCallAppearance;
        return $this;
    }

    /**
     * Getter for includeBroadworksAnywhere
     *
     * @ElementName includeBroadworksAnywhere
     * @return bool|null
     */
    public function getIncludeBroadworksAnywhere()
    {
        return $this->includeBroadworksAnywhere;
    }

    /**
     * Setter for includeBroadworksAnywhere
     *
     * @ElementName includeBroadworksAnywhere
     * @param bool|null $includeBroadworksAnywhere
     * @return $this
     */
    public function setIncludeBroadworksAnywhere($includeBroadworksAnywhere)
    {
        $this->includeBroadworksAnywhere = $includeBroadworksAnywhere;
        return $this;
    }

    /**
     * Getter for includeExecutiveAssistant
     *
     * @ElementName includeExecutiveAssistant
     * @return bool|null
     */
    public function getIncludeExecutiveAssistant()
    {
        return $this->includeExecutiveAssistant;
    }

    /**
     * Setter for includeExecutiveAssistant
     *
     * @ElementName includeExecutiveAssistant
     * @param bool|null $includeExecutiveAssistant
     * @return $this
     */
    public function setIncludeExecutiveAssistant($includeExecutiveAssistant)
    {
        $this->includeExecutiveAssistant = $includeExecutiveAssistant;
        return $this;
    }

    /**
     * Getter for enableCallAnchoring
     *
     * @ElementName enableCallAnchoring
     * @return bool|null
     */
    public function getEnableCallAnchoring()
    {
        return $this->enableCallAnchoring;
    }

    /**
     * Setter for enableCallAnchoring
     *
     * @ElementName enableCallAnchoring
     * @param bool|null $enableCallAnchoring
     * @return $this
     */
    public function setEnableCallAnchoring($enableCallAnchoring)
    {
        $this->enableCallAnchoring = $enableCallAnchoring;
        return $this;
    }

    /**
     * Getter for timeSchedule
     *
     * @ElementName timeSchedule
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @ElementName timeSchedule
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null $timeSchedule
     * @return $this
     */
    public function setTimeSchedule($timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
        return $this;
    }

    /**
     * Getter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule($holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
        return $this;
    }

    /**
     * Getter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead|null
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead|null $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint($accessDeviceEndpoint)
    {
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        return $this;
    }

    /**
     * Getter for outboundAlternateNumber
     *
     * @ElementName outboundAlternateNumber
     * @return string|null
     */
    public function getOutboundAlternateNumber()
    {
        return $this->outboundAlternateNumber;
    }

    /**
     * Setter for outboundAlternateNumber
     *
     * @ElementName outboundAlternateNumber
     * @param string|null $outboundAlternateNumber
     * @return $this
     */
    public function setOutboundAlternateNumber($outboundAlternateNumber)
    {
        $this->outboundAlternateNumber = $outboundAlternateNumber;
        return $this;
    }

    /**
     * Getter for enableDirectRouting
     *
     * @ElementName enableDirectRouting
     * @return bool|null
     */
    public function getEnableDirectRouting()
    {
        return $this->enableDirectRouting;
    }

    /**
     * Setter for enableDirectRouting
     *
     * @ElementName enableDirectRouting
     * @param bool|null $enableDirectRouting
     * @return $this
     */
    public function setEnableDirectRouting($enableDirectRouting)
    {
        $this->enableDirectRouting = $enableDirectRouting;
        return $this;
    }

    /**
     * Getter for markCDRAsEnterpriseGroupCalls
     *
     * @ElementName markCDRAsEnterpriseGroupCalls
     * @return bool|null
     */
    public function getMarkCDRAsEnterpriseGroupCalls()
    {
        return $this->markCDRAsEnterpriseGroupCalls;
    }

    /**
     * Setter for markCDRAsEnterpriseGroupCalls
     *
     * @ElementName markCDRAsEnterpriseGroupCalls
     * @param bool|null $markCDRAsEnterpriseGroupCalls
     * @return $this
     */
    public function setMarkCDRAsEnterpriseGroupCalls($markCDRAsEnterpriseGroupCalls)
    {
        $this->markCDRAsEnterpriseGroupCalls = $markCDRAsEnterpriseGroupCalls;
        return $this;
    }

    /**
     * Getter for mobileNumberAlertedTable
     *
     * @ElementName mobileNumberAlertedTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getMobileNumberAlertedTable()
    {
        return $this->mobileNumberAlertedTable;
    }

    /**
     * Setter for mobileNumberAlertedTable
     *
     * @ElementName mobileNumberAlertedTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $mobileNumberAlertedTable
     * @return $this
     */
    public function setMobileNumberAlertedTable($mobileNumberAlertedTable)
    {
        $this->mobileNumberAlertedTable = $mobileNumberAlertedTable;
        return $this;
    }


}

