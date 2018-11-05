<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestDisableMessageDepositMenuKeys
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestDisableMessageDepositMenuKeys
{

    /**
     * @ElementName disconnectAfterGreeting
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $disconnectAfterGreeting = null;

    /**
     * @ElementName forwardAfterGreeting
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $forwardAfterGreeting = null;

    /**
     * @ElementName changeForwardingDestination
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $changeForwardingDestination = null;

    /**
     * @ElementName returnToPreviousMenu
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

    /**
     * Getter for disconnectAfterGreeting
     *
     * @ElementName disconnectAfterGreeting
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDisconnectAfterGreeting()
    {
        return $this->disconnectAfterGreeting;
    }

    /**
     * Setter for disconnectAfterGreeting
     *
     * @ElementName disconnectAfterGreeting
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $disconnectAfterGreeting
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getForwardAfterGreeting()
    {
        return $this->forwardAfterGreeting;
    }

    /**
     * Setter for forwardAfterGreeting
     *
     * @ElementName forwardAfterGreeting
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $forwardAfterGreeting
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getChangeForwardingDestination()
    {
        return $this->changeForwardingDestination;
    }

    /**
     * Setter for changeForwardingDestination
     *
     * @ElementName changeForwardingDestination
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $changeForwardingDestination
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRepeatMenu()
    {
        return $this->repeatMenu;
    }

    /**
     * Setter for repeatMenu
     *
     * @ElementName repeatMenu
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $repeatMenu
     * @return $this
     */
    public function setRepeatMenu($repeatMenu)
    {
        $this->repeatMenu = $repeatMenu;
        return $this;
    }


}

