<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileGetResponse22
 *
 * Response to UserAnnouncementFileGetRequest22.
 *         The response contains the file size (KB), uploaded timestamp, description and usage for 
 *         an announcement file in the user announcement repository.
 *         The usage table has columns "Service Name", "Criteria Name"
 *         The "Service Name"" values correspond to string values of the UserService data types.
 *         With the exception of the string "Voice Portal" which is returned when the announcement is being used by Voice Portal Personalized Name. 
 *         For Call Center and Route Point users the "Instance Name" column contains the instance id and 
 *         when the announcement is being used by a DNIS, "Intance Name" column contans the instance id and the DNIS id.
 *         For Auto Attendants with submenus and the announcement is used by a submenu the "Instance Name" column will contain the submenu name
 *
 *         The following data elements are only used in AS data mode:
 *           announcementFileExternalId
 *
 * @see UserAnnouncementFileGetRequest22
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:738","type":"sequence"}]
 */
class UserAnnouncementFileGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:738
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName filesize
     * @Type int
     * @Group 53d18cc797d03d802cbc411ad821f1d4:738
     * @var int|null
     */
    protected $filesize = null;

    /**
     * @ElementName lastUploaded
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:738
     * @var string|null
     */
    protected $lastUploaded = null;

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:738
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName announcementFileKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     * @Group 53d18cc797d03d802cbc411ad821f1d4:738
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    protected $announcementFileKey = null;

    /**
     * @ElementName announcementFileExternalId
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:738
     * @MaxLength 36
     * @var string|null
     */
    protected $announcementFileExternalId = null;

    /**
     * @ElementName usageTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 53d18cc797d03d802cbc411ad821f1d4:738
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $usageTable = null;

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for filesize
     *
     * @return int
     */
    public function getFilesize()
    {
        return $this->filesize instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->filesize;
    }

    /**
     * Setter for filesize
     *
     * @param int $filesize
     * @return $this
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFilesize()
    {
        $this->filesize = null;
        return $this;
    }

    /**
     * Getter for lastUploaded
     *
     * @return string
     */
    public function getLastUploaded()
    {
        return $this->lastUploaded instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lastUploaded;
    }

    /**
     * Setter for lastUploaded
     *
     * @param string $lastUploaded
     * @return $this
     */
    public function setLastUploaded($lastUploaded)
    {
        $this->lastUploaded = $lastUploaded;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLastUploaded()
    {
        $this->lastUploaded = null;
        return $this;
    }

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
     * Getter for announcementFileKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     */
    public function getAnnouncementFileKey()
    {
        return $this->announcementFileKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementFileKey;
    }

    /**
     * Setter for announcementFileKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $announcementFileKey
     * @return $this
     */
    public function setAnnouncementFileKey(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $announcementFileKey)
    {
        $this->announcementFileKey = $announcementFileKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementFileKey()
    {
        $this->announcementFileKey = null;
        return $this;
    }

    /**
     * Getter for announcementFileExternalId
     *
     * @return string
     */
    public function getAnnouncementFileExternalId()
    {
        return $this->announcementFileExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementFileExternalId;
    }

    /**
     * Setter for announcementFileExternalId
     *
     * @param string $announcementFileExternalId
     * @return $this
     */
    public function setAnnouncementFileExternalId($announcementFileExternalId)
    {
        $this->announcementFileExternalId = $announcementFileExternalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementFileExternalId()
    {
        $this->announcementFileExternalId = null;
        return $this;
    }

    /**
     * Getter for usageTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUsageTable()
    {
        return $this->usageTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->usageTable;
    }

    /**
     * Setter for usageTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $usageTable
     * @return $this
     */
    public function setUsageTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $usageTable)
    {
        $this->usageTable = $usageTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUsageTable()
    {
        $this->usageTable = null;
        return $this;
    }


}

