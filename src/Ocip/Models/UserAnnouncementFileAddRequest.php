<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileAddRequest
 *
 * Add an announcement to the user announcement repository
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserAnnouncementFileAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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
    public function setAnnouncementFile($announcementFile)
    {
        $this->announcementFile = $announcementFile;
        return $this;
    }


}

