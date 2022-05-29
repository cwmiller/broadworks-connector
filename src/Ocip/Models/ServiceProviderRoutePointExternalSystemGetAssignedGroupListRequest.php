<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRoutePointExternalSystemGetAssignedGroupListRequest
 *
 * Requests a list of groups within a service provider that have a given external system assigned.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a ServiceProviderRoutePointExternalSystemGetAssignedGroupListResponse or an ErrorResponse.
 *
 * @see ServiceProviderRoutePointExternalSystemGetAssignedGroupListResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:5509","type":"sequence"}]
 */
class ServiceProviderRoutePointExternalSystemGetAssignedGroupListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5509
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName externalSystem
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5509
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $externalSystem = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5509
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaGroupId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId
     * @Array
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5509
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    protected $searchCriteriaGroupId = array(
        
    );

    /**
     * @ElementName searchCriteriaGroupName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName
     * @Array
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5509
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName[]
     */
    protected $searchCriteriaGroupName = array(
        
    );

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
     * Getter for externalSystem
     *
     * @return string
     */
    public function getExternalSystem()
    {
        return $this->externalSystem instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalSystem;
    }

    /**
     * Setter for externalSystem
     *
     * @param string $externalSystem
     * @return $this
     */
    public function setExternalSystem($externalSystem)
    {
        $this->externalSystem = $externalSystem;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExternalSystem()
    {
        $this->externalSystem = null;
        return $this;
    }

    /**
     * Getter for responseSizeLimit
     *
     * @return int
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @param int $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponseSizeLimit()
    {
        $this->responseSizeLimit = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->searchCriteriaGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaGroupId;
    }

    /**
     * Setter for searchCriteriaGroupId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[] $searchCriteriaGroupId
     * @return $this
     */
    public function setSearchCriteriaGroupId(array $searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId = $searchCriteriaGroupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaGroupId()
    {
        $this->searchCriteriaGroupId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId $searchCriteriaGroupId
     * @return $this
     */
    public function addSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId[] = $searchCriteriaGroupId;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName[]
     */
    public function getSearchCriteriaGroupName()
    {
        return $this->searchCriteriaGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaGroupName;
    }

    /**
     * Setter for searchCriteriaGroupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName[] $searchCriteriaGroupName
     * @return $this
     */
    public function setSearchCriteriaGroupName(array $searchCriteriaGroupName)
    {
        $this->searchCriteriaGroupName = $searchCriteriaGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaGroupName()
    {
        $this->searchCriteriaGroupName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName $searchCriteriaGroupName
     * @return $this
     */
    public function addSearchCriteriaGroupName($searchCriteriaGroupName)
    {
        $this->searchCriteriaGroupName[] = $searchCriteriaGroupName;
        return $this;
    }


}

