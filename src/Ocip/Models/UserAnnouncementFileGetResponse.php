<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileGetResponse
 *
 * Response to UserAnnouncementFileGetRequest.
 *         The response contains the file size (KB), uploaded timestamp,
 * description and usage for 
 *         an announcement file in the user announcement repository.
 *         The usage table has columns "Service Name", "Criteria Name"
 *         The "Service Name"" values correspond to string values of the
 * UserService data types.
 *         With the exception of the string "Voice Portal" which is returned when
 * the announcement is being used by Voice Portal Personalized Name. 
 *         For Call Center and Route Point users the "Instance Name" column
 * contains the instance id and 
 *         when the announcement is being used by a DNIS, "Intance Name" column
 * contans the instance id and the DNIS id.
 *         For Auto Attendants with submenus and the announcement is used by a
 * submenu the "Instance Name" column will contain the submenu name
 *
 * @see UserAnnouncementFileGetRequest
 */
class UserAnnouncementFileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName filesize
     * @var int|null
     */
    private $filesize = null;

    /**
     * @ElementName lastUploaded
     * @var string|null
     */
    private $lastUploaded = null;

    /**
     * @ElementName usageTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $usageTable = null;

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for filesize
     *
     * @ElementName filesize
     * @return int|null
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Setter for filesize
     *
     * @ElementName filesize
     * @param int|null $filesize
     * @return $this
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;
        return $this;
    }

    /**
     * Getter for lastUploaded
     *
     * @ElementName lastUploaded
     * @return string|null
     */
    public function getLastUploaded()
    {
        return $this->lastUploaded;
    }

    /**
     * Setter for lastUploaded
     *
     * @ElementName lastUploaded
     * @param string|null $lastUploaded
     * @return $this
     */
    public function setLastUploaded($lastUploaded)
    {
        $this->lastUploaded = $lastUploaded;
        return $this;
    }

    /**
     * Getter for usageTable
     *
     * @ElementName usageTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUsageTable()
    {
        return $this->usageTable;
    }

    /**
     * Setter for usageTable
     *
     * @ElementName usageTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $usageTable
     * @return $this
     */
    public function setUsageTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $usageTable)
    {
        $this->usageTable = $usageTable;
        return $this;
    }


}

