<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetPhoneNumberPagedSortedListRequest
 *
 * Get the list of all the BroadWorks Anywhere phone numbers for the user.
 *         If no sortOrder is included the response is sorted by Phone Number ascending by default. 
 *         The response is either a UserBroadWorksAnywhereGetPhoneNumberPagedSortedListResponse or an ErrorResponse.
 *
 * @see UserBroadWorksAnywhereGetPhoneNumberPagedSortedListResponse
 * @see ErrorResponse
 * @Groups [{"id":"72f634ecc58842ce9d362ca629a47ea9:381","type":"sequence","children":[{"id":"72f634ecc58842ce9d362ca629a47ea9:384","type":"choice","optional":true}]}]
 */
class UserBroadWorksAnywhereGetPhoneNumberPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 72f634ecc58842ce9d362ca629a47ea9:381
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group 72f634ecc58842ce9d362ca629a47ea9:381
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    private $responsePagingControl = null;

    /**
     * @ElementName sortByLocation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByLocation
     * @Group 72f634ecc58842ce9d362ca629a47ea9:384
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByLocation|null
     */
    private $sortByLocation = null;

    /**
     * @ElementName sortByEnabled
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByEnabled
     * @Group 72f634ecc58842ce9d362ca629a47ea9:384
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByEnabled|null
     */
    private $sortByEnabled = null;

    /**
     * @ElementName searchCriteriaLocation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLocation
     * @Array
     * @Optional
     * @Group 72f634ecc58842ce9d362ca629a47ea9:381
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLocation[]
     */
    private $searchCriteriaLocation = array(
        
    );

    /**
     * @ElementName searchCriteriaExactLocationEnabled
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactLocationEnabled
     * @Optional
     * @Group 72f634ecc58842ce9d362ca629a47ea9:381
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactLocationEnabled|null
     */
    private $searchCriteriaExactLocationEnabled = null;

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
     * Getter for sortByLocation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByLocation
     */
    public function getSortByLocation()
    {
        return $this->sortByLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByLocation;
    }

    /**
     * Setter for sortByLocation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByLocation $sortByLocation
     * @return $this
     */
    public function setSortByLocation(\CWM\BroadWorksConnector\Ocip\Models\SortByLocation $sortByLocation)
    {
        $this->sortByLocation = $sortByLocation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByLocation()
    {
        $this->sortByLocation = null;
        return $this;
    }

    /**
     * Getter for sortByEnabled
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByEnabled
     */
    public function getSortByEnabled()
    {
        return $this->sortByEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByEnabled;
    }

    /**
     * Setter for sortByEnabled
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByEnabled $sortByEnabled
     * @return $this
     */
    public function setSortByEnabled(\CWM\BroadWorksConnector\Ocip\Models\SortByEnabled $sortByEnabled)
    {
        $this->sortByEnabled = $sortByEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByEnabled()
    {
        $this->sortByEnabled = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaLocation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLocation[]
     */
    public function getSearchCriteriaLocation()
    {
        return $this->searchCriteriaLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaLocation;
    }

    /**
     * Setter for searchCriteriaLocation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLocation[] $searchCriteriaLocation
     * @return $this
     */
    public function setSearchCriteriaLocation(array $searchCriteriaLocation)
    {
        $this->searchCriteriaLocation = $searchCriteriaLocation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaLocation()
    {
        $this->searchCriteriaLocation = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaLocation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLocation $searchCriteriaLocation
     * @return $this
     */
    public function addSearchCriteriaLocation($searchCriteriaLocation)
    {
        $this->searchCriteriaLocation[] = $searchCriteriaLocation;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactLocationEnabled
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactLocationEnabled
     */
    public function getSearchCriteriaExactLocationEnabled()
    {
        return $this->searchCriteriaExactLocationEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactLocationEnabled;
    }

    /**
     * Setter for searchCriteriaExactLocationEnabled
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactLocationEnabled $searchCriteriaExactLocationEnabled
     * @return $this
     */
    public function setSearchCriteriaExactLocationEnabled(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactLocationEnabled $searchCriteriaExactLocationEnabled)
    {
        $this->searchCriteriaExactLocationEnabled = $searchCriteriaExactLocationEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactLocationEnabled()
    {
        $this->searchCriteriaExactLocationEnabled = null;
        return $this;
    }


}

