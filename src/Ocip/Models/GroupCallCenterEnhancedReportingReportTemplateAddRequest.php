<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedReportingReportTemplateAddRequest
 *
 * Request to add a group level call center report template.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCallCenterEnhancedReportingReportTemplateAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

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
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateAccessOption|null
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
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $callCompletionThresholdParam = null;

    /**
     * @ElementName shortDurationThresholdParam
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $shortDurationThresholdParam = null;

    /**
     * @ElementName serviceLevelThresholdParam
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $serviceLevelThresholdParam = null;

    /**
     * @ElementName serviceLevelInclusionsParam
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $serviceLevelInclusionsParam = null;

    /**
     * @ElementName serviceLevelObjectiveThresholdParam
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $serviceLevelObjectiveThresholdParam = null;

    /**
     * @ElementName abandonedCallThresholdParam
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
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
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
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
    public function setXsltTemplate(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $xsltTemplate)
    {
        $this->xsltTemplate = $xsltTemplate;
        return $this;
    }

    /**
     * Getter for scope
     *
     * @ElementName scope
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateAccessOption|null
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Setter for scope
     *
     * @ElementName scope
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateAccessOption|null $scope
     * @return $this
     */
    public function setScope(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateAccessOption $scope)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    public function getCallCompletionThresholdParam()
    {
        return $this->callCompletionThresholdParam;
    }

    /**
     * Setter for callCompletionThresholdParam
     *
     * @ElementName callCompletionThresholdParam
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null $callCompletionThresholdParam
     * @return $this
     */
    public function setCallCompletionThresholdParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $callCompletionThresholdParam)
    {
        $this->callCompletionThresholdParam = $callCompletionThresholdParam;
        return $this;
    }

    /**
     * Getter for shortDurationThresholdParam
     *
     * @ElementName shortDurationThresholdParam
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    public function getShortDurationThresholdParam()
    {
        return $this->shortDurationThresholdParam;
    }

    /**
     * Setter for shortDurationThresholdParam
     *
     * @ElementName shortDurationThresholdParam
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null $shortDurationThresholdParam
     * @return $this
     */
    public function setShortDurationThresholdParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $shortDurationThresholdParam)
    {
        $this->shortDurationThresholdParam = $shortDurationThresholdParam;
        return $this;
    }

    /**
     * Getter for serviceLevelThresholdParam
     *
     * @ElementName serviceLevelThresholdParam
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    public function getServiceLevelThresholdParam()
    {
        return $this->serviceLevelThresholdParam;
    }

    /**
     * Setter for serviceLevelThresholdParam
     *
     * @ElementName serviceLevelThresholdParam
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null $serviceLevelThresholdParam
     * @return $this
     */
    public function setServiceLevelThresholdParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $serviceLevelThresholdParam)
    {
        $this->serviceLevelThresholdParam = $serviceLevelThresholdParam;
        return $this;
    }

    /**
     * Getter for serviceLevelInclusionsParam
     *
     * @ElementName serviceLevelInclusionsParam
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    public function getServiceLevelInclusionsParam()
    {
        return $this->serviceLevelInclusionsParam;
    }

    /**
     * Setter for serviceLevelInclusionsParam
     *
     * @ElementName serviceLevelInclusionsParam
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null $serviceLevelInclusionsParam
     * @return $this
     */
    public function setServiceLevelInclusionsParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $serviceLevelInclusionsParam)
    {
        $this->serviceLevelInclusionsParam = $serviceLevelInclusionsParam;
        return $this;
    }

    /**
     * Getter for serviceLevelObjectiveThresholdParam
     *
     * @ElementName serviceLevelObjectiveThresholdParam
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    public function getServiceLevelObjectiveThresholdParam()
    {
        return $this->serviceLevelObjectiveThresholdParam;
    }

    /**
     * Setter for serviceLevelObjectiveThresholdParam
     *
     * @ElementName serviceLevelObjectiveThresholdParam
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null $serviceLevelObjectiveThresholdParam
     * @return $this
     */
    public function setServiceLevelObjectiveThresholdParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $serviceLevelObjectiveThresholdParam)
    {
        $this->serviceLevelObjectiveThresholdParam = $serviceLevelObjectiveThresholdParam;
        return $this;
    }

    /**
     * Getter for abandonedCallThresholdParam
     *
     * @ElementName abandonedCallThresholdParam
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    public function getAbandonedCallThresholdParam()
    {
        return $this->abandonedCallThresholdParam;
    }

    /**
     * Setter for abandonedCallThresholdParam
     *
     * @ElementName abandonedCallThresholdParam
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null $abandonedCallThresholdParam
     * @return $this
     */
    public function setAbandonedCallThresholdParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $abandonedCallThresholdParam)
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
    public function setFilterValue(array $filterValue)
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
    public function addFilterValue(string $filterValue)
    {
        $this->filterValue []= $filterValue;
        return $this;
    }


}

