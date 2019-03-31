<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallForwardingOptionsMenuKeysModifyEntry
 *
 * The voice portal call forwarding option menu keys modify entry.
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:2369","type":"sequence"}]
 */
class CallForwardingOptionsMenuKeysModifyEntry
{

    /**
     * @ElementName activateCallForwarding
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2369
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $activateCallForwarding = null;

    /**
     * @ElementName deactivateCallForwarding
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2369
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deactivateCallForwarding = null;

    /**
     * @ElementName changeCallForwardingDestination
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2369
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $changeCallForwardingDestination = null;

    /**
     * @ElementName listenToCallForwardingStatus
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2369
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listenToCallForwardingStatus = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2369
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2369
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

    /**
     * Getter for activateCallForwarding
     *
     * @return string|null
     */
    public function getActivateCallForwarding()
    {
        return $this->activateCallForwarding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activateCallForwarding;
    }

    /**
     * Setter for activateCallForwarding
     *
     * @param string|null $activateCallForwarding
     * @return $this
     */
    public function setActivateCallForwarding($activateCallForwarding = null)
    {
        if ($activateCallForwarding === null) {
            $this->activateCallForwarding = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->activateCallForwarding = $activateCallForwarding;
        }
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
     * @return string|null
     */
    public function getDeactivateCallForwarding()
    {
        return $this->deactivateCallForwarding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deactivateCallForwarding;
    }

    /**
     * Setter for deactivateCallForwarding
     *
     * @param string|null $deactivateCallForwarding
     * @return $this
     */
    public function setDeactivateCallForwarding($deactivateCallForwarding = null)
    {
        if ($deactivateCallForwarding === null) {
            $this->deactivateCallForwarding = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deactivateCallForwarding = $deactivateCallForwarding;
        }
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
     * @return string|null
     */
    public function getChangeCallForwardingDestination()
    {
        return $this->changeCallForwardingDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeCallForwardingDestination;
    }

    /**
     * Setter for changeCallForwardingDestination
     *
     * @param string|null $changeCallForwardingDestination
     * @return $this
     */
    public function setChangeCallForwardingDestination($changeCallForwardingDestination = null)
    {
        if ($changeCallForwardingDestination === null) {
            $this->changeCallForwardingDestination = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->changeCallForwardingDestination = $changeCallForwardingDestination;
        }
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
     * @return string|null
     */
    public function getListenToCallForwardingStatus()
    {
        return $this->listenToCallForwardingStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listenToCallForwardingStatus;
    }

    /**
     * Setter for listenToCallForwardingStatus
     *
     * @param string|null $listenToCallForwardingStatus
     * @return $this
     */
    public function setListenToCallForwardingStatus($listenToCallForwardingStatus = null)
    {
        if ($listenToCallForwardingStatus === null) {
            $this->listenToCallForwardingStatus = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->listenToCallForwardingStatus = $listenToCallForwardingStatus;
        }
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
     * @return string|null
     */
    public function getRepeatMenu()
    {
        return $this->repeatMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->repeatMenu;
    }

    /**
     * Setter for repeatMenu
     *
     * @param string|null $repeatMenu
     * @return $this
     */
    public function setRepeatMenu($repeatMenu = null)
    {
        if ($repeatMenu === null) {
            $this->repeatMenu = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->repeatMenu = $repeatMenu;
        }
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

