<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileGetListRequest
 *
 * Get the list of announcement names with associated media type and filesize for a User and 
 *         given Announcement Repository Type
 *         The response is either a UserAnnouncementFileGetListResponse or an ErrorResponse.
 *
 * @see UserAnnouncementFileGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:556","type":"sequence"}]
 */
class UserAnnouncementFileGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:556
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName announcementFileType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:556
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType|null
     */
    private $announcementFileType = null;

    /**
     * @ElementName includeAnnouncementTable
     * @Type bool
     * @Group 53d18cc797d03d802cbc411ad821f1d4:556
     * @var bool|null
     */
    private $includeAnnouncementTable = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:556
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaAnnouncementFileName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:556
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName[]
     */
    private $searchCriteriaAnnouncementFileName = array(
        
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
     * Getter for announcementFileType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType
     */
    public function getAnnouncementFileType()
    {
        return $this->announcementFileType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementFileType;
    }

    /**
     * Setter for announcementFileType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType $announcementFileType
     * @return $this
     */
    public function setAnnouncementFileType(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType $announcementFileType)
    {
        $this->announcementFileType = $announcementFileType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementFileType()
    {
        $this->announcementFileType = null;
        return $this;
    }

    /**
     * Getter for includeAnnouncementTable
     *
     * @return bool
     */
    public function getIncludeAnnouncementTable()
    {
        return $this->includeAnnouncementTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeAnnouncementTable;
    }

    /**
     * Setter for includeAnnouncementTable
     *
     * @param bool $includeAnnouncementTable
     * @return $this
     */
    public function setIncludeAnnouncementTable($includeAnnouncementTable)
    {
        $this->includeAnnouncementTable = $includeAnnouncementTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeAnnouncementTable()
    {
        $this->includeAnnouncementTable = null;
        return $this;
    }

    /**
     * Getter for responseSizeLimit
     *
     * @return int
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @param int $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponseSizeLimit()
    {
        $this->responseSizeLimit = null;
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


}

