<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementFileGetResponse
 *
 * Response to GroupAnnouncementFileGetRequest.
 *         The response contains the file size, uploaded timestamp, description and usage for 
 *         an announcement file in the user announcement repository.
 *         The usage table has columns "Service Name", and "Instance Name".
 *         The Service Name values correspond to string values of the GroupService and UserService data types.
 *         With the exception of the string "Voice Portal" which is returned when the announcement is being used by Voice Portal Personalized Name.
 *         
 *         Replaced by: GroupAnnouncementFileGetResponse22.
 *
 * @see GroupAnnouncementFileGetRequest
 * @see GroupAnnouncementFileGetResponse22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:3608","type":"sequence"}]
 */
class GroupAnnouncementFileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3608
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName filesize
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3608
     * @var int|null
     */
    private $filesize = null;

    /**
     * @ElementName lastUploaded
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3608
     * @var string|null
     */
    private $lastUploaded = null;

    /**
     * @ElementName usageTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3608
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $usageTable = null;

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

