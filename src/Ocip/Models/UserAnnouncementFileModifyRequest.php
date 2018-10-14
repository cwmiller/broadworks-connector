<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileModifyRequest
 *
 * This command is used to change the name of the file or upload a new announcement
 * file for 
 *         an existing announcement in the user repository.
 *         When modifying the file type the command will fail if the media type of
 * the new file changes 
 *         the announcement from audio to video (or vice versa).
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserAnnouncementFileModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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
    public function setAnnouncementFileKey(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $announcementFileKey)
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
    public function setAnnouncementFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $announcementFile)
    {
        $this->announcementFile = $announcementFile;
        return $this;
    }


}

