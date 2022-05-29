<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementFileGetPagedSortedListRequest
 *
 * Get the list of available announcement files for
 *         a Group.
 *         If the responsePagingControl element is not provided,
 *         the paging startIndex will be set to 1 by default,
 *         and the responsePageSize will be set to the maximum responsePageSize by
 *         default.
 *         If no sortOrder is included, the response is sorted by Name ascending by default.
 *         Multiple search criteria are logically ANDed together unless the searchCriteriaModeOr option is included.
 *         Then the search criteria are logically ORed together.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           groupExternalId
 *         
 *         The response is either a GroupAnnouncementFileGetPagedSortedListResponse or an ErrorResponse.
 *
 * @see GroupAnnouncementFileGetPagedSortedListResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:1956","type":"sequence","children":[{"id":"f3a93cf15de4abd7903673e44ee3e07b:1957","type":"choice","children":[{"id":"f3a93cf15de4abd7903673e44ee3e07b:1958","type":"sequence"},{"id":"f3a93cf15de4abd7903673e44ee3e07b:1962","type":"sequence"}]},{"id":"f3a93cf15de4abd7903673e44ee3e07b:1967","type":"choice","optional":true}]}]
 */
class GroupAnnouncementFileGetPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1958
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1958
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName groupExternalId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1962
     * @MaxLength 36
     * @var string|null
     */
    protected $groupExternalId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1956
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    protected $responsePagingControl = null;

    /**
     * @ElementName sortByAnnouncementFileName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByAnnouncementFileName
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1967
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByAnnouncementFileName|null
     */
    protected $sortByAnnouncementFileName = null;

    /**
     * @ElementName sortByAnnouncementFileSize
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByAnnouncementFileSize
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1967
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByAnnouncementFileSize|null
     */
    protected $sortByAnnouncementFileSize = null;

    /**
     * @ElementName searchCriteriaAnnouncementFileName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1956
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName[]
     */
    protected $searchCriteriaAnnouncementFileName = array(
        
    );

    /**
     * @ElementName searchCriteriaExactAnnouncementFileType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactAnnouncementFileType
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1956
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactAnnouncementFileType|null
     */
    protected $searchCriteriaExactAnnouncementFileType = null;

    /**
     * @ElementName searchCriteriaExactMediaFileType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMediaFileType
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1956
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMediaFileType[]
     */
    protected $searchCriteriaExactMediaFileType = array(
        
    );

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1956
     * @var bool|null
     */
    protected $searchCriteriaModeOr = null;

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
     * Getter for groupExternalId
     *
     * @return string
     */
    public function getGroupExternalId()
    {
        return $this->groupExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupExternalId;
    }

    /**
     * Setter for groupExternalId
     *
     * @param string $groupExternalId
     * @return $this
     */
    public function setGroupExternalId($groupExternalId)
    {
        $this->groupExternalId = $groupExternalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupExternalId()
    {
        $this->groupExternalId = null;
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

