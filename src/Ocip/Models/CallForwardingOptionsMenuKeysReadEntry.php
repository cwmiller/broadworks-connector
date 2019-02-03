<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallForwardingOptionsMenuKeysReadEntry
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:2381","type":"sequence"}]
 */
class CallForwardingOptionsMenuKeysReadEntry
{

    /**
     * @ElementName activateCallForwarding
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2381
     * @var string|null
     */
    private $activateCallForwarding = null;

    /**
     * @ElementName deactivateCallForwarding
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2381
     * @var string|null
     */
    private $deactivateCallForwarding = null;

    /**
     * @ElementName changeCallForwardingDestination
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2381
     * @var string|null
     */
    private $changeCallForwardingDestination = null;

    /**
     * @ElementName listenToCallForwardingStatus
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2381
     * @var string|null
     */
    private $listenToCallForwardingStatus = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2381
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2381
     * @var string|null
     */
    private $repeatMenu = null;

    /**
     * Getter for activateCallForwarding
     *
     * @return string
     */
    public function getActivateCallForwarding()
    {
        return $this->activateCallForwarding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activateCallForwarding;
    }

    /**
     * Setter for activateCallForwarding
     *
     * @param string $activateCallForwarding
     * @return $this
     */
    public function setActivateCallForwarding($activateCallForwarding)
    {
        $this->activateCallForwarding = $activateCallForwarding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivateCallForwarding()
    {
        $this->activateCallForwarding = null;
        return $this;
    }

    /**
     * Getter for deactivateCallForwarding
     *
     * @return string
     */
    public function getDeactivateCallForwarding()
    {
        return $this->deactivateCallForwarding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deactivateCallForwarding;
    }

    /**
     * Setter for deactivateCallForwarding
     *
     * @param string $deactivateCallForwarding
     * @return $this
     */
    public function setDeactivateCallForwarding($deactivateCallForwarding)
    {
        $this->deactivateCallForwarding = $deactivateCallForwarding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeactivateCallForwarding()
    {
        $this->deactivateCallForwarding = null;
        return $this;
    }

    /**
     * Getter for changeCallForwardingDestination
     *
     * @return string
     */
    public function getChangeCallForwardingDestination()
    {
        return $this->changeCallForwardingDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeCallForwardingDestination;
    }

    /**
     * Setter for changeCallForwardingDestination
     *
     * @param string $changeCallForwardingDestination
     * @return $this
     */
    public function setChangeCallForwardingDestination($changeCallForwardingDestination)
    {
        $this->changeCallForwardingDestination = $changeCallForwardingDestination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChangeCallForwardingDestination()
    {
        $this->changeCallForwardingDestination = null;
        return $this;
    }

    /**
     * Getter for listenToCallForwardingStatus
     *
     * @return string
     */
    public function getListenToCallForwardingStatus()
    {
        return $this->listenToCallForwardingStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listenToCallForwardingStatus;
    }

    /**
     * Setter for listenToCallForwardingStatus
     *
     * @param string $listenToCallForwardingStatus
     * @return $this
     */
    public function setListenToCallForwardingStatus($listenToCallForwardingStatus)
    {
        $this->listenToCallForwardingStatus = $listenToCallForwardingStatus;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetListenToCallForwardingStatus()
    {
        $this->listenToCallForwardingStatus = null;
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

