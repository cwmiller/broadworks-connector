<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingReportTemplateModifyRequest
 *
 * Request to modify a system level call center report template.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallCenterEnhancedReportingReportTemplateModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName newName
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

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
     * @ElementName filterNumber
     * @var int|null
     */
    private $filterNumber = null;

    /**
     * @ElementName filterValue
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateQueryFilterValueReplacementList|null
     */
    private $filterValue = null;

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
     * Getter for newName
     *
     * @ElementName newName
     * @return string|null
     */
    public function getNewName()
    {
        return $this->newName;
    }

    /**
     * Setter for newName
     *
     * @ElementName newName
     * @param string|null $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
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
     * Getter for filterValue
     *
     * @ElementName filterValue
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateQueryFilterValueReplacementList|null
     */
    public function getFilterValue()
    {
        return $this->filterValue;
    }

    /**
     * Setter for filterValue
     *
     * @ElementName filterValue
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateQueryFilterValueReplacementList|null $filterValue
     * @return $this
     */
    public function setFilterValue($filterValue)
    {
        $this->filterValue = $filterValue;
        return $this;
    }


}

