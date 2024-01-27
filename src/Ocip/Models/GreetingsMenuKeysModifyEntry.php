<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GreetingsMenuKeysModifyEntry
 *
 * The voice portal greeting menu keys modify entry.
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:2654","type":"sequence"}]
 */
class GreetingsMenuKeysModifyEntry
{
    /**
     * @ElementName personalizedName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2654
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $personalizedName = null;

    /**
     * @ElementName conferenceGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2654
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $conferenceGreeting = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2654
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2654
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $repeatMenu = null;

    /**
     * Getter for personalizedName
     *
     * @return string|null
     */
    public function getPersonalizedName()
    {
        return $this->personalizedName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalizedName;
    }

    /**
     * Setter for personalizedName
     *
     * @param string|null $personalizedName
     * @return $this
     */
    public function setPersonalizedName($personalizedName = null)
    {
        if ($personalizedName === null) {
            $this->personalizedName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->personalizedName = $personalizedName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalizedName()
    {
        $this->personalizedName = null;
        return $this;
    }

    /**
     * Getter for conferenceGreeting
     *
     * @return string|null
     */
    public function getConferenceGreeting()
    {
        return $this->conferenceGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceGreeting;
    }

    /**
     * Setter for conferenceGreeting
     *
     * @param string|null $conferenceGreeting
     * @return $this
     */
    public function setConferenceGreeting($conferenceGreeting = null)
    {
        if ($conferenceGreeting === null) {
            $this->conferenceGreeting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->conferenceGreeting = $conferenceGreeting;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceGreeting()
    {
        $this->conferenceGreeting = null;
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

