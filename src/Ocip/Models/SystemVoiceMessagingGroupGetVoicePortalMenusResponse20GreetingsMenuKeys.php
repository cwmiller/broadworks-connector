<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse20GreetingsMenuKeys
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:39047","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse20GreetingsMenuKeys
{
    /**
     * @ElementName personalizedName
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39047
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $personalizedName = null;

    /**
     * @ElementName conferenceGreeting
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39047
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $conferenceGreeting = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:39047
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39047
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $repeatMenu = null;

    /**
     * Getter for personalizedName
     *
     * @return string
     */
    public function getPersonalizedName()
    {
        return $this->personalizedName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalizedName;
    }

    /**
     * Setter for personalizedName
     *
     * @param string $personalizedName
     * @return $this
     */
    public function setPersonalizedName($personalizedName)
    {
        $this->personalizedName = $personalizedName;
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
     * @return string
     */
    public function getConferenceGreeting()
    {
        return $this->conferenceGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceGreeting;
    }

    /**
     * Setter for conferenceGreeting
     *
     * @param string $conferenceGreeting
     * @return $this
     */
    public function setConferenceGreeting($conferenceGreeting)
    {
        $this->conferenceGreeting = $conferenceGreeting;
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

