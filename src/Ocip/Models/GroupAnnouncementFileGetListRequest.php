<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementFileGetListRequest
 *
 * Get the list of available announcement files for a Group.
 *         The response is either a GroupAnnouncementFileGetListResponse or an
 * ErrorResponse.
 *
 * @see GroupAnnouncementFileGetListResponse
 * @see ErrorResponse
 */
class GroupAnnouncementFileGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName announcementFileType
     * @var string|null
     */
    private $announcementFileType = null;

    /**
     * @ElementName includeAnnouncementTable
     * @var bool|null
     */
    private $includeAnnouncementTable = null;

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaAnnouncementFileName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName[]
     */
    private $searchCriteriaAnnouncementFileName = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for announcementFileType
     *
     * @ElementName announcementFileType
     * @return string|null
     */
    public function getAnnouncementFileType()
    {
        return $this->announcementFileType;
    }

    /**
     * Setter for announcementFileType
     *
     * @ElementName announcementFileType
     * @param string|null $announcementFileType
     * @return $this
     */
    public function setAnnouncementFileType($announcementFileType)
    {
        $this->announcementFileType = $announcementFileType;
        return $this;
    }

    /**
     * Getter for includeAnnouncementTable
     *
     * @ElementName includeAnnouncementTable
     * @return bool|null
     */
    public function getIncludeAnnouncementTable()
    {
        return $this->includeAnnouncementTable;
    }

    /**
     * Setter for includeAnnouncementTable
     *
     * @ElementName includeAnnouncementTable
     * @param bool|null $includeAnnouncementTable
     * @return $this
     */
    public function setIncludeAnnouncementTable($includeAnnouncementTable)
    {
        $this->includeAnnouncementTable = $includeAnnouncementTable;
        return $this;
    }

    /**
     * Getter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @return int|null
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @param int|null $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * Getter for searchCriteriaAnnouncementFileName
     *
     * @ElementName searchCriteriaAnnouncementFileName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName[]
     */
    public function getSearchCriteriaAnnouncementFileName()
    {
        return $this->searchCriteriaAnnouncementFileName;
    }

    /**
     * Setter for searchCriteriaAnnouncementFileName
     *
     * @ElementName searchCriteriaAnnouncementFileName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName[] $searchCriteriaAnnouncementFileName
     * @return $this
     */
    public function setSearchCriteriaAnnouncementFileName($searchCriteriaAnnouncementFileName)
    {
        $this->searchCriteriaAnnouncementFileName = $searchCriteriaAnnouncementFileName;
        return $this;
    }

    /**
     * Adder for searchCriteriaAnnouncementFileName
     *
     * @ElementName searchCriteriaAnnouncementFileName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName $searchCriteriaAnnouncementFileName
     * @return $this
     */
    public function addSearchCriteriaAnnouncementFileName($searchCriteriaAnnouncementFileName)
    {
        $this->searchCriteriaAnnouncementFileName []= $searchCriteriaAnnouncementFileName;
        return $this;
    }


}

