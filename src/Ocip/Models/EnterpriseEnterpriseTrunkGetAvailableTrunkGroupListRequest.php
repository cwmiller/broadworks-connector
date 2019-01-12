<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest
 *
 * Request to get the list of all available trunk groups defined in an enterprise.  It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse or an ErrorResponse.
 *
 * @see EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse
 * @see ErrorResponse
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:201","type":"sequence"}]
 */
class EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group b9c14e2d80e4e7749688ca13ba233b44:201
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:201
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaTrunkGroupName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:201
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName[]
     */
    private $searchCriteriaTrunkGroupName = array(
        
    );

    /**
     * @ElementName searchCriteriaGroupId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:201
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    private $searchCriteriaGroupId = array(
        
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
     * Getter for searchCriteriaTrunkGroupName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName[]
     */
    public function getSearchCriteriaTrunkGroupName()
    {
        return $this->searchCriteriaTrunkGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaTrunkGroupName;
    }

    /**
     * Setter for searchCriteriaTrunkGroupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName[] $searchCriteriaTrunkGroupName
     * @return $this
     */
    public function setSearchCriteriaTrunkGroupName(array $searchCriteriaTrunkGroupName)
    {
        $this->searchCriteriaTrunkGroupName = $searchCriteriaTrunkGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaTrunkGroupName()
    {
        $this->searchCriteriaTrunkGroupName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaTrunkGroupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName $searchCriteriaTrunkGroupName
     * @return $this
     */
    public function addSearchCriteriaTrunkGroupName($searchCriteriaTrunkGroupName)
    {
        $this->searchCriteriaTrunkGroupName[] = $searchCriteriaTrunkGroupName;
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


}

