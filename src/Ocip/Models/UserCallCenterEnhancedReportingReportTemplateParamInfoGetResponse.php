<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse
 *
 * Response to UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest.
 *
 * @see UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest
 */
class UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isRealtimeReport
     * @var bool|null
     */
    private $isRealtimeReport = null;

    /**
     * @ElementName requireAgentParam
     * @var bool|null
     */
    private $requireAgentParam = null;

    /**
     * @ElementName requireCallCenterParam
     * @var bool|null
     */
    private $requireCallCenterParam = null;

    /**
     * @ElementName requireCallCenterDnisParam
     * @var bool|null
     */
    private $requireCallCenterDnisParam = null;

    /**
     * @ElementName requireSamplingPeriodParam
     * @var bool|null
     */
    private $requireSamplingPeriodParam = null;

    /**
     * @ElementName callCompletionThresholdParam
     * @var string|null
     */
    private $callCompletionThresholdParam = null;

    /**
     * @ElementName shortDurationThresholdParam
     * @var string|null
     */
    private $shortDurationThresholdParam = null;

    /**
     * @ElementName serviceLevelThresholdParam
     * @var string|null
     */
    private $serviceLevelThresholdParam = null;

    /**
     * @ElementName serviceLevelInclusionsParam
     * @var string|null
     */
    private $serviceLevelInclusionsParam = null;

    /**
     * @ElementName serviceLevelObjectiveThresholdParam
     * @var string|null
     */
    private $serviceLevelObjectiveThresholdParam = null;

    /**
     * @ElementName abandonedCallThresholdParam
     * @var string|null
     */
    private $abandonedCallThresholdParam = null;

    /**
     * @ElementName serviceLevelThresholdParamNumber
     * @var int|null
     */
    private $serviceLevelThresholdParamNumber = null;

    /**
     * @ElementName abandonedCallThresholdParamNumber
     * @var int|null
     */
    private $abandonedCallThresholdParamNumber = null;

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
     * Getter for requireAgentParam
     *
     * @ElementName requireAgentParam
     * @return bool|null
     */
    public function getRequireAgentParam()
    {
        return $this->requireAgentParam;
    }

    /**
     * Setter for requireAgentParam
     *
     * @ElementName requireAgentParam
     * @param bool|null $requireAgentParam
     * @return $this
     */
    public function setRequireAgentParam($requireAgentParam)
    {
        $this->requireAgentParam = $requireAgentParam;
        return $this;
    }

    /**
     * Getter for requireCallCenterParam
     *
     * @ElementName requireCallCenterParam
     * @return bool|null
     */
    public function getRequireCallCenterParam()
    {
        return $this->requireCallCenterParam;
    }

    /**
     * Setter for requireCallCenterParam
     *
     * @ElementName requireCallCenterParam
     * @param bool|null $requireCallCenterParam
     * @return $this
     */
    public function setRequireCallCenterParam($requireCallCenterParam)
    {
        $this->requireCallCenterParam = $requireCallCenterParam;
        return $this;
    }

    /**
     * Getter for requireCallCenterDnisParam
     *
     * @ElementName requireCallCenterDnisParam
     * @return bool|null
     */
    public function getRequireCallCenterDnisParam()
    {
        return $this->requireCallCenterDnisParam;
    }

    /**
     * Setter for requireCallCenterDnisParam
     *
     * @ElementName requireCallCenterDnisParam
     * @param bool|null $requireCallCenterDnisParam
     * @return $this
     */
    public function setRequireCallCenterDnisParam($requireCallCenterDnisParam)
    {
        $this->requireCallCenterDnisParam = $requireCallCenterDnisParam;
        return $this;
    }

    /**
     * Getter for requireSamplingPeriodParam
     *
     * @ElementName requireSamplingPeriodParam
     * @return bool|null
     */
    public function getRequireSamplingPeriodParam()
    {
        return $this->requireSamplingPeriodParam;
    }

    /**
     * Setter for requireSamplingPeriodParam
     *
     * @ElementName requireSamplingPeriodParam
     * @param bool|null $requireSamplingPeriodParam
     * @return $this
     */
    public function setRequireSamplingPeriodParam($requireSamplingPeriodParam)
    {
        $this->requireSamplingPeriodParam = $requireSamplingPeriodParam;
        return $this;
    }

    /**
     * Getter for callCompletionThresholdParam
     *
     * @ElementName callCompletionThresholdParam
     * @return string|null
     */
    public function getCallCompletionThresholdParam()
    {
        return $this->callCompletionThresholdParam;
    }

    /**
     * Setter for callCompletionThresholdParam
     *
     * @ElementName callCompletionThresholdParam
     * @param string|null $callCompletionThresholdParam
     * @return $this
     */
    public function setCallCompletionThresholdParam($callCompletionThresholdParam)
    {
        $this->callCompletionThresholdParam = $callCompletionThresholdParam;
        return $this;
    }

    /**
     * Getter for shortDurationThresholdParam
     *
     * @ElementName shortDurationThresholdParam
     * @return string|null
     */
    public function getShortDurationThresholdParam()
    {
        return $this->shortDurationThresholdParam;
    }

    /**
     * Setter for shortDurationThresholdParam
     *
     * @ElementName shortDurationThresholdParam
     * @param string|null $shortDurationThresholdParam
     * @return $this
     */
    public function setShortDurationThresholdParam($shortDurationThresholdParam)
    {
        $this->shortDurationThresholdParam = $shortDurationThresholdParam;
        return $this;
    }

    /**
     * Getter for serviceLevelThresholdParam
     *
     * @ElementName serviceLevelThresholdParam
     * @return string|null
     */
    public function getServiceLevelThresholdParam()
    {
        return $this->serviceLevelThresholdParam;
    }

    /**
     * Setter for serviceLevelThresholdParam
     *
     * @ElementName serviceLevelThresholdParam
     * @param string|null $serviceLevelThresholdParam
     * @return $this
     */
    public function setServiceLevelThresholdParam($serviceLevelThresholdParam)
    {
        $this->serviceLevelThresholdParam = $serviceLevelThresholdParam;
        return $this;
    }

    /**
     * Getter for serviceLevelInclusionsParam
     *
     * @ElementName serviceLevelInclusionsParam
     * @return string|null
     */
    public function getServiceLevelInclusionsParam()
    {
        return $this->serviceLevelInclusionsParam;
    }

    /**
     * Setter for serviceLevelInclusionsParam
     *
     * @ElementName serviceLevelInclusionsParam
     * @param string|null $serviceLevelInclusionsParam
     * @return $this
     */
    public function setServiceLevelInclusionsParam($serviceLevelInclusionsParam)
    {
        $this->serviceLevelInclusionsParam = $serviceLevelInclusionsParam;
        return $this;
    }

    /**
     * Getter for serviceLevelObjectiveThresholdParam
     *
     * @ElementName serviceLevelObjectiveThresholdParam
     * @return string|null
     */
    public function getServiceLevelObjectiveThresholdParam()
    {
        return $this->serviceLevelObjectiveThresholdParam;
    }

    /**
     * Setter for serviceLevelObjectiveThresholdParam
     *
     * @ElementName serviceLevelObjectiveThresholdParam
     * @param string|null $serviceLevelObjectiveThresholdParam
     * @return $this
     */
    public function setServiceLevelObjectiveThresholdParam($serviceLevelObjectiveThresholdParam)
    {
        $this->serviceLevelObjectiveThresholdParam = $serviceLevelObjectiveThresholdParam;
        return $this;
    }

    /**
     * Getter for abandonedCallThresholdParam
     *
     * @ElementName abandonedCallThresholdParam
     * @return string|null
     */
    public function getAbandonedCallThresholdParam()
    {
        return $this->abandonedCallThresholdParam;
    }

    /**
     * Setter for abandonedCallThresholdParam
     *
     * @ElementName abandonedCallThresholdParam
     * @param string|null $abandonedCallThresholdParam
     * @return $this
     */
    public function setAbandonedCallThresholdParam($abandonedCallThresholdParam)
    {
        $this->abandonedCallThresholdParam = $abandonedCallThresholdParam;
        return $this;
    }

    /**
     * Getter for serviceLevelThresholdParamNumber
     *
     * @ElementName serviceLevelThresholdParamNumber
     * @return int|null
     */
    public function getServiceLevelThresholdParamNumber()
    {
        return $this->serviceLevelThresholdParamNumber;
    }

    /**
     * Setter for serviceLevelThresholdParamNumber
     *
     * @ElementName serviceLevelThresholdParamNumber
     * @param int|null $serviceLevelThresholdParamNumber
     * @return $this
     */
    public function setServiceLevelThresholdParamNumber($serviceLevelThresholdParamNumber)
    {
        $this->serviceLevelThresholdParamNumber = $serviceLevelThresholdParamNumber;
        return $this;
    }

    /**
     * Getter for abandonedCallThresholdParamNumber
     *
     * @ElementName abandonedCallThresholdParamNumber
     * @return int|null
     */
    public function getAbandonedCallThresholdParamNumber()
    {
        return $this->abandonedCallThresholdParamNumber;
    }

    /**
     * Setter for abandonedCallThresholdParamNumber
     *
     * @ElementName abandonedCallThresholdParamNumber
     * @param int|null $abandonedCallThresholdParamNumber
     * @return $this
     */
    public function setAbandonedCallThresholdParamNumber($abandonedCallThresholdParamNumber)
    {
        $this->abandonedCallThresholdParamNumber = $abandonedCallThresholdParamNumber;
        return $this;
    }


}

