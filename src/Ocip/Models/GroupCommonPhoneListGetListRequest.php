<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommonPhoneListGetListRequest
 *
 * Get a group's common phone list.
 *         The response is either a GroupCommonPhoneListGetListResponse or an
 * ErrorResponse.
 *         The search can be done using multiple criterion.
 *         If the searchCriteriaModeOr is present, any result matching any one
 * criteria is included in the results. 
 *         Otherwise, only results matching all the search criterion are included
 * in the results. 
 *         If no search criteria is specified, all results are returned.
 *         Specifying searchCriteriaModeOr without any search criteria results in
 * an ErrorResponse.
 *         In all cases, if a responseSizeLimit is specified and the number of
 * matching results is more than this limit, then an
 *         ErrorResponse is returned.
 *
 * @see GroupCommonPhoneListGetListResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @see ErrorResponse
 */
class GroupCommonPhoneListGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @var bool|null
     */
    private $searchCriteriaModeOr = null;

    /**
     * @ElementName searchCriteriaGroupCommonPhoneListName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListName
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListName[]
     */
    private $searchCriteriaGroupCommonPhoneListName = array(
        
    );

    /**
     * @ElementName searchCriteriaGroupCommonPhoneListNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListNumber
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListNumber[]
     */
    private $searchCriteriaGroupCommonPhoneListNumber = array(
        
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
     * Getter for searchCriteriaModeOr
     *
     * @return bool
     */
    public function getSearchCriteriaModeOr()
    {
        return $this->searchCriteriaModeOr instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaModeOr;
    }

    /**
     * Setter for searchCriteriaModeOr
     *
     * @param bool $searchCriteriaModeOr
     * @return $this
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr)
    {
        $this->searchCriteriaModeOr = $searchCriteriaModeOr;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaModeOr()
    {
        $this->searchCriteriaModeOr = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupCommonPhoneListName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListName[]
     */
    public function getSearchCriteriaGroupCommonPhoneListName()
    {
        return $this->searchCriteriaGroupCommonPhoneListName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaGroupCommonPhoneListName;
    }

    /**
     * Setter for searchCriteriaGroupCommonPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListName[] $searchCriteriaGroupCommonPhoneListName
     * @return $this
     */
    public function setSearchCriteriaGroupCommonPhoneListName(array $searchCriteriaGroupCommonPhoneListName)
    {
        $this->searchCriteriaGroupCommonPhoneListName = $searchCriteriaGroupCommonPhoneListName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaGroupCommonPhoneListName()
    {
        $this->searchCriteriaGroupCommonPhoneListName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupCommonPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListName $searchCriteriaGroupCommonPhoneListName
     * @return $this
     */
    public function addSearchCriteriaGroupCommonPhoneListName($searchCriteriaGroupCommonPhoneListName)
    {
        $this->searchCriteriaGroupCommonPhoneListName[] = $searchCriteriaGroupCommonPhoneListName;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupCommonPhoneListNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListNumber[]
     */
    public function getSearchCriteriaGroupCommonPhoneListNumber()
    {
        return $this->searchCriteriaGroupCommonPhoneListNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaGroupCommonPhoneListNumber;
    }

    /**
     * Setter for searchCriteriaGroupCommonPhoneListNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListNumber[] $searchCriteriaGroupCommonPhoneListNumber
     * @return $this
     */
    public function setSearchCriteriaGroupCommonPhoneListNumber(array $searchCriteriaGroupCommonPhoneListNumber)
    {
        $this->searchCriteriaGroupCommonPhoneListNumber = $searchCriteriaGroupCommonPhoneListNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaGroupCommonPhoneListNumber()
    {
        $this->searchCriteriaGroupCommonPhoneListNumber = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupCommonPhoneListNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListNumber $searchCriteriaGroupCommonPhoneListNumber
     * @return $this
     */
    public function addSearchCriteriaGroupCommonPhoneListNumber($searchCriteriaGroupCommonPhoneListNumber)
    {
        $this->searchCriteriaGroupCommonPhoneListNumber[] = $searchCriteriaGroupCommonPhoneListNumber;
        return $this;
    }


}

