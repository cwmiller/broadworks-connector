<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallForwardingOptionsMenuKeysModifyEntry
 *
 * The voice portal call forwarding option menu keys modify entry.
 */
class CallForwardingOptionsMenuKeysModifyEntry
{

    /**
     * @ElementName activateCallForwarding
     * @var string|null
     */
    private $activateCallForwarding = null;

    /**
     * @ElementName deactivateCallForwarding
     * @var string|null
     */
    private $deactivateCallForwarding = null;

    /**
     * @ElementName changeCallForwardingDestination
     * @var string|null
     */
    private $changeCallForwardingDestination = null;

    /**
     * @ElementName listenToCallForwardingStatus
     * @var string|null
     */
    private $listenToCallForwardingStatus = null;

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
     * Getter for activateCallForwarding
     *
     * @ElementName activateCallForwarding
     * @return string|null
     */
    public function getActivateCallForwarding()
    {
        return $this->activateCallForwarding;
    }

    /**
     * Setter for activateCallForwarding
     *
     * @ElementName activateCallForwarding
     * @param string|null $activateCallForwarding
     * @return $this
     */
    public function setActivateCallForwarding($activateCallForwarding)
    {
        $this->activateCallForwarding = $activateCallForwarding;
        return $this;
    }

    /**
     * Getter for deactivateCallForwarding
     *
     * @ElementName deactivateCallForwarding
     * @return string|null
     */
    public function getDeactivateCallForwarding()
    {
        return $this->deactivateCallForwarding;
    }

    /**
     * Setter for deactivateCallForwarding
     *
     * @ElementName deactivateCallForwarding
     * @param string|null $deactivateCallForwarding
     * @return $this
     */
    public function setDeactivateCallForwarding($deactivateCallForwarding)
    {
        $this->deactivateCallForwarding = $deactivateCallForwarding;
        return $this;
    }

    /**
     * Getter for changeCallForwardingDestination
     *
     * @ElementName changeCallForwardingDestination
     * @return string|null
     */
    public function getChangeCallForwardingDestination()
    {
        return $this->changeCallForwardingDestination;
    }

    /**
     * Setter for changeCallForwardingDestination
     *
     * @ElementName changeCallForwardingDestination
     * @param string|null $changeCallForwardingDestination
     * @return $this
     */
    public function setChangeCallForwardingDestination($changeCallForwardingDestination)
    {
        $this->changeCallForwardingDestination = $changeCallForwardingDestination;
        return $this;
    }

    /**
     * Getter for listenToCallForwardingStatus
     *
     * @ElementName listenToCallForwardingStatus
     * @return string|null
     */
    public function getListenToCallForwardingStatus()
    {
        return $this->listenToCallForwardingStatus;
    }

    /**
     * Setter for listenToCallForwardingStatus
     *
     * @ElementName listenToCallForwardingStatus
     * @param string|null $listenToCallForwardingStatus
     * @return $this
     */
    public function setListenToCallForwardingStatus($listenToCallForwardingStatus)
    {
        $this->listenToCallForwardingStatus = $listenToCallForwardingStatus;
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


}

