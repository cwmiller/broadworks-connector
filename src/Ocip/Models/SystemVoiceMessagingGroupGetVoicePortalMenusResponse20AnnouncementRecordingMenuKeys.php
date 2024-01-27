<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AnnouncementRecordingMenuKeys
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:39035","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AnnouncementRecordingMenuKeys
{
    /**
     * @ElementName acceptRecording
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:39035
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $acceptRecording = null;

    /**
     * @ElementName rejectRerecord
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:39035
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $rejectRerecord = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:39035
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39035
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $repeatMenu = null;

    /**
     * @ElementName end
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:39035
     * @MinLength 1
     * @MaxLength 3
     * @Pattern ([0-9]|\*|#){0,3}
     * @var string|null
     */
    protected $end = null;

    /**
     * Getter for acceptRecording
     *
     * @return string
     */
    public function getAcceptRecording()
    {
        return $this->acceptRecording instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->acceptRecording;
    }

    /**
     * Setter for acceptRecording
     *
     * @param string $acceptRecording
     * @return $this
     */
    public function setAcceptRecording($acceptRecording)
    {
        $this->acceptRecording = $acceptRecording;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAcceptRecording()
    {
        $this->acceptRecording = null;
        return $this;
    }

    /**
     * Getter for rejectRerecord
     *
     * @return string
     */
    public function getRejectRerecord()
    {
        return $this->rejectRerecord instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rejectRerecord;
    }

    /**
     * Setter for rejectRerecord
     *
     * @param string $rejectRerecord
     * @return $this
     */
    public function setRejectRerecord($rejectRerecord)
    {
        $this->rejectRerecord = $rejectRerecord;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRejectRerecord()
    {
        $this->rejectRerecord = null;
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

    /**
     * Getter for end
     *
     * @return string
     */
    public function getEnd()
    {
        return $this->end instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->end;
    }

    /**
     * Setter for end
     *
     * @param string $end
     * @return $this
     */
    public function setEnd($end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnd()
    {
        $this->end = null;
        return $this;
    }
}

