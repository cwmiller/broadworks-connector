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
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportType|null
     */
    private $reportType = null;

    /**
     * @ElementName isRealtimeReport
     * @var bool|null
     */
    private $isRealtimeReport = null;

    /**
     * @ElementName isAgentParamRequired
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isAgentParamRequired = null;

    /**
     * @ElementName isCallCenterParamRequired
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isCallCenterParamRequired = null;

    /**
     * @ElementName isCallCenterDnisParamRequired
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isCallCenterDnisParamRequired = null;

    /**
     * @ElementName isSamplingPeriodParamRequired
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isSamplingPeriodParamRequired = null;

    /**
     * @ElementName isCallCompletionThresholdParamRequired
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isCallCompletionThresholdParamRequired = null;

    /**
     * @ElementName isShortDurationThresholdParamRequired
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isShortDurationThresholdParamRequired = null;

    /**
     * @ElementName isServiceLevelThresholdParamRequired
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isServiceLevelThresholdParamRequired = null;

    /**
     * @ElementName isServiceLevelInclusionsParamRequired
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isServiceLevelInclusionsParamRequired = null;

    /**
     * @ElementName isServiceLevelObjectiveThresholdParamRequired
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isServiceLevelObjectiveThresholdParamRequired = null;

    /**
     * @ElementName isAbandonedCallThresholdParamRequired
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportType|null
     */
    public function getReportType()
    {
        return $this->reportType;
    }

    /**
     * Setter for reportType
     *
     * @ElementName reportType
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportType|null $reportType
     * @return $this
     */
    public function setReportType(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportType $reportType)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    public function getIsAgentParamRequired()
    {
        return $this->isAgentParamRequired;
    }

    /**
     * Setter for isAgentParamRequired
     *
     * @ElementName isAgentParamRequired
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null $isAgentParamRequired
     * @return $this
     */
    public function setIsAgentParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isAgentParamRequired)
    {
        $this->isAgentParamRequired = $isAgentParamRequired;
        return $this;
    }

    /**
     * Getter for isCallCenterParamRequired
     *
     * @ElementName isCallCenterParamRequired
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    public function getIsCallCenterParamRequired()
    {
        return $this->isCallCenterParamRequired;
    }

    /**
     * Setter for isCallCenterParamRequired
     *
     * @ElementName isCallCenterParamRequired
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null $isCallCenterParamRequired
     * @return $this
     */
    public function setIsCallCenterParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isCallCenterParamRequired)
    {
        $this->isCallCenterParamRequired = $isCallCenterParamRequired;
        return $this;
    }

    /**
     * Getter for isCallCenterDnisParamRequired
     *
     * @ElementName isCallCenterDnisParamRequired
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    public function getIsCallCenterDnisParamRequired()
    {
        return $this->isCallCenterDnisParamRequired;
    }

    /**
     * Setter for isCallCenterDnisParamRequired
     *
     * @ElementName isCallCenterDnisParamRequired
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null $isCallCenterDnisParamRequired
     * @return $this
     */
    public function setIsCallCenterDnisParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isCallCenterDnisParamRequired)
    {
        $this->isCallCenterDnisParamRequired = $isCallCenterDnisParamRequired;
        return $this;
    }

    /**
     * Getter for isSamplingPeriodParamRequired
     *
     * @ElementName isSamplingPeriodParamRequired
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    public function getIsSamplingPeriodParamRequired()
    {
        return $this->isSamplingPeriodParamRequired;
    }

    /**
     * Setter for isSamplingPeriodParamRequired
     *
     * @ElementName isSamplingPeriodParamRequired
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null $isSamplingPeriodParamRequired
     * @return $this
     */
    public function setIsSamplingPeriodParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isSamplingPeriodParamRequired)
    {
        $this->isSamplingPeriodParamRequired = $isSamplingPeriodParamRequired;
        return $this;
    }

    /**
     * Getter for isCallCompletionThresholdParamRequired
     *
     * @ElementName isCallCompletionThresholdParamRequired
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    public function getIsCallCompletionThresholdParamRequired()
    {
        return $this->isCallCompletionThresholdParamRequired;
    }

    /**
     * Setter for isCallCompletionThresholdParamRequired
     *
     * @ElementName isCallCompletionThresholdParamRequired
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null $isCallCompletionThresholdParamRequired
     * @return $this
     */
    public function setIsCallCompletionThresholdParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isCallCompletionThresholdParamRequired)
    {
        $this->isCallCompletionThresholdParamRequired = $isCallCompletionThresholdParamRequired;
        return $this;
    }

    /**
     * Getter for isShortDurationThresholdParamRequired
     *
     * @ElementName isShortDurationThresholdParamRequired
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    public function getIsShortDurationThresholdParamRequired()
    {
        return $this->isShortDurationThresholdParamRequired;
    }

    /**
     * Setter for isShortDurationThresholdParamRequired
     *
     * @ElementName isShortDurationThresholdParamRequired
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null $isShortDurationThresholdParamRequired
     * @return $this
     */
    public function setIsShortDurationThresholdParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isShortDurationThresholdParamRequired)
    {
        $this->isShortDurationThresholdParamRequired = $isShortDurationThresholdParamRequired;
        return $this;
    }

    /**
     * Getter for isServiceLevelThresholdParamRequired
     *
     * @ElementName isServiceLevelThresholdParamRequired
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    public function getIsServiceLevelThresholdParamRequired()
    {
        return $this->isServiceLevelThresholdParamRequired;
    }

    /**
     * Setter for isServiceLevelThresholdParamRequired
     *
     * @ElementName isServiceLevelThresholdParamRequired
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null $isServiceLevelThresholdParamRequired
     * @return $this
     */
    public function setIsServiceLevelThresholdParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isServiceLevelThresholdParamRequired)
    {
        $this->isServiceLevelThresholdParamRequired = $isServiceLevelThresholdParamRequired;
        return $this;
    }

    /**
     * Getter for isServiceLevelInclusionsParamRequired
     *
     * @ElementName isServiceLevelInclusionsParamRequired
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    public function getIsServiceLevelInclusionsParamRequired()
    {
        return $this->isServiceLevelInclusionsParamRequired;
    }

    /**
     * Setter for isServiceLevelInclusionsParamRequired
     *
     * @ElementName isServiceLevelInclusionsParamRequired
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null $isServiceLevelInclusionsParamRequired
     * @return $this
     */
    public function setIsServiceLevelInclusionsParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isServiceLevelInclusionsParamRequired)
    {
        $this->isServiceLevelInclusionsParamRequired = $isServiceLevelInclusionsParamRequired;
        return $this;
    }

    /**
     * Getter for isServiceLevelObjectiveThresholdParamRequired
     *
     * @ElementName isServiceLevelObjectiveThresholdParamRequired
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    public function getIsServiceLevelObjectiveThresholdParamRequired()
    {
        return $this->isServiceLevelObjectiveThresholdParamRequired;
    }

    /**
     * Setter for isServiceLevelObjectiveThresholdParamRequired
     *
     * @ElementName isServiceLevelObjectiveThresholdParamRequired
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null $isServiceLevelObjectiveThresholdParamRequired
     * @return $this
     */
    public function setIsServiceLevelObjectiveThresholdParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isServiceLevelObjectiveThresholdParamRequired)
    {
        $this->isServiceLevelObjectiveThresholdParamRequired = $isServiceLevelObjectiveThresholdParamRequired;
        return $this;
    }

    /**
     * Getter for isAbandonedCallThresholdParamRequired
     *
     * @ElementName isAbandonedCallThresholdParamRequired
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    public function getIsAbandonedCallThresholdParamRequired()
    {
        return $this->isAbandonedCallThresholdParamRequired;
    }

    /**
     * Setter for isAbandonedCallThresholdParamRequired
     *
     * @ElementName isAbandonedCallThresholdParamRequired
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null $isAbandonedCallThresholdParamRequired
     * @return $this
     */
    public function setIsAbandonedCallThresholdParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isAbandonedCallThresholdParamRequired)
    {
        $this->isAbandonedCallThresholdParamRequired = $isAbandonedCallThresholdParamRequired;
        return $this;
    }


}

