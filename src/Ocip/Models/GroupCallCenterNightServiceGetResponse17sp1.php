<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterNightServiceGetResponse17sp1
 *
 * Response to the GroupCallCenterNightServiceGetRequest17sp1.
 *
 * @see GroupCallCenterNightServiceGetRequest17sp1
 */
class GroupCallCenterNightServiceGetResponse17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName action
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledServiceAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledServiceAction|null
     */
    private $action = null;

    /**
     * @ElementName businessHours
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    private $businessHours = null;

    /**
     * @ElementName forceNightService
     * @Type bool
     * @var bool|null
     */
    private $forceNightService = null;

    /**
     * @ElementName allowManualOverrideViaFAC
     * @Type bool
     * @var bool|null
     */
    private $allowManualOverrideViaFAC = null;

    /**
     * @ElementName transferPhoneNumber
     * @Type string
     * @var string|null
     */
    private $transferPhoneNumber = null;

    /**
     * @ElementName playAnnouncementBeforeAction
     * @Type bool
     * @var bool|null
     */
    private $playAnnouncementBeforeAction = null;

    /**
     * @ElementName audioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $audioMessageSelection = null;

    /**
     * @ElementName audioUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    private $audioUrlList = null;

    /**
     * @ElementName audioFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    private $audioFileList = null;

    /**
     * @ElementName audioMediaTypeList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    private $audioMediaTypeList = null;

    /**
     * @ElementName videoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $videoMessageSelection = null;

    /**
     * @ElementName videoUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    private $videoUrlList = null;

    /**
     * @ElementName videoFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    private $videoFileList = null;

    /**
     * @ElementName videoMediaTypeList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    private $videoMediaTypeList = null;

    /**
     * @ElementName manualAnnouncementMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterManualNightServiceAnnouncementMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterManualNightServiceAnnouncementMode|null
     */
    private $manualAnnouncementMode = null;

    /**
     * @ElementName manualAudioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $manualAudioMessageSelection = null;

    /**
     * @ElementName manualAudioUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    private $manualAudioUrlList = null;

    /**
     * @ElementName manualAudioFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    private $manualAudioFileList = null;

    /**
     * @ElementName manualAudioMediaTypeList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    private $manualAudioMediaTypeList = null;

    /**
     * @ElementName manualVideoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $manualVideoMessageSelection = null;

    /**
     * @ElementName manualVideoUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    private $manualVideoUrlList = null;

    /**
     * @ElementName manualVideoFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    private $manualVideoFileList = null;

    /**
     * @ElementName manualVideoMediaTypeList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    private $manualVideoMediaTypeList = null;

    /**
     * Getter for action
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledServiceAction
     */
    public function getAction()
    {
        return $this->action instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->action;
    }

    /**
     * Setter for action
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledServiceAction $action
     * @return $this
     */
    public function setAction(\CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledServiceAction $action)
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
     * Getter for businessHours
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     */
    public function getBusinessHours()
    {
        return $this->businessHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->businessHours;
    }

    /**
     * Setter for businessHours
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $businessHours
     * @return $this
     */
    public function setBusinessHours(\CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $businessHours)
    {
        $this->businessHours = $businessHours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusinessHours()
    {
        $this->businessHours = null;
        return $this;
    }

    /**
     * Getter for forceNightService
     *
     * @return bool
     */
    public function getForceNightService()
    {
        return $this->forceNightService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceNightService;
    }

    /**
     * Setter for forceNightService
     *
     * @param bool $forceNightService
     * @return $this
     */
    public function setForceNightService($forceNightService)
    {
        $this->forceNightService = $forceNightService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceNightService()
    {
        $this->forceNightService = null;
        return $this;
    }

    /**
     * Getter for allowManualOverrideViaFAC
     *
     * @return bool
     */
    public function getAllowManualOverrideViaFAC()
    {
        return $this->allowManualOverrideViaFAC instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowManualOverrideViaFAC;
    }

    /**
     * Setter for allowManualOverrideViaFAC
     *
     * @param bool $allowManualOverrideViaFAC
     * @return $this
     */
    public function setAllowManualOverrideViaFAC($allowManualOverrideViaFAC)
    {
        $this->allowManualOverrideViaFAC = $allowManualOverrideViaFAC;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowManualOverrideViaFAC()
    {
        $this->allowManualOverrideViaFAC = null;
        return $this;
    }

    /**
     * Getter for transferPhoneNumber
     *
     * @return string
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferPhoneNumber;
    }

    /**
     * Setter for transferPhoneNumber
     *
     * @param string $transferPhoneNumber
     * @return $this
     */
    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        $this->transferPhoneNumber = $transferPhoneNumber;
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
     * Getter for playAnnouncementBeforeAction
     *
     * @return bool
     */
    public function getPlayAnnouncementBeforeAction()
    {
        return $this->playAnnouncementBeforeAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playAnnouncementBeforeAction;
    }

    /**
     * Setter for playAnnouncementBeforeAction
     *
     * @param bool $playAnnouncementBeforeAction
     * @return $this
     */
    public function setPlayAnnouncementBeforeAction($playAnnouncementBeforeAction)
    {
        $this->playAnnouncementBeforeAction = $playAnnouncementBeforeAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayAnnouncementBeforeAction()
    {
        $this->playAnnouncementBeforeAction = null;
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
     * Getter for audioUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     */
    public function getAudioUrlList()
    {
        return $this->audioUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioUrlList;
    }

    /**
     * Setter for audioUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $audioUrlList
     * @return $this
     */
    public function setAudioUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $audioUrlList)
    {
        $this->audioUrlList = $audioUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioUrlList()
    {
        $this->audioUrlList = null;
        return $this;
    }

    /**
     * Getter for audioFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     */
    public function getAudioFileList()
    {
        return $this->audioFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFileList;
    }

    /**
     * Setter for audioFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $audioFileList
     * @return $this
     */
    public function setAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $audioFileList)
    {
        $this->audioFileList = $audioFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFileList()
    {
        $this->audioFileList = null;
        return $this;
    }

    /**
     * Getter for audioMediaTypeList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     */
    public function getAudioMediaTypeList()
    {
        return $this->audioMediaTypeList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioMediaTypeList;
    }

    /**
     * Setter for audioMediaTypeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList
     * @return $this
     */
    public function setAudioMediaTypeList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList)
    {
        $this->audioMediaTypeList = $audioMediaTypeList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioMediaTypeList()
    {
        $this->audioMediaTypeList = null;
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
     * Getter for videoUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     */
    public function getVideoUrlList()
    {
        return $this->videoUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoUrlList;
    }

    /**
     * Setter for videoUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $videoUrlList
     * @return $this
     */
    public function setVideoUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $videoUrlList)
    {
        $this->videoUrlList = $videoUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoUrlList()
    {
        $this->videoUrlList = null;
        return $this;
    }

    /**
     * Getter for videoFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     */
    public function getVideoFileList()
    {
        return $this->videoFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFileList;
    }

    /**
     * Setter for videoFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $videoFileList
     * @return $this
     */
    public function setVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $videoFileList)
    {
        $this->videoFileList = $videoFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFileList()
    {
        $this->videoFileList = null;
        return $this;
    }

    /**
     * Getter for videoMediaTypeList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     */
    public function getVideoMediaTypeList()
    {
        return $this->videoMediaTypeList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoMediaTypeList;
    }

    /**
     * Setter for videoMediaTypeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList
     * @return $this
     */
    public function setVideoMediaTypeList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList)
    {
        $this->videoMediaTypeList = $videoMediaTypeList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoMediaTypeList()
    {
        $this->videoMediaTypeList = null;
        return $this;
    }

    /**
     * Getter for manualAnnouncementMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterManualNightServiceAnnouncementMode
     */
    public function getManualAnnouncementMode()
    {
        return $this->manualAnnouncementMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualAnnouncementMode;
    }

    /**
     * Setter for manualAnnouncementMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterManualNightServiceAnnouncementMode $manualAnnouncementMode
     * @return $this
     */
    public function setManualAnnouncementMode(\CWM\BroadWorksConnector\Ocip\Models\CallCenterManualNightServiceAnnouncementMode $manualAnnouncementMode)
    {
        $this->manualAnnouncementMode = $manualAnnouncementMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualAnnouncementMode()
    {
        $this->manualAnnouncementMode = null;
        return $this;
    }

    /**
     * Getter for manualAudioMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getManualAudioMessageSelection()
    {
        return $this->manualAudioMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualAudioMessageSelection;
    }

    /**
     * Setter for manualAudioMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $manualAudioMessageSelection
     * @return $this
     */
    public function setManualAudioMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $manualAudioMessageSelection)
    {
        $this->manualAudioMessageSelection = $manualAudioMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualAudioMessageSelection()
    {
        $this->manualAudioMessageSelection = null;
        return $this;
    }

    /**
     * Getter for manualAudioUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     */
    public function getManualAudioUrlList()
    {
        return $this->manualAudioUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualAudioUrlList;
    }

    /**
     * Setter for manualAudioUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $manualAudioUrlList
     * @return $this
     */
    public function setManualAudioUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $manualAudioUrlList)
    {
        $this->manualAudioUrlList = $manualAudioUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualAudioUrlList()
    {
        $this->manualAudioUrlList = null;
        return $this;
    }

    /**
     * Getter for manualAudioFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     */
    public function getManualAudioFileList()
    {
        return $this->manualAudioFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualAudioFileList;
    }

    /**
     * Setter for manualAudioFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $manualAudioFileList
     * @return $this
     */
    public function setManualAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $manualAudioFileList)
    {
        $this->manualAudioFileList = $manualAudioFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualAudioFileList()
    {
        $this->manualAudioFileList = null;
        return $this;
    }

    /**
     * Getter for manualAudioMediaTypeList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     */
    public function getManualAudioMediaTypeList()
    {
        return $this->manualAudioMediaTypeList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualAudioMediaTypeList;
    }

    /**
     * Setter for manualAudioMediaTypeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $manualAudioMediaTypeList
     * @return $this
     */
    public function setManualAudioMediaTypeList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $manualAudioMediaTypeList)
    {
        $this->manualAudioMediaTypeList = $manualAudioMediaTypeList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualAudioMediaTypeList()
    {
        $this->manualAudioMediaTypeList = null;
        return $this;
    }

    /**
     * Getter for manualVideoMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getManualVideoMessageSelection()
    {
        return $this->manualVideoMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualVideoMessageSelection;
    }

    /**
     * Setter for manualVideoMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $manualVideoMessageSelection
     * @return $this
     */
    public function setManualVideoMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $manualVideoMessageSelection)
    {
        $this->manualVideoMessageSelection = $manualVideoMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualVideoMessageSelection()
    {
        $this->manualVideoMessageSelection = null;
        return $this;
    }

    /**
     * Getter for manualVideoUrlList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList
     */
    public function getManualVideoUrlList()
    {
        return $this->manualVideoUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualVideoUrlList;
    }

    /**
     * Setter for manualVideoUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $manualVideoUrlList
     * @return $this
     */
    public function setManualVideoUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList $manualVideoUrlList)
    {
        $this->manualVideoUrlList = $manualVideoUrlList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualVideoUrlList()
    {
        $this->manualVideoUrlList = null;
        return $this;
    }

    /**
     * Getter for manualVideoFileList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList
     */
    public function getManualVideoFileList()
    {
        return $this->manualVideoFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualVideoFileList;
    }

    /**
     * Setter for manualVideoFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $manualVideoFileList
     * @return $this
     */
    public function setManualVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList $manualVideoFileList)
    {
        $this->manualVideoFileList = $manualVideoFileList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualVideoFileList()
    {
        $this->manualVideoFileList = null;
        return $this;
    }

    /**
     * Getter for manualVideoMediaTypeList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList
     */
    public function getManualVideoMediaTypeList()
    {
        return $this->manualVideoMediaTypeList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualVideoMediaTypeList;
    }

    /**
     * Setter for manualVideoMediaTypeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $manualVideoMediaTypeList
     * @return $this
     */
    public function setManualVideoMediaTypeList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList $manualVideoMediaTypeList)
    {
        $this->manualVideoMediaTypeList = $manualVideoMediaTypeList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualVideoMediaTypeList()
    {
        $this->manualVideoMediaTypeList = null;
        return $this;
    }


}

