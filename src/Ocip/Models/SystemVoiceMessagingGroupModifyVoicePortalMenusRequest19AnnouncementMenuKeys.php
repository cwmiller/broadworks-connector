<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AnnouncementMenuKeys
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AnnouncementMenuKeys
{

    /**
     * @ElementName recordAudio
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $recordAudio = null;

    /**
     * @ElementName recordAudioVideo
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $recordAudioVideo = null;

    /**
     * @ElementName returnToPreviousMenu
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

    /**
     * Getter for recordAudio
     *
     * @ElementName recordAudio
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRecordAudio()
    {
        return $this->recordAudio;
    }

    /**
     * Setter for recordAudio
     *
     * @ElementName recordAudio
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $recordAudio
     * @return $this
     */
    public function setRecordAudio($recordAudio)
    {
        $this->recordAudio = $recordAudio;
        return $this;
    }

    /**
     * Getter for recordAudioVideo
     *
     * @ElementName recordAudioVideo
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRecordAudioVideo()
    {
        return $this->recordAudioVideo;
    }

    /**
     * Setter for recordAudioVideo
     *
     * @ElementName recordAudioVideo
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $recordAudioVideo
     * @return $this
     */
    public function setRecordAudioVideo($recordAudioVideo)
    {
        $this->recordAudioVideo = $recordAudioVideo;
        return $this;
    }

    /**
     * Getter for returnToPreviousMenu
     *
     * @ElementName returnToPreviousMenu
     * @return string|null
     */
    public function getReturnToPreviousMenu()
    {
        return $this->returnToPreviousMenu;
    }

    /**
     * Setter for returnToPreviousMenu
     *
     * @ElementName returnToPreviousMenu
     * @param string|null $returnToPreviousMenu
     * @return $this
     */
    public function setReturnToPreviousMenu($returnToPreviousMenu)
    {
        $this->returnToPreviousMenu = $returnToPreviousMenu;
        return $this;
    }

    /**
     * Getter for repeatMenu
     *
     * @ElementName repeatMenu
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRepeatMenu()
    {
        return $this->repeatMenu;
    }

    /**
     * Setter for repeatMenu
     *
     * @ElementName repeatMenu
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $repeatMenu
     * @return $this
     */
    public function setRepeatMenu($repeatMenu)
    {
        $this->repeatMenu = $repeatMenu;
        return $this;
    }


}

