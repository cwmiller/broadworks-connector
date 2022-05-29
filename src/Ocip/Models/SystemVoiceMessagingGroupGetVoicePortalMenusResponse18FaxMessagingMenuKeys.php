<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse18FaxMessagingMenuKeys
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:36997","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse18FaxMessagingMenuKeys
{

    /**
     * @ElementName saveFaxMessageAndSkipToNext
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36997
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $saveFaxMessageAndSkipToNext = null;

    /**
     * @ElementName previousFaxMessage
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36997
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $previousFaxMessage = null;

    /**
     * @ElementName playEnvelope
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36997
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $playEnvelope = null;

    /**
     * @ElementName nextFaxMessage
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36997
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $nextFaxMessage = null;

    /**
     * @ElementName deleteFaxMessage
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36997
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $deleteFaxMessage = null;

    /**
     * @ElementName printFaxMessage
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36997
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $printFaxMessage = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36997
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * Getter for saveFaxMessageAndSkipToNext
     *
     * @return string
     */
    public function getSaveFaxMessageAndSkipToNext()
    {
        return $this->saveFaxMessageAndSkipToNext instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->saveFaxMessageAndSkipToNext;
    }

    /**
     * Setter for saveFaxMessageAndSkipToNext
     *
     * @param string $saveFaxMessageAndSkipToNext
     * @return $this
     */
    public function setSaveFaxMessageAndSkipToNext($saveFaxMessageAndSkipToNext)
    {
        $this->saveFaxMessageAndSkipToNext = $saveFaxMessageAndSkipToNext;
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
     * @return string
     */
    public function getPreviousFaxMessage()
    {
        return $this->previousFaxMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->previousFaxMessage;
    }

    /**
     * Setter for previousFaxMessage
     *
     * @param string $previousFaxMessage
     * @return $this
     */
    public function setPreviousFaxMessage($previousFaxMessage)
    {
        $this->previousFaxMessage = $previousFaxMessage;
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
     * @return string
     */
    public function getPlayEnvelope()
    {
        return $this->playEnvelope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playEnvelope;
    }

    /**
     * Setter for playEnvelope
     *
     * @param string $playEnvelope
     * @return $this
     */
    public function setPlayEnvelope($playEnvelope)
    {
        $this->playEnvelope = $playEnvelope;
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
     * @return string
     */
    public function getNextFaxMessage()
    {
        return $this->nextFaxMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nextFaxMessage;
    }

    /**
     * Setter for nextFaxMessage
     *
     * @param string $nextFaxMessage
     * @return $this
     */
    public function setNextFaxMessage($nextFaxMessage)
    {
        $this->nextFaxMessage = $nextFaxMessage;
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
     * @return string
     */
    public function getDeleteFaxMessage()
    {
        return $this->deleteFaxMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteFaxMessage;
    }

    /**
     * Setter for deleteFaxMessage
     *
     * @param string $deleteFaxMessage
     * @return $this
     */
    public function setDeleteFaxMessage($deleteFaxMessage)
    {
        $this->deleteFaxMessage = $deleteFaxMessage;
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
     * @return string
     */
    public function getPrintFaxMessage()
    {
        return $this->printFaxMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->printFaxMessage;
    }

    /**
     * Setter for printFaxMessage
     *
     * @param string $printFaxMessage
     * @return $this
     */
    public function setPrintFaxMessage($printFaxMessage)
    {
        $this->printFaxMessage = $printFaxMessage;
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


}

