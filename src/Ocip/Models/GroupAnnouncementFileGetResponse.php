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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:3739","type":"sequence"}]
 */
class GroupAnnouncementFileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName description
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:3739
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName filesize
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:3739
     * @var int|null
     */
    protected $filesize = null;

    /**
     * @ElementName lastUploaded
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:3739
     * @var string|null
     */
    protected $lastUploaded = null;

    /**
     * @ElementName usageTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:3739
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

