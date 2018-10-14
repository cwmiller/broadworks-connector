<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterEnhancedReportingScheduledReportGetResponse
 *
 * Response to UserCallCenterEnhancedReportingScheduledReportGetRequest.
 *
 * @see UserCallCenterEnhancedReportingScheduledReportGetRequest
 */
class UserCallCenterEnhancedReportingScheduledReportGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName reportTemplate
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey|null
     */
    private $reportTemplate = null;

    /**
     * @ElementName schedule
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSchedule|null
     */
    private $schedule = null;

    /**
     * @ElementName samplingPeriod
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSamplingPeriod|null
     */
    private $samplingPeriod = null;

    /**
     * @ElementName startDayOfWeek
     * @var \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null
     */
    private $startDayOfWeek = null;

    /**
     * @ElementName reportTimeZone
     * @var string|null
     */
    private $reportTimeZone = null;

    /**
     * @ElementName reportDateFormat
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDateFormat|null
     */
    private $reportDateFormat = null;

    /**
     * @ElementName reportTimeFormat
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTimeFormat|null
     */
    private $reportTimeFormat = null;

    /**
     * @ElementName reportInterval
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInterval|null
     */
    private $reportInterval = null;

    /**
     * @ElementName reportFormat
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportFileFormat|null
     */
    private $reportFormat = null;

    /**
     * @ElementName agent
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelectionRead|null
     */
    private $agent = null;

    /**
     * @ElementName callCenter
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportCallCenterSelection|null
     */
    private $callCenter = null;

    /**
     * @ElementName dnis
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportDNISSelection|null
     */
    private $dnis = null;

    /**
     * @ElementName callCompletionThresholdSeconds
     * @var int|null
     */
    private $callCompletionThresholdSeconds = null;

    /**
     * @ElementName shortDurationThresholdSeconds
     * @var int|null
     */
    private $shortDurationThresholdSeconds = null;

    /**
     * @ElementName serviceLevelThresholdSeconds
     * @var int[]
     */
    private $serviceLevelThresholdSeconds = array(
        
    );

    /**
     * @ElementName serviceLevelInclusions
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportServiceLevelInclusions|null
     */
    private $serviceLevelInclusions = null;

    /**
     * @ElementName serviceLevelObjectivePercentage
     * @var int|null
     */
    private $serviceLevelObjectivePercentage = null;

    /**
     * @ElementName abandonedCallThresholdSeconds
     * @var int[]
     */
    private $abandonedCallThresholdSeconds = array(
        
    );

    /**
     * @ElementName emailAddress
     * @var string[]
     */
    private $emailAddress = array(
        
    );

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
     * Getter for reportTemplate
     *
     * @ElementName reportTemplate
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey|null
     */
    public function getReportTemplate()
    {
        return $this->reportTemplate;
    }

    /**
     * Setter for reportTemplate
     *
     * @ElementName reportTemplate
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey|null $reportTemplate
     * @return $this
     */
    public function setReportTemplate(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateKey $reportTemplate)
    {
        $this->reportTemplate = $reportTemplate;
        return $this;
    }

    /**
     * Getter for schedule
     *
     * @ElementName schedule
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSchedule|null
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Setter for schedule
     *
     * @ElementName schedule
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSchedule|null $schedule
     * @return $this
     */
    public function setSchedule(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSchedule $schedule)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * Getter for samplingPeriod
     *
     * @ElementName samplingPeriod
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSamplingPeriod|null
     */
    public function getSamplingPeriod()
    {
        return $this->samplingPeriod;
    }

    /**
     * Setter for samplingPeriod
     *
     * @ElementName samplingPeriod
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSamplingPeriod|null $samplingPeriod
     * @return $this
     */
    public function setSamplingPeriod(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSamplingPeriod $samplingPeriod)
    {
        $this->samplingPeriod = $samplingPeriod;
        return $this;
    }

    /**
     * Getter for startDayOfWeek
     *
     * @ElementName startDayOfWeek
     * @return \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null
     */
    public function getStartDayOfWeek()
    {
        return $this->startDayOfWeek;
    }

    /**
     * Setter for startDayOfWeek
     *
     * @ElementName startDayOfWeek
     * @param \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null $startDayOfWeek
     * @return $this
     */
    public function setStartDayOfWeek(\CWM\BroadWorksConnector\Ocip\Models\DayOfWeek $startDayOfWeek)
    {
        $this->startDayOfWeek = $startDayOfWeek;
        return $this;
    }

    /**
     * Getter for reportTimeZone
     *
     * @ElementName reportTimeZone
     * @return string|null
     */
    public function getReportTimeZone()
    {
        return $this->reportTimeZone;
    }

    /**
     * Setter for reportTimeZone
     *
     * @ElementName reportTimeZone
     * @param string|null $reportTimeZone
     * @return $this
     */
    public function setReportTimeZone($reportTimeZone)
    {
        $this->reportTimeZone = $reportTimeZone;
        return $this;
    }

    /**
     * Getter for reportDateFormat
     *
     * @ElementName reportDateFormat
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDateFormat|null
     */
    public function getReportDateFormat()
    {
        return $this->reportDateFormat;
    }

    /**
     * Setter for reportDateFormat
     *
     * @ElementName reportDateFormat
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDateFormat|null $reportDateFormat
     * @return $this
     */
    public function setReportDateFormat(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDateFormat $reportDateFormat)
    {
        $this->reportDateFormat = $reportDateFormat;
        return $this;
    }

    /**
     * Getter for reportTimeFormat
     *
     * @ElementName reportTimeFormat
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTimeFormat|null
     */
    public function getReportTimeFormat()
    {
        return $this->reportTimeFormat;
    }

    /**
     * Setter for reportTimeFormat
     *
     * @ElementName reportTimeFormat
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTimeFormat|null $reportTimeFormat
     * @return $this
     */
    public function setReportTimeFormat(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTimeFormat $reportTimeFormat)
    {
        $this->reportTimeFormat = $reportTimeFormat;
        return $this;
    }

    /**
     * Getter for reportInterval
     *
     * @ElementName reportInterval
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInterval|null
     */
    public function getReportInterval()
    {
        return $this->reportInterval;
    }

    /**
     * Setter for reportInterval
     *
     * @ElementName reportInterval
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInterval|null $reportInterval
     * @return $this
     */
    public function setReportInterval(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInterval $reportInterval)
    {
        $this->reportInterval = $reportInterval;
        return $this;
    }

    /**
     * Getter for reportFormat
     *
     * @ElementName reportFormat
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportFileFormat|null
     */
    public function getReportFormat()
    {
        return $this->reportFormat;
    }

    /**
     * Setter for reportFormat
     *
     * @ElementName reportFormat
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportFileFormat|null $reportFormat
     * @return $this
     */
    public function setReportFormat(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportFileFormat $reportFormat)
    {
        $this->reportFormat = $reportFormat;
        return $this;
    }

    /**
     * Getter for agent
     *
     * @ElementName agent
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelectionRead|null
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Setter for agent
     *
     * @ElementName agent
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelectionRead|null $agent
     * @return $this
     */
    public function setAgent(\CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelectionRead $agent)
    {
        $this->agent = $agent;
        return $this;
    }

    /**
     * Getter for callCenter
     *
     * @ElementName callCenter
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportCallCenterSelection|null
     */
    public function getCallCenter()
    {
        return $this->callCenter;
    }

    /**
     * Setter for callCenter
     *
     * @ElementName callCenter
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportCallCenterSelection|null $callCenter
     * @return $this
     */
    public function setCallCenter(\CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportCallCenterSelection $callCenter)
    {
        $this->callCenter = $callCenter;
        return $this;
    }

    /**
     * Getter for dnis
     *
     * @ElementName dnis
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportDNISSelection|null
     */
    public function getDnis()
    {
        return $this->dnis;
    }

    /**
     * Setter for dnis
     *
     * @ElementName dnis
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportDNISSelection|null $dnis
     * @return $this
     */
    public function setDnis(\CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportDNISSelection $dnis)
    {
        $this->dnis = $dnis;
        return $this;
    }

    /**
     * Getter for callCompletionThresholdSeconds
     *
     * @ElementName callCompletionThresholdSeconds
     * @return int|null
     */
    public function getCallCompletionThresholdSeconds()
    {
        return $this->callCompletionThresholdSeconds;
    }

    /**
     * Setter for callCompletionThresholdSeconds
     *
     * @ElementName callCompletionThresholdSeconds
     * @param int|null $callCompletionThresholdSeconds
     * @return $this
     */
    public function setCallCompletionThresholdSeconds($callCompletionThresholdSeconds)
    {
        $this->callCompletionThresholdSeconds = $callCompletionThresholdSeconds;
        return $this;
    }

    /**
     * Getter for shortDurationThresholdSeconds
     *
     * @ElementName shortDurationThresholdSeconds
     * @return int|null
     */
    public function getShortDurationThresholdSeconds()
    {
        return $this->shortDurationThresholdSeconds;
    }

    /**
     * Setter for shortDurationThresholdSeconds
     *
     * @ElementName shortDurationThresholdSeconds
     * @param int|null $shortDurationThresholdSeconds
     * @return $this
     */
    public function setShortDurationThresholdSeconds($shortDurationThresholdSeconds)
    {
        $this->shortDurationThresholdSeconds = $shortDurationThresholdSeconds;
        return $this;
    }

    /**
     * Getter for serviceLevelThresholdSeconds
     *
     * @ElementName serviceLevelThresholdSeconds
     * @return int[]
     */
    public function getServiceLevelThresholdSeconds()
    {
        return $this->serviceLevelThresholdSeconds;
    }

    /**
     * Setter for serviceLevelThresholdSeconds
     *
     * @ElementName serviceLevelThresholdSeconds
     * @param int[] $serviceLevelThresholdSeconds
     * @return $this
     */
    public function setServiceLevelThresholdSeconds(array $serviceLevelThresholdSeconds)
    {
        $this->serviceLevelThresholdSeconds = $serviceLevelThresholdSeconds;
        return $this;
    }

    /**
     * Adder for serviceLevelThresholdSeconds
     *
     * @ElementName serviceLevelThresholdSeconds
     * @param int $serviceLevelThresholdSeconds
     * @return $this
     */
    public function addServiceLevelThresholdSeconds(int $serviceLevelThresholdSeconds)
    {
        $this->serviceLevelThresholdSeconds []= $serviceLevelThresholdSeconds;
        return $this;
    }

    /**
     * Getter for serviceLevelInclusions
     *
     * @ElementName serviceLevelInclusions
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportServiceLevelInclusions|null
     */
    public function getServiceLevelInclusions()
    {
        return $this->serviceLevelInclusions;
    }

    /**
     * Setter for serviceLevelInclusions
     *
     * @ElementName serviceLevelInclusions
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportServiceLevelInclusions|null $serviceLevelInclusions
     * @return $this
     */
    public function setServiceLevelInclusions(\CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportServiceLevelInclusions $serviceLevelInclusions)
    {
        $this->serviceLevelInclusions = $serviceLevelInclusions;
        return $this;
    }

    /**
     * Getter for serviceLevelObjectivePercentage
     *
     * @ElementName serviceLevelObjectivePercentage
     * @return int|null
     */
    public function getServiceLevelObjectivePercentage()
    {
        return $this->serviceLevelObjectivePercentage;
    }

    /**
     * Setter for serviceLevelObjectivePercentage
     *
     * @ElementName serviceLevelObjectivePercentage
     * @param int|null $serviceLevelObjectivePercentage
     * @return $this
     */
    public function setServiceLevelObjectivePercentage($serviceLevelObjectivePercentage)
    {
        $this->serviceLevelObjectivePercentage = $serviceLevelObjectivePercentage;
        return $this;
    }

    /**
     * Getter for abandonedCallThresholdSeconds
     *
     * @ElementName abandonedCallThresholdSeconds
     * @return int[]
     */
    public function getAbandonedCallThresholdSeconds()
    {
        return $this->abandonedCallThresholdSeconds;
    }

    /**
     * Setter for abandonedCallThresholdSeconds
     *
     * @ElementName abandonedCallThresholdSeconds
     * @param int[] $abandonedCallThresholdSeconds
     * @return $this
     */
    public function setAbandonedCallThresholdSeconds(array $abandonedCallThresholdSeconds)
    {
        $this->abandonedCallThresholdSeconds = $abandonedCallThresholdSeconds;
        return $this;
    }

    /**
     * Adder for abandonedCallThresholdSeconds
     *
     * @ElementName abandonedCallThresholdSeconds
     * @param int $abandonedCallThresholdSeconds
     * @return $this
     */
    public function addAbandonedCallThresholdSeconds(int $abandonedCallThresholdSeconds)
    {
        $this->abandonedCallThresholdSeconds []= $abandonedCallThresholdSeconds;
        return $this;
    }

    /**
     * Getter for emailAddress
     *
     * @ElementName emailAddress
     * @return string[]
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Setter for emailAddress
     *
     * @ElementName emailAddress
     * @param string[] $emailAddress
     * @return $this
     */
    public function setEmailAddress(array $emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * Adder for emailAddress
     *
     * @ElementName emailAddress
     * @param string $emailAddress
     * @return $this
     */
    public function addEmailAddress(string $emailAddress)
    {
        $this->emailAddress []= $emailAddress;
        return $this;
    }


}

