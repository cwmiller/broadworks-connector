<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeExtendedAwayGreetingMenuKeys
 *
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:31756","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeExtendedAwayGreetingMenuKeys
{

    /**
     * @ElementName activateExtendedAwayGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:31756
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $activateExtendedAwayGreeting = null;

    /**
     * @ElementName deactivateExtendedAwayGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:31756
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deactivateExtendedAwayGreeting = null;

    /**
     * @ElementName recordNewGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:31756
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $recordNewGreeting = null;

    /**
     * @ElementName listenToCurrentGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:31756
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listenToCurrentGreeting = null;

    /**
     * @ElementName enableMessageDeposit
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:31756
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $enableMessageDeposit = null;

    /**
     * @ElementName disableMessageDeposit
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:31756
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $disableMessageDeposit = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:31756
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:31756
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

    /**
     * Getter for activateExtendedAwayGreeting
     *
     * @return string|null
     */
    public function getActivateExtendedAwayGreeting()
    {
        return $this->activateExtendedAwayGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activateExtendedAwayGreeting;
    }

    /**
     * Setter for activateExtendedAwayGreeting
     *
     * @param string|null $activateExtendedAwayGreeting
     * @return $this
     */
    public function setActivateExtendedAwayGreeting($activateExtendedAwayGreeting)
    {
        if ($activateExtendedAwayGreeting === null) {
            $this->activateExtendedAwayGreeting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->activateExtendedAwayGreeting = $activateExtendedAwayGreeting;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivateExtendedAwayGreeting()
    {
        $this->activateExtendedAwayGreeting = null;
        return $this;
    }

    /**
     * Getter for deactivateExtendedAwayGreeting
     *
     * @return string|null
     */
    public function getDeactivateExtendedAwayGreeting()
    {
        return $this->deactivateExtendedAwayGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deactivateExtendedAwayGreeting;
    }

    /**
     * Setter for deactivateExtendedAwayGreeting
     *
     * @param string|null $deactivateExtendedAwayGreeting
     * @return $this
     */
    public function setDeactivateExtendedAwayGreeting($deactivateExtendedAwayGreeting)
    {
        if ($deactivateExtendedAwayGreeting === null) {
            $this->deactivateExtendedAwayGreeting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deactivateExtendedAwayGreeting = $deactivateExtendedAwayGreeting;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeactivateExtendedAwayGreeting()
    {
        $this->deactivateExtendedAwayGreeting = null;
        return $this;
    }

    /**
     * Getter for recordNewGreeting
     *
     * @return string|null
     */
    public function getRecordNewGreeting()
    {
        return $this->recordNewGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordNewGreeting;
    }

    /**
     * Setter for recordNewGreeting
     *
     * @param string|null $recordNewGreeting
     * @return $this
     */
    public function setRecordNewGreeting($recordNewGreeting)
    {
        if ($recordNewGreeting === null) {
            $this->recordNewGreeting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->recordNewGreeting = $recordNewGreeting;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecordNewGreeting()
    {
        $this->recordNewGreeting = null;
        return $this;
    }

    /**
     * Getter for listenToCurrentGreeting
     *
     * @return string|null
     */
    public function getListenToCurrentGreeting()
    {
        return $this->listenToCurrentGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listenToCurrentGreeting;
    }

    /**
     * Setter for listenToCurrentGreeting
     *
     * @param string|null $listenToCurrentGreeting
     * @return $this
     */
    public function setListenToCurrentGreeting($listenToCurrentGreeting)
    {
        if ($listenToCurrentGreeting === null) {
            $this->listenToCurrentGreeting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->listenToCurrentGreeting = $listenToCurrentGreeting;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetListenToCurrentGreeting()
    {
        $this->listenToCurrentGreeting = null;
        return $this;
    }

    /**
     * Getter for enableMessageDeposit
     *
     * @return string|null
     */
    public function getEnableMessageDeposit()
    {
        return $this->enableMessageDeposit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableMessageDeposit;
    }

    /**
     * Setter for enableMessageDeposit
     *
     * @param string|null $enableMessageDeposit
     * @return $this
     */
    public function setEnableMessageDeposit($enableMessageDeposit)
    {
        if ($enableMessageDeposit === null) {
            $this->enableMessageDeposit = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->enableMessageDeposit = $enableMessageDeposit;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableMessageDeposit()
    {
        $this->enableMessageDeposit = null;
        return $this;
    }

    /**
     * Getter for disableMessageDeposit
     *
     * @return string|null
     */
    public function getDisableMessageDeposit()
    {
        return $this->disableMessageDeposit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disableMessageDeposit;
    }

    /**
     * Setter for disableMessageDeposit
     *
     * @param string|null $disableMessageDeposit
     * @return $this
     */
    public function setDisableMessageDeposit($disableMessageDeposit)
    {
        if ($disableMessageDeposit === null) {
            $this->disableMessageDeposit = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->disableMessageDeposit = $disableMessageDeposit;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisableMessageDeposit()
    {
        $this->disableMessageDeposit = null;
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
    public function setRepeatMenu($repeatMenu)
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

