<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestCallForwardingOptionsMenuKeys
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestCallForwardingOptionsMenuKeys
{

    /**
     * @ElementName activateCallForwarding
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $activateCallForwarding = null;

    /**
     * @ElementName deactivateCallForwarding
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deactivateCallForwarding = null;

    /**
     * @ElementName changeCallForwardingDestination
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $changeCallForwardingDestination = null;

    /**
     * @ElementName listenToCallForwardingStatus
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listenToCallForwardingStatus = null;

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
     * Getter for activateCallForwarding
     *
     * @ElementName activateCallForwarding
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getActivateCallForwarding()
    {
        return $this->activateCallForwarding;
    }

    /**
     * Setter for activateCallForwarding
     *
     * @ElementName activateCallForwarding
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $activateCallForwarding
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDeactivateCallForwarding()
    {
        return $this->deactivateCallForwarding;
    }

    /**
     * Setter for deactivateCallForwarding
     *
     * @ElementName deactivateCallForwarding
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $deactivateCallForwarding
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getChangeCallForwardingDestination()
    {
        return $this->changeCallForwardingDestination;
    }

    /**
     * Setter for changeCallForwardingDestination
     *
     * @ElementName changeCallForwardingDestination
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $changeCallForwardingDestination
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getListenToCallForwardingStatus()
    {
        return $this->listenToCallForwardingStatus;
    }

    /**
     * Setter for listenToCallForwardingStatus
     *
     * @ElementName listenToCallForwardingStatus
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $listenToCallForwardingStatus
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

