<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeExtendedAwayGreetingMenuKeys
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeExtendedAwayGreetingMenuKeys
{

    /**
     * @ElementName activateExtendedAwayGreeting
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $activateExtendedAwayGreeting = null;

    /**
     * @ElementName deactivateExtendedAwayGreeting
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deactivateExtendedAwayGreeting = null;

    /**
     * @ElementName recordNewGreeting
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $recordNewGreeting = null;

    /**
     * @ElementName listenToCurrentGreeting
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listenToCurrentGreeting = null;

    /**
     * @ElementName enableMessageDeposit
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $enableMessageDeposit = null;

    /**
     * @ElementName disableMessageDeposit
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $disableMessageDeposit = null;

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
     * Getter for activateExtendedAwayGreeting
     *
     * @ElementName activateExtendedAwayGreeting
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getActivateExtendedAwayGreeting()
    {
        return $this->activateExtendedAwayGreeting;
    }

    /**
     * Setter for activateExtendedAwayGreeting
     *
     * @ElementName activateExtendedAwayGreeting
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $activateExtendedAwayGreeting
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDeactivateExtendedAwayGreeting()
    {
        return $this->deactivateExtendedAwayGreeting;
    }

    /**
     * Setter for deactivateExtendedAwayGreeting
     *
     * @ElementName deactivateExtendedAwayGreeting
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $deactivateExtendedAwayGreeting
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRecordNewGreeting()
    {
        return $this->recordNewGreeting;
    }

    /**
     * Setter for recordNewGreeting
     *
     * @ElementName recordNewGreeting
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $recordNewGreeting
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getListenToCurrentGreeting()
    {
        return $this->listenToCurrentGreeting;
    }

    /**
     * Setter for listenToCurrentGreeting
     *
     * @ElementName listenToCurrentGreeting
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $listenToCurrentGreeting
     * @return $this
     */
    public function setListenToCurrentGreeting($listenToCurrentGreeting)
    {
        $this->listenToCurrentGreeting = $listenToCurrentGreeting;
        return $this;
    }

    /**
     * Getter for enableMessageDeposit
     *
     * @ElementName enableMessageDeposit
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getEnableMessageDeposit()
    {
        return $this->enableMessageDeposit;
    }

    /**
     * Setter for enableMessageDeposit
     *
     * @ElementName enableMessageDeposit
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $enableMessageDeposit
     * @return $this
     */
    public function setEnableMessageDeposit($enableMessageDeposit)
    {
        $this->enableMessageDeposit = $enableMessageDeposit;
        return $this;
    }

    /**
     * Getter for disableMessageDeposit
     *
     * @ElementName disableMessageDeposit
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDisableMessageDeposit()
    {
        return $this->disableMessageDeposit;
    }

    /**
     * Setter for disableMessageDeposit
     *
     * @ElementName disableMessageDeposit
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $disableMessageDeposit
     * @return $this
     */
    public function setDisableMessageDeposit($disableMessageDeposit)
    {
        $this->disableMessageDeposit = $disableMessageDeposit;
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

