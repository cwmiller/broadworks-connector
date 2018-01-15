<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21;

/**
 * ReviewSelectedDistributionListMenuKeys
 */
class ReviewSelectedDistributionListMenuKeys
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

