<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReviewSelectedDistributionListMenuKeysModifyEntry
 *
 * The voice portal review selected distribution list menu keys modify entry.
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:3008","type":"sequence"}]
 */
class ReviewSelectedDistributionListMenuKeysModifyEntry
{
    /**
     * @ElementName interruptPlaybackAndReturnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:3008
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

