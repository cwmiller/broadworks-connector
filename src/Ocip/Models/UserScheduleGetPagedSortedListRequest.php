<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetPagedSortedListRequest
 *
 * Get the list of schedules viewable by a User. The list can be filtered by schedule name,
 *         schedule type, and schedule level.
 *         The response is either a UserScheduleGetPagedSortedListResponse or an ErrorResponse.
 *         This command is authorized to user who is Executive-Assistant of the Executive.
 *         If no sortOrder is included, the response is sorted by Name ascending by default.
 *         If the responsePagingControl element is not provided, the paging startIndex will be 
 *         set to 1 by default, and the responsePageSize will be set to the maximum 
 *         responsePageSize by default.
 *         Multiple search criteria are logically ANDed together unless the searchCriteriaModeOr option 
 *         is included. Then the search criteria are logically ORed together.
 *
 * @see UserScheduleGetPagedSortedListResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:3759","type":"sequence"}]
 */
class UserScheduleGetPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3759
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3759
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    protected $responsePagingControl = null;

    /**
     * @ElementName sortByScheduleName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByScheduleName
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3759
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByScheduleName|null
     */
    protected $sortByScheduleName = null;

    /**
     * @ElementName searchCriteriaScheduleName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaScheduleName
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3759
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaScheduleName[]
     */
    protected $searchCriteriaScheduleName = array(
        
    );

    /**
     * @ElementName searchCriteriaExactScheduleType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleType
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3759
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleType[]
     */
    protected $searchCriteriaExactScheduleType = array(
        
    );

    /**
     * @ElementName searchCriteriaExactScheduleLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleLevel
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3759
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleLevel[]
     */
    protected $searchCriteriaExactScheduleLevel = array(
        
    );

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3759
     * @var bool|null
     */
    protected $searchCriteriaModeOr = null;

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
     * Getter for sortByScheduleName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByScheduleName
     */
    public function getSortByScheduleName()
    {
        return $this->sortByScheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByScheduleName;
    }

    /**
     * Setter for sortByScheduleName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByScheduleName $sortByScheduleName
     * @return $this
     */
    public function setSortByScheduleName(\CWM\BroadWorksConnector\Ocip\Models\SortByScheduleName $sortByScheduleName)
    {
        $this->sortByScheduleName = $sortByScheduleName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByScheduleName()
    {
        $this->sortByScheduleName = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaScheduleName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaScheduleName[]
     */
    public function getSearchCriteriaScheduleName()
    {
        return $this->searchCriteriaScheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaScheduleName;
    }

    /**
     * Setter for searchCriteriaScheduleName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaScheduleName[] $searchCriteriaScheduleName
     * @return $this
     */
    public function setSearchCriteriaScheduleName(array $searchCriteriaScheduleName)
    {
        $this->searchCriteriaScheduleName = $searchCriteriaScheduleName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaScheduleName()
    {
        $this->searchCriteriaScheduleName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaScheduleName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaScheduleName $searchCriteriaScheduleName
     * @return $this
     */
    public function addSearchCriteriaScheduleName($searchCriteriaScheduleName)
    {
        $this->searchCriteriaScheduleName[] = $searchCriteriaScheduleName;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactScheduleType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleType[]
     */
    public function getSearchCriteriaExactScheduleType()
    {
        return $this->searchCriteriaExactScheduleType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactScheduleType;
    }

    /**
     * Setter for searchCriteriaExactScheduleType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleType[] $searchCriteriaExactScheduleType
     * @return $this
     */
    public function setSearchCriteriaExactScheduleType(array $searchCriteriaExactScheduleType)
    {
        $this->searchCriteriaExactScheduleType = $searchCriteriaExactScheduleType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactScheduleType()
    {
        $this->searchCriteriaExactScheduleType = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactScheduleType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleType $searchCriteriaExactScheduleType
     * @return $this
     */
    public function addSearchCriteriaExactScheduleType($searchCriteriaExactScheduleType)
    {
        $this->searchCriteriaExactScheduleType[] = $searchCriteriaExactScheduleType;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactScheduleLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleLevel[]
     */
    public function getSearchCriteriaExactScheduleLevel()
    {
        return $this->searchCriteriaExactScheduleLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactScheduleLevel;
    }

    /**
     * Setter for searchCriteriaExactScheduleLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleLevel[] $searchCriteriaExactScheduleLevel
     * @return $this
     */
    public function setSearchCriteriaExactScheduleLevel(array $searchCriteriaExactScheduleLevel)
    {
        $this->searchCriteriaExactScheduleLevel = $searchCriteriaExactScheduleLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactScheduleLevel()
    {
        $this->searchCriteriaExactScheduleLevel = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactScheduleLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleLevel $searchCriteriaExactScheduleLevel
     * @return $this
     */
    public function addSearchCriteriaExactScheduleLevel($searchCriteriaExactScheduleLevel)
    {
        $this->searchCriteriaExactScheduleLevel[] = $searchCriteriaExactScheduleLevel;
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


}

