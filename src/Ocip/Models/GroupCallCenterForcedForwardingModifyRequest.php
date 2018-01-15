<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterForcedForwardingModifyRequest
 *
 * Modify a call center's forced forwarding settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterForcedForwardingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @var string|null
     */
    private $forwardToPhoneNumber = null;

    /**
     * @ElementName allowEnableViaFAC
     * @var bool|null
     */
    private $allowEnableViaFAC = null;

    /**
     * @ElementName playAnnouncementBeforeForwarding
     * @var bool|null
     */
    private $playAnnouncementBeforeForwarding = null;

    /**
     * @ElementName audioMessageSelection
     * @var string|null
     */
    private $audioMessageSelection = null;

    /**
     * @ElementName audioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    private $audioFile = null;

    /**
     * @ElementName videoMessageSelection
     * @var string|null
     */
    private $videoMessageSelection = null;

    /**
     * @ElementName videoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    private $videoFile = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for forwardToPhoneNumber
     *
     * @ElementName forwardToPhoneNumber
     * @return string|null
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber;
    }

    /**
     * Setter for forwardToPhoneNumber
     *
     * @ElementName forwardToPhoneNumber
     * @param string|null $forwardToPhoneNumber
     * @return $this
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $this->forwardToPhoneNumber = $forwardToPhoneNumber;
        return $this;
    }

    /**
     * Getter for allowEnableViaFAC
     *
     * @ElementName allowEnableViaFAC
     * @return bool|null
     */
    public function getAllowEnableViaFAC()
    {
        return $this->allowEnableViaFAC;
    }

    /**
     * Setter for allowEnableViaFAC
     *
     * @ElementName allowEnableViaFAC
     * @param bool|null $allowEnableViaFAC
     * @return $this
     */
    public function setAllowEnableViaFAC($allowEnableViaFAC)
    {
        $this->allowEnableViaFAC = $allowEnableViaFAC;
        return $this;
    }

    /**
     * Getter for playAnnouncementBeforeForwarding
     *
     * @ElementName playAnnouncementBeforeForwarding
     * @return bool|null
     */
    public function getPlayAnnouncementBeforeForwarding()
    {
        return $this->playAnnouncementBeforeForwarding;
    }

    /**
     * Setter for playAnnouncementBeforeForwarding
     *
     * @ElementName playAnnouncementBeforeForwarding
     * @param bool|null $playAnnouncementBeforeForwarding
     * @return $this
     */
    public function setPlayAnnouncementBeforeForwarding($playAnnouncementBeforeForwarding)
    {
        $this->playAnnouncementBeforeForwarding = $playAnnouncementBeforeForwarding;
        return $this;
    }

    /**
     * Getter for audioMessageSelection
     *
     * @ElementName audioMessageSelection
     * @return string|null
     */
    public function getAudioMessageSelection()
    {
        return $this->audioMessageSelection;
    }

    /**
     * Setter for audioMessageSelection
     *
     * @ElementName audioMessageSelection
     * @param string|null $audioMessageSelection
     * @return $this
     */
    public function setAudioMessageSelection($audioMessageSelection)
    {
        $this->audioMessageSelection = $audioMessageSelection;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @ElementName audioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @ElementName audioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null $audioFile
     * @return $this
     */
    public function setAudioFile($audioFile)
    {
        $this->audioFile = $audioFile;
        return $this;
    }

    /**
     * Getter for videoMessageSelection
     *
     * @ElementName videoMessageSelection
     * @return string|null
     */
    public function getVideoMessageSelection()
    {
        return $this->videoMessageSelection;
    }

    /**
     * Setter for videoMessageSelection
     *
     * @ElementName videoMessageSelection
     * @param string|null $videoMessageSelection
     * @return $this
     */
    public function setVideoMessageSelection($videoMessageSelection)
    {
        $this->videoMessageSelection = $videoMessageSelection;
        return $this;
    }

    /**
     * Getter for videoFile
     *
     * @ElementName videoFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @ElementName videoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null $videoFile
     * @return $this
     */
    public function setVideoFile($videoFile)
    {
        $this->videoFile = $videoFile;
        return $this;
    }


}

