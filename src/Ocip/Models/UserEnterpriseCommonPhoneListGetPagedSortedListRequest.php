<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnterpriseCommonPhoneListGetPagedSortedListRequest
 *
 * Get an enterprise's common phone list for a user.
 * 				The response is either a UserEnterpriseCommonPhoneListGetPagedSortedListResponse
 * 				or an ErrorResponse.
 * 				The search can be done using multiple criterion.
 * 				If the searchCriteriaModeOr is present, any result matching any one
 * 				criteria is included in the results.
 * 				Otherwise, only results matching all the search criterion are included in the
 * 				results.
 * 				If no search criteria is specified, all results are returned.
 * 				Specifying searchCriteriaModeOr without any search criteria results
 * 				in an ErrorResponse.
 * 				The sort can be done on the name or the number in the common phone list.
 * 				The following elements are only used in AS data mode and ignored in XS data  
 * 				mode:
 * 					searchCriteriaEnterpriseCommonMultiPartPhoneListName
 *
 * @see UserEnterpriseCommonPhoneListGetPagedSortedListResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:1735","type":"sequence","children":[{"id":"53d18cc797d03d802cbc411ad821f1d4:1738","type":"choice"}]}]
 */
class UserEnterpriseCommonPhoneListGetPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1735
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1735
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    protected $responsePagingControl = null;

    /**
     * @ElementName sortByEnterpriseCommonPhoneListNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByEnterpriseCommonPhoneListNumber
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1738
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByEnterpriseCommonPhoneListNumber|null
     */
    protected $sortByEnterpriseCommonPhoneListNumber = null;

    /**
     * @ElementName sortByEnterpriseCommonPhoneListName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByEnterpriseCommonPhoneListName
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1738
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByEnterpriseCommonPhoneListName|null
     */
    protected $sortByEnterpriseCommonPhoneListName = null;

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1735
     * @var bool|null
     */
    protected $searchCriteriaModeOr = null;

    /**
     * @ElementName searchCriteriaEnterpriseCommonPhoneListName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1735
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName[]
     */
    protected $searchCriteriaEnterpriseCommonPhoneListName = array(
        
    );

    /**
     * @ElementName searchCriteriaEnterpriseCommonPhoneListNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1735
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber[]
     */
    protected $searchCriteriaEnterpriseCommonPhoneListNumber = array(
        
    );

    /**
     * @ElementName searchCriteriaEnterpriseCommonMultiPartPhoneListName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonMultiPartPhoneListName
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1735
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonMultiPartPhoneListName[]
     */
    protected $searchCriteriaEnterpriseCommonMultiPartPhoneListName = array(
        
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
     * Getter for sortByEnterpriseCommonPhoneListNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByEnterpriseCommonPhoneListNumber
     */
    public function getSortByEnterpriseCommonPhoneListNumber()
    {
        return $this->sortByEnterpriseCommonPhoneListNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByEnterpriseCommonPhoneListNumber;
    }

    /**
     * Setter for sortByEnterpriseCommonPhoneListNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByEnterpriseCommonPhoneListNumber $sortByEnterpriseCommonPhoneListNumber
     * @return $this
     */
    public function setSortByEnterpriseCommonPhoneListNumber(\CWM\BroadWorksConnector\Ocip\Models\SortByEnterpriseCommonPhoneListNumber $sortByEnterpriseCommonPhoneListNumber)
    {
        $this->sortByEnterpriseCommonPhoneListNumber = $sortByEnterpriseCommonPhoneListNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByEnterpriseCommonPhoneListNumber()
    {
        $this->sortByEnterpriseCommonPhoneListNumber = null;
        return $this;
    }

    /**
     * Getter for sortByEnterpriseCommonPhoneListName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByEnterpriseCommonPhoneListName
     */
    public function getSortByEnterpriseCommonPhoneListName()
    {
        return $this->sortByEnterpriseCommonPhoneListName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByEnterpriseCommonPhoneListName;
    }

    /**
     * Setter for sortByEnterpriseCommonPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByEnterpriseCommonPhoneListName $sortByEnterpriseCommonPhoneListName
     * @return $this
     */
    public function setSortByEnterpriseCommonPhoneListName(\CWM\BroadWorksConnector\Ocip\Models\SortByEnterpriseCommonPhoneListName $sortByEnterpriseCommonPhoneListName)
    {
        $this->sortByEnterpriseCommonPhoneListName = $sortByEnterpriseCommonPhoneListName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByEnterpriseCommonPhoneListName()
    {
        $this->sortByEnterpriseCommonPhoneListName = null;
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
     * Getter for searchCriteriaEnterpriseCommonPhoneListName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName[]
     */
    public function getSearchCriteriaEnterpriseCommonPhoneListName()
    {
        return $this->searchCriteriaEnterpriseCommonPhoneListName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaEnterpriseCommonPhoneListName;
    }

    /**
     * Setter for searchCriteriaEnterpriseCommonPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName[] $searchCriteriaEnterpriseCommonPhoneListName
     * @return $this
     */
    public function setSearchCriteriaEnterpriseCommonPhoneListName(array $searchCriteriaEnterpriseCommonPhoneListName)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListName = $searchCriteriaEnterpriseCommonPhoneListName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaEnterpriseCommonPhoneListName()
    {
        $this->searchCriteriaEnterpriseCommonPhoneListName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaEnterpriseCommonPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListName $searchCriteriaEnterpriseCommonPhoneListName
     * @return $this
     */
    public function addSearchCriteriaEnterpriseCommonPhoneListName($searchCriteriaEnterpriseCommonPhoneListName)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListName[] = $searchCriteriaEnterpriseCommonPhoneListName;
        return $this;
    }

    /**
     * Getter for searchCriteriaEnterpriseCommonPhoneListNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber[]
     */
    public function getSearchCriteriaEnterpriseCommonPhoneListNumber()
    {
        return $this->searchCriteriaEnterpriseCommonPhoneListNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaEnterpriseCommonPhoneListNumber;
    }

    /**
     * Setter for searchCriteriaEnterpriseCommonPhoneListNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber[] $searchCriteriaEnterpriseCommonPhoneListNumber
     * @return $this
     */
    public function setSearchCriteriaEnterpriseCommonPhoneListNumber(array $searchCriteriaEnterpriseCommonPhoneListNumber)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListNumber = $searchCriteriaEnterpriseCommonPhoneListNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaEnterpriseCommonPhoneListNumber()
    {
        $this->searchCriteriaEnterpriseCommonPhoneListNumber = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaEnterpriseCommonPhoneListNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonPhoneListNumber $searchCriteriaEnterpriseCommonPhoneListNumber
     * @return $this
     */
    public function addSearchCriteriaEnterpriseCommonPhoneListNumber($searchCriteriaEnterpriseCommonPhoneListNumber)
    {
        $this->searchCriteriaEnterpriseCommonPhoneListNumber[] = $searchCriteriaEnterpriseCommonPhoneListNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaEnterpriseCommonMultiPartPhoneListName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonMultiPartPhoneListName[]
     */
    public function getSearchCriteriaEnterpriseCommonMultiPartPhoneListName()
    {
        return $this->searchCriteriaEnterpriseCommonMultiPartPhoneListName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaEnterpriseCommonMultiPartPhoneListName;
    }

    /**
     * Setter for searchCriteriaEnterpriseCommonMultiPartPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonMultiPartPhoneListName[] $searchCriteriaEnterpriseCommonMultiPartPhoneListName
     * @return $this
     */
    public function setSearchCriteriaEnterpriseCommonMultiPartPhoneListName(array $searchCriteriaEnterpriseCommonMultiPartPhoneListName)
    {
        $this->searchCriteriaEnterpriseCommonMultiPartPhoneListName = $searchCriteriaEnterpriseCommonMultiPartPhoneListName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaEnterpriseCommonMultiPartPhoneListName()
    {
        $this->searchCriteriaEnterpriseCommonMultiPartPhoneListName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaEnterpriseCommonMultiPartPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEnterpriseCommonMultiPartPhoneListName $searchCriteriaEnterpriseCommonMultiPartPhoneListName
     * @return $this
     */
    public function addSearchCriteriaEnterpriseCommonMultiPartPhoneListName($searchCriteriaEnterpriseCommonMultiPartPhoneListName)
    {
        $this->searchCriteriaEnterpriseCommonMultiPartPhoneListName[] = $searchCriteriaEnterpriseCommonMultiPartPhoneListName;
        return $this;
    }


}

