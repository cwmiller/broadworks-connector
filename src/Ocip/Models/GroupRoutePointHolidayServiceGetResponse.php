<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointHolidayServiceGetResponse
 *
 * Response to the GroupRoutePointHolidayServiceGetRequest.
 */
class GroupRoutePointHolidayServiceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName action
     * @var string|null
     */
    private $action = null;

    /**
     * @ElementName holidaySchedule
     * @var string|null
     */
    private $holidaySchedule = null;

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
     * @var string|null
     */
    private $audioMessageSelection = null;

    /**
     * @ElementName audioUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    private $audioUrlList = null;

    /**
     * @ElementName audioFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    private $audioFileList = null;

    /**
     * @ElementName audioMediaTypeList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    private $audioMediaTypeList = null;

    /**
     * @ElementName videoMessageSelection
     * @var string|null
     */
    private $videoMessageSelection = null;

    /**
     * @ElementName videoUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    private $videoUrlList = null;

    /**
     * @ElementName videoFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    private $videoFileList = null;

    /**
     * @ElementName videoMediaTypeList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    private $videoMediaTypeList = null;

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
     * Getter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @return string|null
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @param string|null $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule($holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    public function getAudioUrlList()
    {
        return $this->audioUrlList;
    }

    /**
     * Setter for audioUrlList
     *
     * @ElementName audioUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null $audioUrlList
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    public function getAudioFileList()
    {
        return $this->audioFileList;
    }

    /**
     * Setter for audioFileList
     *
     * @ElementName audioFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null $audioFileList
     * @return $this
     */
    public function setAudioFileList($audioFileList)
    {
        $this->audioFileList = $audioFileList;
        return $this;
    }

    /**
     * Getter for audioMediaTypeList
     *
     * @ElementName audioMediaTypeList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    public function getAudioMediaTypeList()
    {
        return $this->audioMediaTypeList;
    }

    /**
     * Setter for audioMediaTypeList
     *
     * @ElementName audioMediaTypeList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null $audioMediaTypeList
     * @return $this
     */
    public function setAudioMediaTypeList($audioMediaTypeList)
    {
        $this->audioMediaTypeList = $audioMediaTypeList;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null
     */
    public function getVideoUrlList()
    {
        return $this->videoUrlList;
    }

    /**
     * Setter for videoUrlList
     *
     * @ElementName videoUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLList|null $videoUrlList
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null
     */
    public function getVideoFileList()
    {
        return $this->videoFileList;
    }

    /**
     * Setter for videoFileList
     *
     * @ElementName videoFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementDescriptionList|null $videoFileList
     * @return $this
     */
    public function setVideoFileList($videoFileList)
    {
        $this->videoFileList = $videoFileList;
        return $this;
    }

    /**
     * Getter for videoMediaTypeList
     *
     * @ElementName videoMediaTypeList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null
     */
    public function getVideoMediaTypeList()
    {
        return $this->videoMediaTypeList;
    }

    /**
     * Setter for videoMediaTypeList
     *
     * @ElementName videoMediaTypeList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementMediaFileTypeList|null $videoMediaTypeList
     * @return $this
     */
    public function setVideoMediaTypeList($videoMediaTypeList)
    {
        $this->videoMediaTypeList = $videoMediaTypeList;
        return $this;
    }


}

