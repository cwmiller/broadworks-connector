<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse18sp1ReviewSelectedDistributionListMenuKeys
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:38086","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse18sp1ReviewSelectedDistributionListMenuKeys
{
    /**
     * @ElementName interruptPlaybackAndReturnToPreviousMenu
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:38086
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

