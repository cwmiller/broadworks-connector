<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileGetResponse
 *
 * Response to UserAnnouncementFileGetRequest.
 *         The response contains the file size (KB), uploaded timestamp, description and usage for 
 *         an announcement file in the user announcement repository.
 *         The usage table has columns "Service Name", "Criteria Name"
 *         The "Service Name"" values correspond to string values of the UserService data types.
 *         With the exception of the string "Voice Portal" which is returned when the announcement is being used by Voice Portal Personalized Name. 
 *         For Call Center and Route Point users the "Instance Name" column contains the instance id and 
 *         when the announcement is being used by a DNIS, "Intance Name" column contans the instance id and the DNIS id.
 *         For Auto Attendants with submenus and the announcement is used by a submenu the "Instance Name" column will contain the submenu name
 *         
 *         Replaced by: UserAnnouncementFileGetResponse22.
 *
 * @see UserAnnouncementFileGetRequest
 * @see UserAnnouncementFileGetResponse22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:39505","type":"sequence"}]
 */
class UserAnnouncementFileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39505
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName filesize
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39505
     * @var int|null
     */
    protected $filesize = null;

    /**
     * @ElementName lastUploaded
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39505
     * @var string|null
     */
    protected $lastUploaded = null;

    /**
     * @ElementName usageTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39505
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

