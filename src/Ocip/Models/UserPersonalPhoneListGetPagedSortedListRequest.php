<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalPhoneListGetPagedSortedListRequest
 *
 * Get a user's personal phone list.
 * 				The response is either a UserPersonalPhoneListGetPagedSortedListResponse or an
 * 				ErrorResponse.
 * 				The search can be done using multiple criterion.
 * 				If the searchCriteriaModeOr is present, any result matching any one
 * 				criteria is included in the results.
 * 				Otherwise, only results matching all the search criterion are included in the
 * 				results.
 * 				If no search criteria is specified, all results are returned.
 * 				Specifying searchCriteriaModeOr without any search criteria results
 * 				in an ErrorResponse.
 * 				The sort can done by the personal phone list number or name.
 * 				The following elements are only used in AS data mode and ignored in XS data  
 * 				mode:
 * 				searchCriteriaUserPersonalMultiPartPhoneListName
 *
 * @see UserPersonalPhoneListGetPagedSortedListResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:2842","type":"sequence","children":[{"id":"53d18cc797d03d802cbc411ad821f1d4:2845","type":"choice"}]}]
 */
class UserPersonalPhoneListGetPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2842
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2842
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    private $responsePagingControl = null;

    /**
     * @ElementName sortByUserPersonalPhoneListNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserPersonalPhoneListNumber
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2845
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserPersonalPhoneListNumber|null
     */
    private $sortByUserPersonalPhoneListNumber = null;

    /**
     * @ElementName sortByUserPersonalPhoneListName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserPersonalPhoneListName
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2845
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserPersonalPhoneListName|null
     */
    private $sortByUserPersonalPhoneListName = null;

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2842
     * @var bool|null
     */
    private $searchCriteriaModeOr = null;

    /**
     * @ElementName searchCriteriaUserPersonalPhoneListName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListName
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2842
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListName[]
     */
    private $searchCriteriaUserPersonalPhoneListName = array(
        
    );

    /**
     * @ElementName searchCriteriaUserPersonalPhoneListNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListNumber
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2842
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListNumber[]
     */
    private $searchCriteriaUserPersonalPhoneListNumber = array(
        
    );

    /**
     * @ElementName searchCriteriaUserPersonalMultiPartPhoneListName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalMultiPartPhoneListName
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2842
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalMultiPartPhoneListName[]
     */
    private $searchCriteriaUserPersonalMultiPartPhoneListName = array(
        
    );

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for responsePagingControl
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     */
    public function getResponsePagingControl()
    {
        return $this->responsePagingControl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responsePagingControl;
    }

    /**
     * Setter for responsePagingControl
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl $responsePagingControl
     * @return $this
     */
    public function setResponsePagingControl(\CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl $responsePagingControl)
    {
        $this->responsePagingControl = $responsePagingControl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponsePagingControl()
    {
        $this->responsePagingControl = null;
        return $this;
    }

    /**
     * Getter for sortByUserPersonalPhoneListNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserPersonalPhoneListNumber
     */
    public function getSortByUserPersonalPhoneListNumber()
    {
        return $this->sortByUserPersonalPhoneListNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByUserPersonalPhoneListNumber;
    }

    /**
     * Setter for sortByUserPersonalPhoneListNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserPersonalPhoneListNumber $sortByUserPersonalPhoneListNumber
     * @return $this
     */
    public function setSortByUserPersonalPhoneListNumber(\CWM\BroadWorksConnector\Ocip\Models\SortByUserPersonalPhoneListNumber $sortByUserPersonalPhoneListNumber)
    {
        $this->sortByUserPersonalPhoneListNumber = $sortByUserPersonalPhoneListNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByUserPersonalPhoneListNumber()
    {
        $this->sortByUserPersonalPhoneListNumber = null;
        return $this;
    }

    /**
     * Getter for sortByUserPersonalPhoneListName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserPersonalPhoneListName
     */
    public function getSortByUserPersonalPhoneListName()
    {
        return $this->sortByUserPersonalPhoneListName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByUserPersonalPhoneListName;
    }

    /**
     * Setter for sortByUserPersonalPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserPersonalPhoneListName $sortByUserPersonalPhoneListName
     * @return $this
     */
    public function setSortByUserPersonalPhoneListName(\CWM\BroadWorksConnector\Ocip\Models\SortByUserPersonalPhoneListName $sortByUserPersonalPhoneListName)
    {
        $this->sortByUserPersonalPhoneListName = $sortByUserPersonalPhoneListName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByUserPersonalPhoneListName()
    {
        $this->sortByUserPersonalPhoneListName = null;
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
     * Getter for searchCriteriaUserPersonalPhoneListName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListName[]
     */
    public function getSearchCriteriaUserPersonalPhoneListName()
    {
        return $this->searchCriteriaUserPersonalPhoneListName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaUserPersonalPhoneListName;
    }

    /**
     * Setter for searchCriteriaUserPersonalPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListName[] $searchCriteriaUserPersonalPhoneListName
     * @return $this
     */
    public function setSearchCriteriaUserPersonalPhoneListName(array $searchCriteriaUserPersonalPhoneListName)
    {
        $this->searchCriteriaUserPersonalPhoneListName = $searchCriteriaUserPersonalPhoneListName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaUserPersonalPhoneListName()
    {
        $this->searchCriteriaUserPersonalPhoneListName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserPersonalPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListName $searchCriteriaUserPersonalPhoneListName
     * @return $this
     */
    public function addSearchCriteriaUserPersonalPhoneListName($searchCriteriaUserPersonalPhoneListName)
    {
        $this->searchCriteriaUserPersonalPhoneListName[] = $searchCriteriaUserPersonalPhoneListName;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserPersonalPhoneListNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListNumber[]
     */
    public function getSearchCriteriaUserPersonalPhoneListNumber()
    {
        return $this->searchCriteriaUserPersonalPhoneListNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaUserPersonalPhoneListNumber;
    }

    /**
     * Setter for searchCriteriaUserPersonalPhoneListNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListNumber[] $searchCriteriaUserPersonalPhoneListNumber
     * @return $this
     */
    public function setSearchCriteriaUserPersonalPhoneListNumber(array $searchCriteriaUserPersonalPhoneListNumber)
    {
        $this->searchCriteriaUserPersonalPhoneListNumber = $searchCriteriaUserPersonalPhoneListNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaUserPersonalPhoneListNumber()
    {
        $this->searchCriteriaUserPersonalPhoneListNumber = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserPersonalPhoneListNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalPhoneListNumber $searchCriteriaUserPersonalPhoneListNumber
     * @return $this
     */
    public function addSearchCriteriaUserPersonalPhoneListNumber($searchCriteriaUserPersonalPhoneListNumber)
    {
        $this->searchCriteriaUserPersonalPhoneListNumber[] = $searchCriteriaUserPersonalPhoneListNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserPersonalMultiPartPhoneListName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalMultiPartPhoneListName[]
     */
    public function getSearchCriteriaUserPersonalMultiPartPhoneListName()
    {
        return $this->searchCriteriaUserPersonalMultiPartPhoneListName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaUserPersonalMultiPartPhoneListName;
    }

    /**
     * Setter for searchCriteriaUserPersonalMultiPartPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalMultiPartPhoneListName[] $searchCriteriaUserPersonalMultiPartPhoneListName
     * @return $this
     */
    public function setSearchCriteriaUserPersonalMultiPartPhoneListName(array $searchCriteriaUserPersonalMultiPartPhoneListName)
    {
        $this->searchCriteriaUserPersonalMultiPartPhoneListName = $searchCriteriaUserPersonalMultiPartPhoneListName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaUserPersonalMultiPartPhoneListName()
    {
        $this->searchCriteriaUserPersonalMultiPartPhoneListName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserPersonalMultiPartPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserPersonalMultiPartPhoneListName $searchCriteriaUserPersonalMultiPartPhoneListName
     * @return $this
     */
    public function addSearchCriteriaUserPersonalMultiPartPhoneListName($searchCriteriaUserPersonalMultiPartPhoneListName)
    {
        $this->searchCriteriaUserPersonalMultiPartPhoneListName[] = $searchCriteriaUserPersonalMultiPartPhoneListName;
        return $this;
    }


}

