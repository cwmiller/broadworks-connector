<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AnnouncementMenuKeys
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:712","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AnnouncementMenuKeys
{
    /**
     * @ElementName recordAudio
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:712
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $recordAudio = null;

    /**
     * @ElementName recordAudioVideo
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:712
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $recordAudioVideo = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:712
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:712
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $repeatMenu = null;

    /**
     * Getter for recordAudio
     *
     * @return string
     */
    public function getRecordAudio()
    {
        return $this->recordAudio instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordAudio;
    }

    /**
     * Setter for recordAudio
     *
     * @param string $recordAudio
     * @return $this
     */
    public function setRecordAudio($recordAudio)
    {
        $this->recordAudio = $recordAudio;
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
     * @return string
     */
    public function getRecordAudioVideo()
    {
        return $this->recordAudioVideo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordAudioVideo;
    }

    /**
     * Setter for recordAudioVideo
     *
     * @param string $recordAudioVideo
     * @return $this
     */
    public function setRecordAudioVideo($recordAudioVideo)
    {
        $this->recordAudioVideo = $recordAudioVideo;
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

