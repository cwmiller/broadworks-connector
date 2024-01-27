<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterNightServiceGetResponse
 *
 * Response to the GroupCallCenterNightServiceGetRequest.
 *
 * @see GroupCallCenterNightServiceGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:6996","type":"sequence"}]
 */
class GroupCallCenterNightServiceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName action
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledServiceAction
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterScheduledServiceAction|null
     */
    protected $action = null;

    /**
     * @ElementName businessHours
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $businessHours = null;

    /**
     * @ElementName forceNightService
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @var bool|null
     */
    protected $forceNightService = null;

    /**
     * @ElementName allowManualOverrideViaFAC
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @var bool|null
     */
    protected $allowManualOverrideViaFAC = null;

    /**
     * @ElementName transferPhoneNumber
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $transferPhoneNumber = null;

    /**
     * @ElementName playAnnouncementBeforeAction
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @var bool|null
     */
    protected $playAnnouncementBeforeAction = null;

    /**
     * @ElementName audioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $audioMessageSelection = null;

    /**
     * @ElementName audioFileUrl
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $audioFileUrl = null;

    /**
     * @ElementName audioFileDescription
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $audioFileDescription = null;

    /**
     * @ElementName audioMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    protected $audioMediaType = null;

    /**
     * @ElementName videoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $videoMessageSelection = null;

    /**
     * @ElementName videoFileUrl
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $videoFileUrl = null;

    /**
     * @ElementName videoFileDescription
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $videoFileDescription = null;

    /**
     * @ElementName videoMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    protected $videoMediaType = null;

    /**
     * @ElementName manualAnnouncementMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterManualNightServiceAnnouncementMode
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterManualNightServiceAnnouncementMode|null
     */
    protected $manualAnnouncementMode = null;

    /**
     * @ElementName manualAudioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $manualAudioMessageSelection = null;

    /**
     * @ElementName manualAudioFileUrl
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $manualAudioFileUrl = null;

    /**
     * @ElementName manualAudioFileDescription
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $manualAudioFileDescription = null;

    /**
     * @ElementName manualAudioMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    protected $manualAudioMediaType = null;

    /**
     * @ElementName manualVideoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $manualVideoMessageSelection = null;

    /**
     * @ElementName manualVideoFileUrl
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $manualVideoFileUrl = null;

    /**
     * @ElementName manualVideoFileDescription
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $manualVideoFileDescription = null;

    /**
     * @ElementName manualVideoMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6996
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    protected $manualVideoMediaType = null;

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
     * @return string
     */
    public function getBusinessHours()
    {
        return $this->businessHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->businessHours;
    }

    /**
     * Setter for businessHours
     *
     * @param string $businessHours
     * @return $this
     */
    public function setBusinessHours($businessHours)
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
     * Getter for audioFileUrl
     *
     * @return string
     */
    public function getAudioFileUrl()
    {
        return $this->audioFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFileUrl;
    }

    /**
     * Setter for audioFileUrl
     *
     * @param string $audioFileUrl
     * @return $this
     */
    public function setAudioFileUrl($audioFileUrl)
    {
        $this->audioFileUrl = $audioFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFileUrl()
    {
        $this->audioFileUrl = null;
        return $this;
    }

    /**
     * Getter for audioFileDescription
     *
     * @return string
     */
    public function getAudioFileDescription()
    {
        return $this->audioFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFileDescription;
    }

    /**
     * Setter for audioFileDescription
     *
     * @param string $audioFileDescription
     * @return $this
     */
    public function setAudioFileDescription($audioFileDescription)
    {
        $this->audioFileDescription = $audioFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFileDescription()
    {
        $this->audioFileDescription = null;
        return $this;
    }

    /**
     * Getter for audioMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getAudioMediaType()
    {
        return $this->audioMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioMediaType;
    }

    /**
     * Setter for audioMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $audioMediaType
     * @return $this
     */
    public function setAudioMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $audioMediaType)
    {
        $this->audioMediaType = $audioMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioMediaType()
    {
        $this->audioMediaType = null;
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
     * Getter for videoFileUrl
     *
     * @return string
     */
    public function getVideoFileUrl()
    {
        return $this->videoFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFileUrl;
    }

    /**
     * Setter for videoFileUrl
     *
     * @param string $videoFileUrl
     * @return $this
     */
    public function setVideoFileUrl($videoFileUrl)
    {
        $this->videoFileUrl = $videoFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFileUrl()
    {
        $this->videoFileUrl = null;
        return $this;
    }

    /**
     * Getter for videoFileDescription
     *
     * @return string
     */
    public function getVideoFileDescription()
    {
        return $this->videoFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFileDescription;
    }

    /**
     * Setter for videoFileDescription
     *
     * @param string $videoFileDescription
     * @return $this
     */
    public function setVideoFileDescription($videoFileDescription)
    {
        $this->videoFileDescription = $videoFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFileDescription()
    {
        $this->videoFileDescription = null;
        return $this;
    }

    /**
     * Getter for videoMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getVideoMediaType()
    {
        return $this->videoMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoMediaType;
    }

    /**
     * Setter for videoMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $videoMediaType
     * @return $this
     */
    public function setVideoMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $videoMediaType)
    {
        $this->videoMediaType = $videoMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoMediaType()
    {
        $this->videoMediaType = null;
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
     * Getter for manualAudioFileUrl
     *
     * @return string
     */
    public function getManualAudioFileUrl()
    {
        return $this->manualAudioFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualAudioFileUrl;
    }

    /**
     * Setter for manualAudioFileUrl
     *
     * @param string $manualAudioFileUrl
     * @return $this
     */
    public function setManualAudioFileUrl($manualAudioFileUrl)
    {
        $this->manualAudioFileUrl = $manualAudioFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualAudioFileUrl()
    {
        $this->manualAudioFileUrl = null;
        return $this;
    }

    /**
     * Getter for manualAudioFileDescription
     *
     * @return string
     */
    public function getManualAudioFileDescription()
    {
        return $this->manualAudioFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualAudioFileDescription;
    }

    /**
     * Setter for manualAudioFileDescription
     *
     * @param string $manualAudioFileDescription
     * @return $this
     */
    public function setManualAudioFileDescription($manualAudioFileDescription)
    {
        $this->manualAudioFileDescription = $manualAudioFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualAudioFileDescription()
    {
        $this->manualAudioFileDescription = null;
        return $this;
    }

    /**
     * Getter for manualAudioMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getManualAudioMediaType()
    {
        return $this->manualAudioMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualAudioMediaType;
    }

    /**
     * Setter for manualAudioMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $manualAudioMediaType
     * @return $this
     */
    public function setManualAudioMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $manualAudioMediaType)
    {
        $this->manualAudioMediaType = $manualAudioMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualAudioMediaType()
    {
        $this->manualAudioMediaType = null;
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
     * Getter for manualVideoFileUrl
     *
     * @return string
     */
    public function getManualVideoFileUrl()
    {
        return $this->manualVideoFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualVideoFileUrl;
    }

    /**
     * Setter for manualVideoFileUrl
     *
     * @param string $manualVideoFileUrl
     * @return $this
     */
    public function setManualVideoFileUrl($manualVideoFileUrl)
    {
        $this->manualVideoFileUrl = $manualVideoFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualVideoFileUrl()
    {
        $this->manualVideoFileUrl = null;
        return $this;
    }

    /**
     * Getter for manualVideoFileDescription
     *
     * @return string
     */
    public function getManualVideoFileDescription()
    {
        return $this->manualVideoFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualVideoFileDescription;
    }

    /**
     * Setter for manualVideoFileDescription
     *
     * @param string $manualVideoFileDescription
     * @return $this
     */
    public function setManualVideoFileDescription($manualVideoFileDescription)
    {
        $this->manualVideoFileDescription = $manualVideoFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualVideoFileDescription()
    {
        $this->manualVideoFileDescription = null;
        return $this;
    }

    /**
     * Getter for manualVideoMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getManualVideoMediaType()
    {
        return $this->manualVideoMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->manualVideoMediaType;
    }

    /**
     * Setter for manualVideoMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $manualVideoMediaType
     * @return $this
     */
    public function setManualVideoMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $manualVideoMediaType)
    {
        $this->manualVideoMediaType = $manualVideoMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetManualVideoMediaType()
    {
        $this->manualVideoMediaType = null;
        return $this;
    }
}

