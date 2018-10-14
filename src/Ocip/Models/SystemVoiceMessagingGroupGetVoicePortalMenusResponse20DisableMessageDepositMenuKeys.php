<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse20DisableMessageDepositMenuKeys
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse20DisableMessageDepositMenuKeys
{

    /**
     * @ElementName disconnectAfterGreeting
     * @var string|null
     */
    private $disconnectAfterGreeting = null;

    /**
     * @ElementName forwardAfterGreeting
     * @var string|null
     */
    private $forwardAfterGreeting = null;

    /**
     * @ElementName changeForwardingDestination
     * @var string|null
     */
    private $changeForwardingDestination = null;

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
     * Getter for disconnectAfterGreeting
     *
     * @ElementName disconnectAfterGreeting
     * @return string|null
     */
    public function getDisconnectAfterGreeting()
    {
        return $this->disconnectAfterGreeting;
    }

    /**
     * Setter for disconnectAfterGreeting
     *
     * @ElementName disconnectAfterGreeting
     * @param string|null $disconnectAfterGreeting
     * @return $this
     */
    public function setDisconnectAfterGreeting($disconnectAfterGreeting)
    {
        $this->disconnectAfterGreeting = $disconnectAfterGreeting;
        return $this;
    }

    /**
     * Getter for forwardAfterGreeting
     *
     * @ElementName forwardAfterGreeting
     * @return string|null
     */
    public function getForwardAfterGreeting()
    {
        return $this->forwardAfterGreeting;
    }

    /**
     * Setter for forwardAfterGreeting
     *
     * @ElementName forwardAfterGreeting
     * @param string|null $forwardAfterGreeting
     * @return $this
     */
    public function setForwardAfterGreeting($forwardAfterGreeting)
    {
        $this->forwardAfterGreeting = $forwardAfterGreeting;
        return $this;
    }

    /**
     * Getter for changeForwardingDestination
     *
     * @ElementName changeForwardingDestination
     * @return string|null
     */
    public function getChangeForwardingDestination()
    {
        return $this->changeForwardingDestination;
    }

    /**
     * Setter for changeForwardingDestination
     *
     * @ElementName changeForwardingDestination
     * @param string|null $changeForwardingDestination
     * @return $this
     */
    public function setChangeForwardingDestination($changeForwardingDestination)
    {
        $this->changeForwardingDestination = $changeForwardingDestination;
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

