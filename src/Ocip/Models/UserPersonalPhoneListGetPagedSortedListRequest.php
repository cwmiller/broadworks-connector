<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalPhoneListGetPagedSortedListRequest
 *
 * Get a user's personal phone list.
 * 				The response is either a UserPersonalPhoneListGetPagedSortedListResponse or
 * an
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
 * 				The sort can done by the personal phone list number or name.
 *
 * @see UserPersonalPhoneListGetPagedSortedListResponse
 * @see ErrorResponse
 * @see ErrorResponse
 */
class UserPersonalPhoneListGetPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName sortByUserPersonalPhoneListNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserPersonalPhoneListNumber|null
     */
    private $sortByUserPersonalPhoneListNumber = null;

    /**
     * @ElementName sortByUserPersonalPhoneListName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserPersonalPhoneListName|null
     */
    private $sortByUserPersonalPhoneListName = null;

    /**
     * @ElementName searchCriteriaModeOr
     * @var bool|null
     */
    private $searchCriteriaModeOr = null;

    /**
     * @ElementName searchCriteriaUserPersonalPhoneListName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListName[]
     */
    private $searchCriteriaUserPersonalPhoneListName = array(
        
    );

    /**
     * @ElementName searchCriteriaUserPersonalPhoneListNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListNumber[]
     */
    private $searchCriteriaUserPersonalPhoneListNumber = array(
        
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
    public function setResponsePagingControl($responsePagingControl)
    {
        $this->responsePagingControl = $responsePagingControl;
        return $this;
    }

    /**
     * Getter for sortByUserPersonalPhoneListNumber
     *
     * @ElementName sortByUserPersonalPhoneListNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserPersonalPhoneListNumber|null
     */
    public function getSortByUserPersonalPhoneListNumber()
    {
        return $this->sortByUserPersonalPhoneListNumber;
    }

    /**
     * Setter for sortByUserPersonalPhoneListNumber
     *
     * @ElementName sortByUserPersonalPhoneListNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserPersonalPhoneListNumber|null $sortByUserPersonalPhoneListNumber
     * @return $this
     */
    public function setSortByUserPersonalPhoneListNumber($sortByUserPersonalPhoneListNumber)
    {
        $this->sortByUserPersonalPhoneListNumber = $sortByUserPersonalPhoneListNumber;
        return $this;
    }

    /**
     * Getter for sortByUserPersonalPhoneListName
     *
     * @ElementName sortByUserPersonalPhoneListName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserPersonalPhoneListName|null
     */
    public function getSortByUserPersonalPhoneListName()
    {
        return $this->sortByUserPersonalPhoneListName;
    }

    /**
     * Setter for sortByUserPersonalPhoneListName
     *
     * @ElementName sortByUserPersonalPhoneListName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserPersonalPhoneListName|null $sortByUserPersonalPhoneListName
     * @return $this
     */
    public function setSortByUserPersonalPhoneListName($sortByUserPersonalPhoneListName)
    {
        $this->sortByUserPersonalPhoneListName = $sortByUserPersonalPhoneListName;
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
     * Getter for searchCriteriaUserPersonalPhoneListName
     *
     * @ElementName searchCriteriaUserPersonalPhoneListName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListName[]
     */
    public function getSearchCriteriaUserPersonalPhoneListName()
    {
        return $this->searchCriteriaUserPersonalPhoneListName;
    }

    /**
     * Setter for searchCriteriaUserPersonalPhoneListName
     *
     * @ElementName searchCriteriaUserPersonalPhoneListName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListName[] $searchCriteriaUserPersonalPhoneListName
     * @return $this
     */
    public function setSearchCriteriaUserPersonalPhoneListName($searchCriteriaUserPersonalPhoneListName)
    {
        $this->searchCriteriaUserPersonalPhoneListName = $searchCriteriaUserPersonalPhoneListName;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserPersonalPhoneListName
     *
     * @ElementName searchCriteriaUserPersonalPhoneListName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListName $searchCriteriaUserPersonalPhoneListName
     * @return $this
     */
    public function addSearchCriteriaUserPersonalPhoneListName($searchCriteriaUserPersonalPhoneListName)
    {
        $this->searchCriteriaUserPersonalPhoneListName []= $searchCriteriaUserPersonalPhoneListName;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserPersonalPhoneListNumber
     *
     * @ElementName searchCriteriaUserPersonalPhoneListNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListNumber[]
     */
    public function getSearchCriteriaUserPersonalPhoneListNumber()
    {
        return $this->searchCriteriaUserPersonalPhoneListNumber;
    }

    /**
     * Setter for searchCriteriaUserPersonalPhoneListNumber
     *
     * @ElementName searchCriteriaUserPersonalPhoneListNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListNumber[] $searchCriteriaUserPersonalPhoneListNumber
     * @return $this
     */
    public function setSearchCriteriaUserPersonalPhoneListNumber($searchCriteriaUserPersonalPhoneListNumber)
    {
        $this->searchCriteriaUserPersonalPhoneListNumber = $searchCriteriaUserPersonalPhoneListNumber;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserPersonalPhoneListNumber
     *
     * @ElementName searchCriteriaUserPersonalPhoneListNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListNumber $searchCriteriaUserPersonalPhoneListNumber
     * @return $this
     */
    public function addSearchCriteriaUserPersonalPhoneListNumber($searchCriteriaUserPersonalPhoneListNumber)
    {
        $this->searchCriteriaUserPersonalPhoneListNumber []= $searchCriteriaUserPersonalPhoneListNumber;
        return $this;
    }


}

