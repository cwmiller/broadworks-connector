<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PersonalAssistantMenuKeys
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:1628","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PersonalAssistantMenuKeys
{

    /**
     * @ElementName setPresenceToNone
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1628
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $setPresenceToNone = null;

    /**
     * @ElementName setPresenceToBusinessTrip
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1628
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $setPresenceToBusinessTrip = null;

    /**
     * @ElementName setPresenceToGoneForTheDay
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1628
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $setPresenceToGoneForTheDay = null;

    /**
     * @ElementName setPresenceToLunch
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1628
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $setPresenceToLunch = null;

    /**
     * @ElementName setPresenceToMeeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1628
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $setPresenceToMeeting = null;

    /**
     * @ElementName setPresenceToOutOfOffice
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1628
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $setPresenceToOutOfOffice = null;

    /**
     * @ElementName setPresenceToTemporarilyOut
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1628
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $setPresenceToTemporarilyOut = null;

    /**
     * @ElementName setPresenceToTraining
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1628
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $setPresenceToTraining = null;

    /**
     * @ElementName setPresenceToUnavailable
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1628
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $setPresenceToUnavailable = null;

    /**
     * @ElementName setPresenceToVacation
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1628
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $setPresenceToVacation = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1628
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1628
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

    /**
     * Getter for setPresenceToNone
     *
     * @return string|null
     */
    public function getSetPresenceToNone()
    {
        return $this->setPresenceToNone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToNone;
    }

    /**
     * Setter for setPresenceToNone
     *
     * @param string|null $setPresenceToNone
     * @return $this
     */
    public function setSetPresenceToNone($setPresenceToNone = null)
    {
        if ($setPresenceToNone === null) {
            $this->setPresenceToNone = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->setPresenceToNone = $setPresenceToNone;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSetPresenceToNone()
    {
        $this->setPresenceToNone = null;
        return $this;
    }

    /**
     * Getter for setPresenceToBusinessTrip
     *
     * @return string|null
     */
    public function getSetPresenceToBusinessTrip()
    {
        return $this->setPresenceToBusinessTrip instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToBusinessTrip;
    }

    /**
     * Setter for setPresenceToBusinessTrip
     *
     * @param string|null $setPresenceToBusinessTrip
     * @return $this
     */
    public function setSetPresenceToBusinessTrip($setPresenceToBusinessTrip = null)
    {
        if ($setPresenceToBusinessTrip === null) {
            $this->setPresenceToBusinessTrip = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->setPresenceToBusinessTrip = $setPresenceToBusinessTrip;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSetPresenceToBusinessTrip()
    {
        $this->setPresenceToBusinessTrip = null;
        return $this;
    }

    /**
     * Getter for setPresenceToGoneForTheDay
     *
     * @return string|null
     */
    public function getSetPresenceToGoneForTheDay()
    {
        return $this->setPresenceToGoneForTheDay instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToGoneForTheDay;
    }

    /**
     * Setter for setPresenceToGoneForTheDay
     *
     * @param string|null $setPresenceToGoneForTheDay
     * @return $this
     */
    public function setSetPresenceToGoneForTheDay($setPresenceToGoneForTheDay = null)
    {
        if ($setPresenceToGoneForTheDay === null) {
            $this->setPresenceToGoneForTheDay = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->setPresenceToGoneForTheDay = $setPresenceToGoneForTheDay;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSetPresenceToGoneForTheDay()
    {
        $this->setPresenceToGoneForTheDay = null;
        return $this;
    }

    /**
     * Getter for setPresenceToLunch
     *
     * @return string|null
     */
    public function getSetPresenceToLunch()
    {
        return $this->setPresenceToLunch instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToLunch;
    }

    /**
     * Setter for setPresenceToLunch
     *
     * @param string|null $setPresenceToLunch
     * @return $this
     */
    public function setSetPresenceToLunch($setPresenceToLunch = null)
    {
        if ($setPresenceToLunch === null) {
            $this->setPresenceToLunch = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->setPresenceToLunch = $setPresenceToLunch;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSetPresenceToLunch()
    {
        $this->setPresenceToLunch = null;
        return $this;
    }

    /**
     * Getter for setPresenceToMeeting
     *
     * @return string|null
     */
    public function getSetPresenceToMeeting()
    {
        return $this->setPresenceToMeeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToMeeting;
    }

    /**
     * Setter for setPresenceToMeeting
     *
     * @param string|null $setPresenceToMeeting
     * @return $this
     */
    public function setSetPresenceToMeeting($setPresenceToMeeting = null)
    {
        if ($setPresenceToMeeting === null) {
            $this->setPresenceToMeeting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->setPresenceToMeeting = $setPresenceToMeeting;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSetPresenceToMeeting()
    {
        $this->setPresenceToMeeting = null;
        return $this;
    }

    /**
     * Getter for setPresenceToOutOfOffice
     *
     * @return string|null
     */
    public function getSetPresenceToOutOfOffice()
    {
        return $this->setPresenceToOutOfOffice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToOutOfOffice;
    }

    /**
     * Setter for setPresenceToOutOfOffice
     *
     * @param string|null $setPresenceToOutOfOffice
     * @return $this
     */
    public function setSetPresenceToOutOfOffice($setPresenceToOutOfOffice = null)
    {
        if ($setPresenceToOutOfOffice === null) {
            $this->setPresenceToOutOfOffice = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->setPresenceToOutOfOffice = $setPresenceToOutOfOffice;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSetPresenceToOutOfOffice()
    {
        $this->setPresenceToOutOfOffice = null;
        return $this;
    }

    /**
     * Getter for setPresenceToTemporarilyOut
     *
     * @return string|null
     */
    public function getSetPresenceToTemporarilyOut()
    {
        return $this->setPresenceToTemporarilyOut instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToTemporarilyOut;
    }

    /**
     * Setter for setPresenceToTemporarilyOut
     *
     * @param string|null $setPresenceToTemporarilyOut
     * @return $this
     */
    public function setSetPresenceToTemporarilyOut($setPresenceToTemporarilyOut = null)
    {
        if ($setPresenceToTemporarilyOut === null) {
            $this->setPresenceToTemporarilyOut = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->setPresenceToTemporarilyOut = $setPresenceToTemporarilyOut;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSetPresenceToTemporarilyOut()
    {
        $this->setPresenceToTemporarilyOut = null;
        return $this;
    }

    /**
     * Getter for setPresenceToTraining
     *
     * @return string|null
     */
    public function getSetPresenceToTraining()
    {
        return $this->setPresenceToTraining instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToTraining;
    }

    /**
     * Setter for setPresenceToTraining
     *
     * @param string|null $setPresenceToTraining
     * @return $this
     */
    public function setSetPresenceToTraining($setPresenceToTraining = null)
    {
        if ($setPresenceToTraining === null) {
            $this->setPresenceToTraining = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->setPresenceToTraining = $setPresenceToTraining;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSetPresenceToTraining()
    {
        $this->setPresenceToTraining = null;
        return $this;
    }

    /**
     * Getter for setPresenceToUnavailable
     *
     * @return string|null
     */
    public function getSetPresenceToUnavailable()
    {
        return $this->setPresenceToUnavailable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToUnavailable;
    }

    /**
     * Setter for setPresenceToUnavailable
     *
     * @param string|null $setPresenceToUnavailable
     * @return $this
     */
    public function setSetPresenceToUnavailable($setPresenceToUnavailable = null)
    {
        if ($setPresenceToUnavailable === null) {
            $this->setPresenceToUnavailable = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->setPresenceToUnavailable = $setPresenceToUnavailable;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSetPresenceToUnavailable()
    {
        $this->setPresenceToUnavailable = null;
        return $this;
    }

    /**
     * Getter for setPresenceToVacation
     *
     * @return string|null
     */
    public function getSetPresenceToVacation()
    {
        return $this->setPresenceToVacation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToVacation;
    }

    /**
     * Setter for setPresenceToVacation
     *
     * @param string|null $setPresenceToVacation
     * @return $this
     */
    public function setSetPresenceToVacation($setPresenceToVacation = null)
    {
        if ($setPresenceToVacation === null) {
            $this->setPresenceToVacation = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->setPresenceToVacation = $setPresenceToVacation;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSetPresenceToVacation()
    {
        $this->setPresenceToVacation = null;
        return $this;
    }

    /**
     * Getter for returnToPreviousMenu
     *
     * @return string
     */
    public function getReturnToPreviousMenu()
    {
        return $this->returnToPreviousMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->returnToPreviousMenu;
    }

    /**
     * Setter for returnToPreviousMenu
     *
     * @param string $returnToPreviousMenu
     * @return $this
     */
    public function setReturnToPreviousMenu($returnToPreviousMenu)
    {
        $this->returnToPreviousMenu = $returnToPreviousMenu;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReturnToPreviousMenu()
    {
        $this->returnToPreviousMenu = null;
        return $this;
    }

    /**
     * Getter for repeatMenu
     *
     * @return string|null
     */
    public function getRepeatMenu()
    {
        return $this->repeatMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->repeatMenu;
    }

    /**
     * Setter for repeatMenu
     *
     * @param string|null $repeatMenu
     * @return $this
     */
    public function setRepeatMenu($repeatMenu = null)
    {
        if ($repeatMenu === null) {
            $this->repeatMenu = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->repeatMenu = $repeatMenu;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRepeatMenu()
    {
        $this->repeatMenu = null;
        return $this;
    }


}

