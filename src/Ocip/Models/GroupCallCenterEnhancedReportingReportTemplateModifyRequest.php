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
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:3562","type":"sequence"}]
 */
class GroupCallCenterEnhancedReportingReportTemplateModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:3562
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:3562
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:3562
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3562
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3562
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName xsltTemplate
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3562
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $xsltTemplate = null;

    /**
     * @ElementName scope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateAccessOption
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3562
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateAccessOption|null
     */
    private $scope = null;

    /**
     * @ElementName isEnabled
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3562
     * @var bool|null
     */
    private $isEnabled = null;

    /**
     * @ElementName isRealtimeReport
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3562
     * @var bool|null
     */
    private $isRealtimeReport = null;

    /**
     * @ElementName filterNumber
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3562
     * @MinInclusive 1
     * @MaxInclusive 999
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $filterNumber = null;

    /**
     * @ElementName filterValue
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateQueryFilterValueReplacementList
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3562
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateQueryFilterValueReplacementList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $filterValue = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
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
     * Getter for xsltTemplate
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     */
    public function getXsltTemplate()
    {
        return $this->xsltTemplate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsltTemplate;
    }

    /**
     * Setter for xsltTemplate
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $xsltTemplate
     * @return $this
     */
    public function setXsltTemplate(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $xsltTemplate)
    {
        $this->xsltTemplate = $xsltTemplate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsltTemplate()
    {
        $this->xsltTemplate = null;
        return $this;
    }

    /**
     * Getter for scope
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateAccessOption
     */
    public function getScope()
    {
        return $this->scope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scope;
    }

    /**
     * Setter for scope
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateAccessOption $scope
     * @return $this
     */
    public function setScope(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateAccessOption $scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScope()
    {
        $this->scope = null;
        return $this;
    }

    /**
     * Getter for isEnabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->isEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isEnabled;
    }

    /**
     * Setter for isEnabled
     *
     * @param bool $isEnabled
     * @return $this
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsEnabled()
    {
        $this->isEnabled = null;
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
     * Getter for filterNumber
     *
     * @return int|null
     */
    public function getFilterNumber()
    {
        return $this->filterNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->filterNumber;
    }

    /**
     * Setter for filterNumber
     *
     * @param int|null $filterNumber
     * @return $this
     */
    public function setFilterNumber($filterNumber = null)
    {
        if ($filterNumber === null) {
            $this->filterNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->filterNumber = $filterNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFilterNumber()
    {
        $this->filterNumber = null;
        return $this;
    }

    /**
     * Getter for filterValue
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateQueryFilterValueReplacementList|null
     */
    public function getFilterValue()
    {
        return $this->filterValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->filterValue;
    }

    /**
     * Setter for filterValue
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateQueryFilterValueReplacementList|null $filterValue
     * @return $this
     */
    public function setFilterValue(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateQueryFilterValueReplacementList $filterValue = null)
    {
        if ($filterValue === null) {
            $this->filterValue = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->filterValue = $filterValue;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFilterValue()
    {
        $this->filterValue = null;
        return $this;
    }


}

