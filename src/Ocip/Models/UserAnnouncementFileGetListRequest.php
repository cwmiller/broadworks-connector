<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileGetListRequest
 *
 * Get the list of announcement names with associated media type and filesize for a
 * User and 
 *         given Announcement Repository Type
 *         The response is either a UserAnnouncementFileGetListResponse or an
 * ErrorResponse.
 *
 * @see UserAnnouncementFileGetListResponse
 * @see ErrorResponse
 */
class UserAnnouncementFileGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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

