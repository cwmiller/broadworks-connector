<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ConferenceGreetingMenuKeys
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:38301","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ConferenceGreetingMenuKeys
{

    /**
     * @ElementName activateConfGreeting
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38301
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $activateConfGreeting = null;

    /**
     * @ElementName deactivateConfGreeting
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38301
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $deactivateConfGreeting = null;

    /**
     * @ElementName recordNewConfGreeting
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38301
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $recordNewConfGreeting = null;

    /**
     * @ElementName listenToCurrentConfGreeting
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38301
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $listenToCurrentConfGreeting = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38301
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38301
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $repeatMenu = null;

    /**
     * Getter for activateConfGreeting
     *
     * @return string
     */
    public function getActivateConfGreeting()
    {
        return $this->activateConfGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activateConfGreeting;
    }

    /**
     * Setter for activateConfGreeting
     *
     * @param string $activateConfGreeting
     * @return $this
     */
    public function setActivateConfGreeting($activateConfGreeting)
    {
        $this->activateConfGreeting = $activateConfGreeting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivateConfGreeting()
    {
        $this->activateConfGreeting = null;
        return $this;
    }

    /**
     * Getter for deactivateConfGreeting
     *
     * @return string
     */
    public function getDeactivateConfGreeting()
    {
        return $this->deactivateConfGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deactivateConfGreeting;
    }

    /**
     * Setter for deactivateConfGreeting
     *
     * @param string $deactivateConfGreeting
     * @return $this
     */
    public function setDeactivateConfGreeting($deactivateConfGreeting)
    {
        $this->deactivateConfGreeting = $deactivateConfGreeting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeactivateConfGreeting()
    {
        $this->deactivateConfGreeting = null;
        return $this;
    }

    /**
     * Getter for recordNewConfGreeting
     *
     * @return string
     */
    public function getRecordNewConfGreeting()
    {
        return $this->recordNewConfGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordNewConfGreeting;
    }

    /**
     * Setter for recordNewConfGreeting
     *
     * @param string $recordNewConfGreeting
     * @return $this
     */
    public function setRecordNewConfGreeting($recordNewConfGreeting)
    {
        $this->recordNewConfGreeting = $recordNewConfGreeting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecordNewConfGreeting()
    {
        $this->recordNewConfGreeting = null;
        return $this;
    }

    /**
     * Getter for listenToCurrentConfGreeting
     *
     * @return string
     */
    public function getListenToCurrentConfGreeting()
    {
        return $this->listenToCurrentConfGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listenToCurrentConfGreeting;
    }

    /**
     * Setter for listenToCurrentConfGreeting
     *
     * @param string $listenToCurrentConfGreeting
     * @return $this
     */
    public function setListenToCurrentConfGreeting($listenToCurrentConfGreeting)
    {
        $this->listenToCurrentConfGreeting = $listenToCurrentConfGreeting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetListenToCurrentConfGreeting()
    {
        $this->listenToCurrentConfGreeting = null;
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

