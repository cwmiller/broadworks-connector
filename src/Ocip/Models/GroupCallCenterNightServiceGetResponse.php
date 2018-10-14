<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterNightServiceGetResponse
 *
 * Response to the GroupCallCenterNightServiceGetRequest.
 *
 * @see GroupCallCenterNightServiceGetRequest
 */
class GroupCallCenterNightServiceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName action
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledServiceAction|null
     */
    private $action = null;

    /**
     * @ElementName businessHours
     * @var string|null
     */
    private $businessHours = null;

    /**
     * @ElementName forceNightService
     * @var bool|null
     */
    private $forceNightService = null;

    /**
     * @ElementName allowManualOverrideViaFAC
     * @var bool|null
     */
    private $allowManualOverrideViaFAC = null;

    /**
     * @ElementName transferPhoneNumber
     * @var string|null
     */
    private $transferPhoneNumber = null;

    /**
     * @ElementName playAnnouncementBeforeAction
     * @var bool|null
     */
    private $playAnnouncementBeforeAction = null;

    /**
     * @ElementName audioMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $audioMessageSelection = null;

    /**
     * @ElementName audioFileUrl
     * @var string|null
     */
    private $audioFileUrl = null;

    /**
     * @ElementName audioFileDescription
     * @var string|null
     */
    private $audioFileDescription = null;

    /**
     * @ElementName audioMediaType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $audioMediaType = null;

    /**
     * @ElementName videoMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $videoMessageSelection = null;

    /**
     * @ElementName videoFileUrl
     * @var string|null
     */
    private $videoFileUrl = null;

    /**
     * @ElementName videoFileDescription
     * @var string|null
     */
    private $videoFileDescription = null;

    /**
     * @ElementName videoMediaType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $videoMediaType = null;

    /**
     * @ElementName manualAnnouncementMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterManualNightServiceAnnouncementMode|null
     */
    private $manualAnnouncementMode = null;

    /**
     * @ElementName manualAudioMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $manualAudioMessageSelection = null;

    /**
     * @ElementName manualAudioFileUrl
     * @var string|null
     */
    private $manualAudioFileUrl = null;

    /**
     * @ElementName manualAudioFileDescription
     * @var string|null
     */
    private $manualAudioFileDescription = null;

    /**
     * @ElementName manualAudioMediaType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $manualAudioMediaType = null;

    /**
     * @ElementName manualVideoMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $manualVideoMessageSelection = null;

    /**
     * @ElementName manualVideoFileUrl
     * @var string|null
     */
    private $manualVideoFileUrl = null;

    /**
     * @ElementName manualVideoFileDescription
     * @var string|null
     */
    private $manualVideoFileDescription = null;

    /**
     * @ElementName manualVideoMediaType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $manualVideoMediaType = null;

    /**
     * Getter for action
     *
     * @ElementName action
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledServiceAction|null
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Setter for action
     *
     * @ElementName action
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledServiceAction|null $action
     * @return $this
     */
    public function setAction(\CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledServiceAction $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Getter for businessHours
     *
     * @ElementName businessHours
     * @return string|null
     */
    public function getBusinessHours()
    {
        return $this->businessHours;
    }

    /**
     * Setter for businessHours
     *
     * @ElementName businessHours
     * @param string|null $businessHours
     * @return $this
     */
    public function setBusinessHours($businessHours)
    {
        $this->businessHours = $businessHours;
        return $this;
    }

    /**
     * Getter for forceNightService
     *
     * @ElementName forceNightService
     * @return bool|null
     */
    public function getForceNightService()
    {
        return $this->forceNightService;
    }

    /**
     * Setter for forceNightService
     *
     * @ElementName forceNightService
     * @param bool|null $forceNightService
     * @return $this
     */
    public function setForceNightService($forceNightService)
    {
        $this->forceNightService = $forceNightService;
        return $this;
    }

    /**
     * Getter for allowManualOverrideViaFAC
     *
     * @ElementName allowManualOverrideViaFAC
     * @return bool|null
     */
    public function getAllowManualOverrideViaFAC()
    {
        return $this->allowManualOverrideViaFAC;
    }

    /**
     * Setter for allowManualOverrideViaFAC
     *
     * @ElementName allowManualOverrideViaFAC
     * @param bool|null $allowManualOverrideViaFAC
     * @return $this
     */
    public function setAllowManualOverrideViaFAC($allowManualOverrideViaFAC)
    {
        $this->allowManualOverrideViaFAC = $allowManualOverrideViaFAC;
        return $this;
    }

    /**
     * Getter for transferPhoneNumber
     *
     * @ElementName transferPhoneNumber
     * @return string|null
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber;
    }

    /**
     * Setter for transferPhoneNumber
     *
     * @ElementName transferPhoneNumber
     * @param string|null $transferPhoneNumber
     * @return $this
     */
    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        $this->transferPhoneNumber = $transferPhoneNumber;
        return $this;
    }

    /**
     * Getter for playAnnouncementBeforeAction
     *
     * @ElementName playAnnouncementBeforeAction
     * @return bool|null
     */
    public function getPlayAnnouncementBeforeAction()
    {
        return $this->playAnnouncementBeforeAction;
    }

    /**
     * Setter for playAnnouncementBeforeAction
     *
     * @ElementName playAnnouncementBeforeAction
     * @param bool|null $playAnnouncementBeforeAction
     * @return $this
     */
    public function setPlayAnnouncementBeforeAction($playAnnouncementBeforeAction)
    {
        $this->playAnnouncementBeforeAction = $playAnnouncementBeforeAction;
        return $this;
    }

    /**
     * Getter for audioMessageSelection
     *
     * @ElementName audioMessageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    public function getAudioMessageSelection()
    {
        return $this->audioMessageSelection;
    }

    /**
     * Setter for audioMessageSelection
     *
     * @ElementName audioMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null $audioMessageSelection
     * @return $this
     */
    public function setAudioMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $audioMessageSelection)
    {
        $this->audioMessageSelection = $audioMessageSelection;
        return $this;
    }

    /**
     * Getter for audioFileUrl
     *
     * @ElementName audioFileUrl
     * @return string|null
     */
    public function getAudioFileUrl()
    {
        return $this->audioFileUrl;
    }

    /**
     * Setter for audioFileUrl
     *
     * @ElementName audioFileUrl
     * @param string|null $audioFileUrl
     * @return $this
     */
    public function setAudioFileUrl($audioFileUrl)
    {
        $this->audioFileUrl = $audioFileUrl;
        return $this;
    }

    /**
     * Getter for audioFileDescription
     *
     * @ElementName audioFileDescription
     * @return string|null
     */
    public function getAudioFileDescription()
    {
        return $this->audioFileDescription;
    }

    /**
     * Setter for audioFileDescription
     *
     * @ElementName audioFileDescription
     * @param string|null $audioFileDescription
     * @return $this
     */
    public function setAudioFileDescription($audioFileDescription)
    {
        $this->audioFileDescription = $audioFileDescription;
        return $this;
    }

    /**
     * Getter for audioMediaType
     *
     * @ElementName audioMediaType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getAudioMediaType()
    {
        return $this->audioMediaType;
    }

    /**
     * Setter for audioMediaType
     *
     * @ElementName audioMediaType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $audioMediaType
     * @return $this
     */
    public function setAudioMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $audioMediaType)
    {
        $this->audioMediaType = $audioMediaType;
        return $this;
    }

    /**
     * Getter for videoMessageSelection
     *
     * @ElementName videoMessageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    public function getVideoMessageSelection()
    {
        return $this->videoMessageSelection;
    }

    /**
     * Setter for videoMessageSelection
     *
     * @ElementName videoMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null $videoMessageSelection
     * @return $this
     */
    public function setVideoMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $videoMessageSelection)
    {
        $this->videoMessageSelection = $videoMessageSelection;
        return $this;
    }

    /**
     * Getter for videoFileUrl
     *
     * @ElementName videoFileUrl
     * @return string|null
     */
    public function getVideoFileUrl()
    {
        return $this->videoFileUrl;
    }

    /**
     * Setter for videoFileUrl
     *
     * @ElementName videoFileUrl
     * @param string|null $videoFileUrl
     * @return $this
     */
    public function setVideoFileUrl($videoFileUrl)
    {
        $this->videoFileUrl = $videoFileUrl;
        return $this;
    }

    /**
     * Getter for videoFileDescription
     *
     * @ElementName videoFileDescription
     * @return string|null
     */
    public function getVideoFileDescription()
    {
        return $this->videoFileDescription;
    }

    /**
     * Setter for videoFileDescription
     *
     * @ElementName videoFileDescription
     * @param string|null $videoFileDescription
     * @return $this
     */
    public function setVideoFileDescription($videoFileDescription)
    {
        $this->videoFileDescription = $videoFileDescription;
        return $this;
    }

    /**
     * Getter for videoMediaType
     *
     * @ElementName videoMediaType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getVideoMediaType()
    {
        return $this->videoMediaType;
    }

    /**
     * Setter for videoMediaType
     *
     * @ElementName videoMediaType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $videoMediaType
     * @return $this
     */
    public function setVideoMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $videoMediaType)
    {
        $this->videoMediaType = $videoMediaType;
        return $this;
    }

    /**
     * Getter for manualAnnouncementMode
     *
     * @ElementName manualAnnouncementMode
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterManualNightServiceAnnouncementMode|null
     */
    public function getManualAnnouncementMode()
    {
        return $this->manualAnnouncementMode;
    }

    /**
     * Setter for manualAnnouncementMode
     *
     * @ElementName manualAnnouncementMode
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterManualNightServiceAnnouncementMode|null $manualAnnouncementMode
     * @return $this
     */
    public function setManualAnnouncementMode(\CWM\BroadWorksConnector\Ocip\Models\CallCenterManualNightServiceAnnouncementMode $manualAnnouncementMode)
    {
        $this->manualAnnouncementMode = $manualAnnouncementMode;
        return $this;
    }

    /**
     * Getter for manualAudioMessageSelection
     *
     * @ElementName manualAudioMessageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    public function getManualAudioMessageSelection()
    {
        return $this->manualAudioMessageSelection;
    }

    /**
     * Setter for manualAudioMessageSelection
     *
     * @ElementName manualAudioMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null $manualAudioMessageSelection
     * @return $this
     */
    public function setManualAudioMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $manualAudioMessageSelection)
    {
        $this->manualAudioMessageSelection = $manualAudioMessageSelection;
        return $this;
    }

    /**
     * Getter for manualAudioFileUrl
     *
     * @ElementName manualAudioFileUrl
     * @return string|null
     */
    public function getManualAudioFileUrl()
    {
        return $this->manualAudioFileUrl;
    }

    /**
     * Setter for manualAudioFileUrl
     *
     * @ElementName manualAudioFileUrl
     * @param string|null $manualAudioFileUrl
     * @return $this
     */
    public function setManualAudioFileUrl($manualAudioFileUrl)
    {
        $this->manualAudioFileUrl = $manualAudioFileUrl;
        return $this;
    }

    /**
     * Getter for manualAudioFileDescription
     *
     * @ElementName manualAudioFileDescription
     * @return string|null
     */
    public function getManualAudioFileDescription()
    {
        return $this->manualAudioFileDescription;
    }

    /**
     * Setter for manualAudioFileDescription
     *
     * @ElementName manualAudioFileDescription
     * @param string|null $manualAudioFileDescription
     * @return $this
     */
    public function setManualAudioFileDescription($manualAudioFileDescription)
    {
        $this->manualAudioFileDescription = $manualAudioFileDescription;
        return $this;
    }

    /**
     * Getter for manualAudioMediaType
     *
     * @ElementName manualAudioMediaType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getManualAudioMediaType()
    {
        return $this->manualAudioMediaType;
    }

    /**
     * Setter for manualAudioMediaType
     *
     * @ElementName manualAudioMediaType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $manualAudioMediaType
     * @return $this
     */
    public function setManualAudioMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $manualAudioMediaType)
    {
        $this->manualAudioMediaType = $manualAudioMediaType;
        return $this;
    }

    /**
     * Getter for manualVideoMessageSelection
     *
     * @ElementName manualVideoMessageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    public function getManualVideoMessageSelection()
    {
        return $this->manualVideoMessageSelection;
    }

    /**
     * Setter for manualVideoMessageSelection
     *
     * @ElementName manualVideoMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null $manualVideoMessageSelection
     * @return $this
     */
    public function setManualVideoMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $manualVideoMessageSelection)
    {
        $this->manualVideoMessageSelection = $manualVideoMessageSelection;
        return $this;
    }

    /**
     * Getter for manualVideoFileUrl
     *
     * @ElementName manualVideoFileUrl
     * @return string|null
     */
    public function getManualVideoFileUrl()
    {
        return $this->manualVideoFileUrl;
    }

    /**
     * Setter for manualVideoFileUrl
     *
     * @ElementName manualVideoFileUrl
     * @param string|null $manualVideoFileUrl
     * @return $this
     */
    public function setManualVideoFileUrl($manualVideoFileUrl)
    {
        $this->manualVideoFileUrl = $manualVideoFileUrl;
        return $this;
    }

    /**
     * Getter for manualVideoFileDescription
     *
     * @ElementName manualVideoFileDescription
     * @return string|null
     */
    public function getManualVideoFileDescription()
    {
        return $this->manualVideoFileDescription;
    }

    /**
     * Setter for manualVideoFileDescription
     *
     * @ElementName manualVideoFileDescription
     * @param string|null $manualVideoFileDescription
     * @return $this
     */
    public function setManualVideoFileDescription($manualVideoFileDescription)
    {
        $this->manualVideoFileDescription = $manualVideoFileDescription;
        return $this;
    }

    /**
     * Getter for manualVideoMediaType
     *
     * @ElementName manualVideoMediaType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getManualVideoMediaType()
    {
        return $this->manualVideoMediaType;
    }

    /**
     * Setter for manualVideoMediaType
     *
     * @ElementName manualVideoMediaType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $manualVideoMediaType
     * @return $this
     */
    public function setManualVideoMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $manualVideoMediaType)
    {
        $this->manualVideoMediaType = $manualVideoMediaType;
        return $this;
    }


}

