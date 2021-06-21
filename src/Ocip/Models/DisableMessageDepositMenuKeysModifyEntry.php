<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DisableMessageDepositMenuKeysModifyEntry
 *
 * The voice portal disable message deposit menu keys modify entry.
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:2524","type":"sequence"}]
 */
class DisableMessageDepositMenuKeysModifyEntry
{

    /**
     * @ElementName disconnectAfterGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2524
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $disconnectAfterGreeting = null;

    /**
     * @ElementName forwardAfterGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2524
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $forwardAfterGreeting = null;

    /**
     * @ElementName changeForwardingDestination
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2524
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $changeForwardingDestination = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2524
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
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2524
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

    /**
     * Getter for disconnectAfterGreeting
     *
     * @return string|null
     */
    public function getDisconnectAfterGreeting()
    {
        return $this->disconnectAfterGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disconnectAfterGreeting;
    }

    /**
     * Setter for disconnectAfterGreeting
     *
     * @param string|null $disconnectAfterGreeting
     * @return $this
     */
    public function setDisconnectAfterGreeting($disconnectAfterGreeting = null)
    {
        if ($disconnectAfterGreeting === null) {
            $this->disconnectAfterGreeting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->disconnectAfterGreeting = $disconnectAfterGreeting;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisconnectAfterGreeting()
    {
        $this->disconnectAfterGreeting = null;
        return $this;
    }

    /**
     * Getter for forwardAfterGreeting
     *
     * @return string|null
     */
    public function getForwardAfterGreeting()
    {
        return $this->forwardAfterGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardAfterGreeting;
    }

    /**
     * Setter for forwardAfterGreeting
     *
     * @param string|null $forwardAfterGreeting
     * @return $this
     */
    public function setForwardAfterGreeting($forwardAfterGreeting = null)
    {
        if ($forwardAfterGreeting === null) {
            $this->forwardAfterGreeting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->forwardAfterGreeting = $forwardAfterGreeting;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardAfterGreeting()
    {
        $this->forwardAfterGreeting = null;
        return $this;
    }

    /**
     * Getter for changeForwardingDestination
     *
     * @return string|null
     */
    public function getChangeForwardingDestination()
    {
        return $this->changeForwardingDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeForwardingDestination;
    }

    /**
     * Setter for changeForwardingDestination
     *
     * @param string|null $changeForwardingDestination
     * @return $this
     */
    public function setChangeForwardingDestination($changeForwardingDestination = null)
    {
        if ($changeForwardingDestination === null) {
            $this->changeForwardingDestination = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->changeForwardingDestination = $changeForwardingDestination;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChangeForwardingDestination()
    {
        $this->changeForwardingDestination = null;
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

