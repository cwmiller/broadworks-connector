<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest
 *
 * Request to get the list of all available trunk groups defined in a group.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse or an ErrorResponse.
 *
 * @see GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse
 * @see ErrorResponse
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:690","type":"sequence"}]
 */
class GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:690
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:690
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:690
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaTrunkGroupName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName
     * @Array
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:690
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName[]
     */
    protected $searchCriteriaTrunkGroupName = [
        
    ];

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
}

