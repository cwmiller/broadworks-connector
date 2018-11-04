<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointNightServiceModifyRequest20
 *
 * Modify a route point's night service settings.
 *         Only Group and Enterprise level schedules are accepted.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupRoutePointNightServiceModifyRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName action
     * @var string|null
     */
    private $action = null;

    /**
     * @ElementName businessHours
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $businessHours = null;

    /**
     * @ElementName forceNightService
     * @var bool|null
     */
    private $forceNightService = null;

    /**
     * @ElementName transferPhoneNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $transferPhoneNumber = null;

    /**
     * @ElementName playAnnouncementBeforeAction
     * @var bool|null
     */
    private $playAnnouncementBeforeAction = null;

    /**
     * @ElementName audioMessageSelection
     * @var string|null
     */
    private $audioMessageSelection = null;

    /**
     * @ElementName audioUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $audioUrlList = null;

    /**
     * @ElementName audioFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    private $audioFileList = null;

    /**
     * @ElementName videoMessageSelection
     * @var string|null
     */
    private $videoMessageSelection = null;

    /**
     * @ElementName videoUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $videoUrlList = null;

    /**
     * @ElementName videoFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    private $videoFileList = null;

    /**
     * @ElementName manualAnnouncementMode
     * @var string|null
     */
    private $manualAnnouncementMode = null;

    /**
     * @ElementName manualAudioMessageSelection
     * @var string|null
     */
    private $manualAudioMessageSelection = null;

    /**
     * @ElementName manualAudioUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $manualAudioUrlList = null;

    /**
     * @ElementName manualAudioFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    private $manualAudioFileList = null;

    /**
     * @ElementName manualVideoMessageSelection
     * @var string|null
     */
    private $manualVideoMessageSelection = null;

    /**
     * @ElementName manualVideoUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $manualVideoUrlList = null;

    /**
     * @ElementName manualVideoFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    private $manualVideoFileList = null;

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
     * Getter for action
     *
     * @ElementName action
     * @return string|null
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Setter for action
     *
     * @ElementName action
     * @param string|null $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Getter for businessHours
     *
     * @ElementName businessHours
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getBusinessHours()
    {
        return $this->businessHours;
    }

    /**
     * Setter for businessHours
     *
     * @ElementName businessHours
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null|\CWM\BroadWorksConnector\Ocip\Nil $businessHours
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
     * Getter for transferPhoneNumber
     *
     * @ElementName transferPhoneNumber
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber;
    }

    /**
     * Setter for transferPhoneNumber
     *
     * @ElementName transferPhoneNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $transferPhoneNumber
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
     * Getter for audioUrlList
     *
     * @ElementName audioUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getAudioUrlList()
    {
        return $this->audioUrlList;
    }

    /**
     * Setter for audioUrlList
     *
     * @ElementName audioUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $audioUrlList
     * @return $this
     */
    public function setAudioUrlList($audioUrlList)
    {
        $this->audioUrlList = $audioUrlList;
        return $this;
    }

    /**
     * Getter for audioFileList
     *
     * @ElementName audioFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    public function getAudioFileList()
    {
        return $this->audioFileList;
    }

    /**
     * Setter for audioFileList
     *
     * @ElementName audioFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null $audioFileList
     * @return $this
     */
    public function setAudioFileList($audioFileList)
    {
        $this->audioFileList = $audioFileList;
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
     * Getter for videoUrlList
     *
     * @ElementName videoUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getVideoUrlList()
    {
        return $this->videoUrlList;
    }

    /**
     * Setter for videoUrlList
     *
     * @ElementName videoUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $videoUrlList
     * @return $this
     */
    public function setVideoUrlList($videoUrlList)
    {
        $this->videoUrlList = $videoUrlList;
        return $this;
    }

    /**
     * Getter for videoFileList
     *
     * @ElementName videoFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    public function getVideoFileList()
    {
        return $this->videoFileList;
    }

    /**
     * Setter for videoFileList
     *
     * @ElementName videoFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null $videoFileList
     * @return $this
     */
    public function setVideoFileList($videoFileList)
    {
        $this->videoFileList = $videoFileList;
        return $this;
    }

    /**
     * Getter for manualAnnouncementMode
     *
     * @ElementName manualAnnouncementMode
     * @return string|null
     */
    public function getManualAnnouncementMode()
    {
        return $this->manualAnnouncementMode;
    }

    /**
     * Setter for manualAnnouncementMode
     *
     * @ElementName manualAnnouncementMode
     * @param string|null $manualAnnouncementMode
     * @return $this
     */
    public function setManualAnnouncementMode($manualAnnouncementMode)
    {
        $this->manualAnnouncementMode = $manualAnnouncementMode;
        return $this;
    }

    /**
     * Getter for manualAudioMessageSelection
     *
     * @ElementName manualAudioMessageSelection
     * @return string|null
     */
    public function getManualAudioMessageSelection()
    {
        return $this->manualAudioMessageSelection;
    }

    /**
     * Setter for manualAudioMessageSelection
     *
     * @ElementName manualAudioMessageSelection
     * @param string|null $manualAudioMessageSelection
     * @return $this
     */
    public function setManualAudioMessageSelection($manualAudioMessageSelection)
    {
        $this->manualAudioMessageSelection = $manualAudioMessageSelection;
        return $this;
    }

    /**
     * Getter for manualAudioUrlList
     *
     * @ElementName manualAudioUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getManualAudioUrlList()
    {
        return $this->manualAudioUrlList;
    }

    /**
     * Setter for manualAudioUrlList
     *
     * @ElementName manualAudioUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $manualAudioUrlList
     * @return $this
     */
    public function setManualAudioUrlList($manualAudioUrlList)
    {
        $this->manualAudioUrlList = $manualAudioUrlList;
        return $this;
    }

    /**
     * Getter for manualAudioFileList
     *
     * @ElementName manualAudioFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    public function getManualAudioFileList()
    {
        return $this->manualAudioFileList;
    }

    /**
     * Setter for manualAudioFileList
     *
     * @ElementName manualAudioFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null $manualAudioFileList
     * @return $this
     */
    public function setManualAudioFileList($manualAudioFileList)
    {
        $this->manualAudioFileList = $manualAudioFileList;
        return $this;
    }

    /**
     * Getter for manualVideoMessageSelection
     *
     * @ElementName manualVideoMessageSelection
     * @return string|null
     */
    public function getManualVideoMessageSelection()
    {
        return $this->manualVideoMessageSelection;
    }

    /**
     * Setter for manualVideoMessageSelection
     *
     * @ElementName manualVideoMessageSelection
     * @param string|null $manualVideoMessageSelection
     * @return $this
     */
    public function setManualVideoMessageSelection($manualVideoMessageSelection)
    {
        $this->manualVideoMessageSelection = $manualVideoMessageSelection;
        return $this;
    }

    /**
     * Getter for manualVideoUrlList
     *
     * @ElementName manualVideoUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getManualVideoUrlList()
    {
        return $this->manualVideoUrlList;
    }

    /**
     * Setter for manualVideoUrlList
     *
     * @ElementName manualVideoUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $manualVideoUrlList
     * @return $this
     */
    public function setManualVideoUrlList($manualVideoUrlList)
    {
        $this->manualVideoUrlList = $manualVideoUrlList;
        return $this;
    }

    /**
     * Getter for manualVideoFileList
     *
     * @ElementName manualVideoFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    public function getManualVideoFileList()
    {
        return $this->manualVideoFileList;
    }

    /**
     * Setter for manualVideoFileList
     *
     * @ElementName manualVideoFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null $manualVideoFileList
     * @return $this
     */
    public function setManualVideoFileList($manualVideoFileList)
    {
        $this->manualVideoFileList = $manualVideoFileList;
        return $this;
    }


}

