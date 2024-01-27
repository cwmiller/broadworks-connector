<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterNightServiceModifyRequest
 *
 * Modify a call center's night service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:7071","type":"sequence"}]
 */
class GroupCallCenterNightServiceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:7071
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName action
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledServiceAction
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7071
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledServiceAction|null
     */
    protected $action = null;

    /**
     * @ElementName businessHours
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7071
     * @MinLength 1
     * @MaxLength 40
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $businessHours = null;

    /**
     * @ElementName forceNightService
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7071
     * @var bool|null
     */
    protected $forceNightService = null;

    /**
     * @ElementName allowManualOverrideViaFAC
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7071
     * @var bool|null
     */
    protected $allowManualOverrideViaFAC = null;

    /**
     * @ElementName transferPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7071
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $transferPhoneNumber = null;

    /**
     * @ElementName playAnnouncementBeforeAction
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7071
     * @var bool|null
     */
    protected $playAnnouncementBeforeAction = null;

    /**
     * @ElementName audioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7071
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $audioMessageSelection = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7071
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    protected $audioFile = null;

    /**
     * @ElementName videoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7071
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $videoMessageSelection = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7071
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    protected $videoFile = null;

    /**
     * @ElementName manualAnnouncementMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterManualNightServiceAnnouncementMode
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7071
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterManualNightServiceAnnouncementMode|null
     */
    protected $manualAnnouncementMode = null;

    /**
     * @ElementName manualAudioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7071
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $manualAudioMessageSelection = null;

    /**
     * @ElementName manualAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7071
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    protected $manualAudioFile = null;

    /**
     * @ElementName manualVideoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7071
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $manualVideoMessageSelection = null;

    /**
     * @ElementName manualVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7071
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    protected $manualVideoFile = null;

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
     * @return string|null
     */
    public function getBusinessHours()
    {
        return $this->businessHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->businessHours;
    }

    /**
     * Setter for businessHours
     *
     * @param string|null $businessHours
     * @return $this
     */
    public function setBusinessHours($businessHours = null)
    {
        if ($businessHours === null) {
            $this->businessHours = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->businessHours = $businessHours;
        }
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
     * Getter for manualAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     */
    public function getManualAudioFile()
    {
        return $this->manualAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualAudioFile;
    }

    /**
     * Setter for manualAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $manualAudioFile
     * @return $this
     */
    public function setManualAudioFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $manualAudioFile)
    {
        $this->manualAudioFile = $manualAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualAudioFile()
    {
        $this->manualAudioFile = null;
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
     * Getter for manualVideoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     */
    public function getManualVideoFile()
    {
        return $this->manualVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualVideoFile;
    }

    /**
     * Setter for manualVideoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $manualVideoFile
     * @return $this
     */
    public function setManualVideoFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $manualVideoFile)
    {
        $this->manualVideoFile = $manualVideoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualVideoFile()
    {
        $this->manualVideoFile = null;
        return $this;
    }
}

