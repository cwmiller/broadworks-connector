<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19;

/**
 * ConferenceGreetingMenuKeys
 */
class ConferenceGreetingMenuKeys
{

    /**
     * @ElementName activateConfGreeting
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $activateConfGreeting = null;

    /**
     * @ElementName deactivateConfGreeting
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deactivateConfGreeting = null;

    /**
     * @ElementName recordNewConfGreeting
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $recordNewConfGreeting = null;

    /**
     * @ElementName listenToCurrentConfGreeting
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listenToCurrentConfGreeting = null;

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
     * Getter for activateConfGreeting
     *
     * @ElementName activateConfGreeting
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getActivateConfGreeting()
    {
        return $this->activateConfGreeting;
    }

    /**
     * Setter for activateConfGreeting
     *
     * @ElementName activateConfGreeting
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $activateConfGreeting
     * @return $this
     */
    public function setActivateConfGreeting($activateConfGreeting)
    {
        $this->activateConfGreeting = $activateConfGreeting;
        return $this;
    }

    /**
     * Getter for deactivateConfGreeting
     *
     * @ElementName deactivateConfGreeting
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDeactivateConfGreeting()
    {
        return $this->deactivateConfGreeting;
    }

    /**
     * Setter for deactivateConfGreeting
     *
     * @ElementName deactivateConfGreeting
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $deactivateConfGreeting
     * @return $this
     */
    public function setDeactivateConfGreeting($deactivateConfGreeting)
    {
        $this->deactivateConfGreeting = $deactivateConfGreeting;
        return $this;
    }

    /**
     * Getter for recordNewConfGreeting
     *
     * @ElementName recordNewConfGreeting
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRecordNewConfGreeting()
    {
        return $this->recordNewConfGreeting;
    }

    /**
     * Setter for recordNewConfGreeting
     *
     * @ElementName recordNewConfGreeting
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $recordNewConfGreeting
     * @return $this
     */
    public function setRecordNewConfGreeting($recordNewConfGreeting)
    {
        $this->recordNewConfGreeting = $recordNewConfGreeting;
        return $this;
    }

    /**
     * Getter for listenToCurrentConfGreeting
     *
     * @ElementName listenToCurrentConfGreeting
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getListenToCurrentConfGreeting()
    {
        return $this->listenToCurrentConfGreeting;
    }

    /**
     * Setter for listenToCurrentConfGreeting
     *
     * @ElementName listenToCurrentConfGreeting
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $listenToCurrentConfGreeting
     * @return $this
     */
    public function setListenToCurrentConfGreeting($listenToCurrentConfGreeting)
    {
        $this->listenToCurrentConfGreeting = $listenToCurrentConfGreeting;
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

