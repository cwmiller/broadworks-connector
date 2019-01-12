<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileModifyRequest
 *
 * This command is used to change the name of the file or upload a new announcement file for 
 *         an existing announcement in the user repository.
 *         When modifying the file type the command will fail if the media type of the new file changes 
 *         the announcement from audio to video (or vice versa).
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:654","type":"sequence"}]
 */
class UserAnnouncementFileModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:654
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName announcementFileKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     * @Group 53d18cc797d03d802cbc411ad821f1d4:654
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    private $announcementFileKey = null;

    /**
     * @ElementName newAnnouncementFileName
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:654
     * @var string|null
     */
    private $newAnnouncementFileName = null;

    /**
     * @ElementName announcementFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:654
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $announcementFile = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
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
     * Getter for newAnnouncementFileName
     *
     * @return string
     */
    public function getNewAnnouncementFileName()
    {
        return $this->newAnnouncementFileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newAnnouncementFileName;
    }

    /**
     * Setter for newAnnouncementFileName
     *
     * @param string $newAnnouncementFileName
     * @return $this
     */
    public function setNewAnnouncementFileName($newAnnouncementFileName)
    {
        $this->newAnnouncementFileName = $newAnnouncementFileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewAnnouncementFileName()
    {
        $this->newAnnouncementFileName = null;
        return $this;
    }

    /**
     * Getter for announcementFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getAnnouncementFile()
    {
        return $this->announcementFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementFile;
    }

    /**
     * Setter for announcementFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $announcementFile
     * @return $this
     */
    public function setAnnouncementFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $announcementFile)
    {
        $this->announcementFile = $announcementFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementFile()
    {
        $this->announcementFile = null;
        return $this;
    }


}

