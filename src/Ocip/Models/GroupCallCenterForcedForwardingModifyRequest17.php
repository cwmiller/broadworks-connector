<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterForcedForwardingModifyRequest17
 *
 * Modify a call center's forced forwarding
 *         settings.
 *         The response is either a SuccessResponse or an
 *         ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"9bff48d8661ff401ea11b6e32b924f02:81","type":"sequence"}]
 */
class GroupCallCenterForcedForwardingModifyRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 9bff48d8661ff401ea11b6e32b924f02:81
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 9bff48d8661ff401ea11b6e32b924f02:81
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 9bff48d8661ff401ea11b6e32b924f02:81
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $forwardToPhoneNumber = null;

    /**
     * @ElementName allowEnableViaFAC
     * @Type bool
     * @Optional
     * @Group 9bff48d8661ff401ea11b6e32b924f02:81
     * @var bool|null
     */
    protected $allowEnableViaFAC = null;

    /**
     * @ElementName playAnnouncementBeforeForwarding
     * @Type bool
     * @Optional
     * @Group 9bff48d8661ff401ea11b6e32b924f02:81
     * @var bool|null
     */
    protected $playAnnouncementBeforeForwarding = null;

    /**
     * @ElementName audioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group 9bff48d8661ff401ea11b6e32b924f02:81
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $audioMessageSelection = null;

    /**
     * @ElementName audioUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     * @Optional
     * @Group 9bff48d8661ff401ea11b6e32b924f02:81
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    protected $audioUrlList = null;

    /**
     * @ElementName audioFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     * @Optional
     * @Group 9bff48d8661ff401ea11b6e32b924f02:81
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    protected $audioFileList = null;

    /**
     * @ElementName videoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group 9bff48d8661ff401ea11b6e32b924f02:81
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $videoMessageSelection = null;

    /**
     * @ElementName videoUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     * @Optional
     * @Group 9bff48d8661ff401ea11b6e32b924f02:81
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    protected $videoUrlList = null;

    /**
     * @ElementName videoFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     * @Optional
     * @Group 9bff48d8661ff401ea11b6e32b924f02:81
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    protected $videoFileList = null;

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
     * Getter for forwardToPhoneNumber
     *
     * @return string|null
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardToPhoneNumber;
    }

    /**
     * Setter for forwardToPhoneNumber
     *
     * @param string|null $forwardToPhoneNumber
     * @return $this
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        if ($forwardToPhoneNumber === null) {
            $this->forwardToPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->forwardToPhoneNumber = $forwardToPhoneNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardToPhoneNumber()
    {
        $this->forwardToPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for allowEnableViaFAC
     *
     * @return bool
     */
    public function getAllowEnableViaFAC()
    {
        return $this->allowEnableViaFAC instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowEnableViaFAC;
    }

    /**
     * Setter for allowEnableViaFAC
     *
     * @param bool $allowEnableViaFAC
     * @return $this
     */
    public function setAllowEnableViaFAC($allowEnableViaFAC)
    {
        $this->allowEnableViaFAC = $allowEnableViaFAC;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowEnableViaFAC()
    {
        $this->allowEnableViaFAC = null;
        return $this;
    }

    /**
     * Getter for playAnnouncementBeforeForwarding
     *
     * @return bool
     */
    public function getPlayAnnouncementBeforeForwarding()
    {
        return $this->playAnnouncementBeforeForwarding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playAnnouncementBeforeForwarding;
    }

    /**
     * Setter for playAnnouncementBeforeForwarding
     *
     * @param bool $playAnnouncementBeforeForwarding
     * @return $this
     */
    public function setPlayAnnouncementBeforeForwarding($playAnnouncementBeforeForwarding)
    {
        $this->playAnnouncementBeforeForwarding = $playAnnouncementBeforeForwarding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayAnnouncementBeforeForwarding()
    {
        $this->playAnnouncementBeforeForwarding = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     */
    public function getAudioUrlList()
    {
        return $this->audioUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioUrlList;
    }

    /**
     * Setter for audioUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $audioUrlList
     * @return $this
     */
    public function setAudioUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $audioUrlList)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     */
    public function getAudioFileList()
    {
        return $this->audioFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFileList;
    }

    /**
     * Setter for audioFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $audioFileList
     * @return $this
     */
    public function setAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $audioFileList)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     */
    public function getVideoUrlList()
    {
        return $this->videoUrlList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoUrlList;
    }

    /**
     * Setter for videoUrlList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $videoUrlList
     * @return $this
     */
    public function setVideoUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $videoUrlList)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify
     */
    public function getVideoFileList()
    {
        return $this->videoFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFileList;
    }

    /**
     * Setter for videoFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $videoFileList
     * @return $this
     */
    public function setVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $videoFileList)
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
}

