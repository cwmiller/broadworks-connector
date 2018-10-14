<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterStrandedCallUnavailableModifyRequest
 *
 * Modify a call center's stranded calls -
 *         unavailable settings.
 *         The response is either a
 *         SuccessResponse or
 *         an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCallCenterStrandedCallUnavailableModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode
     * @var bool|null
     */
    private $conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode = null;

    /**
     * @ElementName numberOfAgentsWithSpecifiedUnavailableCode
     * @var int|null
     */
    private $numberOfAgentsWithSpecifiedUnavailableCode = null;

    /**
     * @ElementName agentsUnavailableCode
     * @var string|null
     */
    private $agentsUnavailableCode = null;

    /**
     * @ElementName action
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStrandedCallUnavailableProcessingAction|null
     */
    private $action = null;

    /**
     * @ElementName transferPhoneNumber
     * @var string|null
     */
    private $transferPhoneNumber = null;

    /**
     * @ElementName audioMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $audioMessageSelection = null;

    /**
     * @ElementName audioUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $audioUrlList = null;

    /**
     * @ElementName audioFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    private $audioFileList = null;

    /**
     * @ElementName videoMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $videoMessageSelection = null;

    /**
     * @ElementName videoUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $videoUrlList = null;

    /**
     * @ElementName videoFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    private $videoFileList = null;

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
     * Getter for conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode
     *
     * @ElementName conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode
     * @return bool|null
     */
    public function getConditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode()
    {
        return $this->conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode;
    }

    /**
     * Setter for conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode
     *
     * @ElementName conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode
     * @param bool|null $conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode
     * @return $this
     */
    public function setConditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode($conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode)
    {
        $this->conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode = $conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode;
        return $this;
    }

    /**
     * Getter for numberOfAgentsWithSpecifiedUnavailableCode
     *
     * @ElementName numberOfAgentsWithSpecifiedUnavailableCode
     * @return int|null
     */
    public function getNumberOfAgentsWithSpecifiedUnavailableCode()
    {
        return $this->numberOfAgentsWithSpecifiedUnavailableCode;
    }

    /**
     * Setter for numberOfAgentsWithSpecifiedUnavailableCode
     *
     * @ElementName numberOfAgentsWithSpecifiedUnavailableCode
     * @param int|null $numberOfAgentsWithSpecifiedUnavailableCode
     * @return $this
     */
    public function setNumberOfAgentsWithSpecifiedUnavailableCode($numberOfAgentsWithSpecifiedUnavailableCode)
    {
        $this->numberOfAgentsWithSpecifiedUnavailableCode = $numberOfAgentsWithSpecifiedUnavailableCode;
        return $this;
    }

    /**
     * Getter for agentsUnavailableCode
     *
     * @ElementName agentsUnavailableCode
     * @return string|null
     */
    public function getAgentsUnavailableCode()
    {
        return $this->agentsUnavailableCode;
    }

    /**
     * Setter for agentsUnavailableCode
     *
     * @ElementName agentsUnavailableCode
     * @param string|null $agentsUnavailableCode
     * @return $this
     */
    public function setAgentsUnavailableCode($agentsUnavailableCode)
    {
        $this->agentsUnavailableCode = $agentsUnavailableCode;
        return $this;
    }

    /**
     * Getter for action
     *
     * @ElementName action
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterStrandedCallUnavailableProcessingAction|null
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Setter for action
     *
     * @ElementName action
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterStrandedCallUnavailableProcessingAction|null $action
     * @return $this
     */
    public function setAction(\CWM\BroadWorksConnector\Ocip\Models\CallCenterStrandedCallUnavailableProcessingAction $action)
    {
        $this->action = $action;
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
    public function setAudioUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $audioUrlList)
    {
        $this->audioUrlList = $audioUrlList;
        return $this;
    }

    /**
     * Getter for audioFileList
     *
     * @ElementName audioFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    public function getAudioFileList()
    {
        return $this->audioFileList;
    }

    /**
     * Setter for audioFileList
     *
     * @ElementName audioFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null $audioFileList
     * @return $this
     */
    public function setAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $audioFileList)
    {
        $this->audioFileList = $audioFileList;
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
    public function setVideoUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $videoUrlList)
    {
        $this->videoUrlList = $videoUrlList;
        return $this;
    }

    /**
     * Getter for videoFileList
     *
     * @ElementName videoFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    public function getVideoFileList()
    {
        return $this->videoFileList;
    }

    /**
     * Setter for videoFileList
     *
     * @ElementName videoFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null $videoFileList
     * @return $this
     */
    public function setVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $videoFileList)
    {
        $this->videoFileList = $videoFileList;
        return $this;
    }


}

