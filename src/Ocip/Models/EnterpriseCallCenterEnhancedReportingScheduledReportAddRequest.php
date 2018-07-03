<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingScheduledReportAddRequest
 *
 * Request to add an enterprise level call center reporting scheduled report.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The startDate element is adjusted to the first occurrence of the
 * recurrent schedule that comes at or after startDate.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class EnterpriseCallCenterEnhancedReportingScheduledReportAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

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
     * @var string|null
     */
    private $samplingPeriod = null;

    /**
     * @ElementName startDayOfWeek
     * @var string|null
     */
    private $startDayOfWeek = null;

    /**
     * @ElementName reportTimeZone
     * @var string|null
     */
    private $reportTimeZone = null;

    /**
     * @ElementName reportDateFormat
     * @var string|null
     */
    private $reportDateFormat = null;

    /**
     * @ElementName reportTimeFormat
     * @var string|null
     */
    private $reportTimeFormat = null;

    /**
     * @ElementName reportInterval
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInterval|null
     */
    private $reportInterval = null;

    /**
     * @ElementName reportFormat
     * @var string|null
     */
    private $reportFormat = null;

    /**
     * @ElementName agent
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelection|null
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
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

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
    public function setReportTemplate($reportTemplate)
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
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * Getter for samplingPeriod
     *
     * @ElementName samplingPeriod
     * @return string|null
     */
    public function getSamplingPeriod()
    {
        return $this->samplingPeriod;
    }

    /**
     * Setter for samplingPeriod
     *
     * @ElementName samplingPeriod
     * @param string|null $samplingPeriod
     * @return $this
     */
    public function setSamplingPeriod($samplingPeriod)
    {
        $this->samplingPeriod = $samplingPeriod;
        return $this;
    }

    /**
     * Getter for startDayOfWeek
     *
     * @ElementName startDayOfWeek
     * @return string|null
     */
    public function getStartDayOfWeek()
    {
        return $this->startDayOfWeek;
    }

    /**
     * Setter for startDayOfWeek
     *
     * @ElementName startDayOfWeek
     * @param string|null $startDayOfWeek
     * @return $this
     */
    public function setStartDayOfWeek($startDayOfWeek)
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
     * @return string|null
     */
    public function getReportDateFormat()
    {
        return $this->reportDateFormat;
    }

    /**
     * Setter for reportDateFormat
     *
     * @ElementName reportDateFormat
     * @param string|null $reportDateFormat
     * @return $this
     */
    public function setReportDateFormat($reportDateFormat)
    {
        $this->reportDateFormat = $reportDateFormat;
        return $this;
    }

    /**
     * Getter for reportTimeFormat
     *
     * @ElementName reportTimeFormat
     * @return string|null
     */
    public function getReportTimeFormat()
    {
        return $this->reportTimeFormat;
    }

    /**
     * Setter for reportTimeFormat
     *
     * @ElementName reportTimeFormat
     * @param string|null $reportTimeFormat
     * @return $this
     */
    public function setReportTimeFormat($reportTimeFormat)
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
    public function setReportInterval($reportInterval)
    {
        $this->reportInterval = $reportInterval;
        return $this;
    }

    /**
     * Getter for reportFormat
     *
     * @ElementName reportFormat
     * @return string|null
     */
    public function getReportFormat()
    {
        return $this->reportFormat;
    }

    /**
     * Setter for reportFormat
     *
     * @ElementName reportFormat
     * @param string|null $reportFormat
     * @return $this
     */
    public function setReportFormat($reportFormat)
    {
        $this->reportFormat = $reportFormat;
        return $this;
    }

    /**
     * Getter for agent
     *
     * @ElementName agent
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelection|null
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Setter for agent
     *
     * @ElementName agent
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelection|null $agent
     * @return $this
     */
    public function setAgent($agent)
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
    public function setCallCenter($callCenter)
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
    public function setDnis($dnis)
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
    public function setServiceLevelThresholdSeconds($serviceLevelThresholdSeconds)
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
    public function addServiceLevelThresholdSeconds($serviceLevelThresholdSeconds)
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
    public function setServiceLevelInclusions($serviceLevelInclusions)
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
    public function setAbandonedCallThresholdSeconds($abandonedCallThresholdSeconds)
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
    public function addAbandonedCallThresholdSeconds($abandonedCallThresholdSeconds)
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
    public function setEmailAddress($emailAddress)
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
    public function addEmailAddress($emailAddress)
    {
        $this->emailAddress []= $emailAddress;
        return $this;
    }


}

