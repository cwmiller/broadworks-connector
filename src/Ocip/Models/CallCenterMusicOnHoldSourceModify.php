<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterMusicOnHoldSourceModify
 *
 * Contains the music on hold source configuration.
 */
class CallCenterMusicOnHoldSourceModify
{

    /**
     * @ElementName audioFilePreferredCodec
     * @var \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec|null
     */
    private $audioFilePreferredCodec = null;

    /**
     * @ElementName messageSourceSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    private $messageSourceSelection = null;

    /**
     * @ElementName customSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModifyCustomSource|null
     */
    private $customSource = null;

    /**
     * Getter for audioFilePreferredCodec
     *
     * @ElementName audioFilePreferredCodec
     * @return \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec|null
     */
    public function getAudioFilePreferredCodec()
    {
        return $this->audioFilePreferredCodec;
    }

    /**
     * Setter for audioFilePreferredCodec
     *
     * @ElementName audioFilePreferredCodec
     * @param \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec|null $audioFilePreferredCodec
     * @return $this
     */
    public function setAudioFilePreferredCodec(\CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec $audioFilePreferredCodec)
    {
        $this->audioFilePreferredCodec = $audioFilePreferredCodec;
        return $this;
    }

    /**
     * Getter for messageSourceSelection
     *
     * @ElementName messageSourceSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    public function getMessageSourceSelection()
    {
        return $this->messageSourceSelection;
    }

    /**
     * Setter for messageSourceSelection
     *
     * @ElementName messageSourceSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null $messageSourceSelection
     * @return $this
     */
    public function setMessageSourceSelection(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection $messageSourceSelection)
    {
        $this->messageSourceSelection = $messageSourceSelection;
        return $this;
    }

    /**
     * Getter for customSource
     *
     * @ElementName customSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModifyCustomSource|null
     */
    public function getCustomSource()
    {
        return $this->customSource;
    }

    /**
     * Setter for customSource
     *
     * @ElementName customSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModifyCustomSource|null $customSource
     * @return $this
     */
    public function setCustomSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModifyCustomSource $customSource)
    {
        $this->customSource = $customSource;
        return $this;
    }


}

