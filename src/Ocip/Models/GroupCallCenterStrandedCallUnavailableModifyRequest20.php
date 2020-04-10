<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterStrandedCallUnavailableModifyRequest20
 *
 * Modify a call center's stranded calls - unavailable settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:5935","type":"sequence"}]
 */
class GroupCallCenterStrandedCallUnavailableModifyRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:5935
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5935
     * @var bool|null
     */
    private $conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode = null;

    /**
     * @ElementName numberOfAgentsWithSpecifiedUnavailableCode
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5935
     * @MinInclusive 1
     * @MaxInclusive 1000
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $numberOfAgentsWithSpecifiedUnavailableCode = null;

    /**
     * @ElementName agentsUnavailableCode
     * @Type string
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5935
     * @MinLength 1
     * @MaxLength 10
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $agentsUnavailableCode = null;

    /**
     * @ElementName action
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterStrandedCallUnavailableProcessingAction
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5935
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStrandedCallUnavailableProcessingAction|null
     */
    private $action = null;

    /**
     * @ElementName transferPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5935
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $transferPhoneNumber = null;

    /**
     * @ElementName audioMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5935
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $audioMessageSelection = null;

    /**
     * @ElementName audioUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5935
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $audioUrlList = null;

    /**
     * @ElementName audioFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5935
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    private $audioFileList = null;

    /**
     * @ElementName videoMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5935
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $videoMessageSelection = null;

    /**
     * @ElementName videoUrlList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5935
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $videoUrlList = null;

    /**
     * @ElementName videoFileList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5935
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20|null
     */
    private $videoFileList = null;

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
     * Getter for conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode
     *
     * @return bool
     */
    public function getConditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode()
    {
        return $this->conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode;
    }

    /**
     * Setter for conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode
     *
     * @param bool $conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode
     * @return $this
     */
    public function setConditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode($conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode)
    {
        $this->conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode = $conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode()
    {
        $this->conditionPolicyOnNumberOfAgentsWithSpecifiedUnavailableCode = null;
        return $this;
    }

    /**
     * Getter for numberOfAgentsWithSpecifiedUnavailableCode
     *
     * @return int|null
     */
    public function getNumberOfAgentsWithSpecifiedUnavailableCode()
    {
        return $this->numberOfAgentsWithSpecifiedUnavailableCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfAgentsWithSpecifiedUnavailableCode;
    }

    /**
     * Setter for numberOfAgentsWithSpecifiedUnavailableCode
     *
     * @param int|null $numberOfAgentsWithSpecifiedUnavailableCode
     * @return $this
     */
    public function setNumberOfAgentsWithSpecifiedUnavailableCode($numberOfAgentsWithSpecifiedUnavailableCode = null)
    {
        if ($numberOfAgentsWithSpecifiedUnavailableCode === null) {
            $this->numberOfAgentsWithSpecifiedUnavailableCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->numberOfAgentsWithSpecifiedUnavailableCode = $numberOfAgentsWithSpecifiedUnavailableCode;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfAgentsWithSpecifiedUnavailableCode()
    {
        $this->numberOfAgentsWithSpecifiedUnavailableCode = null;
        return $this;
    }

    /**
     * Getter for agentsUnavailableCode
     *
     * @return string|null
     */
    public function getAgentsUnavailableCode()
    {
        return $this->agentsUnavailableCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentsUnavailableCode;
    }

    /**
     * Setter for agentsUnavailableCode
     *
     * @param string|null $agentsUnavailableCode
     * @return $this
     */
    public function setAgentsUnavailableCode($agentsUnavailableCode = null)
    {
        if ($agentsUnavailableCode === null) {
            $this->agentsUnavailableCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->agentsUnavailableCode = $agentsUnavailableCode;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentsUnavailableCode()
    {
        $this->agentsUnavailableCode = null;
        return $this;
    }

    /**
     * Getter for action
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterStrandedCallUnavailableProcessingAction
     */
    public function getAction()
    {
        return $this->action instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->action;
    }

    /**
     * Setter for action
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterStrandedCallUnavailableProcessingAction $action
     * @return $this
     */
    public function setAction(\CWM\BroadWorksConnector\Ocip\Models\CallCenterStrandedCallUnavailableProcessingAction $action)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20
     */
    public function getAudioFileList()
    {
        return $this->audioFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFileList;
    }

    /**
     * Setter for audioFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20 $audioFileList
     * @return $this
     */
    public function setAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20 $audioFileList)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20
     */
    public function getVideoFileList()
    {
        return $this->videoFileList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFileList;
    }

    /**
     * Setter for videoFileList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20 $videoFileList
     * @return $this
     */
    public function setVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify20 $videoFileList)
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

