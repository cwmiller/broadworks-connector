<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserThirdPartyVoiceMailSupportModifyRequest
 *
 * Modify the Third Party Voice Mail Support settings for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"21e97b8199c6e7eff29a84874335b46e:282","type":"sequence"}]
 */
class UserThirdPartyVoiceMailSupportModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 21e97b8199c6e7eff29a84874335b46e:282
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 21e97b8199c6e7eff29a84874335b46e:282
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName busyRedirectToVoiceMail
     * @Type bool
     * @Optional
     * @Group 21e97b8199c6e7eff29a84874335b46e:282
     * @var bool|null
     */
    protected $busyRedirectToVoiceMail = null;

    /**
     * @ElementName noAnswerRedirectToVoiceMail
     * @Type bool
     * @Optional
     * @Group 21e97b8199c6e7eff29a84874335b46e:282
     * @var bool|null
     */
    protected $noAnswerRedirectToVoiceMail = null;

    /**
     * @ElementName serverSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportServerSelection
     * @Optional
     * @Group 21e97b8199c6e7eff29a84874335b46e:282
     * @var \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportServerSelection|null
     */
    protected $serverSelection = null;

    /**
     * @ElementName userServer
     * @Type string
     * @Nillable
     * @Optional
     * @Group 21e97b8199c6e7eff29a84874335b46e:282
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $userServer = null;

    /**
     * @ElementName mailboxIdType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportMailboxIdType
     * @Optional
     * @Group 21e97b8199c6e7eff29a84874335b46e:282
     * @var \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportMailboxIdType|null
     */
    protected $mailboxIdType = null;

    /**
     * @ElementName mailboxURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group 21e97b8199c6e7eff29a84874335b46e:282
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $mailboxURL = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportNumberOfRings
     * @Optional
     * @Group 21e97b8199c6e7eff29a84874335b46e:282
     * @var \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportNumberOfRings|null
     */
    protected $noAnswerNumberOfRings = null;

    /**
     * @ElementName alwaysRedirectToVoiceMail
     * @Type bool
     * @Optional
     * @Group 21e97b8199c6e7eff29a84874335b46e:282
     * @var bool|null
     */
    protected $alwaysRedirectToVoiceMail = null;

    /**
     * @ElementName outOfPrimaryZoneRedirectToVoiceMail
     * @Type bool
     * @Optional
     * @Group 21e97b8199c6e7eff29a84874335b46e:282
     * @var bool|null
     */
    protected $outOfPrimaryZoneRedirectToVoiceMail = null;

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
     * Getter for busyRedirectToVoiceMail
     *
     * @return bool
     */
    public function getBusyRedirectToVoiceMail()
    {
        return $this->busyRedirectToVoiceMail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busyRedirectToVoiceMail;
    }

    /**
     * Setter for busyRedirectToVoiceMail
     *
     * @param bool $busyRedirectToVoiceMail
     * @return $this
     */
    public function setBusyRedirectToVoiceMail($busyRedirectToVoiceMail)
    {
        $this->busyRedirectToVoiceMail = $busyRedirectToVoiceMail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusyRedirectToVoiceMail()
    {
        $this->busyRedirectToVoiceMail = null;
        return $this;
    }

    /**
     * Getter for noAnswerRedirectToVoiceMail
     *
     * @return bool
     */
    public function getNoAnswerRedirectToVoiceMail()
    {
        return $this->noAnswerRedirectToVoiceMail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerRedirectToVoiceMail;
    }

    /**
     * Setter for noAnswerRedirectToVoiceMail
     *
     * @param bool $noAnswerRedirectToVoiceMail
     * @return $this
     */
    public function setNoAnswerRedirectToVoiceMail($noAnswerRedirectToVoiceMail)
    {
        $this->noAnswerRedirectToVoiceMail = $noAnswerRedirectToVoiceMail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerRedirectToVoiceMail()
    {
        $this->noAnswerRedirectToVoiceMail = null;
        return $this;
    }

    /**
     * Getter for serverSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportServerSelection
     */
    public function getServerSelection()
    {
        return $this->serverSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serverSelection;
    }

    /**
     * Setter for serverSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportServerSelection $serverSelection
     * @return $this
     */
    public function setServerSelection(\CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportServerSelection $serverSelection)
    {
        $this->serverSelection = $serverSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServerSelection()
    {
        $this->serverSelection = null;
        return $this;
    }

    /**
     * Getter for userServer
     *
     * @return string|null
     */
    public function getUserServer()
    {
        return $this->userServer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServer;
    }

    /**
     * Setter for userServer
     *
     * @param string|null $userServer
     * @return $this
     */
    public function setUserServer($userServer = null)
    {
        if ($userServer === null) {
            $this->userServer = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->userServer = $userServer;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserServer()
    {
        $this->userServer = null;
        return $this;
    }

    /**
     * Getter for mailboxIdType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportMailboxIdType
     */
    public function getMailboxIdType()
    {
        return $this->mailboxIdType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mailboxIdType;
    }

    /**
     * Setter for mailboxIdType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportMailboxIdType $mailboxIdType
     * @return $this
     */
    public function setMailboxIdType(\CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportMailboxIdType $mailboxIdType)
    {
        $this->mailboxIdType = $mailboxIdType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMailboxIdType()
    {
        $this->mailboxIdType = null;
        return $this;
    }

    /**
     * Getter for mailboxURL
     *
     * @return string|null
     */
    public function getMailboxURL()
    {
        return $this->mailboxURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mailboxURL;
    }

    /**
     * Setter for mailboxURL
     *
     * @param string|null $mailboxURL
     * @return $this
     */
    public function setMailboxURL($mailboxURL = null)
    {
        if ($mailboxURL === null) {
            $this->mailboxURL = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->mailboxURL = $mailboxURL;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMailboxURL()
    {
        $this->mailboxURL = null;
        return $this;
    }

    /**
     * Getter for noAnswerNumberOfRings
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportNumberOfRings
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerNumberOfRings;
    }

    /**
     * Setter for noAnswerNumberOfRings
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportNumberOfRings $noAnswerNumberOfRings
     * @return $this
     */
    public function setNoAnswerNumberOfRings(\CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportNumberOfRings $noAnswerNumberOfRings)
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
     * Getter for alwaysRedirectToVoiceMail
     *
     * @return bool
     */
    public function getAlwaysRedirectToVoiceMail()
    {
        return $this->alwaysRedirectToVoiceMail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alwaysRedirectToVoiceMail;
    }

    /**
     * Setter for alwaysRedirectToVoiceMail
     *
     * @param bool $alwaysRedirectToVoiceMail
     * @return $this
     */
    public function setAlwaysRedirectToVoiceMail($alwaysRedirectToVoiceMail)
    {
        $this->alwaysRedirectToVoiceMail = $alwaysRedirectToVoiceMail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlwaysRedirectToVoiceMail()
    {
        $this->alwaysRedirectToVoiceMail = null;
        return $this;
    }

    /**
     * Getter for outOfPrimaryZoneRedirectToVoiceMail
     *
     * @return bool
     */
    public function getOutOfPrimaryZoneRedirectToVoiceMail()
    {
        return $this->outOfPrimaryZoneRedirectToVoiceMail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outOfPrimaryZoneRedirectToVoiceMail;
    }

    /**
     * Setter for outOfPrimaryZoneRedirectToVoiceMail
     *
     * @param bool $outOfPrimaryZoneRedirectToVoiceMail
     * @return $this
     */
    public function setOutOfPrimaryZoneRedirectToVoiceMail($outOfPrimaryZoneRedirectToVoiceMail)
    {
        $this->outOfPrimaryZoneRedirectToVoiceMail = $outOfPrimaryZoneRedirectToVoiceMail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutOfPrimaryZoneRedirectToVoiceMail()
    {
        $this->outOfPrimaryZoneRedirectToVoiceMail = null;
        return $this;
    }
}

