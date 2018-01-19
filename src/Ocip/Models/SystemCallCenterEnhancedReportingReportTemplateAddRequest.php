<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingReportTemplateAddRequest
 *
 * Request to add a system level call center report template.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallCenterEnhancedReportingReportTemplateAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

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
     * @ElementName dataTemplate
     * @var string|null
     */
    private $dataTemplate = null;

    /**
     * @ElementName filterNumber
     * @var int|null
     */
    private $filterNumber = null;

    /**
     * @ElementName xsltTemplate
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $xsltTemplate = null;

    /**
     * @ElementName scope
     * @var string|null
     */
    private $scope = null;

    /**
     * @ElementName isEnabled
     * @var bool|null
     */
    private $isEnabled = null;

    /**
     * @ElementName isRealtimeReport
     * @var bool|null
     */
    private $isRealtimeReport = null;

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
     * @ElementName filterValue
     * @var string[]
     */
    private $filterValue = array(
        
    );

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
     * Getter for filterNumber
     *
     * @ElementName filterNumber
     * @return int|null
     */
    public function getFilterNumber()
    {
        return $this->filterNumber;
    }

    /**
     * Setter for filterNumber
     *
     * @ElementName filterNumber
     * @param int|null $filterNumber
     * @return $this
     */
    public function setFilterNumber($filterNumber)
    {
        $this->filterNumber = $filterNumber;
        return $this;
    }

    /**
     * Getter for xsltTemplate
     *
     * @ElementName xsltTemplate
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    public function getXsltTemplate()
    {
        return $this->xsltTemplate;
    }

    /**
     * Setter for xsltTemplate
     *
     * @ElementName xsltTemplate
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null $xsltTemplate
     * @return $this
     */
    public function setXsltTemplate($xsltTemplate)
    {
        $this->xsltTemplate = $xsltTemplate;
        return $this;
    }

    /**
     * Getter for scope
     *
     * @ElementName scope
     * @return string|null
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Setter for scope
     *
     * @ElementName scope
     * @param string|null $scope
     * @return $this
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * Getter for isEnabled
     *
     * @ElementName isEnabled
     * @return bool|null
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Setter for isEnabled
     *
     * @ElementName isEnabled
     * @param bool|null $isEnabled
     * @return $this
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;
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

    /**
     * Getter for filterValue
     *
     * @ElementName filterValue
     * @return string[]
     */
    public function getFilterValue()
    {
        return $this->filterValue;
    }

    /**
     * Setter for filterValue
     *
     * @ElementName filterValue
     * @param string[] $filterValue
     * @return $this
     */
    public function setFilterValue($filterValue)
    {
        $this->filterValue = $filterValue;
        return $this;
    }

    /**
     * Adder for filterValue
     *
     * @ElementName filterValue
     * @param string $filterValue
     * @return $this
     */
    public function addFilterValue($filterValue)
    {
        $this->filterValue []= $filterValue;
        return $this;
    }


}
