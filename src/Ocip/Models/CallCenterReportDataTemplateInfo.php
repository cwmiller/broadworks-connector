<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportDataTemplateInfo
 *
 * Call center reporting data template info.
 *
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:6656","type":"sequence"}]
 */
class CallCenterReportDataTemplateInfo
{

    /**
     * @ElementName dataTemplate
     * @Type string
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6656
     * @var string|null
     */
    private $dataTemplate = null;

    /**
     * @ElementName reportType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportType
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6656
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportType|null
     */
    private $reportType = null;

    /**
     * @ElementName isRealtimeReport
     * @Type bool
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6656
     * @var bool|null
     */
    private $isRealtimeReport = null;

    /**
     * @ElementName isAgentParamRequired
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6656
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isAgentParamRequired = null;

    /**
     * @ElementName isCallCenterParamRequired
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6656
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isCallCenterParamRequired = null;

    /**
     * @ElementName isCallCenterDnisParamRequired
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6656
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isCallCenterDnisParamRequired = null;

    /**
     * @ElementName isSamplingPeriodParamRequired
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6656
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isSamplingPeriodParamRequired = null;

    /**
     * @ElementName isCallCompletionThresholdParamRequired
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6656
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isCallCompletionThresholdParamRequired = null;

    /**
     * @ElementName isShortDurationThresholdParamRequired
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6656
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isShortDurationThresholdParamRequired = null;

    /**
     * @ElementName isServiceLevelThresholdParamRequired
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6656
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isServiceLevelThresholdParamRequired = null;

    /**
     * @ElementName isServiceLevelInclusionsParamRequired
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6656
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isServiceLevelInclusionsParamRequired = null;

    /**
     * @ElementName isServiceLevelObjectiveThresholdParamRequired
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6656
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isServiceLevelObjectiveThresholdParamRequired = null;

    /**
     * @ElementName isAbandonedCallThresholdParamRequired
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6656
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption|null
     */
    private $isAbandonedCallThresholdParamRequired = null;

    /**
     * Getter for dataTemplate
     *
     * @return string
     */
    public function getDataTemplate()
    {
        return $this->dataTemplate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dataTemplate;
    }

    /**
     * Setter for dataTemplate
     *
     * @param string $dataTemplate
     * @return $this
     */
    public function setDataTemplate($dataTemplate)
    {
        $this->dataTemplate = $dataTemplate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDataTemplate()
    {
        $this->dataTemplate = null;
        return $this;
    }

    /**
     * Getter for reportType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportType
     */
    public function getReportType()
    {
        return $this->reportType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportType;
    }

    /**
     * Setter for reportType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportType $reportType
     * @return $this
     */
    public function setReportType(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportType $reportType)
    {
        $this->reportType = $reportType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportType()
    {
        $this->reportType = null;
        return $this;
    }

    /**
     * Getter for isRealtimeReport
     *
     * @return bool
     */
    public function getIsRealtimeReport()
    {
        return $this->isRealtimeReport instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isRealtimeReport;
    }

    /**
     * Setter for isRealtimeReport
     *
     * @param bool $isRealtimeReport
     * @return $this
     */
    public function setIsRealtimeReport($isRealtimeReport)
    {
        $this->isRealtimeReport = $isRealtimeReport;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsRealtimeReport()
    {
        $this->isRealtimeReport = null;
        return $this;
    }

    /**
     * Getter for isAgentParamRequired
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     */
    public function getIsAgentParamRequired()
    {
        return $this->isAgentParamRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isAgentParamRequired;
    }

    /**
     * Setter for isAgentParamRequired
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isAgentParamRequired
     * @return $this
     */
    public function setIsAgentParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isAgentParamRequired)
    {
        $this->isAgentParamRequired = $isAgentParamRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsAgentParamRequired()
    {
        $this->isAgentParamRequired = null;
        return $this;
    }

    /**
     * Getter for isCallCenterParamRequired
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     */
    public function getIsCallCenterParamRequired()
    {
        return $this->isCallCenterParamRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isCallCenterParamRequired;
    }

    /**
     * Setter for isCallCenterParamRequired
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isCallCenterParamRequired
     * @return $this
     */
    public function setIsCallCenterParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isCallCenterParamRequired)
    {
        $this->isCallCenterParamRequired = $isCallCenterParamRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsCallCenterParamRequired()
    {
        $this->isCallCenterParamRequired = null;
        return $this;
    }

    /**
     * Getter for isCallCenterDnisParamRequired
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     */
    public function getIsCallCenterDnisParamRequired()
    {
        return $this->isCallCenterDnisParamRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isCallCenterDnisParamRequired;
    }

    /**
     * Setter for isCallCenterDnisParamRequired
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isCallCenterDnisParamRequired
     * @return $this
     */
    public function setIsCallCenterDnisParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isCallCenterDnisParamRequired)
    {
        $this->isCallCenterDnisParamRequired = $isCallCenterDnisParamRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsCallCenterDnisParamRequired()
    {
        $this->isCallCenterDnisParamRequired = null;
        return $this;
    }

    /**
     * Getter for isSamplingPeriodParamRequired
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     */
    public function getIsSamplingPeriodParamRequired()
    {
        return $this->isSamplingPeriodParamRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isSamplingPeriodParamRequired;
    }

    /**
     * Setter for isSamplingPeriodParamRequired
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isSamplingPeriodParamRequired
     * @return $this
     */
    public function setIsSamplingPeriodParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isSamplingPeriodParamRequired)
    {
        $this->isSamplingPeriodParamRequired = $isSamplingPeriodParamRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsSamplingPeriodParamRequired()
    {
        $this->isSamplingPeriodParamRequired = null;
        return $this;
    }

    /**
     * Getter for isCallCompletionThresholdParamRequired
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     */
    public function getIsCallCompletionThresholdParamRequired()
    {
        return $this->isCallCompletionThresholdParamRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isCallCompletionThresholdParamRequired;
    }

    /**
     * Setter for isCallCompletionThresholdParamRequired
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isCallCompletionThresholdParamRequired
     * @return $this
     */
    public function setIsCallCompletionThresholdParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isCallCompletionThresholdParamRequired)
    {
        $this->isCallCompletionThresholdParamRequired = $isCallCompletionThresholdParamRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsCallCompletionThresholdParamRequired()
    {
        $this->isCallCompletionThresholdParamRequired = null;
        return $this;
    }

    /**
     * Getter for isShortDurationThresholdParamRequired
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     */
    public function getIsShortDurationThresholdParamRequired()
    {
        return $this->isShortDurationThresholdParamRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isShortDurationThresholdParamRequired;
    }

    /**
     * Setter for isShortDurationThresholdParamRequired
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isShortDurationThresholdParamRequired
     * @return $this
     */
    public function setIsShortDurationThresholdParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isShortDurationThresholdParamRequired)
    {
        $this->isShortDurationThresholdParamRequired = $isShortDurationThresholdParamRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsShortDurationThresholdParamRequired()
    {
        $this->isShortDurationThresholdParamRequired = null;
        return $this;
    }

    /**
     * Getter for isServiceLevelThresholdParamRequired
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     */
    public function getIsServiceLevelThresholdParamRequired()
    {
        return $this->isServiceLevelThresholdParamRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isServiceLevelThresholdParamRequired;
    }

    /**
     * Setter for isServiceLevelThresholdParamRequired
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isServiceLevelThresholdParamRequired
     * @return $this
     */
    public function setIsServiceLevelThresholdParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isServiceLevelThresholdParamRequired)
    {
        $this->isServiceLevelThresholdParamRequired = $isServiceLevelThresholdParamRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsServiceLevelThresholdParamRequired()
    {
        $this->isServiceLevelThresholdParamRequired = null;
        return $this;
    }

    /**
     * Getter for isServiceLevelInclusionsParamRequired
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     */
    public function getIsServiceLevelInclusionsParamRequired()
    {
        return $this->isServiceLevelInclusionsParamRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isServiceLevelInclusionsParamRequired;
    }

    /**
     * Setter for isServiceLevelInclusionsParamRequired
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isServiceLevelInclusionsParamRequired
     * @return $this
     */
    public function setIsServiceLevelInclusionsParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isServiceLevelInclusionsParamRequired)
    {
        $this->isServiceLevelInclusionsParamRequired = $isServiceLevelInclusionsParamRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsServiceLevelInclusionsParamRequired()
    {
        $this->isServiceLevelInclusionsParamRequired = null;
        return $this;
    }

    /**
     * Getter for isServiceLevelObjectiveThresholdParamRequired
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     */
    public function getIsServiceLevelObjectiveThresholdParamRequired()
    {
        return $this->isServiceLevelObjectiveThresholdParamRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isServiceLevelObjectiveThresholdParamRequired;
    }

    /**
     * Setter for isServiceLevelObjectiveThresholdParamRequired
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isServiceLevelObjectiveThresholdParamRequired
     * @return $this
     */
    public function setIsServiceLevelObjectiveThresholdParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isServiceLevelObjectiveThresholdParamRequired)
    {
        $this->isServiceLevelObjectiveThresholdParamRequired = $isServiceLevelObjectiveThresholdParamRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsServiceLevelObjectiveThresholdParamRequired()
    {
        $this->isServiceLevelObjectiveThresholdParamRequired = null;
        return $this;
    }

    /**
     * Getter for isAbandonedCallThresholdParamRequired
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption
     */
    public function getIsAbandonedCallThresholdParamRequired()
    {
        return $this->isAbandonedCallThresholdParamRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isAbandonedCallThresholdParamRequired;
    }

    /**
     * Setter for isAbandonedCallThresholdParamRequired
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isAbandonedCallThresholdParamRequired
     * @return $this
     */
    public function setIsAbandonedCallThresholdParamRequired(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInputParameterOption $isAbandonedCallThresholdParamRequired)
    {
        $this->isAbandonedCallThresholdParamRequired = $isAbandonedCallThresholdParamRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsAbandonedCallThresholdParamRequired()
    {
        $this->isAbandonedCallThresholdParamRequired = null;
        return $this;
    }


}

