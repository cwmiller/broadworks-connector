<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse20FaxMessagingMenuKeys
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse20FaxMessagingMenuKeys
{

    /**
     * @ElementName saveFaxMessageAndSkipToNext
     * @var string|null
     */
    private $saveFaxMessageAndSkipToNext = null;

    /**
     * @ElementName previousFaxMessage
     * @var string|null
     */
    private $previousFaxMessage = null;

    /**
     * @ElementName playEnvelope
     * @var string|null
     */
    private $playEnvelope = null;

    /**
     * @ElementName nextFaxMessage
     * @var string|null
     */
    private $nextFaxMessage = null;

    /**
     * @ElementName deleteFaxMessage
     * @var string|null
     */
    private $deleteFaxMessage = null;

    /**
     * @ElementName printFaxMessage
     * @var string|null
     */
    private $printFaxMessage = null;

    /**
     * @ElementName returnToPreviousMenu
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * Getter for saveFaxMessageAndSkipToNext
     *
     * @ElementName saveFaxMessageAndSkipToNext
     * @return string|null
     */
    public function getSaveFaxMessageAndSkipToNext()
    {
        return $this->saveFaxMessageAndSkipToNext;
    }

    /**
     * Setter for saveFaxMessageAndSkipToNext
     *
     * @ElementName saveFaxMessageAndSkipToNext
     * @param string|null $saveFaxMessageAndSkipToNext
     * @return $this
     */
    public function setSaveFaxMessageAndSkipToNext($saveFaxMessageAndSkipToNext)
    {
        $this->saveFaxMessageAndSkipToNext = $saveFaxMessageAndSkipToNext;
        return $this;
    }

    /**
     * Getter for previousFaxMessage
     *
     * @ElementName previousFaxMessage
     * @return string|null
     */
    public function getPreviousFaxMessage()
    {
        return $this->previousFaxMessage;
    }

    /**
     * Setter for previousFaxMessage
     *
     * @ElementName previousFaxMessage
     * @param string|null $previousFaxMessage
     * @return $this
     */
    public function setPreviousFaxMessage($previousFaxMessage)
    {
        $this->previousFaxMessage = $previousFaxMessage;
        return $this;
    }

    /**
     * Getter for playEnvelope
     *
     * @ElementName playEnvelope
     * @return string|null
     */
    public function getPlayEnvelope()
    {
        return $this->playEnvelope;
    }

    /**
     * Setter for playEnvelope
     *
     * @ElementName playEnvelope
     * @param string|null $playEnvelope
     * @return $this
     */
    public function setPlayEnvelope($playEnvelope)
    {
        $this->playEnvelope = $playEnvelope;
        return $this;
    }

    /**
     * Getter for nextFaxMessage
     *
     * @ElementName nextFaxMessage
     * @return string|null
     */
    public function getNextFaxMessage()
    {
        return $this->nextFaxMessage;
    }

    /**
     * Setter for nextFaxMessage
     *
     * @ElementName nextFaxMessage
     * @param string|null $nextFaxMessage
     * @return $this
     */
    public function setNextFaxMessage($nextFaxMessage)
    {
        $this->nextFaxMessage = $nextFaxMessage;
        return $this;
    }

    /**
     * Getter for deleteFaxMessage
     *
     * @ElementName deleteFaxMessage
     * @return string|null
     */
    public function getDeleteFaxMessage()
    {
        return $this->deleteFaxMessage;
    }

    /**
     * Setter for deleteFaxMessage
     *
     * @ElementName deleteFaxMessage
     * @param string|null $deleteFaxMessage
     * @return $this
     */
    public function setDeleteFaxMessage($deleteFaxMessage)
    {
        $this->deleteFaxMessage = $deleteFaxMessage;
        return $this;
    }

    /**
     * Getter for printFaxMessage
     *
     * @ElementName printFaxMessage
     * @return string|null
     */
    public function getPrintFaxMessage()
    {
        return $this->printFaxMessage;
    }

    /**
     * Setter for printFaxMessage
     *
     * @ElementName printFaxMessage
     * @param string|null $printFaxMessage
     * @return $this
     */
    public function setPrintFaxMessage($printFaxMessage)
    {
        $this->printFaxMessage = $printFaxMessage;
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


}

