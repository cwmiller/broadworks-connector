<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileModifyRequest
 *
 * This command is used to change the name of the file or upload a new announcement file for 
 *         an existing announcement in the user repository.
 *         When modifying the file type the command will fail if the media type of the new file changes 
 *         the announcement from audio to video (or vice versa).
 *
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           announcementFileExternalId
 *
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:763","type":"sequence","children":[{"id":"fb73488c2ef4ac4400ab213b637d79a9:764","type":"choice","children":[{"id":"fb73488c2ef4ac4400ab213b637d79a9:765","type":"sequence"}]}]}]
 */
class UserAnnouncementFileModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:765
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName announcementFileKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     * @Group fb73488c2ef4ac4400ab213b637d79a9:765
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    protected $announcementFileKey = null;

    /**
     * @ElementName announcementFileExternalId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:764
     * @MaxLength 36
     * @var string|null
     */
    protected $announcementFileExternalId = null;

    /**
     * @ElementName newAnnouncementFileName
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:763
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $newAnnouncementFileName = null;

    /**
     * @ElementName announcementFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:763
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    protected $announcementFile = null;

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

