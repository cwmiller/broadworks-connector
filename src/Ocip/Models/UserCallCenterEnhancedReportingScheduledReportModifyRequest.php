<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterEnhancedReportingScheduledReportModifyRequest
 *
 * Request to modify a call center reporting scheduled report created by a supervisor.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The startDate element is adjusted to the first occurrence of the recurrent schedule that comes at or after startDate.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:6863","type":"sequence","children":[{"id":"4d65d3449061c568639c8cc1e2492285:6877","type":"choice","optional":true}]}]
 */
class UserCallCenterEnhancedReportingScheduledReportModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName supervisorUserId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $supervisorUserId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $newName = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $description = null;

    /**
     * @ElementName schedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSchedule
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSchedule|null
     */
    protected $schedule = null;

    /**
     * @ElementName samplingPeriod
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSamplingPeriod
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportSamplingPeriod|null
     */
    protected $samplingPeriod = null;

    /**
     * @ElementName startDayOfWeek
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @var \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null
     */
    protected $startDayOfWeek = null;

    /**
     * @ElementName reportTimeZone
     * @Type string
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    protected $reportTimeZone = null;

    /**
     * @ElementName reportDateFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDateFormat
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDateFormat|null
     */
    protected $reportDateFormat = null;

    /**
     * @ElementName reportTimeFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTimeFormat
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTimeFormat|null
     */
    protected $reportTimeFormat = null;

    /**
     * @ElementName reportInterval
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInterval
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInterval|null
     */
    protected $reportInterval = null;

    /**
     * @ElementName reportFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportFileFormat
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportFileFormat|null
     */
    protected $reportFormat = null;

    /**
     * @ElementName agent
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelection
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelection|null
     */
    protected $agent = null;

    /**
     * @ElementName callCenter
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportCallCenterSelection
     * @Group 4d65d3449061c568639c8cc1e2492285:6877
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportCallCenterSelection|null
     */
    protected $callCenter = null;

    /**
     * @ElementName dnis
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportDNISSelection
     * @Group 4d65d3449061c568639c8cc1e2492285:6877
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportDNISSelection|null
     */
    protected $dnis = null;

    /**
     * @ElementName callCompletionThresholdSeconds
     * @Type int
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @MinInclusive 1
     * @MaxInclusive 7200
     * @var int|null
     */
    protected $callCompletionThresholdSeconds = null;

    /**
     * @ElementName shortDurationThresholdSeconds
     * @Type int
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @MinInclusive 1
     * @MaxInclusive 7200
     * @var int|null
     */
    protected $shortDurationThresholdSeconds = null;

    /**
     * @ElementName serviceLevelThresholdSeconds
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServiceLevelThresholdReplacementList
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServiceLevelThresholdReplacementList|null
     */
    protected $serviceLevelThresholdSeconds = null;

    /**
     * @ElementName serviceLevelInclusions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportServiceLevelInclusionsModify
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportServiceLevelInclusionsModify|null
     */
    protected $serviceLevelInclusions = null;

    /**
     * @ElementName serviceLevelObjectivePercentage
     * @Type int
     * @Nillable
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @MinInclusive 0
     * @MaxInclusive 100
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $serviceLevelObjectivePercentage = null;

    /**
     * @ElementName abandonedCallThresholdSeconds
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportAbandonedCallThresholdReplacementList
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportAbandonedCallThresholdReplacementList|null
     */
    protected $abandonedCallThresholdSeconds = null;

    /**
     * @ElementName emailAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportReplacementEmailList
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6863
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportReplacementEmailList|null
     */
    protected $emailAddress = null;

    /**
     * Getter for supervisorUserId
     *
     * @return string
     */
    public function getSupervisorUserId()
    {
        return $this->supervisorUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supervisorUserId;
    }

    /**
     * Setter for supervisorUserId
     *
     * @param string $supervisorUserId
     * @return $this
     */
    public function setSupervisorUserId($supervisorUserId)
    {
        $this->supervisorUserId = $supervisorUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupervisorUserId()
    {
        $this->supervisorUserId = null;
        return $this;
    }

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for newName
     *
     * @return string
     */
    public function getNewName()
    {
        return $this->newName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newName;
    }

    /**
     * Setter for newName
     *
     * @param string $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewName()
    {
        $this->newName = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelection
     */
    public function getAgent()
    {
        return $this->agent instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agent;
    }

    /**
     * Setter for agent
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelection $agent
     * @return $this
     */
    public function setAgent(\CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportAgentSelection $agent)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServiceLevelThresholdReplacementList
     */
    public function getServiceLevelThresholdSeconds()
    {
        return $this->serviceLevelThresholdSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceLevelThresholdSeconds;
    }

    /**
     * Setter for serviceLevelThresholdSeconds
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServiceLevelThresholdReplacementList $serviceLevelThresholdSeconds
     * @return $this
     */
    public function setServiceLevelThresholdSeconds(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServiceLevelThresholdReplacementList $serviceLevelThresholdSeconds)
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
     * Getter for serviceLevelInclusions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportServiceLevelInclusionsModify
     */
    public function getServiceLevelInclusions()
    {
        return $this->serviceLevelInclusions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceLevelInclusions;
    }

    /**
     * Setter for serviceLevelInclusions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportServiceLevelInclusionsModify $serviceLevelInclusions
     * @return $this
     */
    public function setServiceLevelInclusions(\CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledReportServiceLevelInclusionsModify $serviceLevelInclusions)
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
     * @return int|null
     */
    public function getServiceLevelObjectivePercentage()
    {
        return $this->serviceLevelObjectivePercentage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceLevelObjectivePercentage;
    }

    /**
     * Setter for serviceLevelObjectivePercentage
     *
     * @param int|null $serviceLevelObjectivePercentage
     * @return $this
     */
    public function setServiceLevelObjectivePercentage($serviceLevelObjectivePercentage = null)
    {
        if ($serviceLevelObjectivePercentage === null) {
            $this->serviceLevelObjectivePercentage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->serviceLevelObjectivePercentage = $serviceLevelObjectivePercentage;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportAbandonedCallThresholdReplacementList
     */
    public function getAbandonedCallThresholdSeconds()
    {
        return $this->abandonedCallThresholdSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->abandonedCallThresholdSeconds;
    }

    /**
     * Setter for abandonedCallThresholdSeconds
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportAbandonedCallThresholdReplacementList $abandonedCallThresholdSeconds
     * @return $this
     */
    public function setAbandonedCallThresholdSeconds(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportAbandonedCallThresholdReplacementList $abandonedCallThresholdSeconds)
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
     * Getter for emailAddress
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportReplacementEmailList
     */
    public function getEmailAddress()
    {
        return $this->emailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emailAddress;
    }

    /**
     * Setter for emailAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportReplacementEmailList $emailAddress
     * @return $this
     */
    public function setEmailAddress(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportReplacementEmailList $emailAddress)
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
}

