<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementFileAddRequest
 *
 * Add an announcement to the group announcement repository
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupAnnouncementFileAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName announcementFileName
     * @var string|null
     */
    private $announcementFileName = null;

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
     * Getter for announcementFileName
     *
     * @ElementName announcementFileName
     * @return string|null
     */
    public function getAnnouncementFileName()
    {
        return $this->announcementFileName;
    }

    /**
     * Setter for announcementFileName
     *
     * @ElementName announcementFileName
     * @param string|null $announcementFileName
     * @return $this
     */
    public function setAnnouncementFileName($announcementFileName)
    {
        $this->announcementFileName = $announcementFileName;
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
    public function setAnnouncementFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $announcementFile)
    {
        $this->announcementFile = $announcementFile;
        return $this;
    }


}

