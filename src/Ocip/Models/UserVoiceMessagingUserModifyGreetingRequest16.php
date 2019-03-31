<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserModifyGreetingRequest16
 *
 * Modify the user's voice messaging greeting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *         disableMessageDeposit
 *         disableMessageDepositAction
 *         greetingOnlyForwardDestination
 *
 *         Replaced by UserVoiceMessagingUserModifyGreetingRequest20 in AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see UserVoiceMessagingUserModifyGreetingRequest20
 * @Groups [{"id":"a8b2edcd7d6936a8b76653949ae59623:499","type":"sequence"}]
 */
class UserVoiceMessagingUserModifyGreetingRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName busyAnnouncementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    private $busyAnnouncementSelection = null;

    /**
     * @ElementName busyPersonalAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $busyPersonalAudioFile = null;

    /**
     * @ElementName busyPersonalVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $busyPersonalVideoFile = null;

    /**
     * @ElementName noAnswerAnnouncementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection|null
     */
    private $noAnswerAnnouncementSelection = null;

    /**
     * @ElementName noAnswerPersonalAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $noAnswerPersonalAudioFile = null;

    /**
     * @ElementName noAnswerPersonalVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $noAnswerPersonalVideoFile = null;

    /**
     * @ElementName extendedAwayEnabled
     * @Type bool
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @var bool|null
     */
    private $extendedAwayEnabled = null;

    /**
     * @ElementName extendedAwayDisableMessageDeposit
     * @Type bool
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @var bool|null
     */
    private $extendedAwayDisableMessageDeposit = null;

    /**
     * @ElementName extendedAwayAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $extendedAwayAudioFile = null;

    /**
     * @ElementName extendedAwayVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $extendedAwayVideoFile = null;

    /**
     * @ElementName noAnswerAlternateGreeting01
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify16
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify16|null
     */
    private $noAnswerAlternateGreeting01 = null;

    /**
     * @ElementName noAnswerAlternateGreeting02
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify16
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify16|null
     */
    private $noAnswerAlternateGreeting02 = null;

    /**
     * @ElementName noAnswerAlternateGreeting03
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify16
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify16|null
     */
    private $noAnswerAlternateGreeting03 = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings|null
     */
    private $noAnswerNumberOfRings = null;

    /**
     * @ElementName disableMessageDeposit
     * @Type bool
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @var bool|null
     */
    private $disableMessageDeposit = null;

    /**
     * @ElementName disableMessageDepositAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDisableMessageDepositSelection
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDisableMessageDepositSelection|null
     */
    private $disableMessageDepositAction = null;

    /**
     * @ElementName greetingOnlyForwardDestination
     * @Type string
     * @Nillable
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:499
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $greetingOnlyForwardDestination = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for busyAnnouncementSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     */
    public function getBusyAnnouncementSelection()
    {
        return $this->busyAnnouncementSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busyAnnouncementSelection;
    }

    /**
     * Setter for busyAnnouncementSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $busyAnnouncementSelection
     * @return $this
     */
    public function setBusyAnnouncementSelection(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $busyAnnouncementSelection)
    {
        $this->busyAnnouncementSelection = $busyAnnouncementSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusyAnnouncementSelection()
    {
        $this->busyAnnouncementSelection = null;
        return $this;
    }

    /**
     * Getter for busyPersonalAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getBusyPersonalAudioFile()
    {
        return $this->busyPersonalAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busyPersonalAudioFile;
    }

    /**
     * Setter for busyPersonalAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $busyPersonalAudioFile
     * @return $this
     */
    public function setBusyPersonalAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $busyPersonalAudioFile)
    {
        $this->busyPersonalAudioFile = $busyPersonalAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusyPersonalAudioFile()
    {
        $this->busyPersonalAudioFile = null;
        return $this;
    }

    /**
     * Getter for busyPersonalVideoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getBusyPersonalVideoFile()
    {
        return $this->busyPersonalVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busyPersonalVideoFile;
    }

    /**
     * Setter for busyPersonalVideoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $busyPersonalVideoFile
     * @return $this
     */
    public function setBusyPersonalVideoFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $busyPersonalVideoFile)
    {
        $this->busyPersonalVideoFile = $busyPersonalVideoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusyPersonalVideoFile()
    {
        $this->busyPersonalVideoFile = null;
        return $this;
    }

    /**
     * Getter for noAnswerAnnouncementSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection
     */
    public function getNoAnswerAnnouncementSelection()
    {
        return $this->noAnswerAnnouncementSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerAnnouncementSelection;
    }

    /**
     * Setter for noAnswerAnnouncementSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection $noAnswerAnnouncementSelection
     * @return $this
     */
    public function setNoAnswerAnnouncementSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection $noAnswerAnnouncementSelection)
    {
        $this->noAnswerAnnouncementSelection = $noAnswerAnnouncementSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerAnnouncementSelection()
    {
        $this->noAnswerAnnouncementSelection = null;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getNoAnswerPersonalAudioFile()
    {
        return $this->noAnswerPersonalAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerPersonalAudioFile;
    }

    /**
     * Setter for noAnswerPersonalAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $noAnswerPersonalAudioFile
     * @return $this
     */
    public function setNoAnswerPersonalAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $noAnswerPersonalAudioFile)
    {
        $this->noAnswerPersonalAudioFile = $noAnswerPersonalAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerPersonalAudioFile()
    {
        $this->noAnswerPersonalAudioFile = null;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalVideoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getNoAnswerPersonalVideoFile()
    {
        return $this->noAnswerPersonalVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerPersonalVideoFile;
    }

    /**
     * Setter for noAnswerPersonalVideoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $noAnswerPersonalVideoFile
     * @return $this
     */
    public function setNoAnswerPersonalVideoFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $noAnswerPersonalVideoFile)
    {
        $this->noAnswerPersonalVideoFile = $noAnswerPersonalVideoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerPersonalVideoFile()
    {
        $this->noAnswerPersonalVideoFile = null;
        return $this;
    }

    /**
     * Getter for extendedAwayEnabled
     *
     * @return bool
     */
    public function getExtendedAwayEnabled()
    {
        return $this->extendedAwayEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedAwayEnabled;
    }

    /**
     * Setter for extendedAwayEnabled
     *
     * @param bool $extendedAwayEnabled
     * @return $this
     */
    public function setExtendedAwayEnabled($extendedAwayEnabled)
    {
        $this->extendedAwayEnabled = $extendedAwayEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtendedAwayEnabled()
    {
        $this->extendedAwayEnabled = null;
        return $this;
    }

    /**
     * Getter for extendedAwayDisableMessageDeposit
     *
     * @return bool
     */
    public function getExtendedAwayDisableMessageDeposit()
    {
        return $this->extendedAwayDisableMessageDeposit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedAwayDisableMessageDeposit;
    }

    /**
     * Setter for extendedAwayDisableMessageDeposit
     *
     * @param bool $extendedAwayDisableMessageDeposit
     * @return $this
     */
    public function setExtendedAwayDisableMessageDeposit($extendedAwayDisableMessageDeposit)
    {
        $this->extendedAwayDisableMessageDeposit = $extendedAwayDisableMessageDeposit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtendedAwayDisableMessageDeposit()
    {
        $this->extendedAwayDisableMessageDeposit = null;
        return $this;
    }

    /**
     * Getter for extendedAwayAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getExtendedAwayAudioFile()
    {
        return $this->extendedAwayAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedAwayAudioFile;
    }

    /**
     * Setter for extendedAwayAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $extendedAwayAudioFile
     * @return $this
     */
    public function setExtendedAwayAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $extendedAwayAudioFile)
    {
        $this->extendedAwayAudioFile = $extendedAwayAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtendedAwayAudioFile()
    {
        $this->extendedAwayAudioFile = null;
        return $this;
    }

    /**
     * Getter for extendedAwayVideoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getExtendedAwayVideoFile()
    {
        return $this->extendedAwayVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedAwayVideoFile;
    }

    /**
     * Setter for extendedAwayVideoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $extendedAwayVideoFile
     * @return $this
     */
    public function setExtendedAwayVideoFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $extendedAwayVideoFile)
    {
        $this->extendedAwayVideoFile = $extendedAwayVideoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtendedAwayVideoFile()
    {
        $this->extendedAwayVideoFile = null;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting01
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify16
     */
    public function getNoAnswerAlternateGreeting01()
    {
        return $this->noAnswerAlternateGreeting01 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerAlternateGreeting01;
    }

    /**
     * Setter for noAnswerAlternateGreeting01
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting01
     * @return $this
     */
    public function setNoAnswerAlternateGreeting01(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting01)
    {
        $this->noAnswerAlternateGreeting01 = $noAnswerAlternateGreeting01;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerAlternateGreeting01()
    {
        $this->noAnswerAlternateGreeting01 = null;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting02
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify16
     */
    public function getNoAnswerAlternateGreeting02()
    {
        return $this->noAnswerAlternateGreeting02 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerAlternateGreeting02;
    }

    /**
     * Setter for noAnswerAlternateGreeting02
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting02
     * @return $this
     */
    public function setNoAnswerAlternateGreeting02(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting02)
    {
        $this->noAnswerAlternateGreeting02 = $noAnswerAlternateGreeting02;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerAlternateGreeting02()
    {
        $this->noAnswerAlternateGreeting02 = null;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting03
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify16
     */
    public function getNoAnswerAlternateGreeting03()
    {
        return $this->noAnswerAlternateGreeting03 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerAlternateGreeting03;
    }

    /**
     * Setter for noAnswerAlternateGreeting03
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting03
     * @return $this
     */
    public function setNoAnswerAlternateGreeting03(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting03)
    {
        $this->noAnswerAlternateGreeting03 = $noAnswerAlternateGreeting03;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerAlternateGreeting03()
    {
        $this->noAnswerAlternateGreeting03 = null;
        return $this;
    }

    /**
     * Getter for noAnswerNumberOfRings
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerNumberOfRings;
    }

    /**
     * Setter for noAnswerNumberOfRings
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings $noAnswerNumberOfRings
     * @return $this
     */
    public function setNoAnswerNumberOfRings(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings $noAnswerNumberOfRings)
    {
        $this->noAnswerNumberOfRings = $noAnswerNumberOfRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerNumberOfRings()
    {
        $this->noAnswerNumberOfRings = null;
        return $this;
    }

    /**
     * Getter for disableMessageDeposit
     *
     * @return bool
     */
    public function getDisableMessageDeposit()
    {
        return $this->disableMessageDeposit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disableMessageDeposit;
    }

    /**
     * Setter for disableMessageDeposit
     *
     * @param bool $disableMessageDeposit
     * @return $this
     */
    public function setDisableMessageDeposit($disableMessageDeposit)
    {
        $this->disableMessageDeposit = $disableMessageDeposit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisableMessageDeposit()
    {
        $this->disableMessageDeposit = null;
        return $this;
    }

    /**
     * Getter for disableMessageDepositAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDisableMessageDepositSelection
     */
    public function getDisableMessageDepositAction()
    {
        return $this->disableMessageDepositAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disableMessageDepositAction;
    }

    /**
     * Setter for disableMessageDepositAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDisableMessageDepositSelection $disableMessageDepositAction
     * @return $this
     */
    public function setDisableMessageDepositAction(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDisableMessageDepositSelection $disableMessageDepositAction)
    {
        $this->disableMessageDepositAction = $disableMessageDepositAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisableMessageDepositAction()
    {
        $this->disableMessageDepositAction = null;
        return $this;
    }

    /**
     * Getter for greetingOnlyForwardDestination
     *
     * @return string|null
     */
    public function getGreetingOnlyForwardDestination()
    {
        return $this->greetingOnlyForwardDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->greetingOnlyForwardDestination;
    }

    /**
     * Setter for greetingOnlyForwardDestination
     *
     * @param string|null $greetingOnlyForwardDestination
     * @return $this
     */
    public function setGreetingOnlyForwardDestination($greetingOnlyForwardDestination = null)
    {
        if ($greetingOnlyForwardDestination === null) {
            $this->greetingOnlyForwardDestination = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->greetingOnlyForwardDestination = $greetingOnlyForwardDestination;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGreetingOnlyForwardDestination()
    {
        $this->greetingOnlyForwardDestination = null;
        return $this;
    }


}

