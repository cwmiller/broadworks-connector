<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGroupCommonPhoneListGetPagedSortedListRequest
 *
 * Get a user's group's common phone list.
 * 				The response is either a UserGroupCommonPhoneListGetPagedSortedListResponse or an
 * 				ErrorResponse.
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
 * 				searchCriteriaGroupCommonMultiPartPhoneListName
 *
 * @see UserGroupCommonPhoneListGetPagedSortedListResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:2335","type":"sequence","children":[{"id":"fb73488c2ef4ac4400ab213b637d79a9:2338","type":"choice"}]}]
 */
class UserGroupCommonPhoneListGetPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2335
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2335
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    protected $responsePagingControl = null;

    /**
     * @ElementName sortByGroupCommonPhoneListNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListNumber
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2338
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListNumber|null
     */
    protected $sortByGroupCommonPhoneListNumber = null;

    /**
     * @ElementName sortByGroupCommonPhoneListName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListName
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2338
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListName|null
     */
    protected $sortByGroupCommonPhoneListName = null;

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2335
     * @var bool|null
     */
    protected $searchCriteriaModeOr = null;

    /**
     * @ElementName searchCriteriaGroupCommonPhoneListName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListName
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2335
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListName[]
     */
    protected $searchCriteriaGroupCommonPhoneListName = [
        
    ];

    /**
     * @ElementName searchCriteriaGroupCommonPhoneListNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListNumber
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2335
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonPhoneListNumber[]
     */
    protected $searchCriteriaGroupCommonPhoneListNumber = [
        
    ];

    /**
     * @ElementName searchCriteriaGroupCommonMultiPartPhoneListName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonMultiPartPhoneListName
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2335
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonMultiPartPhoneListName[]
     */
    protected $searchCriteriaGroupCommonMultiPartPhoneListName = [
        
    ];

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
     * Getter for sortByGroupCommonPhoneListNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListNumber
     */
    public function getSortByGroupCommonPhoneListNumber()
    {
        return $this->sortByGroupCommonPhoneListNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByGroupCommonPhoneListNumber;
    }

    /**
     * Setter for sortByGroupCommonPhoneListNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListNumber $sortByGroupCommonPhoneListNumber
     * @return $this
     */
    public function setSortByGroupCommonPhoneListNumber(\CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListNumber $sortByGroupCommonPhoneListNumber)
    {
        $this->sortByGroupCommonPhoneListNumber = $sortByGroupCommonPhoneListNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByGroupCommonPhoneListNumber()
    {
        $this->sortByGroupCommonPhoneListNumber = null;
        return $this;
    }

    /**
     * Getter for sortByGroupCommonPhoneListName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListName
     */
    public function getSortByGroupCommonPhoneListName()
    {
        return $this->sortByGroupCommonPhoneListName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByGroupCommonPhoneListName;
    }

    /**
     * Setter for sortByGroupCommonPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListName $sortByGroupCommonPhoneListName
     * @return $this
     */
    public function setSortByGroupCommonPhoneListName(\CWM\BroadWorksConnector\Ocip\Models\SortByGroupCommonPhoneListName $sortByGroupCommonPhoneListName)
    {
        $this->sortByGroupCommonPhoneListName = $sortByGroupCommonPhoneListName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByGroupCommonPhoneListName()
    {
        $this->sortByGroupCommonPhoneListName = null;
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

    /**
     * Getter for searchCriteriaGroupCommonMultiPartPhoneListName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonMultiPartPhoneListName[]
     */
    public function getSearchCriteriaGroupCommonMultiPartPhoneListName()
    {
        return $this->searchCriteriaGroupCommonMultiPartPhoneListName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaGroupCommonMultiPartPhoneListName;
    }

    /**
     * Setter for searchCriteriaGroupCommonMultiPartPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonMultiPartPhoneListName[] $searchCriteriaGroupCommonMultiPartPhoneListName
     * @return $this
     */
    public function setSearchCriteriaGroupCommonMultiPartPhoneListName(array $searchCriteriaGroupCommonMultiPartPhoneListName)
    {
        $this->searchCriteriaGroupCommonMultiPartPhoneListName = $searchCriteriaGroupCommonMultiPartPhoneListName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaGroupCommonMultiPartPhoneListName()
    {
        $this->searchCriteriaGroupCommonMultiPartPhoneListName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupCommonMultiPartPhoneListName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupCommonMultiPartPhoneListName $searchCriteriaGroupCommonMultiPartPhoneListName
     * @return $this
     */
    public function addSearchCriteriaGroupCommonMultiPartPhoneListName($searchCriteriaGroupCommonMultiPartPhoneListName)
    {
        $this->searchCriteriaGroupCommonMultiPartPhoneListName[] = $searchCriteriaGroupCommonMultiPartPhoneListName;
        return $this;
    }
}

