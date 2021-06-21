<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementFileGetResponse22
 *
 * Response to GroupAnnouncementFileGetRequest22.
 *         The response contains the file size, uploaded timestamp, description and usage for 
 *         an announcement file in the user announcement repository.
 *         The usage table has columns "Service Name", and "Instance Name".
 *         The Service Name values correspond to string values of the GroupService and UserService data types.
 *         With the exception of the string "Voice Portal" which is returned when the announcement is being used by Voice Portal Personalized Name.
 *
 *         The following data elements are only used in AS data mode:
 *           announcementFileExternalId
 *
 * @see GroupAnnouncementFileGetRequest22
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:2047","type":"sequence"}]
 */
class GroupAnnouncementFileGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2047
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName filesize
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2047
     * @var int|null
     */
    private $filesize = null;

    /**
     * @ElementName lastUploaded
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2047
     * @var string|null
     */
    private $lastUploaded = null;

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2047
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2047
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName announcementFileKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2047
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    private $announcementFileKey = null;

    /**
     * @ElementName announcementFileExternalId
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2047
     * @MaxLength 36
     * @var string|null
     */
    private $announcementFileExternalId = null;

    /**
     * @ElementName usageTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2047
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

