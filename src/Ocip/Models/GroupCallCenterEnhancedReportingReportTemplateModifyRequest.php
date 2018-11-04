<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedReportingReportTemplateModifyRequest
 *
 * Request to modify a group level call center report template.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCallCenterEnhancedReportingReportTemplateModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName newName
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName description
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $filterNumber = null;

    /**
     * @ElementName filterValue
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateQueryFilterValueReplacementList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $filterValue = null;

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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $description
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getFilterNumber()
    {
        return $this->filterNumber;
    }

    /**
     * Setter for filterNumber
     *
     * @ElementName filterNumber
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $filterNumber
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
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateQueryFilterValueReplacementList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getFilterValue()
    {
        return $this->filterValue;
    }

    /**
     * Setter for filterValue
     *
     * @ElementName filterValue
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateQueryFilterValueReplacementList|null|\CWM\BroadWorksConnector\Ocip\Nil $filterValue
     * @return $this
     */
    public function setFilterValue($filterValue)
    {
        $this->filterValue = $filterValue;
        return $this;
    }


}

