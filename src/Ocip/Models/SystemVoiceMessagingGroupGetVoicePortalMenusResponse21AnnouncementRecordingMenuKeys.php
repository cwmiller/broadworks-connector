<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AnnouncementRecordingMenuKeys
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AnnouncementRecordingMenuKeys
{

    /**
     * @ElementName acceptRecording
     * @var string|null
     */
    private $acceptRecording = null;

    /**
     * @ElementName rejectRerecord
     * @var string|null
     */
    private $rejectRerecord = null;

    /**
     * @ElementName returnToPreviousMenu
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @var string|null
     */
    private $repeatMenu = null;

    /**
     * @ElementName end
     * @var string|null
     */
    private $end = null;

    /**
     * Getter for acceptRecording
     *
     * @ElementName acceptRecording
     * @return string|null
     */
    public function getAcceptRecording()
    {
        return $this->acceptRecording;
    }

    /**
     * Setter for acceptRecording
     *
     * @ElementName acceptRecording
     * @param string|null $acceptRecording
     * @return $this
     */
    public function setAcceptRecording($acceptRecording)
    {
        $this->acceptRecording = $acceptRecording;
        return $this;
    }

    /**
     * Getter for rejectRerecord
     *
     * @ElementName rejectRerecord
     * @return string|null
     */
    public function getRejectRerecord()
    {
        return $this->rejectRerecord;
    }

    /**
     * Setter for rejectRerecord
     *
     * @ElementName rejectRerecord
     * @param string|null $rejectRerecord
     * @return $this
     */
    public function setRejectRerecord($rejectRerecord)
    {
        $this->rejectRerecord = $rejectRerecord;
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
     * @return string|null
     */
    public function getRepeatMenu()
    {
        return $this->repeatMenu;
    }

    /**
     * Setter for repeatMenu
     *
     * @ElementName repeatMenu
     * @param string|null $repeatMenu
     * @return $this
     */
    public function setRepeatMenu($repeatMenu)
    {
        $this->repeatMenu = $repeatMenu;
        return $this;
    }

    /**
     * Getter for end
     *
     * @ElementName end
     * @return string|null
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Setter for end
     *
     * @ElementName end
     * @param string|null $end
     * @return $this
     */
    public function setEnd($end)
    {
        $this->end = $end;
        return $this;
    }


}

