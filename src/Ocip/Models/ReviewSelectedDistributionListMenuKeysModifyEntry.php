<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReviewSelectedDistributionListMenuKeysModifyEntry
 *
 * The voice portal review selected distribution list menu keys modify entry.
 */
class ReviewSelectedDistributionListMenuKeysModifyEntry
{

    /**
     * @ElementName interruptPlaybackAndReturnToPreviousMenu
     * @var string|null
     */
    private $interruptPlaybackAndReturnToPreviousMenu = null;

    /**
     * Getter for interruptPlaybackAndReturnToPreviousMenu
     *
     * @ElementName interruptPlaybackAndReturnToPreviousMenu
     * @return string|null
     */
    public function getInterruptPlaybackAndReturnToPreviousMenu()
    {
        return $this->interruptPlaybackAndReturnToPreviousMenu;
    }

    /**
     * Setter for interruptPlaybackAndReturnToPreviousMenu
     *
     * @ElementName interruptPlaybackAndReturnToPreviousMenu
     * @param string|null $interruptPlaybackAndReturnToPreviousMenu
     * @return $this
     */
    public function setInterruptPlaybackAndReturnToPreviousMenu($interruptPlaybackAndReturnToPreviousMenu)
    {
        $this->interruptPlaybackAndReturnToPreviousMenu = $interruptPlaybackAndReturnToPreviousMenu;
        return $this;
    }


}

