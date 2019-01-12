<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeExtendedAwayGreetingMenuKeys
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:797","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeExtendedAwayGreetingMenuKeys
{

    /**
     * @ElementName activateExtendedAwayGreeting
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:797
     * @var string|null
     */
    private $activateExtendedAwayGreeting = null;

    /**
     * @ElementName deactivateExtendedAwayGreeting
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:797
     * @var string|null
     */
    private $deactivateExtendedAwayGreeting = null;

    /**
     * @ElementName recordNewGreeting
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:797
     * @var string|null
     */
    private $recordNewGreeting = null;

    /**
     * @ElementName listenToCurrentGreeting
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:797
     * @var string|null
     */
    private $listenToCurrentGreeting = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:797
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:797
     * @var string|null
     */
    private $repeatMenu = null;

    /**
     * Getter for activateExtendedAwayGreeting
     *
     * @return string
     */
    public function getActivateExtendedAwayGreeting()
    {
        return $this->activateExtendedAwayGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activateExtendedAwayGreeting;
    }

    /**
     * Setter for activateExtendedAwayGreeting
     *
     * @param string $activateExtendedAwayGreeting
     * @return $this
     */
    public function setActivateExtendedAwayGreeting($activateExtendedAwayGreeting)
    {
        $this->activateExtendedAwayGreeting = $activateExtendedAwayGreeting;
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
     * @return string
     */
    public function getDeactivateExtendedAwayGreeting()
    {
        return $this->deactivateExtendedAwayGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deactivateExtendedAwayGreeting;
    }

    /**
     * Setter for deactivateExtendedAwayGreeting
     *
     * @param string $deactivateExtendedAwayGreeting
     * @return $this
     */
    public function setDeactivateExtendedAwayGreeting($deactivateExtendedAwayGreeting)
    {
        $this->deactivateExtendedAwayGreeting = $deactivateExtendedAwayGreeting;
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
     * @return string
     */
    public function getRecordNewGreeting()
    {
        return $this->recordNewGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordNewGreeting;
    }

    /**
     * Setter for recordNewGreeting
     *
     * @param string $recordNewGreeting
     * @return $this
     */
    public function setRecordNewGreeting($recordNewGreeting)
    {
        $this->recordNewGreeting = $recordNewGreeting;
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
     * @return string
     */
    public function getListenToCurrentGreeting()
    {
        return $this->listenToCurrentGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listenToCurrentGreeting;
    }

    /**
     * Setter for listenToCurrentGreeting
     *
     * @param string $listenToCurrentGreeting
     * @return $this
     */
    public function setListenToCurrentGreeting($listenToCurrentGreeting)
    {
        $this->listenToCurrentGreeting = $listenToCurrentGreeting;
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

