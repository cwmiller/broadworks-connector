<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnterpriseCommonPhoneListGetPagedSortedListRequest
 *
 * Get an enterprise's common phone list for a user.
 * 				The response is either a
 * UserEnterpriseCommonPhoneListGetPagedSortedListResponse
 * 				or an ErrorResponse.
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
 * @see UserEnterpriseCommonPhoneListGetPagedSortedListResponse
 * @see ErrorResponse
 * @see ErrorResponse
 */
class UserEnterpriseCommonPhoneListGetPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName sortByEnterpriseCommonPhoneListNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByEnterpriseCommonPhoneListNumber|null
     */
    private $sortByEnterpriseCommonPhoneListNumber = null;

    /**
     * @ElementName sortByEnterpriseCommonPhoneListName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByEnterpriseCommonPhoneListName|null
     */
    private $sortByEnterpriseCommonPhoneListName = null;

    /**
     * @ElementName searchCriteriaModeOr
     * @var bool|null
     */
    private $searchCriteriaModeOr = null;

    /**
     * @ElementName searchCriteriaEnterpriseCommonPhoneListName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName[]
     */
    private $searchCriteriaEnterpriseCommonPhoneListName = array(
        
    );

    /**
     * @ElementName searchCriteriaEnterpriseCommonPhoneListNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber[]
     */
    private $searchCriteriaEnterpriseCommonPhoneListNumber = array(
        
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
     * Getter for sortByEnterpriseCommonPhoneListNumber
     *
     * @ElementName sortByEnterpriseCommonPhoneListNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByEnterpriseCommonPhoneListNumber|null
     */
    public function getSortByEnterpriseCommonPhoneListNumber()
    {
        return $this->sortByEnterpriseCommonPhoneListNumber;
    }

    /**
     * Setter for sortByEnterpriseCommonPhoneListNumber
     *
     * @ElementName sortByEnterpriseCommonPhoneListNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByEnterpriseCommonPhoneListNumber|null $sortByEnterpriseCommonPhoneListNumber
     * @return $this
     */
    public function setSortByEnterpriseCommonPhoneListNumber($sortByEnterpriseCommonPhoneListNumber)
    {
        $this->sortByEnterpriseCommonPhoneListNumber = $sortByEnterpriseCommonPhoneListNumber;
        return $this;
    }

    /**
     * Getter for sortByEnterpriseCommonPhoneListName
     *
     * @ElementName sortByEnterpriseCommonPhoneListName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByEnterpriseCommonPhoneListName|null
     */
    public function getSortByEnterpriseCommonPhoneListName()
    {
        return $this->sortByEnterpriseCommonPhoneListName;
    }

    /**
     * Setter for sortByEnterpriseCommonPhoneListName
     *
     * @ElementName sortByEnterpriseCommonPhoneListName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByEnterpriseCommonPhoneListName|null $sortByEnterpriseCommonPhoneListName
     * @return $this
     */
    public function setSortByEnterpriseCommonPhoneListName($sortByEnterpriseCommonPhoneListName)
    {
        $this->sortByEnterpriseCommonPhoneListName = $sortByEnterpriseCommonPhoneListName;
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
     * Getter for searchCriteriaEnterpriseCommonPhoneListName
     *
     * @ElementName searchCriteriaEnterpriseCommonPhoneListName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName[]
     */
    public function getSearchCriteriaEnterpriseCommonPhoneListName()
    {
        return $this->searchCriteriaEnterpriseCommonPhoneListName;
    }

    /**
     * Setter for searchCriteriaEnterpriseCommonPhoneListName
     *
     * @ElementName searchCriteriaEnterpriseCommonPhoneListName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName[] $searchCriteriaEnterpriseCommonPhoneListName
     * @return $this
     */
    public function setSearchCriteriaEnterpriseCommonPhoneListName($searchCriteriaEnterpriseCommonPhoneListName)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListName = $searchCriteriaEnterpriseCommonPhoneListName;
        return $this;
    }

    /**
     * Adder for searchCriteriaEnterpriseCommonPhoneListName
     *
     * @ElementName searchCriteriaEnterpriseCommonPhoneListName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName $searchCriteriaEnterpriseCommonPhoneListName
     * @return $this
     */
    public function addSearchCriteriaEnterpriseCommonPhoneListName($searchCriteriaEnterpriseCommonPhoneListName)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListName []= $searchCriteriaEnterpriseCommonPhoneListName;
        return $this;
    }

    /**
     * Getter for searchCriteriaEnterpriseCommonPhoneListNumber
     *
     * @ElementName searchCriteriaEnterpriseCommonPhoneListNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber[]
     */
    public function getSearchCriteriaEnterpriseCommonPhoneListNumber()
    {
        return $this->searchCriteriaEnterpriseCommonPhoneListNumber;
    }

    /**
     * Setter for searchCriteriaEnterpriseCommonPhoneListNumber
     *
     * @ElementName searchCriteriaEnterpriseCommonPhoneListNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber[] $searchCriteriaEnterpriseCommonPhoneListNumber
     * @return $this
     */
    public function setSearchCriteriaEnterpriseCommonPhoneListNumber($searchCriteriaEnterpriseCommonPhoneListNumber)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListNumber = $searchCriteriaEnterpriseCommonPhoneListNumber;
        return $this;
    }

    /**
     * Adder for searchCriteriaEnterpriseCommonPhoneListNumber
     *
     * @ElementName searchCriteriaEnterpriseCommonPhoneListNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber $searchCriteriaEnterpriseCommonPhoneListNumber
     * @return $this
     */
    public function addSearchCriteriaEnterpriseCommonPhoneListNumber($searchCriteriaEnterpriseCommonPhoneListNumber)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListNumber []= $searchCriteriaEnterpriseCommonPhoneListNumber;
        return $this;
    }


}

