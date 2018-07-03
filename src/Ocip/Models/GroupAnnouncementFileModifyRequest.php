<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementFileModifyRequest
 *
 * Modify an existing announcement in the group repository
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupAnnouncementFileModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName announcementFileKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    private $announcementFileKey = null;

    /**
     * @ElementName newAnnouncementFileName
     * @var string|null
     */
    private $newAnnouncementFileName = null;

    /**
     * @ElementName announcementFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $announcementFile = null;

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
     * Getter for announcementFileKey
     *
     * @ElementName announcementFileKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    public function getAnnouncementFileKey()
    {
        return $this->announcementFileKey;
    }

    /**
     * Setter for announcementFileKey
     *
     * @ElementName announcementFileKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null $announcementFileKey
     * @return $this
     */
    public function setAnnouncementFileKey($announcementFileKey)
    {
        $this->announcementFileKey = $announcementFileKey;
        return $this;
    }

    /**
     * Getter for newAnnouncementFileName
     *
     * @ElementName newAnnouncementFileName
     * @return string|null
     */
    public function getNewAnnouncementFileName()
    {
        return $this->newAnnouncementFileName;
    }

    /**
     * Setter for newAnnouncementFileName
     *
     * @ElementName newAnnouncementFileName
     * @param string|null $newAnnouncementFileName
     * @return $this
     */
    public function setNewAnnouncementFileName($newAnnouncementFileName)
    {
        $this->newAnnouncementFileName = $newAnnouncementFileName;
        return $this;
    }

    /**
     * Getter for announcementFile
     *
     * @ElementName announcementFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    public function getAnnouncementFile()
    {
        return $this->announcementFile;
    }

    /**
     * Setter for announcementFile
     *
     * @ElementName announcementFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null $announcementFile
     * @return $this
     */
    public function setAnnouncementFile($announcementFile)
    {
        $this->announcementFile = $announcementFile;
        return $this;
    }


}

