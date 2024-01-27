<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterOverflowModifyRequest
 *
 * Modify a call center's overflow settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:7180","type":"sequence"}]
 */
class GroupCallCenterOverflowModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:7180
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName action
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterOverflowProcessingAction
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7180
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterOverflowProcessingAction|null
     */
    protected $action = null;

    /**
     * @ElementName transferPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7180
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $transferPhoneNumber = null;

    /**
     * @ElementName overflowAfterTimeout
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7180
     * @var bool|null
     */
    protected $overflowAfterTimeout = null;

    /**
     * @ElementName timeoutSeconds
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7180
     * @MinInclusive 0
     * @MaxInclusive 7200
     * @var int|null
     */
    protected $timeoutSeconds = null;

    /**
     * @ElementName playAnnouncementBeforeOverflowProcessing
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7180
     * @var bool|null
     */
    protected $playAnnouncementBeforeOverflowProcessing = null;

    /**
     * @ElementName audioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7180
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $audioMessageSelection = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7180
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    protected $audioFile = null;

    /**
     * @ElementName videoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7180
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $videoMessageSelection = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7180
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    protected $videoFile = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for action
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterOverflowProcessingAction
     */
    public function getAction()
    {
        return $this->action instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->action;
    }

    /**
     * Setter for action
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterOverflowProcessingAction $action
     * @return $this
     */
    public function setAction(\CWM\BroadWorksConnector\Ocip\Models\CallCenterOverflowProcessingAction $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAction()
    {
        $this->action = null;
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

    /**
     * Getter for overflowAfterTimeout
     *
     * @return bool
     */
    public function getOverflowAfterTimeout()
    {
        return $this->overflowAfterTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->overflowAfterTimeout;
    }

    /**
     * Setter for overflowAfterTimeout
     *
     * @param bool $overflowAfterTimeout
     * @return $this
     */
    public function setOverflowAfterTimeout($overflowAfterTimeout)
    {
        $this->overflowAfterTimeout = $overflowAfterTimeout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOverflowAfterTimeout()
    {
        $this->overflowAfterTimeout = null;
        return $this;
    }

    /**
     * Getter for timeoutSeconds
     *
     * @return int
     */
    public function getTimeoutSeconds()
    {
        return $this->timeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeoutSeconds;
    }

    /**
     * Setter for timeoutSeconds
     *
     * @param int $timeoutSeconds
     * @return $this
     */
    public function setTimeoutSeconds($timeoutSeconds)
    {
        $this->timeoutSeconds = $timeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeoutSeconds()
    {
        $this->timeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for playAnnouncementBeforeOverflowProcessing
     *
     * @return bool
     */
    public function getPlayAnnouncementBeforeOverflowProcessing()
    {
        return $this->playAnnouncementBeforeOverflowProcessing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playAnnouncementBeforeOverflowProcessing;
    }

    /**
     * Setter for playAnnouncementBeforeOverflowProcessing
     *
     * @param bool $playAnnouncementBeforeOverflowProcessing
     * @return $this
     */
    public function setPlayAnnouncementBeforeOverflowProcessing($playAnnouncementBeforeOverflowProcessing)
    {
        $this->playAnnouncementBeforeOverflowProcessing = $playAnnouncementBeforeOverflowProcessing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayAnnouncementBeforeOverflowProcessing()
    {
        $this->playAnnouncementBeforeOverflowProcessing = null;
        return $this;
    }

    /**
     * Getter for audioMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getAudioMessageSelection()
    {
        return $this->audioMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioMessageSelection;
    }

    /**
     * Setter for audioMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $audioMessageSelection
     * @return $this
     */
    public function setAudioMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $audioMessageSelection)
    {
        $this->audioMessageSelection = $audioMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioMessageSelection()
    {
        $this->audioMessageSelection = null;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $audioFile)
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
     * Getter for videoMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getVideoMessageSelection()
    {
        return $this->videoMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoMessageSelection;
    }

    /**
     * Setter for videoMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $videoMessageSelection
     * @return $this
     */
    public function setVideoMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $videoMessageSelection)
    {
        $this->videoMessageSelection = $videoMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoMessageSelection()
    {
        $this->videoMessageSelection = null;
        return $this;
    }

    /**
     * Getter for videoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     */
    public function getVideoFile()
    {
        return $this->videoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $videoFile)
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
}

