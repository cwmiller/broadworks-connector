<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileGetPagedSortedListRequest
 *
 * Get the list of announcement files for a user.
 *         If the responsePagingControl element is not provided,
 *         the paging startIndex will be set to 1 by default,
 *         and the responsePageSize will be set to the maximum responsePageSize by
 *         default.
 *         If no sortOrder is provided, the response is sorted by Name ascending by default.
 *         Multiple search criteria are logically ANDed together unless the searchCriteriaModeOr option is included.
 *         Then the search criteria are logically ORed together.
 *         The response is either a UserAnnouncementFileGetPagedSortedListResponse or an
 *         ErrorResponse.
 *
 * @see UserAnnouncementFileGetPagedSortedListResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:611","type":"sequence","children":[{"id":"53d18cc797d03d802cbc411ad821f1d4:614","type":"choice","optional":true}]}]
 */
class UserAnnouncementFileGetPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:611
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:611
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    private $responsePagingControl = null;

    /**
     * @ElementName sortByAnnouncementFileName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByAnnouncementFileName
     * @Group 53d18cc797d03d802cbc411ad821f1d4:614
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByAnnouncementFileName|null
     */
    private $sortByAnnouncementFileName = null;

    /**
     * @ElementName sortByAnnouncementFileSize
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByAnnouncementFileSize
     * @Group 53d18cc797d03d802cbc411ad821f1d4:614
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByAnnouncementFileSize|null
     */
    private $sortByAnnouncementFileSize = null;

    /**
     * @ElementName searchCriteriaAnnouncementFileName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:611
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName[]
     */
    private $searchCriteriaAnnouncementFileName = array(
        
    );

    /**
     * @ElementName searchCriteriaExactAnnouncementFileType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactAnnouncementFileType
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:611
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactAnnouncementFileType|null
     */
    private $searchCriteriaExactAnnouncementFileType = null;

    /**
     * @ElementName searchCriteriaExactMediaFileType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMediaFileType
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:611
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMediaFileType[]
     */
    private $searchCriteriaExactMediaFileType = array(
        
    );

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:611
     * @var bool|null
     */
    private $searchCriteriaModeOr = null;

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
     * Getter for sortByAnnouncementFileName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByAnnouncementFileName
     */
    public function getSortByAnnouncementFileName()
    {
        return $this->sortByAnnouncementFileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByAnnouncementFileName;
    }

    /**
     * Setter for sortByAnnouncementFileName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByAnnouncementFileName $sortByAnnouncementFileName
     * @return $this
     */
    public function setSortByAnnouncementFileName(\CWM\BroadWorksConnector\Ocip\Models\SortByAnnouncementFileName $sortByAnnouncementFileName)
    {
        $this->sortByAnnouncementFileName = $sortByAnnouncementFileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByAnnouncementFileName()
    {
        $this->sortByAnnouncementFileName = null;
        return $this;
    }

    /**
     * Getter for sortByAnnouncementFileSize
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByAnnouncementFileSize
     */
    public function getSortByAnnouncementFileSize()
    {
        return $this->sortByAnnouncementFileSize instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByAnnouncementFileSize;
    }

    /**
     * Setter for sortByAnnouncementFileSize
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByAnnouncementFileSize $sortByAnnouncementFileSize
     * @return $this
     */
    public function setSortByAnnouncementFileSize(\CWM\BroadWorksConnector\Ocip\Models\SortByAnnouncementFileSize $sortByAnnouncementFileSize)
    {
        $this->sortByAnnouncementFileSize = $sortByAnnouncementFileSize;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByAnnouncementFileSize()
    {
        $this->sortByAnnouncementFileSize = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaAnnouncementFileName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName[]
     */
    public function getSearchCriteriaAnnouncementFileName()
    {
        return $this->searchCriteriaAnnouncementFileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaAnnouncementFileName;
    }

    /**
     * Setter for searchCriteriaAnnouncementFileName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName[] $searchCriteriaAnnouncementFileName
     * @return $this
     */
    public function setSearchCriteriaAnnouncementFileName(array $searchCriteriaAnnouncementFileName)
    {
        $this->searchCriteriaAnnouncementFileName = $searchCriteriaAnnouncementFileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaAnnouncementFileName()
    {
        $this->searchCriteriaAnnouncementFileName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaAnnouncementFileName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName $searchCriteriaAnnouncementFileName
     * @return $this
     */
    public function addSearchCriteriaAnnouncementFileName($searchCriteriaAnnouncementFileName)
    {
        $this->searchCriteriaAnnouncementFileName[] = $searchCriteriaAnnouncementFileName;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactAnnouncementFileType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactAnnouncementFileType
     */
    public function getSearchCriteriaExactAnnouncementFileType()
    {
        return $this->searchCriteriaExactAnnouncementFileType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactAnnouncementFileType;
    }

    /**
     * Setter for searchCriteriaExactAnnouncementFileType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactAnnouncementFileType $searchCriteriaExactAnnouncementFileType
     * @return $this
     */
    public function setSearchCriteriaExactAnnouncementFileType(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactAnnouncementFileType $searchCriteriaExactAnnouncementFileType)
    {
        $this->searchCriteriaExactAnnouncementFileType = $searchCriteriaExactAnnouncementFileType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactAnnouncementFileType()
    {
        $this->searchCriteriaExactAnnouncementFileType = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactMediaFileType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMediaFileType[]
     */
    public function getSearchCriteriaExactMediaFileType()
    {
        return $this->searchCriteriaExactMediaFileType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactMediaFileType;
    }

    /**
     * Setter for searchCriteriaExactMediaFileType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMediaFileType[] $searchCriteriaExactMediaFileType
     * @return $this
     */
    public function setSearchCriteriaExactMediaFileType(array $searchCriteriaExactMediaFileType)
    {
        $this->searchCriteriaExactMediaFileType = $searchCriteriaExactMediaFileType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactMediaFileType()
    {
        $this->searchCriteriaExactMediaFileType = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactMediaFileType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMediaFileType $searchCriteriaExactMediaFileType
     * @return $this
     */
    public function addSearchCriteriaExactMediaFileType($searchCriteriaExactMediaFileType)
    {
        $this->searchCriteriaExactMediaFileType[] = $searchCriteriaExactMediaFileType;
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

