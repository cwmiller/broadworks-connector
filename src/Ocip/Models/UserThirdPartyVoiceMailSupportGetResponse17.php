<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserThirdPartyVoiceMailSupportGetResponse17
 *
 * Response to UserThirdPartyVoiceMailSupportGetRequest17.
 *
 * @see UserThirdPartyVoiceMailSupportGetRequest17
 */
class UserThirdPartyVoiceMailSupportGetResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName busyRedirectToVoiceMail
     * @var bool|null
     */
    private $busyRedirectToVoiceMail = null;

    /**
     * @ElementName noAnswerRedirectToVoiceMail
     * @var bool|null
     */
    private $noAnswerRedirectToVoiceMail = null;

    /**
     * @ElementName serverSelection
     * @var string|null
     */
    private $serverSelection = null;

    /**
     * @ElementName userServer
     * @var string|null
     */
    private $userServer = null;

    /**
     * @ElementName mailboxIdType
     * @var string|null
     */
    private $mailboxIdType = null;

    /**
     * @ElementName mailboxURL
     * @var string|null
     */
    private $mailboxURL = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @var int|null
     */
    private $noAnswerNumberOfRings = null;

    /**
     * @ElementName alwaysRedirectToVoiceMail
     * @var bool|null
     */
    private $alwaysRedirectToVoiceMail = null;

    /**
     * @ElementName outOfPrimaryZoneRedirectToVoiceMail
     * @var bool|null
     */
    private $outOfPrimaryZoneRedirectToVoiceMail = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for busyRedirectToVoiceMail
     *
     * @ElementName busyRedirectToVoiceMail
     * @return bool|null
     */
    public function getBusyRedirectToVoiceMail()
    {
        return $this->busyRedirectToVoiceMail;
    }

    /**
     * Setter for busyRedirectToVoiceMail
     *
     * @ElementName busyRedirectToVoiceMail
     * @param bool|null $busyRedirectToVoiceMail
     * @return $this
     */
    public function setBusyRedirectToVoiceMail($busyRedirectToVoiceMail)
    {
        $this->busyRedirectToVoiceMail = $busyRedirectToVoiceMail;
        return $this;
    }

    /**
     * Getter for noAnswerRedirectToVoiceMail
     *
     * @ElementName noAnswerRedirectToVoiceMail
     * @return bool|null
     */
    public function getNoAnswerRedirectToVoiceMail()
    {
        return $this->noAnswerRedirectToVoiceMail;
    }

    /**
     * Setter for noAnswerRedirectToVoiceMail
     *
     * @ElementName noAnswerRedirectToVoiceMail
     * @param bool|null $noAnswerRedirectToVoiceMail
     * @return $this
     */
    public function setNoAnswerRedirectToVoiceMail($noAnswerRedirectToVoiceMail)
    {
        $this->noAnswerRedirectToVoiceMail = $noAnswerRedirectToVoiceMail;
        return $this;
    }

    /**
     * Getter for serverSelection
     *
     * @ElementName serverSelection
     * @return string|null
     */
    public function getServerSelection()
    {
        return $this->serverSelection;
    }

    /**
     * Setter for serverSelection
     *
     * @ElementName serverSelection
     * @param string|null $serverSelection
     * @return $this
     */
    public function setServerSelection($serverSelection)
    {
        $this->serverSelection = $serverSelection;
        return $this;
    }

    /**
     * Getter for userServer
     *
     * @ElementName userServer
     * @return string|null
     */
    public function getUserServer()
    {
        return $this->userServer;
    }

    /**
     * Setter for userServer
     *
     * @ElementName userServer
     * @param string|null $userServer
     * @return $this
     */
    public function setUserServer($userServer)
    {
        $this->userServer = $userServer;
        return $this;
    }

    /**
     * Getter for mailboxIdType
     *
     * @ElementName mailboxIdType
     * @return string|null
     */
    public function getMailboxIdType()
    {
        return $this->mailboxIdType;
    }

    /**
     * Setter for mailboxIdType
     *
     * @ElementName mailboxIdType
     * @param string|null $mailboxIdType
     * @return $this
     */
    public function setMailboxIdType($mailboxIdType)
    {
        $this->mailboxIdType = $mailboxIdType;
        return $this;
    }

    /**
     * Getter for mailboxURL
     *
     * @ElementName mailboxURL
     * @return string|null
     */
    public function getMailboxURL()
    {
        return $this->mailboxURL;
    }

    /**
     * Setter for mailboxURL
     *
     * @ElementName mailboxURL
     * @param string|null $mailboxURL
     * @return $this
     */
    public function setMailboxURL($mailboxURL)
    {
        $this->mailboxURL = $mailboxURL;
        return $this;
    }

    /**
     * Getter for noAnswerNumberOfRings
     *
     * @ElementName noAnswerNumberOfRings
     * @return int|null
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings;
    }

    /**
     * Setter for noAnswerNumberOfRings
     *
     * @ElementName noAnswerNumberOfRings
     * @param int|null $noAnswerNumberOfRings
     * @return $this
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings)
    {
        $this->noAnswerNumberOfRings = $noAnswerNumberOfRings;
        return $this;
    }

    /**
     * Getter for alwaysRedirectToVoiceMail
     *
     * @ElementName alwaysRedirectToVoiceMail
     * @return bool|null
     */
    public function getAlwaysRedirectToVoiceMail()
    {
        return $this->alwaysRedirectToVoiceMail;
    }

    /**
     * Setter for alwaysRedirectToVoiceMail
     *
     * @ElementName alwaysRedirectToVoiceMail
     * @param bool|null $alwaysRedirectToVoiceMail
     * @return $this
     */
    public function setAlwaysRedirectToVoiceMail($alwaysRedirectToVoiceMail)
    {
        $this->alwaysRedirectToVoiceMail = $alwaysRedirectToVoiceMail;
        return $this;
    }

    /**
     * Getter for outOfPrimaryZoneRedirectToVoiceMail
     *
     * @ElementName outOfPrimaryZoneRedirectToVoiceMail
     * @return bool|null
     */
    public function getOutOfPrimaryZoneRedirectToVoiceMail()
    {
        return $this->outOfPrimaryZoneRedirectToVoiceMail;
    }

    /**
     * Setter for outOfPrimaryZoneRedirectToVoiceMail
     *
     * @ElementName outOfPrimaryZoneRedirectToVoiceMail
     * @param bool|null $outOfPrimaryZoneRedirectToVoiceMail
     * @return $this
     */
    public function setOutOfPrimaryZoneRedirectToVoiceMail($outOfPrimaryZoneRedirectToVoiceMail)
    {
        $this->outOfPrimaryZoneRedirectToVoiceMail = $outOfPrimaryZoneRedirectToVoiceMail;
        return $this;
    }


}

