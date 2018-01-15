<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19;

/**
 * ConferenceGreetingMenuKeys
 */
class ConferenceGreetingMenuKeys
{

    /**
     * @ElementName activateConfGreeting
     * @var string|null
     */
    private $activateConfGreeting = null;

    /**
     * @ElementName deactivateConfGreeting
     * @var string|null
     */
    private $deactivateConfGreeting = null;

    /**
     * @ElementName recordNewConfGreeting
     * @var string|null
     */
    private $recordNewConfGreeting = null;

    /**
     * @ElementName listenToCurrentConfGreeting
     * @var string|null
     */
    private $listenToCurrentConfGreeting = null;

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
     * Getter for activateConfGreeting
     *
     * @ElementName activateConfGreeting
     * @return string|null
     */
    public function getActivateConfGreeting()
    {
        return $this->activateConfGreeting;
    }

    /**
     * Setter for activateConfGreeting
     *
     * @ElementName activateConfGreeting
     * @param string|null $activateConfGreeting
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
     * @return string|null
     */
    public function getDeactivateConfGreeting()
    {
        return $this->deactivateConfGreeting;
    }

    /**
     * Setter for deactivateConfGreeting
     *
     * @ElementName deactivateConfGreeting
     * @param string|null $deactivateConfGreeting
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
     * @return string|null
     */
    public function getRecordNewConfGreeting()
    {
        return $this->recordNewConfGreeting;
    }

    /**
     * Setter for recordNewConfGreeting
     *
     * @ElementName recordNewConfGreeting
     * @param string|null $recordNewConfGreeting
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
     * @return string|null
     */
    public function getListenToCurrentConfGreeting()
    {
        return $this->listenToCurrentConfGreeting;
    }

    /**
     * Setter for listenToCurrentConfGreeting
     *
     * @ElementName listenToCurrentConfGreeting
     * @param string|null $listenToCurrentConfGreeting
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

