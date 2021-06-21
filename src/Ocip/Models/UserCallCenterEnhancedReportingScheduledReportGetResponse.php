<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterEnhancedReportingScheduledReportGetResponse
 *
 * Response to UserCallCenterEnhancedReportingScheduledReportGetRequest.
 *
 * @see UserCallCenterEnhancedReportingScheduledReportGetRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:6839","type":"sequence","children":[{"id":"e2c537e3e39483b96620673a7012ffdd:6851","type":"choice","optional":true}]}]
 */
class UserCallCenterEnhancedReportingScheduledReportGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName reportTemplate
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey|null
     */
    private $reportTemplate = null;

    /**
     * @ElementName schedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSchedule
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSchedule|null
     */
    private $schedule = null;

    /**
     * @ElementName samplingPeriod
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSamplingPeriod
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSamplingPeriod|null
     */
    private $samplingPeriod = null;

    /**
     * @ElementName startDayOfWeek
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @var \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null
     */
    private $startDayOfWeek = null;

    /**
     * @ElementName reportTimeZone
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    private $reportTimeZone = null;

    /**
     * @ElementName reportDateFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDateFormat
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDateFormat|null
     */
    private $reportDateFormat = null;

    /**
     * @ElementName reportTimeFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTimeFormat
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTimeFormat|null
     */
    private $reportTimeFormat = null;

    /**
     * @ElementName reportInterval
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInterval
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInterval|null
     */
    private $reportInterval = null;

    /**
     * @ElementName reportFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportFileFormat
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportFileFormat|null
     */
    private $reportFormat = null;

    /**
     * @ElementName agent
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelectionRead
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelectionRead|null
     */
    private $agent = null;

    /**
     * @ElementName callCenter
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportCallCenterSelection
     * @Group e2c537e3e39483b96620673a7012ffdd:6851
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportCallCenterSelection|null
     */
    private $callCenter = null;

    /**
     * @ElementName dnis
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportDNISSelection
     * @Group e2c537e3e39483b96620673a7012ffdd:6851
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportDNISSelection|null
     */
    private $dnis = null;

    /**
     * @ElementName callCompletionThresholdSeconds
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @MinInclusive 1
     * @MaxInclusive 7200
     * @var int|null
     */
    private $callCompletionThresholdSeconds = null;

    /**
     * @ElementName shortDurationThresholdSeconds
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @MinInclusive 1
     * @MaxInclusive 7200
     * @var int|null
     */
    private $shortDurationThresholdSeconds = null;

    /**
     * @ElementName serviceLevelThresholdSeconds
     * @Type int
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @MinInclusive 1
     * @MaxInclusive 7200
     * @var int[]
     */
    private $serviceLevelThresholdSeconds = array(
        
    );

    /**
     * @ElementName serviceLevelInclusions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportServiceLevelInclusions
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportServiceLevelInclusions|null
     */
    private $serviceLevelInclusions = null;

    /**
     * @ElementName serviceLevelObjectivePercentage
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @MinInclusive 0
     * @MaxInclusive 100
     * @var int|null
     */
    private $serviceLevelObjectivePercentage = null;

    /**
     * @ElementName abandonedCallThresholdSeconds
     * @Type int
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @MinInclusive 1
     * @MaxInclusive 7200
     * @var int[]
     */
    private $abandonedCallThresholdSeconds = array(
        
    );

    /**
     * @ElementName emailAddress
     * @Type string
     * @Array
     * @Group e2c537e3e39483b96620673a7012ffdd:6839
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    private $emailAddress = array(
        
    );

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
     * Getter for reportTemplate
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey
     */
    public function getReportTemplate()
    {
        return $this->reportTemplate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportTemplate;
    }

    /**
     * Setter for reportTemplate
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey $reportTemplate
     * @return $this
     */
    public function setReportTemplate(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey $reportTemplate)
    {
        $this->reportTemplate = $reportTemplate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportTemplate()
    {
        $this->reportTemplate = null;
        return $this;
    }

    /**
     * Getter for schedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSchedule
     */
    public function getSchedule()
    {
        return $this->schedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->schedule;
    }

    /**
     * Setter for schedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSchedule $schedule
     * @return $this
     */
    public function setSchedule(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSchedule $schedule)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSchedule()
    {
        $this->schedule = null;
        return $this;
    }

    /**
     * Getter for samplingPeriod
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSamplingPeriod
     */
    public function getSamplingPeriod()
    {
        return $this->samplingPeriod instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->samplingPeriod;
    }

    /**
     * Setter for samplingPeriod
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSamplingPeriod $samplingPeriod
     * @return $this
     */
    public function setSamplingPeriod(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSamplingPeriod $samplingPeriod)
    {
        $this->samplingPeriod = $samplingPeriod;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSamplingPeriod()
    {
        $this->samplingPeriod = null;
        return $this;
    }

    /**
     * Getter for startDayOfWeek
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek
     */
    public function getStartDayOfWeek()
    {
        return $this->startDayOfWeek instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startDayOfWeek;
    }

    /**
     * Setter for startDayOfWeek
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek $startDayOfWeek
     * @return $this
     */
    public function setStartDayOfWeek(\CWM\BroadWorksConnector\Ocip\Models\DayOfWeek $startDayOfWeek)
    {
        $this->startDayOfWeek = $startDayOfWeek;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartDayOfWeek()
    {
        $this->startDayOfWeek = null;
        return $this;
    }

    /**
     * Getter for reportTimeZone
     *
     * @return string
     */
    public function getReportTimeZone()
    {
        return $this->reportTimeZone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportTimeZone;
    }

    /**
     * Setter for reportTimeZone
     *
     * @param string $reportTimeZone
     * @return $this
     */
    public function setReportTimeZone($reportTimeZone)
    {
        $this->reportTimeZone = $reportTimeZone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportTimeZone()
    {
        $this->reportTimeZone = null;
        return $this;
    }

    /**
     * Getter for reportDateFormat
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDateFormat
     */
    public function getReportDateFormat()
    {
        return $this->reportDateFormat instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportDateFormat;
    }

    /**
     * Setter for reportDateFormat
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDateFormat $reportDateFormat
     * @return $this
     */
    public function setReportDateFormat(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDateFormat $reportDateFormat)
    {
        $this->reportDateFormat = $reportDateFormat;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportDateFormat()
    {
        $this->reportDateFormat = null;
        return $this;
    }

    /**
     * Getter for reportTimeFormat
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTimeFormat
     */
    public function getReportTimeFormat()
    {
        return $this->reportTimeFormat instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportTimeFormat;
    }

    /**
     * Setter for reportTimeFormat
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTimeFormat $reportTimeFormat
     * @return $this
     */
    public function setReportTimeFormat(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTimeFormat $reportTimeFormat)
    {
        $this->reportTimeFormat = $reportTimeFormat;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportTimeFormat()
    {
        $this->reportTimeFormat = null;
        return $this;
    }

    /**
     * Getter for reportInterval
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInterval
     */
    public function getReportInterval()
    {
        return $this->reportInterval instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportInterval;
    }

    /**
     * Setter for reportInterval
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInterval $reportInterval
     * @return $this
     */
    public function setReportInterval(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInterval $reportInterval)
    {
        $this->reportInterval = $reportInterval;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportInterval()
    {
        $this->reportInterval = null;
        return $this;
    }

    /**
     * Getter for reportFormat
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportFileFormat
     */
    public function getReportFormat()
    {
        return $this->reportFormat instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportFormat;
    }

    /**
     * Setter for reportFormat
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportFileFormat $reportFormat
     * @return $this
     */
    public function setReportFormat(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportFileFormat $reportFormat)
    {
        $this->reportFormat = $reportFormat;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportFormat()
    {
        $this->reportFormat = null;
        return $this;
    }

    /**
     * Getter for agent
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelectionRead
     */
    public function getAgent()
    {
        return $this->agent instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agent;
    }

    /**
     * Setter for agent
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelectionRead $agent
     * @return $this
     */
    public function setAgent(\CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelectionRead $agent)
    {
        $this->agent = $agent;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgent()
    {
        $this->agent = null;
        return $this;
    }

    /**
     * Getter for callCenter
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportCallCenterSelection
     */
    public function getCallCenter()
    {
        return $this->callCenter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callCenter;
    }

    /**
     * Setter for callCenter
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportCallCenterSelection $callCenter
     * @return $this
     */
    public function setCallCenter(\CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportCallCenterSelection $callCenter)
    {
        $this->callCenter = $callCenter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallCenter()
    {
        $this->callCenter = null;
        return $this;
    }

    /**
     * Getter for dnis
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportDNISSelection
     */
    public function getDnis()
    {
        return $this->dnis instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnis;
    }

    /**
     * Setter for dnis
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportDNISSelection $dnis
     * @return $this
     */
    public function setDnis(\CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportDNISSelection $dnis)
    {
        $this->dnis = $dnis;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnis()
    {
        $this->dnis = null;
        return $this;
    }

    /**
     * Getter for callCompletionThresholdSeconds
     *
     * @return int
     */
    public function getCallCompletionThresholdSeconds()
    {
        return $this->callCompletionThresholdSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callCompletionThresholdSeconds;
    }

    /**
     * Setter for callCompletionThresholdSeconds
     *
     * @param int $callCompletionThresholdSeconds
     * @return $this
     */
    public function setCallCompletionThresholdSeconds($callCompletionThresholdSeconds)
    {
        $this->callCompletionThresholdSeconds = $callCompletionThresholdSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallCompletionThresholdSeconds()
    {
        $this->callCompletionThresholdSeconds = null;
        return $this;
    }

    /**
     * Getter for shortDurationThresholdSeconds
     *
     * @return int
     */
    public function getShortDurationThresholdSeconds()
    {
        return $this->shortDurationThresholdSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->shortDurationThresholdSeconds;
    }

    /**
     * Setter for shortDurationThresholdSeconds
     *
     * @param int $shortDurationThresholdSeconds
     * @return $this
     */
    public function setShortDurationThresholdSeconds($shortDurationThresholdSeconds)
    {
        $this->shortDurationThresholdSeconds = $shortDurationThresholdSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetShortDurationThresholdSeconds()
    {
        $this->shortDurationThresholdSeconds = null;
        return $this;
    }

    /**
     * Getter for serviceLevelThresholdSeconds
     *
     * @return int[]
     */
    public function getServiceLevelThresholdSeconds()
    {
        return $this->serviceLevelThresholdSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceLevelThresholdSeconds;
    }

    /**
     * Setter for serviceLevelThresholdSeconds
     *
     * @param int[] $serviceLevelThresholdSeconds
     * @return $this
     */
    public function setServiceLevelThresholdSeconds(array $serviceLevelThresholdSeconds)
    {
        $this->serviceLevelThresholdSeconds = $serviceLevelThresholdSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceLevelThresholdSeconds()
    {
        $this->serviceLevelThresholdSeconds = null;
        return $this;
    }

    /**
     * Adder for serviceLevelThresholdSeconds
     *
     * @param int $serviceLevelThresholdSeconds
     * @return $this
     */
    public function addServiceLevelThresholdSeconds(int $serviceLevelThresholdSeconds)
    {
        $this->serviceLevelThresholdSeconds[] = $serviceLevelThresholdSeconds;
        return $this;
    }

    /**
     * Getter for serviceLevelInclusions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportServiceLevelInclusions
     */
    public function getServiceLevelInclusions()
    {
        return $this->serviceLevelInclusions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceLevelInclusions;
    }

    /**
     * Setter for serviceLevelInclusions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportServiceLevelInclusions $serviceLevelInclusions
     * @return $this
     */
    public function setServiceLevelInclusions(\CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportServiceLevelInclusions $serviceLevelInclusions)
    {
        $this->serviceLevelInclusions = $serviceLevelInclusions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceLevelInclusions()
    {
        $this->serviceLevelInclusions = null;
        return $this;
    }

    /**
     * Getter for serviceLevelObjectivePercentage
     *
     * @return int
     */
    public function getServiceLevelObjectivePercentage()
    {
        return $this->serviceLevelObjectivePercentage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceLevelObjectivePercentage;
    }

    /**
     * Setter for serviceLevelObjectivePercentage
     *
     * @param int $serviceLevelObjectivePercentage
     * @return $this
     */
    public function setServiceLevelObjectivePercentage($serviceLevelObjectivePercentage)
    {
        $this->serviceLevelObjectivePercentage = $serviceLevelObjectivePercentage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceLevelObjectivePercentage()
    {
        $this->serviceLevelObjectivePercentage = null;
        return $this;
    }

    /**
     * Getter for abandonedCallThresholdSeconds
     *
     * @return int[]
     */
    public function getAbandonedCallThresholdSeconds()
    {
        return $this->abandonedCallThresholdSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->abandonedCallThresholdSeconds;
    }

    /**
     * Setter for abandonedCallThresholdSeconds
     *
     * @param int[] $abandonedCallThresholdSeconds
     * @return $this
     */
    public function setAbandonedCallThresholdSeconds(array $abandonedCallThresholdSeconds)
    {
        $this->abandonedCallThresholdSeconds = $abandonedCallThresholdSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAbandonedCallThresholdSeconds()
    {
        $this->abandonedCallThresholdSeconds = null;
        return $this;
    }

    /**
     * Adder for abandonedCallThresholdSeconds
     *
     * @param int $abandonedCallThresholdSeconds
     * @return $this
     */
    public function addAbandonedCallThresholdSeconds(int $abandonedCallThresholdSeconds)
    {
        $this->abandonedCallThresholdSeconds[] = $abandonedCallThresholdSeconds;
        return $this;
    }

    /**
     * Getter for emailAddress
     *
     * @return string[]
     */
    public function getEmailAddress()
    {
        return $this->emailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emailAddress;
    }

    /**
     * Setter for emailAddress
     *
     * @param string[] $emailAddress
     * @return $this
     */
    public function setEmailAddress(array $emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmailAddress()
    {
        $this->emailAddress = null;
        return $this;
    }

    /**
     * Adder for emailAddress
     *
     * @param string $emailAddress
     * @return $this
     */
    public function addEmailAddress(string $emailAddress)
    {
        $this->emailAddress[] = $emailAddress;
        return $this;
    }


}

