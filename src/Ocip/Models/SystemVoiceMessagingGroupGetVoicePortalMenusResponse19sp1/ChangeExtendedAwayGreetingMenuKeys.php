<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1;

/**
 * ChangeExtendedAwayGreetingMenuKeys
 */
class ChangeExtendedAwayGreetingMenuKeys
{

    /**
     * @ElementName activateExtendedAwayGreeting
     * @var string|null
     */
    private $activateExtendedAwayGreeting = null;

    /**
     * @ElementName deactivateExtendedAwayGreeting
     * @var string|null
     */
    private $deactivateExtendedAwayGreeting = null;

    /**
     * @ElementName recordNewGreeting
     * @var string|null
     */
    private $recordNewGreeting = null;

    /**
     * @ElementName listenToCurrentGreeting
     * @var string|null
     */
    private $listenToCurrentGreeting = null;

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
     * Getter for activateExtendedAwayGreeting
     *
     * @ElementName activateExtendedAwayGreeting
     * @return string|null
     */
    public function getActivateExtendedAwayGreeting()
    {
        return $this->activateExtendedAwayGreeting;
    }

    /**
     * Setter for activateExtendedAwayGreeting
     *
     * @ElementName activateExtendedAwayGreeting
     * @param string|null $activateExtendedAwayGreeting
     * @return $this
     */
    public function setActivateExtendedAwayGreeting($activateExtendedAwayGreeting)
    {
        $this->activateExtendedAwayGreeting = $activateExtendedAwayGreeting;
        return $this;
    }

    /**
     * Getter for deactivateExtendedAwayGreeting
     *
     * @ElementName deactivateExtendedAwayGreeting
     * @return string|null
     */
    public function getDeactivateExtendedAwayGreeting()
    {
        return $this->deactivateExtendedAwayGreeting;
    }

    /**
     * Setter for deactivateExtendedAwayGreeting
     *
     * @ElementName deactivateExtendedAwayGreeting
     * @param string|null $deactivateExtendedAwayGreeting
     * @return $this
     */
    public function setDeactivateExtendedAwayGreeting($deactivateExtendedAwayGreeting)
    {
        $this->deactivateExtendedAwayGreeting = $deactivateExtendedAwayGreeting;
        return $this;
    }

    /**
     * Getter for recordNewGreeting
     *
     * @ElementName recordNewGreeting
     * @return string|null
     */
    public function getRecordNewGreeting()
    {
        return $this->recordNewGreeting;
    }

    /**
     * Setter for recordNewGreeting
     *
     * @ElementName recordNewGreeting
     * @param string|null $recordNewGreeting
     * @return $this
     */
    public function setRecordNewGreeting($recordNewGreeting)
    {
        $this->recordNewGreeting = $recordNewGreeting;
        return $this;
    }

    /**
     * Getter for listenToCurrentGreeting
     *
     * @ElementName listenToCurrentGreeting
     * @return string|null
     */
    public function getListenToCurrentGreeting()
    {
        return $this->listenToCurrentGreeting;
    }

    /**
     * Setter for listenToCurrentGreeting
     *
     * @ElementName listenToCurrentGreeting
     * @param string|null $listenToCurrentGreeting
     * @return $this
     */
    public function setListenToCurrentGreeting($listenToCurrentGreeting)
    {
        $this->listenToCurrentGreeting = $listenToCurrentGreeting;
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

