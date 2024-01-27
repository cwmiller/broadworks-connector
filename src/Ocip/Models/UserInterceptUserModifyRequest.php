<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserInterceptUserModifyRequest
 *
 * Modify the user's intercept user service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: UserInterceptUserModifyRequest16
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see UserInterceptUserModifyRequest16
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:45616","type":"sequence"}]
 */
class UserInterceptUserModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:45616
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:45616
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName announcementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:45616
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    protected $announcementSelection = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:45616
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    protected $audioFile = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:45616
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    protected $videoFile = null;

    /**
     * @ElementName playNewPhoneNumber
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:45616
     * @var bool|null
     */
    protected $playNewPhoneNumber = null;

    /**
     * @ElementName newPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:45616
     * @MinLength 1
     * @MaxLength 23
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $newPhoneNumber = null;

    /**
     * @ElementName transferOnZeroToPhoneNumber
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:45616
     * @var bool|null
     */
    protected $transferOnZeroToPhoneNumber = null;

    /**
     * @ElementName transferPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:45616
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $transferPhoneNumber = null;

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
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for announcementSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     */
    public function getAnnouncementSelection()
    {
        return $this->announcementSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementSelection;
    }

    /**
     * Setter for announcementSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $announcementSelection
     * @return $this
     */
    public function setAnnouncementSelection(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $announcementSelection)
    {
        $this->announcementSelection = $announcementSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementSelection()
    {
        $this->announcementSelection = null;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $audioFile)
    {
        $this->audioFile = $audioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFile()
    {
        $this->audioFile = null;
        return $this;
    }

    /**
     * Getter for videoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     */
    public function getVideoFile()
    {
        return $this->videoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $videoFile)
    {
        $this->videoFile = $videoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFile()
    {
        $this->videoFile = null;
        return $this;
    }

    /**
     * Getter for playNewPhoneNumber
     *
     * @return bool
     */
    public function getPlayNewPhoneNumber()
    {
        return $this->playNewPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playNewPhoneNumber;
    }

    /**
     * Setter for playNewPhoneNumber
     *
     * @param bool $playNewPhoneNumber
     * @return $this
     */
    public function setPlayNewPhoneNumber($playNewPhoneNumber)
    {
        $this->playNewPhoneNumber = $playNewPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayNewPhoneNumber()
    {
        $this->playNewPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for newPhoneNumber
     *
     * @return string|null
     */
    public function getNewPhoneNumber()
    {
        return $this->newPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newPhoneNumber;
    }

    /**
     * Setter for newPhoneNumber
     *
     * @param string|null $newPhoneNumber
     * @return $this
     */
    public function setNewPhoneNumber($newPhoneNumber = null)
    {
        if ($newPhoneNumber === null) {
            $this->newPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->newPhoneNumber = $newPhoneNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewPhoneNumber()
    {
        $this->newPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for transferOnZeroToPhoneNumber
     *
     * @return bool
     */
    public function getTransferOnZeroToPhoneNumber()
    {
        return $this->transferOnZeroToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferOnZeroToPhoneNumber;
    }

    /**
     * Setter for transferOnZeroToPhoneNumber
     *
     * @param bool $transferOnZeroToPhoneNumber
     * @return $this
     */
    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber)
    {
        $this->transferOnZeroToPhoneNumber = $transferOnZeroToPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransferOnZeroToPhoneNumber()
    {
        $this->transferOnZeroToPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for transferPhoneNumber
     *
     * @return string|null
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferPhoneNumber;
    }

    /**
     * Setter for transferPhoneNumber
     *
     * @param string|null $transferPhoneNumber
     * @return $this
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        if ($transferPhoneNumber === null) {
            $this->transferPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->transferPhoneNumber = $transferPhoneNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransferPhoneNumber()
    {
        $this->transferPhoneNumber = null;
        return $this;
    }
}

