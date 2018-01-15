<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21;

/**
 * GreetingsMenuKeys
 */
class GreetingsMenuKeys
{

    /**
     * @ElementName personalizedName
     * @var string|null
     */
    private $personalizedName = null;

    /**
     * @ElementName conferenceGreeting
     * @var string|null
     */
    private $conferenceGreeting = null;

    /**
     * @ElementName returnToPreviousMenu
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @var string|null
     */
    private $repeatMenu = null;

    /**
     * Getter for personalizedName
     *
     * @ElementName personalizedName
     * @return string|null
     */
    public function getPersonalizedName()
    {
        return $this->personalizedName;
    }

    /**
     * Setter for personalizedName
     *
     * @ElementName personalizedName
     * @param string|null $personalizedName
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
     * @return string|null
     */
    public function getConferenceGreeting()
    {
        return $this->conferenceGreeting;
    }

    /**
     * Setter for conferenceGreeting
     *
     * @ElementName conferenceGreeting
     * @param string|null $conferenceGreeting
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
     * @return string|null
     */
    public function getRepeatMenu()
    {
        return $this->repeatMenu;
    }

    /**
     * Setter for repeatMenu
     *
     * @ElementName repeatMenu
     * @param string|null $repeatMenu
     * @return $this
     */
    public function setRepeatMenu($repeatMenu)
    {
        $this->repeatMenu = $repeatMenu;
        return $this;
    }


}

