<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AnnouncementRecordingMenuKeys
 *
 * @Groups [{"id":"1624846b7d87d3ab55e907c443fca9d6:664","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AnnouncementRecordingMenuKeys
{

    /**
     * @ElementName acceptRecording
     * @Type string
     * @Group 1624846b7d87d3ab55e907c443fca9d6:664
     * @var string|null
     */
    private $acceptRecording = null;

    /**
     * @ElementName rejectRerecord
     * @Type string
     * @Group 1624846b7d87d3ab55e907c443fca9d6:664
     * @var string|null
     */
    private $rejectRerecord = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group 1624846b7d87d3ab55e907c443fca9d6:664
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:664
     * @var string|null
     */
    private $repeatMenu = null;

    /**
     * @ElementName end
     * @Type string
     * @Group 1624846b7d87d3ab55e907c443fca9d6:664
     * @var string|null
     */
    private $end = null;

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

