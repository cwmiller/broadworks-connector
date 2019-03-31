<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointExternalSystemGetAssignedRoutePointListRequest
 *
 * Request a list of route points within in a group that have a given external system assigned.
 *         The response is either GroupRoutePointExternalSystemGetAssignedRoutePointListResponse or ErrorResponse.
 *
 * @see GroupRoutePointExternalSystemGetAssignedRoutePointListResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:6195","type":"sequence"}]
 */
class GroupRoutePointExternalSystemGetAssignedRoutePointListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6195
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6195
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName externalSystem
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6195
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $externalSystem = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6195
     * @MinInclusive 1
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaRoutePointName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoutePointName
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6195
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoutePointName[]
     */
    private $searchCriteriaRoutePointName = array(
        
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
     * Getter for searchCriteriaRoutePointName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoutePointName[]
     */
    public function getSearchCriteriaRoutePointName()
    {
        return $this->searchCriteriaRoutePointName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaRoutePointName;
    }

    /**
     * Setter for searchCriteriaRoutePointName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoutePointName[] $searchCriteriaRoutePointName
     * @return $this
     */
    public function setSearchCriteriaRoutePointName(array $searchCriteriaRoutePointName)
    {
        $this->searchCriteriaRoutePointName = $searchCriteriaRoutePointName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaRoutePointName()
    {
        $this->searchCriteriaRoutePointName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaRoutePointName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoutePointName $searchCriteriaRoutePointName
     * @return $this
     */
    public function addSearchCriteriaRoutePointName($searchCriteriaRoutePointName)
    {
        $this->searchCriteriaRoutePointName[] = $searchCriteriaRoutePointName;
        return $this;
    }


}

