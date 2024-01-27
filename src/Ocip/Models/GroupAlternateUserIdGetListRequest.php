<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAlternateUserIdGetListRequest
 *
 * Request to get the list of alternate user ids in the group.        
 *         The response is either GroupAlternateUserIdGetListResponse or ErrorResponse.
 *
 * @see GroupAlternateUserIdGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:1848","type":"sequence"}]
 */
class GroupAlternateUserIdGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1848
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1848
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1848
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaAlternateUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateUserId
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1848
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateUserId[]
     */
    protected $searchCriteriaAlternateUserId = [
        
    ];

    /**
     * @ElementName searchCriteriaUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1848
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    protected $searchCriteriaUserId = [
        
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
     * Getter for searchCriteriaAlternateUserId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateUserId[]
     */
    public function getSearchCriteriaAlternateUserId()
    {
        return $this->searchCriteriaAlternateUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaAlternateUserId;
    }

    /**
     * Setter for searchCriteriaAlternateUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateUserId[] $searchCriteriaAlternateUserId
     * @return $this
     */
    public function setSearchCriteriaAlternateUserId(array $searchCriteriaAlternateUserId)
    {
        $this->searchCriteriaAlternateUserId = $searchCriteriaAlternateUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaAlternateUserId()
    {
        $this->searchCriteriaAlternateUserId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaAlternateUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateUserId $searchCriteriaAlternateUserId
     * @return $this
     */
    public function addSearchCriteriaAlternateUserId($searchCriteriaAlternateUserId)
    {
        $this->searchCriteriaAlternateUserId[] = $searchCriteriaAlternateUserId;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    public function getSearchCriteriaUserId()
    {
        return $this->searchCriteriaUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaUserId;
    }

    /**
     * Setter for searchCriteriaUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[] $searchCriteriaUserId
     * @return $this
     */
    public function setSearchCriteriaUserId(array $searchCriteriaUserId)
    {
        $this->searchCriteriaUserId = $searchCriteriaUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaUserId()
    {
        $this->searchCriteriaUserId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId $searchCriteriaUserId
     * @return $this
     */
    public function addSearchCriteriaUserId($searchCriteriaUserId)
    {
        $this->searchCriteriaUserId[] = $searchCriteriaUserId;
        return $this;
    }
}

