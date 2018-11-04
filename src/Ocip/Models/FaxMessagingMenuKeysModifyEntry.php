<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FaxMessagingMenuKeysModifyEntry
 *
 * The voice portal fax messaging menu keys modify entry.
 */
class FaxMessagingMenuKeysModifyEntry
{

    /**
     * @ElementName saveFaxMessageAndSkipToNext
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $saveFaxMessageAndSkipToNext = null;

    /**
     * @ElementName previousFaxMessage
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $previousFaxMessage = null;

    /**
     * @ElementName playEnvelope
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $playEnvelope = null;

    /**
     * @ElementName nextFaxMessage
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $nextFaxMessage = null;

    /**
     * @ElementName deleteFaxMessage
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deleteFaxMessage = null;

    /**
     * @ElementName printFaxMessage
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $printFaxMessage = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $returnToPreviousMenu = null;

    /**
     * Getter for saveFaxMessageAndSkipToNext
     *
     * @ElementName saveFaxMessageAndSkipToNext
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSaveFaxMessageAndSkipToNext()
    {
        return $this->saveFaxMessageAndSkipToNext;
    }

    /**
     * Setter for saveFaxMessageAndSkipToNext
     *
     * @ElementName saveFaxMessageAndSkipToNext
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $saveFaxMessageAndSkipToNext
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPreviousFaxMessage()
    {
        return $this->previousFaxMessage;
    }

    /**
     * Setter for previousFaxMessage
     *
     * @ElementName previousFaxMessage
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $previousFaxMessage
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPlayEnvelope()
    {
        return $this->playEnvelope;
    }

    /**
     * Setter for playEnvelope
     *
     * @ElementName playEnvelope
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $playEnvelope
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getNextFaxMessage()
    {
        return $this->nextFaxMessage;
    }

    /**
     * Setter for nextFaxMessage
     *
     * @ElementName nextFaxMessage
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $nextFaxMessage
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDeleteFaxMessage()
    {
        return $this->deleteFaxMessage;
    }

    /**
     * Setter for deleteFaxMessage
     *
     * @ElementName deleteFaxMessage
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $deleteFaxMessage
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPrintFaxMessage()
    {
        return $this->printFaxMessage;
    }

    /**
     * Setter for printFaxMessage
     *
     * @ElementName printFaxMessage
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $printFaxMessage
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getReturnToPreviousMenu()
    {
        return $this->returnToPreviousMenu;
    }

    /**
     * Setter for returnToPreviousMenu
     *
     * @ElementName returnToPreviousMenu
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $returnToPreviousMenu
     * @return $this
     */
    public function setReturnToPreviousMenu($returnToPreviousMenu)
    {
        $this->returnToPreviousMenu = $returnToPreviousMenu;
        return $this;
    }


}

