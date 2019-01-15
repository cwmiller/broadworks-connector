<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AnnouncementMenuKeys
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:1227","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AnnouncementMenuKeys
{

    /**
     * @ElementName recordAudio
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1227
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $recordAudio = null;

    /**
     * @ElementName recordAudioVideo
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1227
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $recordAudioVideo = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1227
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1227
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

    /**
     * Getter for recordAudio
     *
     * @return string|null
     */
    public function getRecordAudio()
    {
        return $this->recordAudio instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordAudio;
    }

    /**
     * Setter for recordAudio
     *
     * @param string|null $recordAudio
     * @return $this
     */
    public function setRecordAudio($recordAudio = null)
    {
        if ($recordAudio === null) {
            $this->recordAudio = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->recordAudio = $recordAudio;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecordAudio()
    {
        $this->recordAudio = null;
        return $this;
    }

    /**
     * Getter for recordAudioVideo
     *
     * @return string|null
     */
    public function getRecordAudioVideo()
    {
        return $this->recordAudioVideo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordAudioVideo;
    }

    /**
     * Setter for recordAudioVideo
     *
     * @param string|null $recordAudioVideo
     * @return $this
     */
    public function setRecordAudioVideo($recordAudioVideo = null)
    {
        if ($recordAudioVideo === null) {
            $this->recordAudioVideo = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->recordAudioVideo = $recordAudioVideo;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecordAudioVideo()
    {
        $this->recordAudioVideo = null;
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

