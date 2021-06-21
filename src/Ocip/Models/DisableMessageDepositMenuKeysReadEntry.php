<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DisableMessageDepositMenuKeysReadEntry
 *
 * The voice portal disable message deposit menu keys.
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:2539","type":"sequence"}]
 */
class DisableMessageDepositMenuKeysReadEntry
{

    /**
     * @ElementName disconnectAfterGreeting
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2539
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $disconnectAfterGreeting = null;

    /**
     * @ElementName forwardAfterGreeting
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2539
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $forwardAfterGreeting = null;

    /**
     * @ElementName changeForwardingDestination
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2539
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $changeForwardingDestination = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2539
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2539
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $repeatMenu = null;

    /**
     * Getter for disconnectAfterGreeting
     *
     * @return string
     */
    public function getDisconnectAfterGreeting()
    {
        return $this->disconnectAfterGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disconnectAfterGreeting;
    }

    /**
     * Setter for disconnectAfterGreeting
     *
     * @param string $disconnectAfterGreeting
     * @return $this
     */
    public function setDisconnectAfterGreeting($disconnectAfterGreeting)
    {
        $this->disconnectAfterGreeting = $disconnectAfterGreeting;
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
     * @return string
     */
    public function getForwardAfterGreeting()
    {
        return $this->forwardAfterGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardAfterGreeting;
    }

    /**
     * Setter for forwardAfterGreeting
     *
     * @param string $forwardAfterGreeting
     * @return $this
     */
    public function setForwardAfterGreeting($forwardAfterGreeting)
    {
        $this->forwardAfterGreeting = $forwardAfterGreeting;
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
     * @return string
     */
    public function getChangeForwardingDestination()
    {
        return $this->changeForwardingDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeForwardingDestination;
    }

    /**
     * Setter for changeForwardingDestination
     *
     * @param string $changeForwardingDestination
     * @return $this
     */
    public function setChangeForwardingDestination($changeForwardingDestination)
    {
        $this->changeForwardingDestination = $changeForwardingDestination;
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

