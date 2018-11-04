<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GreetingsMenuKeysModifyEntry
 *
 * The voice portal greeting menu keys modify entry.
 */
class GreetingsMenuKeysModifyEntry
{

    /**
     * @ElementName personalizedName
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $personalizedName = null;

    /**
     * @ElementName conferenceGreeting
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $conferenceGreeting = null;

    /**
     * @ElementName returnToPreviousMenu
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

    /**
     * Getter for personalizedName
     *
     * @ElementName personalizedName
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPersonalizedName()
    {
        return $this->personalizedName;
    }

    /**
     * Setter for personalizedName
     *
     * @ElementName personalizedName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $personalizedName
     * @return $this
     */
    public function setPersonalizedName($personalizedName)
    {
        $this->personalizedName = $personalizedName;
        return $this;
    }

    /**
     * Getter for conferenceGreeting
     *
     * @ElementName conferenceGreeting
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getConferenceGreeting()
    {
        return $this->conferenceGreeting;
    }

    /**
     * Setter for conferenceGreeting
     *
     * @ElementName conferenceGreeting
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $conferenceGreeting
     * @return $this
     */
    public function setConferenceGreeting($conferenceGreeting)
    {
        $this->conferenceGreeting = $conferenceGreeting;
        return $this;
    }

    /**
     * Getter for returnToPreviousMenu
     *
     * @ElementName returnToPreviousMenu
     * @return string|null
     */
    public function getReturnToPreviousMenu()
    {
        return $this->returnToPreviousMenu;
    }

    /**
     * Setter for returnToPreviousMenu
     *
     * @ElementName returnToPreviousMenu
     * @param string|null $returnToPreviousMenu
     * @return $this
     */
    public function setReturnToPreviousMenu($returnToPreviousMenu)
    {
        $this->returnToPreviousMenu = $returnToPreviousMenu;
        return $this;
    }

    /**
     * Getter for repeatMenu
     *
     * @ElementName repeatMenu
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRepeatMenu()
    {
        return $this->repeatMenu;
    }

    /**
     * Setter for repeatMenu
     *
     * @ElementName repeatMenu
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $repeatMenu
     * @return $this
     */
    public function setRepeatMenu($repeatMenu)
    {
        $this->repeatMenu = $repeatMenu;
        return $this;
    }


}

