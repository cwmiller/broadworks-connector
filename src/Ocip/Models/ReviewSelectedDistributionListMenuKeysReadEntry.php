<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReviewSelectedDistributionListMenuKeysReadEntry
 *
 * The voice portal review selected distribution list menu keys.
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:3084","type":"sequence"}]
 */
class ReviewSelectedDistributionListMenuKeysReadEntry
{

    /**
     * @ElementName interruptPlaybackAndReturnToPreviousMenu
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3084
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $interruptPlaybackAndReturnToPreviousMenu = null;

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

