<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PersonalAssistantMenuKeysReadEntry
 *
 * The voice portal personal assistant menu keys.
 *
 * @Groups [{"id":"80c5986946137c505e41f6008c7f75a8:2729","type":"sequence"}]
 */
class PersonalAssistantMenuKeysReadEntry
{

    /**
     * @ElementName setPresenceToNone
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:2729
     * @var string|null
     */
    private $setPresenceToNone = null;

    /**
     * @ElementName setPresenceToBusinessTrip
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:2729
     * @var string|null
     */
    private $setPresenceToBusinessTrip = null;

    /**
     * @ElementName setPresenceToGoneForTheDay
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:2729
     * @var string|null
     */
    private $setPresenceToGoneForTheDay = null;

    /**
     * @ElementName setPresenceToLunch
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:2729
     * @var string|null
     */
    private $setPresenceToLunch = null;

    /**
     * @ElementName setPresenceToMeeting
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:2729
     * @var string|null
     */
    private $setPresenceToMeeting = null;

    /**
     * @ElementName setPresenceToOutOfOffice
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:2729
     * @var string|null
     */
    private $setPresenceToOutOfOffice = null;

    /**
     * @ElementName setPresenceToTemporarilyOut
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:2729
     * @var string|null
     */
    private $setPresenceToTemporarilyOut = null;

    /**
     * @ElementName setPresenceToTraining
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:2729
     * @var string|null
     */
    private $setPresenceToTraining = null;

    /**
     * @ElementName setPresenceToUnavailable
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:2729
     * @var string|null
     */
    private $setPresenceToUnavailable = null;

    /**
     * @ElementName setPresenceToVacation
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:2729
     * @var string|null
     */
    private $setPresenceToVacation = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group 80c5986946137c505e41f6008c7f75a8:2729
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:2729
     * @var string|null
     */
    private $repeatMenu = null;

    /**
     * Getter for setPresenceToNone
     *
     * @return string
     */
    public function getSetPresenceToNone()
    {
        return $this->setPresenceToNone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToNone;
    }

    /**
     * Setter for setPresenceToNone
     *
     * @param string $setPresenceToNone
     * @return $this
     */
    public function setSetPresenceToNone($setPresenceToNone)
    {
        $this->setPresenceToNone = $setPresenceToNone;
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
     * @return string
     */
    public function getSetPresenceToBusinessTrip()
    {
        return $this->setPresenceToBusinessTrip instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToBusinessTrip;
    }

    /**
     * Setter for setPresenceToBusinessTrip
     *
     * @param string $setPresenceToBusinessTrip
     * @return $this
     */
    public function setSetPresenceToBusinessTrip($setPresenceToBusinessTrip)
    {
        $this->setPresenceToBusinessTrip = $setPresenceToBusinessTrip;
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
     * @return string
     */
    public function getSetPresenceToGoneForTheDay()
    {
        return $this->setPresenceToGoneForTheDay instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToGoneForTheDay;
    }

    /**
     * Setter for setPresenceToGoneForTheDay
     *
     * @param string $setPresenceToGoneForTheDay
     * @return $this
     */
    public function setSetPresenceToGoneForTheDay($setPresenceToGoneForTheDay)
    {
        $this->setPresenceToGoneForTheDay = $setPresenceToGoneForTheDay;
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
     * @return string
     */
    public function getSetPresenceToLunch()
    {
        return $this->setPresenceToLunch instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToLunch;
    }

    /**
     * Setter for setPresenceToLunch
     *
     * @param string $setPresenceToLunch
     * @return $this
     */
    public function setSetPresenceToLunch($setPresenceToLunch)
    {
        $this->setPresenceToLunch = $setPresenceToLunch;
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
     * @return string
     */
    public function getSetPresenceToMeeting()
    {
        return $this->setPresenceToMeeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToMeeting;
    }

    /**
     * Setter for setPresenceToMeeting
     *
     * @param string $setPresenceToMeeting
     * @return $this
     */
    public function setSetPresenceToMeeting($setPresenceToMeeting)
    {
        $this->setPresenceToMeeting = $setPresenceToMeeting;
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
     * @return string
     */
    public function getSetPresenceToOutOfOffice()
    {
        return $this->setPresenceToOutOfOffice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToOutOfOffice;
    }

    /**
     * Setter for setPresenceToOutOfOffice
     *
     * @param string $setPresenceToOutOfOffice
     * @return $this
     */
    public function setSetPresenceToOutOfOffice($setPresenceToOutOfOffice)
    {
        $this->setPresenceToOutOfOffice = $setPresenceToOutOfOffice;
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
     * @return string
     */
    public function getSetPresenceToTemporarilyOut()
    {
        return $this->setPresenceToTemporarilyOut instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToTemporarilyOut;
    }

    /**
     * Setter for setPresenceToTemporarilyOut
     *
     * @param string $setPresenceToTemporarilyOut
     * @return $this
     */
    public function setSetPresenceToTemporarilyOut($setPresenceToTemporarilyOut)
    {
        $this->setPresenceToTemporarilyOut = $setPresenceToTemporarilyOut;
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
     * @return string
     */
    public function getSetPresenceToTraining()
    {
        return $this->setPresenceToTraining instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToTraining;
    }

    /**
     * Setter for setPresenceToTraining
     *
     * @param string $setPresenceToTraining
     * @return $this
     */
    public function setSetPresenceToTraining($setPresenceToTraining)
    {
        $this->setPresenceToTraining = $setPresenceToTraining;
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
     * @return string
     */
    public function getSetPresenceToUnavailable()
    {
        return $this->setPresenceToUnavailable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToUnavailable;
    }

    /**
     * Setter for setPresenceToUnavailable
     *
     * @param string $setPresenceToUnavailable
     * @return $this
     */
    public function setSetPresenceToUnavailable($setPresenceToUnavailable)
    {
        $this->setPresenceToUnavailable = $setPresenceToUnavailable;
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
     * @return string
     */
    public function getSetPresenceToVacation()
    {
        return $this->setPresenceToVacation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setPresenceToVacation;
    }

    /**
     * Setter for setPresenceToVacation
     *
     * @param string $setPresenceToVacation
     * @return $this
     */
    public function setSetPresenceToVacation($setPresenceToVacation)
    {
        $this->setPresenceToVacation = $setPresenceToVacation;
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
     * @return string
     */
    public function getRepeatMenu()
    {
        return $this->repeatMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->repeatMenu;
    }

    /**
     * Setter for repeatMenu
     *
     * @param string $repeatMenu
     * @return $this
     */
    public function setRepeatMenu($repeatMenu)
    {
        $this->repeatMenu = $repeatMenu;
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

