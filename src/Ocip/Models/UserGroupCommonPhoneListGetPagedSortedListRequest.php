<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGroupCommonPhoneListGetPagedSortedListRequest
 *
 * Get a user's group's common phone list.
 * 				The response is either a UserGroupCommonPhoneListGetPagedSortedListResponse
 * or an
 * 				ErrorResponse.
 * 				The search can be done using multiple criterion.
 * 				If the searchCriteriaModeOr is present, any result matching any one
 * 				criteria is included in the results.
 * 				Otherwise, only results matching all the search criterion are included in
 * the
 * 				results.
 * 				If no search criteria is specified, all results are returned.
 * 				Specifying searchCriteriaModeOr without any search criteria results
 * 				in an ErrorResponse.
 * 				The sort can be done on the name or the number in the common phone list.
 *
 * @see UserGroupCommonPhoneListGetPagedSortedListResponse
 * @see ErrorResponse
 * @see ErrorResponse
 */
class UserGroupCommonPhoneListGetPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName responsePagingControl
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    private $responsePagingControl = null;

    /**
     * @ElementName sortByGroupCommonPhoneListNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListNumber|null
     */
    private $sortByGroupCommonPhoneListNumber = null;

    /**
     * @ElementName sortByGroupCommonPhoneListName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListName|null
     */
    private $sortByGroupCommonPhoneListName = null;

    /**
     * @ElementName searchCriteriaModeOr
     * @var bool|null
     */
    private $searchCriteriaModeOr = null;

    /**
     * @ElementName searchCriteriaGroupCommonPhoneListName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListName[]
     */
    private $searchCriteriaGroupCommonPhoneListName = array(
        
    );

    /**
     * @ElementName searchCriteriaGroupCommonPhoneListNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListNumber[]
     */
    private $searchCriteriaGroupCommonPhoneListNumber = array(
        
    );

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for responsePagingControl
     *
     * @ElementName responsePagingControl
     * @return \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    public function getResponsePagingControl()
    {
        return $this->responsePagingControl;
    }

    /**
     * Setter for responsePagingControl
     *
     * @ElementName responsePagingControl
     * @param \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null $responsePagingControl
     * @return $this
     */
    public function setResponsePagingControl(\CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl $responsePagingControl)
    {
        $this->responsePagingControl = $responsePagingControl;
        return $this;
    }

    /**
     * Getter for sortByGroupCommonPhoneListNumber
     *
     * @ElementName sortByGroupCommonPhoneListNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListNumber|null
     */
    public function getSortByGroupCommonPhoneListNumber()
    {
        return $this->sortByGroupCommonPhoneListNumber;
    }

    /**
     * Setter for sortByGroupCommonPhoneListNumber
     *
     * @ElementName sortByGroupCommonPhoneListNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListNumber|null $sortByGroupCommonPhoneListNumber
     * @return $this
     */
    public function setSortByGroupCommonPhoneListNumber(\CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListNumber $sortByGroupCommonPhoneListNumber)
    {
        $this->sortByGroupCommonPhoneListNumber = $sortByGroupCommonPhoneListNumber;
        return $this;
    }

    /**
     * Getter for sortByGroupCommonPhoneListName
     *
     * @ElementName sortByGroupCommonPhoneListName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListName|null
     */
    public function getSortByGroupCommonPhoneListName()
    {
        return $this->sortByGroupCommonPhoneListName;
    }

    /**
     * Setter for sortByGroupCommonPhoneListName
     *
     * @ElementName sortByGroupCommonPhoneListName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListName|null $sortByGroupCommonPhoneListName
     * @return $this
     */
    public function setSortByGroupCommonPhoneListName(\CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListName $sortByGroupCommonPhoneListName)
    {
        $this->sortByGroupCommonPhoneListName = $sortByGroupCommonPhoneListName;
        return $this;
    }

    /**
     * Getter for searchCriteriaModeOr
     *
     * @ElementName searchCriteriaModeOr
     * @return bool|null
     */
    public function getSearchCriteriaModeOr()
    {
        return $this->searchCriteriaModeOr;
    }

    /**
     * Setter for searchCriteriaModeOr
     *
     * @ElementName searchCriteriaModeOr
     * @param bool|null $searchCriteriaModeOr
     * @return $this
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr)
    {
        $this->searchCriteriaModeOr = $searchCriteriaModeOr;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupCommonPhoneListName
     *
     * @ElementName searchCriteriaGroupCommonPhoneListName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListName[]
     */
    public function getSearchCriteriaGroupCommonPhoneListName()
    {
        return $this->searchCriteriaGroupCommonPhoneListName;
    }

    /**
     * Setter for searchCriteriaGroupCommonPhoneListName
     *
     * @ElementName searchCriteriaGroupCommonPhoneListName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListName[] $searchCriteriaGroupCommonPhoneListName
     * @return $this
     */
    public function setSearchCriteriaGroupCommonPhoneListName(array $searchCriteriaGroupCommonPhoneListName)
    {
        $this->searchCriteriaGroupCommonPhoneListName = $searchCriteriaGroupCommonPhoneListName;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupCommonPhoneListName
     *
     * @ElementName searchCriteriaGroupCommonPhoneListName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListName $searchCriteriaGroupCommonPhoneListName
     * @return $this
     */
    public function addSearchCriteriaGroupCommonPhoneListName($searchCriteriaGroupCommonPhoneListName)
    {
        $this->searchCriteriaGroupCommonPhoneListName []= $searchCriteriaGroupCommonPhoneListName;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupCommonPhoneListNumber
     *
     * @ElementName searchCriteriaGroupCommonPhoneListNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListNumber[]
     */
    public function getSearchCriteriaGroupCommonPhoneListNumber()
    {
        return $this->searchCriteriaGroupCommonPhoneListNumber;
    }

    /**
     * Setter for searchCriteriaGroupCommonPhoneListNumber
     *
     * @ElementName searchCriteriaGroupCommonPhoneListNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListNumber[] $searchCriteriaGroupCommonPhoneListNumber
     * @return $this
     */
    public function setSearchCriteriaGroupCommonPhoneListNumber(array $searchCriteriaGroupCommonPhoneListNumber)
    {
        $this->searchCriteriaGroupCommonPhoneListNumber = $searchCriteriaGroupCommonPhoneListNumber;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupCommonPhoneListNumber
     *
     * @ElementName searchCriteriaGroupCommonPhoneListNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListNumber $searchCriteriaGroupCommonPhoneListNumber
     * @return $this
     */
    public function addSearchCriteriaGroupCommonPhoneListNumber($searchCriteriaGroupCommonPhoneListNumber)
    {
        $this->searchCriteriaGroupCommonPhoneListNumber []= $searchCriteriaGroupCommonPhoneListNumber;
        return $this;
    }


}

