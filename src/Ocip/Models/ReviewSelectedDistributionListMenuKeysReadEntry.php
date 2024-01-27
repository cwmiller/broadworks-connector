<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReviewSelectedDistributionListMenuKeysReadEntry
 *
 * The voice portal review selected distribution list menu keys.
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:3019","type":"sequence"}]
 */
class ReviewSelectedDistributionListMenuKeysReadEntry
{
    /**
     * @ElementName interruptPlaybackAndReturnToPreviousMenu
     * @Type string
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:3019
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $interruptPlaybackAndReturnToPreviousMenu = null;

    /**
     * Getter for interruptPlaybackAndReturnToPreviousMenu
     *
     * @return string
     */
    public function getInterruptPlaybackAndReturnToPreviousMenu()
    {
        return $this->interruptPlaybackAndReturnToPreviousMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interruptPlaybackAndReturnToPreviousMenu;
    }

    /**
     * Setter for interruptPlaybackAndReturnToPreviousMenu
     *
     * @param string $interruptPlaybackAndReturnToPreviousMenu
     * @return $this
     */
    public function setInterruptPlaybackAndReturnToPreviousMenu($interruptPlaybackAndReturnToPreviousMenu)
    {
        $this->interruptPlaybackAndReturnToPreviousMenu = $interruptPlaybackAndReturnToPreviousMenu;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInterruptPlaybackAndReturnToPreviousMenu()
    {
        $this->interruptPlaybackAndReturnToPreviousMenu = null;
        return $this;
    }
}

