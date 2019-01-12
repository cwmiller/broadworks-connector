<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse
 *
 * Response to UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest.
 *
 * @see UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:6708","type":"sequence"}]
 */
class UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isRealtimeReport
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:6708
     * @var bool|null
     */
    private $isRealtimeReport = null;

    /**
     * @ElementName requireAgentParam
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:6708
     * @var bool|null
     */
    private $requireAgentParam = null;

    /**
     * @ElementName requireCallCenterParam
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:6708
     * @var bool|null
     */
    private $requireCallCenterParam = null;

    /**
     * @ElementName requireCallCenterDnisParam
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:6708
     * @var bool|null
     */
    private $requireCallCenterDnisParam = null;

    /**
     * @ElementName requireSamplingPeriodParam
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:6708
     * @var bool|null
     */
    private $requireSamplingPeriodParam = null;

    /**
     * @ElementName callCompletionThresholdParam
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6708
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $callCompletionThresholdParam = null;

    /**
     * @ElementName shortDurationThresholdParam
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6708
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $shortDurationThresholdParam = null;

    /**
     * @ElementName serviceLevelThresholdParam
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6708
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $serviceLevelThresholdParam = null;

    /**
     * @ElementName serviceLevelInclusionsParam
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6708
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $serviceLevelInclusionsParam = null;

    /**
     * @ElementName serviceLevelObjectiveThresholdParam
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6708
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $serviceLevelObjectiveThresholdParam = null;

    /**
     * @ElementName abandonedCallThresholdParam
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6708
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $abandonedCallThresholdParam = null;

    /**
     * @ElementName serviceLevelThresholdParamNumber
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6708
     * @var int|null
     */
    private $serviceLevelThresholdParamNumber = null;

    /**
     * @ElementName abandonedCallThresholdParamNumber
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6708
     * @var int|null
     */
    private $abandonedCallThresholdParamNumber = null;

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
     * Getter for requireAgentParam
     *
     * @return bool
     */
    public function getRequireAgentParam()
    {
        return $this->requireAgentParam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requireAgentParam;
    }

    /**
     * Setter for requireAgentParam
     *
     * @param bool $requireAgentParam
     * @return $this
     */
    public function setRequireAgentParam($requireAgentParam)
    {
        $this->requireAgentParam = $requireAgentParam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequireAgentParam()
    {
        $this->requireAgentParam = null;
        return $this;
    }

    /**
     * Getter for requireCallCenterParam
     *
     * @return bool
     */
    public function getRequireCallCenterParam()
    {
        return $this->requireCallCenterParam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requireCallCenterParam;
    }

    /**
     * Setter for requireCallCenterParam
     *
     * @param bool $requireCallCenterParam
     * @return $this
     */
    public function setRequireCallCenterParam($requireCallCenterParam)
    {
        $this->requireCallCenterParam = $requireCallCenterParam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequireCallCenterParam()
    {
        $this->requireCallCenterParam = null;
        return $this;
    }

    /**
     * Getter for requireCallCenterDnisParam
     *
     * @return bool
     */
    public function getRequireCallCenterDnisParam()
    {
        return $this->requireCallCenterDnisParam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requireCallCenterDnisParam;
    }

    /**
     * Setter for requireCallCenterDnisParam
     *
     * @param bool $requireCallCenterDnisParam
     * @return $this
     */
    public function setRequireCallCenterDnisParam($requireCallCenterDnisParam)
    {
        $this->requireCallCenterDnisParam = $requireCallCenterDnisParam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequireCallCenterDnisParam()
    {
        $this->requireCallCenterDnisParam = null;
        return $this;
    }

    /**
     * Getter for requireSamplingPeriodParam
     *
     * @return bool
     */
    public function getRequireSamplingPeriodParam()
    {
        return $this->requireSamplingPeriodParam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requireSamplingPeriodParam;
    }

    /**
     * Setter for requireSamplingPeriodParam
     *
     * @param bool $requireSamplingPeriodParam
     * @return $this
     */
    public function setRequireSamplingPeriodParam($requireSamplingPeriodParam)
    {
        $this->requireSamplingPeriodParam = $requireSamplingPeriodParam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequireSamplingPeriodParam()
    {
        $this->requireSamplingPeriodParam = null;
        return $this;
    }

    /**
     * Getter for callCompletionThresholdParam
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     */
    public function getCallCompletionThresholdParam()
    {
        return $this->callCompletionThresholdParam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callCompletionThresholdParam;
    }

    /**
     * Setter for callCompletionThresholdParam
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $callCompletionThresholdParam
     * @return $this
     */
    public function setCallCompletionThresholdParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $callCompletionThresholdParam)
    {
        $this->callCompletionThresholdParam = $callCompletionThresholdParam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallCompletionThresholdParam()
    {
        $this->callCompletionThresholdParam = null;
        return $this;
    }

    /**
     * Getter for shortDurationThresholdParam
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     */
    public function getShortDurationThresholdParam()
    {
        return $this->shortDurationThresholdParam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->shortDurationThresholdParam;
    }

    /**
     * Setter for shortDurationThresholdParam
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $shortDurationThresholdParam
     * @return $this
     */
    public function setShortDurationThresholdParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $shortDurationThresholdParam)
    {
        $this->shortDurationThresholdParam = $shortDurationThresholdParam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetShortDurationThresholdParam()
    {
        $this->shortDurationThresholdParam = null;
        return $this;
    }

    /**
     * Getter for serviceLevelThresholdParam
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     */
    public function getServiceLevelThresholdParam()
    {
        return $this->serviceLevelThresholdParam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceLevelThresholdParam;
    }

    /**
     * Setter for serviceLevelThresholdParam
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $serviceLevelThresholdParam
     * @return $this
     */
    public function setServiceLevelThresholdParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $serviceLevelThresholdParam)
    {
        $this->serviceLevelThresholdParam = $serviceLevelThresholdParam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceLevelThresholdParam()
    {
        $this->serviceLevelThresholdParam = null;
        return $this;
    }

    /**
     * Getter for serviceLevelInclusionsParam
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     */
    public function getServiceLevelInclusionsParam()
    {
        return $this->serviceLevelInclusionsParam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceLevelInclusionsParam;
    }

    /**
     * Setter for serviceLevelInclusionsParam
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $serviceLevelInclusionsParam
     * @return $this
     */
    public function setServiceLevelInclusionsParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $serviceLevelInclusionsParam)
    {
        $this->serviceLevelInclusionsParam = $serviceLevelInclusionsParam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceLevelInclusionsParam()
    {
        $this->serviceLevelInclusionsParam = null;
        return $this;
    }

    /**
     * Getter for serviceLevelObjectiveThresholdParam
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     */
    public function getServiceLevelObjectiveThresholdParam()
    {
        return $this->serviceLevelObjectiveThresholdParam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceLevelObjectiveThresholdParam;
    }

    /**
     * Setter for serviceLevelObjectiveThresholdParam
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $serviceLevelObjectiveThresholdParam
     * @return $this
     */
    public function setServiceLevelObjectiveThresholdParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $serviceLevelObjectiveThresholdParam)
    {
        $this->serviceLevelObjectiveThresholdParam = $serviceLevelObjectiveThresholdParam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceLevelObjectiveThresholdParam()
    {
        $this->serviceLevelObjectiveThresholdParam = null;
        return $this;
    }

    /**
     * Getter for abandonedCallThresholdParam
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     */
    public function getAbandonedCallThresholdParam()
    {
        return $this->abandonedCallThresholdParam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->abandonedCallThresholdParam;
    }

    /**
     * Setter for abandonedCallThresholdParam
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $abandonedCallThresholdParam
     * @return $this
     */
    public function setAbandonedCallThresholdParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $abandonedCallThresholdParam)
    {
        $this->abandonedCallThresholdParam = $abandonedCallThresholdParam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAbandonedCallThresholdParam()
    {
        $this->abandonedCallThresholdParam = null;
        return $this;
    }

    /**
     * Getter for serviceLevelThresholdParamNumber
     *
     * @return int
     */
    public function getServiceLevelThresholdParamNumber()
    {
        return $this->serviceLevelThresholdParamNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceLevelThresholdParamNumber;
    }

    /**
     * Setter for serviceLevelThresholdParamNumber
     *
     * @param int $serviceLevelThresholdParamNumber
     * @return $this
     */
    public function setServiceLevelThresholdParamNumber($serviceLevelThresholdParamNumber)
    {
        $this->serviceLevelThresholdParamNumber = $serviceLevelThresholdParamNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceLevelThresholdParamNumber()
    {
        $this->serviceLevelThresholdParamNumber = null;
        return $this;
    }

    /**
     * Getter for abandonedCallThresholdParamNumber
     *
     * @return int
     */
    public function getAbandonedCallThresholdParamNumber()
    {
        return $this->abandonedCallThresholdParamNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->abandonedCallThresholdParamNumber;
    }

    /**
     * Setter for abandonedCallThresholdParamNumber
     *
     * @param int $abandonedCallThresholdParamNumber
     * @return $this
     */
    public function setAbandonedCallThresholdParamNumber($abandonedCallThresholdParamNumber)
    {
        $this->abandonedCallThresholdParamNumber = $abandonedCallThresholdParamNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAbandonedCallThresholdParamNumber()
    {
        $this->abandonedCallThresholdParamNumber = null;
        return $this;
    }


}

