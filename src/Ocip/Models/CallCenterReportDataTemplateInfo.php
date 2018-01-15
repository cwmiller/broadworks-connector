<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportDataTemplateInfo
 *
 * Call center reporting data template info.
 */
class CallCenterReportDataTemplateInfo
{

    /**
     * @ElementName dataTemplate
     * @var string|null
     */
    private $dataTemplate = null;

    /**
     * @ElementName reportType
     * @var string|null
     */
    private $reportType = null;

    /**
     * @ElementName isRealtimeReport
     * @var bool|null
     */
    private $isRealtimeReport = null;

    /**
     * @ElementName isAgentParamRequired
     * @var string|null
     */
    private $isAgentParamRequired = null;

    /**
     * @ElementName isCallCenterParamRequired
     * @var string|null
     */
    private $isCallCenterParamRequired = null;

    /**
     * @ElementName isCallCenterDnisParamRequired
     * @var string|null
     */
    private $isCallCenterDnisParamRequired = null;

    /**
     * @ElementName isSamplingPeriodParamRequired
     * @var string|null
     */
    private $isSamplingPeriodParamRequired = null;

    /**
     * @ElementName isCallCompletionThresholdParamRequired
     * @var string|null
     */
    private $isCallCompletionThresholdParamRequired = null;

    /**
     * @ElementName isShortDurationThresholdParamRequired
     * @var string|null
     */
    private $isShortDurationThresholdParamRequired = null;

    /**
     * @ElementName isServiceLevelThresholdParamRequired
     * @var string|null
     */
    private $isServiceLevelThresholdParamRequired = null;

    /**
     * @ElementName isServiceLevelInclusionsParamRequired
     * @var string|null
     */
    private $isServiceLevelInclusionsParamRequired = null;

    /**
     * @ElementName isServiceLevelObjectiveThresholdParamRequired
     * @var string|null
     */
    private $isServiceLevelObjectiveThresholdParamRequired = null;

    /**
     * @ElementName isAbandonedCallThresholdParamRequired
     * @var string|null
     */
    private $isAbandonedCallThresholdParamRequired = null;

    /**
     * Getter for dataTemplate
     *
     * @ElementName dataTemplate
     * @return string|null
     */
    public function getDataTemplate()
    {
        return $this->dataTemplate;
    }

    /**
     * Setter for dataTemplate
     *
     * @ElementName dataTemplate
     * @param string|null $dataTemplate
     * @return $this
     */
    public function setDataTemplate($dataTemplate)
    {
        $this->dataTemplate = $dataTemplate;
        return $this;
    }

    /**
     * Getter for reportType
     *
     * @ElementName reportType
     * @return string|null
     */
    public function getReportType()
    {
        return $this->reportType;
    }

    /**
     * Setter for reportType
     *
     * @ElementName reportType
     * @param string|null $reportType
     * @return $this
     */
    public function setReportType($reportType)
    {
        $this->reportType = $reportType;
        return $this;
    }

    /**
     * Getter for isRealtimeReport
     *
     * @ElementName isRealtimeReport
     * @return bool|null
     */
    public function getIsRealtimeReport()
    {
        return $this->isRealtimeReport;
    }

    /**
     * Setter for isRealtimeReport
     *
     * @ElementName isRealtimeReport
     * @param bool|null $isRealtimeReport
     * @return $this
     */
    public function setIsRealtimeReport($isRealtimeReport)
    {
        $this->isRealtimeReport = $isRealtimeReport;
        return $this;
    }

    /**
     * Getter for isAgentParamRequired
     *
     * @ElementName isAgentParamRequired
     * @return string|null
     */
    public function getIsAgentParamRequired()
    {
        return $this->isAgentParamRequired;
    }

    /**
     * Setter for isAgentParamRequired
     *
     * @ElementName isAgentParamRequired
     * @param string|null $isAgentParamRequired
     * @return $this
     */
    public function setIsAgentParamRequired($isAgentParamRequired)
    {
        $this->isAgentParamRequired = $isAgentParamRequired;
        return $this;
    }

    /**
     * Getter for isCallCenterParamRequired
     *
     * @ElementName isCallCenterParamRequired
     * @return string|null
     */
    public function getIsCallCenterParamRequired()
    {
        return $this->isCallCenterParamRequired;
    }

    /**
     * Setter for isCallCenterParamRequired
     *
     * @ElementName isCallCenterParamRequired
     * @param string|null $isCallCenterParamRequired
     * @return $this
     */
    public function setIsCallCenterParamRequired($isCallCenterParamRequired)
    {
        $this->isCallCenterParamRequired = $isCallCenterParamRequired;
        return $this;
    }

    /**
     * Getter for isCallCenterDnisParamRequired
     *
     * @ElementName isCallCenterDnisParamRequired
     * @return string|null
     */
    public function getIsCallCenterDnisParamRequired()
    {
        return $this->isCallCenterDnisParamRequired;
    }

    /**
     * Setter for isCallCenterDnisParamRequired
     *
     * @ElementName isCallCenterDnisParamRequired
     * @param string|null $isCallCenterDnisParamRequired
     * @return $this
     */
    public function setIsCallCenterDnisParamRequired($isCallCenterDnisParamRequired)
    {
        $this->isCallCenterDnisParamRequired = $isCallCenterDnisParamRequired;
        return $this;
    }

    /**
     * Getter for isSamplingPeriodParamRequired
     *
     * @ElementName isSamplingPeriodParamRequired
     * @return string|null
     */
    public function getIsSamplingPeriodParamRequired()
    {
        return $this->isSamplingPeriodParamRequired;
    }

    /**
     * Setter for isSamplingPeriodParamRequired
     *
     * @ElementName isSamplingPeriodParamRequired
     * @param string|null $isSamplingPeriodParamRequired
     * @return $this
     */
    public function setIsSamplingPeriodParamRequired($isSamplingPeriodParamRequired)
    {
        $this->isSamplingPeriodParamRequired = $isSamplingPeriodParamRequired;
        return $this;
    }

    /**
     * Getter for isCallCompletionThresholdParamRequired
     *
     * @ElementName isCallCompletionThresholdParamRequired
     * @return string|null
     */
    public function getIsCallCompletionThresholdParamRequired()
    {
        return $this->isCallCompletionThresholdParamRequired;
    }

    /**
     * Setter for isCallCompletionThresholdParamRequired
     *
     * @ElementName isCallCompletionThresholdParamRequired
     * @param string|null $isCallCompletionThresholdParamRequired
     * @return $this
     */
    public function setIsCallCompletionThresholdParamRequired($isCallCompletionThresholdParamRequired)
    {
        $this->isCallCompletionThresholdParamRequired = $isCallCompletionThresholdParamRequired;
        return $this;
    }

    /**
     * Getter for isShortDurationThresholdParamRequired
     *
     * @ElementName isShortDurationThresholdParamRequired
     * @return string|null
     */
    public function getIsShortDurationThresholdParamRequired()
    {
        return $this->isShortDurationThresholdParamRequired;
    }

    /**
     * Setter for isShortDurationThresholdParamRequired
     *
     * @ElementName isShortDurationThresholdParamRequired
     * @param string|null $isShortDurationThresholdParamRequired
     * @return $this
     */
    public function setIsShortDurationThresholdParamRequired($isShortDurationThresholdParamRequired)
    {
        $this->isShortDurationThresholdParamRequired = $isShortDurationThresholdParamRequired;
        return $this;
    }

    /**
     * Getter for isServiceLevelThresholdParamRequired
     *
     * @ElementName isServiceLevelThresholdParamRequired
     * @return string|null
     */
    public function getIsServiceLevelThresholdParamRequired()
    {
        return $this->isServiceLevelThresholdParamRequired;
    }

    /**
     * Setter for isServiceLevelThresholdParamRequired
     *
     * @ElementName isServiceLevelThresholdParamRequired
     * @param string|null $isServiceLevelThresholdParamRequired
     * @return $this
     */
    public function setIsServiceLevelThresholdParamRequired($isServiceLevelThresholdParamRequired)
    {
        $this->isServiceLevelThresholdParamRequired = $isServiceLevelThresholdParamRequired;
        return $this;
    }

    /**
     * Getter for isServiceLevelInclusionsParamRequired
     *
     * @ElementName isServiceLevelInclusionsParamRequired
     * @return string|null
     */
    public function getIsServiceLevelInclusionsParamRequired()
    {
        return $this->isServiceLevelInclusionsParamRequired;
    }

    /**
     * Setter for isServiceLevelInclusionsParamRequired
     *
     * @ElementName isServiceLevelInclusionsParamRequired
     * @param string|null $isServiceLevelInclusionsParamRequired
     * @return $this
     */
    public function setIsServiceLevelInclusionsParamRequired($isServiceLevelInclusionsParamRequired)
    {
        $this->isServiceLevelInclusionsParamRequired = $isServiceLevelInclusionsParamRequired;
        return $this;
    }

    /**
     * Getter for isServiceLevelObjectiveThresholdParamRequired
     *
     * @ElementName isServiceLevelObjectiveThresholdParamRequired
     * @return string|null
     */
    public function getIsServiceLevelObjectiveThresholdParamRequired()
    {
        return $this->isServiceLevelObjectiveThresholdParamRequired;
    }

    /**
     * Setter for isServiceLevelObjectiveThresholdParamRequired
     *
     * @ElementName isServiceLevelObjectiveThresholdParamRequired
     * @param string|null $isServiceLevelObjectiveThresholdParamRequired
     * @return $this
     */
    public function setIsServiceLevelObjectiveThresholdParamRequired($isServiceLevelObjectiveThresholdParamRequired)
    {
        $this->isServiceLevelObjectiveThresholdParamRequired = $isServiceLevelObjectiveThresholdParamRequired;
        return $this;
    }

    /**
     * Getter for isAbandonedCallThresholdParamRequired
     *
     * @ElementName isAbandonedCallThresholdParamRequired
     * @return string|null
     */
    public function getIsAbandonedCallThresholdParamRequired()
    {
        return $this->isAbandonedCallThresholdParamRequired;
    }

    /**
     * Setter for isAbandonedCallThresholdParamRequired
     *
     * @ElementName isAbandonedCallThresholdParamRequired
     * @param string|null $isAbandonedCallThresholdParamRequired
     * @return $this
     */
    public function setIsAbandonedCallThresholdParamRequired($isAbandonedCallThresholdParamRequired)
    {
        $this->isAbandonedCallThresholdParamRequired = $isAbandonedCallThresholdParamRequired;
        return $this;
    }


}

