<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserModifyGreetingExecutionServerRequest
 *
 * Modify the user's voice messaging greeting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command can only be executed from the Execution
 * Server
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserVoiceMessagingUserModifyGreetingExecutionServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName busyAnnouncementSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    private $busyAnnouncementSelection = null;

    /**
     * @ElementName busyPersonalAudioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    private $busyPersonalAudioFile = null;

    /**
     * @ElementName busyPersonalVideoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    private $busyPersonalVideoFile = null;

    /**
     * @ElementName noAnswerAnnouncementSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection|null
     */
    private $noAnswerAnnouncementSelection = null;

    /**
     * @ElementName noAnswerPersonalAudioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    private $noAnswerPersonalAudioFile = null;

    /**
     * @ElementName noAnswerPersonalVideoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    private $noAnswerPersonalVideoFile = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings|null
     */
    private $noAnswerNumberOfRings = null;

    /**
     * @ElementName extendedAwayEnabled
     * @var bool|null
     */
    private $extendedAwayEnabled = null;

    /**
     * @ElementName extendedAwayDisableMessageDeposit
     * @var bool|null
     */
    private $extendedAwayDisableMessageDeposit = null;

    /**
     * @ElementName extendedAwayAudioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    private $extendedAwayAudioFile = null;

    /**
     * @ElementName extendedAwayVideoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    private $extendedAwayVideoFile = null;

    /**
     * @ElementName disableMessageDeposit
     * @var bool|null
     */
    private $disableMessageDeposit = null;

    /**
     * @ElementName disableMessageDepositAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDisableMessageDepositSelection|null
     */
    private $disableMessageDepositAction = null;

    /**
     * @ElementName greetingOnlyForwardDestination
     * @var string|null
     */
    private $greetingOnlyForwardDestination = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for busyAnnouncementSelection
     *
     * @ElementName busyAnnouncementSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    public function getBusyAnnouncementSelection()
    {
        return $this->busyAnnouncementSelection;
    }

    /**
     * Setter for busyAnnouncementSelection
     *
     * @ElementName busyAnnouncementSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null $busyAnnouncementSelection
     * @return $this
     */
    public function setBusyAnnouncementSelection(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $busyAnnouncementSelection)
    {
        $this->busyAnnouncementSelection = $busyAnnouncementSelection;
        return $this;
    }

    /**
     * Getter for busyPersonalAudioFile
     *
     * @ElementName busyPersonalAudioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    public function getBusyPersonalAudioFile()
    {
        return $this->busyPersonalAudioFile;
    }

    /**
     * Setter for busyPersonalAudioFile
     *
     * @ElementName busyPersonalAudioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null $busyPersonalAudioFile
     * @return $this
     */
    public function setBusyPersonalAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource $busyPersonalAudioFile)
    {
        $this->busyPersonalAudioFile = $busyPersonalAudioFile;
        return $this;
    }

    /**
     * Getter for busyPersonalVideoFile
     *
     * @ElementName busyPersonalVideoFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    public function getBusyPersonalVideoFile()
    {
        return $this->busyPersonalVideoFile;
    }

    /**
     * Setter for busyPersonalVideoFile
     *
     * @ElementName busyPersonalVideoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null $busyPersonalVideoFile
     * @return $this
     */
    public function setBusyPersonalVideoFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource $busyPersonalVideoFile)
    {
        $this->busyPersonalVideoFile = $busyPersonalVideoFile;
        return $this;
    }

    /**
     * Getter for noAnswerAnnouncementSelection
     *
     * @ElementName noAnswerAnnouncementSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection|null
     */
    public function getNoAnswerAnnouncementSelection()
    {
        return $this->noAnswerAnnouncementSelection;
    }

    /**
     * Setter for noAnswerAnnouncementSelection
     *
     * @ElementName noAnswerAnnouncementSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection|null $noAnswerAnnouncementSelection
     * @return $this
     */
    public function setNoAnswerAnnouncementSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection $noAnswerAnnouncementSelection)
    {
        $this->noAnswerAnnouncementSelection = $noAnswerAnnouncementSelection;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalAudioFile
     *
     * @ElementName noAnswerPersonalAudioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    public function getNoAnswerPersonalAudioFile()
    {
        return $this->noAnswerPersonalAudioFile;
    }

    /**
     * Setter for noAnswerPersonalAudioFile
     *
     * @ElementName noAnswerPersonalAudioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null $noAnswerPersonalAudioFile
     * @return $this
     */
    public function setNoAnswerPersonalAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource $noAnswerPersonalAudioFile)
    {
        $this->noAnswerPersonalAudioFile = $noAnswerPersonalAudioFile;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalVideoFile
     *
     * @ElementName noAnswerPersonalVideoFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    public function getNoAnswerPersonalVideoFile()
    {
        return $this->noAnswerPersonalVideoFile;
    }

    /**
     * Setter for noAnswerPersonalVideoFile
     *
     * @ElementName noAnswerPersonalVideoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null $noAnswerPersonalVideoFile
     * @return $this
     */
    public function setNoAnswerPersonalVideoFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource $noAnswerPersonalVideoFile)
    {
        $this->noAnswerPersonalVideoFile = $noAnswerPersonalVideoFile;
        return $this;
    }

    /**
     * Getter for noAnswerNumberOfRings
     *
     * @ElementName noAnswerNumberOfRings
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings|null
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings;
    }

    /**
     * Setter for noAnswerNumberOfRings
     *
     * @ElementName noAnswerNumberOfRings
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings|null $noAnswerNumberOfRings
     * @return $this
     */
    public function setNoAnswerNumberOfRings(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings $noAnswerNumberOfRings)
    {
        $this->noAnswerNumberOfRings = $noAnswerNumberOfRings;
        return $this;
    }

    /**
     * Getter for extendedAwayEnabled
     *
     * @ElementName extendedAwayEnabled
     * @return bool|null
     */
    public function getExtendedAwayEnabled()
    {
        return $this->extendedAwayEnabled;
    }

    /**
     * Setter for extendedAwayEnabled
     *
     * @ElementName extendedAwayEnabled
     * @param bool|null $extendedAwayEnabled
     * @return $this
     */
    public function setExtendedAwayEnabled($extendedAwayEnabled)
    {
        $this->extendedAwayEnabled = $extendedAwayEnabled;
        return $this;
    }

    /**
     * Getter for extendedAwayDisableMessageDeposit
     *
     * @ElementName extendedAwayDisableMessageDeposit
     * @return bool|null
     */
    public function getExtendedAwayDisableMessageDeposit()
    {
        return $this->extendedAwayDisableMessageDeposit;
    }

    /**
     * Setter for extendedAwayDisableMessageDeposit
     *
     * @ElementName extendedAwayDisableMessageDeposit
     * @param bool|null $extendedAwayDisableMessageDeposit
     * @return $this
     */
    public function setExtendedAwayDisableMessageDeposit($extendedAwayDisableMessageDeposit)
    {
        $this->extendedAwayDisableMessageDeposit = $extendedAwayDisableMessageDeposit;
        return $this;
    }

    /**
     * Getter for extendedAwayAudioFile
     *
     * @ElementName extendedAwayAudioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    public function getExtendedAwayAudioFile()
    {
        return $this->extendedAwayAudioFile;
    }

    /**
     * Setter for extendedAwayAudioFile
     *
     * @ElementName extendedAwayAudioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null $extendedAwayAudioFile
     * @return $this
     */
    public function setExtendedAwayAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource $extendedAwayAudioFile)
    {
        $this->extendedAwayAudioFile = $extendedAwayAudioFile;
        return $this;
    }

    /**
     * Getter for extendedAwayVideoFile
     *
     * @ElementName extendedAwayVideoFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    public function getExtendedAwayVideoFile()
    {
        return $this->extendedAwayVideoFile;
    }

    /**
     * Setter for extendedAwayVideoFile
     *
     * @ElementName extendedAwayVideoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null $extendedAwayVideoFile
     * @return $this
     */
    public function setExtendedAwayVideoFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource $extendedAwayVideoFile)
    {
        $this->extendedAwayVideoFile = $extendedAwayVideoFile;
        return $this;
    }

    /**
     * Getter for disableMessageDeposit
     *
     * @ElementName disableMessageDeposit
     * @return bool|null
     */
    public function getDisableMessageDeposit()
    {
        return $this->disableMessageDeposit;
    }

    /**
     * Setter for disableMessageDeposit
     *
     * @ElementName disableMessageDeposit
     * @param bool|null $disableMessageDeposit
     * @return $this
     */
    public function setDisableMessageDeposit($disableMessageDeposit)
    {
        $this->disableMessageDeposit = $disableMessageDeposit;
        return $this;
    }

    /**
     * Getter for disableMessageDepositAction
     *
     * @ElementName disableMessageDepositAction
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDisableMessageDepositSelection|null
     */
    public function getDisableMessageDepositAction()
    {
        return $this->disableMessageDepositAction;
    }

    /**
     * Setter for disableMessageDepositAction
     *
     * @ElementName disableMessageDepositAction
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDisableMessageDepositSelection|null $disableMessageDepositAction
     * @return $this
     */
    public function setDisableMessageDepositAction(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDisableMessageDepositSelection $disableMessageDepositAction)
    {
        $this->disableMessageDepositAction = $disableMessageDepositAction;
        return $this;
    }

    /**
     * Getter for greetingOnlyForwardDestination
     *
     * @ElementName greetingOnlyForwardDestination
     * @return string|null
     */
    public function getGreetingOnlyForwardDestination()
    {
        return $this->greetingOnlyForwardDestination;
    }

    /**
     * Setter for greetingOnlyForwardDestination
     *
     * @ElementName greetingOnlyForwardDestination
     * @param string|null $greetingOnlyForwardDestination
     * @return $this
     */
    public function setGreetingOnlyForwardDestination($greetingOnlyForwardDestination)
    {
        $this->greetingOnlyForwardDestination = $greetingOnlyForwardDestination;
        return $this;
    }


}

