<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileAddRequest
 *
 * Add an announcement to the user announcement repository
 *
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           announcementFileExternalId
 *
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:501","type":"sequence","children":[{"id":"53d18cc797d03d802cbc411ad821f1d4:503","type":"choice"}]}]
 */
class UserAnnouncementFileAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:501
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName announcementFileName
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:503
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $announcementFileName = null;

    /**
     * @ElementName announcementFileExternalId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:503
     * @MaxLength 36
     * @var string|null
     */
    protected $announcementFileExternalId = null;

    /**
     * @ElementName announcementFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Group 53d18cc797d03d802cbc411ad821f1d4:501
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
     * Getter for announcementFileName
     *
     * @return string
     */
    public function getAnnouncementFileName()
    {
        return $this->announcementFileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementFileName;
    }

    /**
     * Setter for announcementFileName
     *
     * @param string $announcementFileName
     * @return $this
     */
    public function setAnnouncementFileName($announcementFileName)
    {
        $this->announcementFileName = $announcementFileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementFileName()
    {
        $this->announcementFileName = null;
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

