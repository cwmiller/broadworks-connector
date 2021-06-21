<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestFaxMessagingMenuKeys
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:39076","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestFaxMessagingMenuKeys
{

    /**
     * @ElementName saveFaxMessageAndSkipToNext
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39076
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $saveFaxMessageAndSkipToNext = null;

    /**
     * @ElementName previousFaxMessage
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39076
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $previousFaxMessage = null;

    /**
     * @ElementName playEnvelope
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39076
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $playEnvelope = null;

    /**
     * @ElementName nextFaxMessage
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39076
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $nextFaxMessage = null;

    /**
     * @ElementName deleteFaxMessage
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39076
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deleteFaxMessage = null;

    /**
     * @ElementName printFaxMessage
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39076
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $printFaxMessage = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39076
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $returnToPreviousMenu = null;

    /**
     * Getter for saveFaxMessageAndSkipToNext
     *
     * @return string|null
     */
    public function getSaveFaxMessageAndSkipToNext()
    {
        return $this->saveFaxMessageAndSkipToNext instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->saveFaxMessageAndSkipToNext;
    }

    /**
     * Setter for saveFaxMessageAndSkipToNext
     *
     * @param string|null $saveFaxMessageAndSkipToNext
     * @return $this
     */
    public function setSaveFaxMessageAndSkipToNext($saveFaxMessageAndSkipToNext = null)
    {
        if ($saveFaxMessageAndSkipToNext === null) {
            $this->saveFaxMessageAndSkipToNext = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->saveFaxMessageAndSkipToNext = $saveFaxMessageAndSkipToNext;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSaveFaxMessageAndSkipToNext()
    {
        $this->saveFaxMessageAndSkipToNext = null;
        return $this;
    }

    /**
     * Getter for previousFaxMessage
     *
     * @return string|null
     */
    public function getPreviousFaxMessage()
    {
        return $this->previousFaxMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->previousFaxMessage;
    }

    /**
     * Setter for previousFaxMessage
     *
     * @param string|null $previousFaxMessage
     * @return $this
     */
    public function setPreviousFaxMessage($previousFaxMessage = null)
    {
        if ($previousFaxMessage === null) {
            $this->previousFaxMessage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->previousFaxMessage = $previousFaxMessage;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPreviousFaxMessage()
    {
        $this->previousFaxMessage = null;
        return $this;
    }

    /**
     * Getter for playEnvelope
     *
     * @return string|null
     */
    public function getPlayEnvelope()
    {
        return $this->playEnvelope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playEnvelope;
    }

    /**
     * Setter for playEnvelope
     *
     * @param string|null $playEnvelope
     * @return $this
     */
    public function setPlayEnvelope($playEnvelope = null)
    {
        if ($playEnvelope === null) {
            $this->playEnvelope = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->playEnvelope = $playEnvelope;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayEnvelope()
    {
        $this->playEnvelope = null;
        return $this;
    }

    /**
     * Getter for nextFaxMessage
     *
     * @return string|null
     */
    public function getNextFaxMessage()
    {
        return $this->nextFaxMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nextFaxMessage;
    }

    /**
     * Setter for nextFaxMessage
     *
     * @param string|null $nextFaxMessage
     * @return $this
     */
    public function setNextFaxMessage($nextFaxMessage = null)
    {
        if ($nextFaxMessage === null) {
            $this->nextFaxMessage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->nextFaxMessage = $nextFaxMessage;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNextFaxMessage()
    {
        $this->nextFaxMessage = null;
        return $this;
    }

    /**
     * Getter for deleteFaxMessage
     *
     * @return string|null
     */
    public function getDeleteFaxMessage()
    {
        return $this->deleteFaxMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteFaxMessage;
    }

    /**
     * Setter for deleteFaxMessage
     *
     * @param string|null $deleteFaxMessage
     * @return $this
     */
    public function setDeleteFaxMessage($deleteFaxMessage = null)
    {
        if ($deleteFaxMessage === null) {
            $this->deleteFaxMessage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deleteFaxMessage = $deleteFaxMessage;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleteFaxMessage()
    {
        $this->deleteFaxMessage = null;
        return $this;
    }

    /**
     * Getter for printFaxMessage
     *
     * @return string|null
     */
    public function getPrintFaxMessage()
    {
        return $this->printFaxMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->printFaxMessage;
    }

    /**
     * Setter for printFaxMessage
     *
     * @param string|null $printFaxMessage
     * @return $this
     */
    public function setPrintFaxMessage($printFaxMessage = null)
    {
        if ($printFaxMessage === null) {
            $this->printFaxMessage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->printFaxMessage = $printFaxMessage;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrintFaxMessage()
    {
        $this->printFaxMessage = null;
        return $this;
    }

    /**
     * Getter for returnToPreviousMenu
     *
     * @return string|null
     */
    public function getReturnToPreviousMenu()
    {
        return $this->returnToPreviousMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->returnToPreviousMenu;
    }

    /**
     * Setter for returnToPreviousMenu
     *
     * @param string|null $returnToPreviousMenu
     * @return $this
     */
    public function setReturnToPreviousMenu($returnToPreviousMenu = null)
    {
        if ($returnToPreviousMenu === null) {
            $this->returnToPreviousMenu = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->returnToPreviousMenu = $returnToPreviousMenu;
        }
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


}

