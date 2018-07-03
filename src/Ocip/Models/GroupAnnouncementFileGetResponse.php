<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementFileGetResponse
 *
 * Response to GroupAnnouncementFileGetRequest.
 *         The response contains the file size, uploaded timestamp, description and
 * usage for 
 *         an announcement file in the user announcement repository.
 *         The usage table has columns "Service Name", and "Instance Name".
 *         The Service Name values correspond to string values of the GroupService
 * and UserService data types.
 *         With the exception of the string "Voice Portal" which is returned when
 * the announcement is being used by Voice Portal Personalized Name.
 *
 * @see GroupAnnouncementFileGetRequest
 */
class GroupAnnouncementFileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setUsageTable($usageTable)
    {
        $this->usageTable = $usageTable;
        return $this;
    }


}

