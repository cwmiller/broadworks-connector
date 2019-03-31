<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ConferenceGreetingMenuKeysModifyEntry
 *
 * The voice portal greeting menu keys modify entry.
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:2539","type":"sequence"}]
 */
class ConferenceGreetingMenuKeysModifyEntry
{

    /**
     * @ElementName activateConfGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2539
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $activateConfGreeting = null;

    /**
     * @ElementName deactivateConfGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2539
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deactivateConfGreeting = null;

    /**
     * @ElementName recordNewConfGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2539
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $recordNewConfGreeting = null;

    /**
     * @ElementName listenToCurrentConfGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2539
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listenToCurrentConfGreeting = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2539
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2539
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

    /**
     * Getter for activateConfGreeting
     *
     * @return string|null
     */
    public function getActivateConfGreeting()
    {
        return $this->activateConfGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activateConfGreeting;
    }

    /**
     * Setter for activateConfGreeting
     *
     * @param string|null $activateConfGreeting
     * @return $this
     */
    public function setActivateConfGreeting($activateConfGreeting = null)
    {
        if ($activateConfGreeting === null) {
            $this->activateConfGreeting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->activateConfGreeting = $activateConfGreeting;
        }
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
     * @return string|null
     */
    public function getDeactivateConfGreeting()
    {
        return $this->deactivateConfGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deactivateConfGreeting;
    }

    /**
     * Setter for deactivateConfGreeting
     *
     * @param string|null $deactivateConfGreeting
     * @return $this
     */
    public function setDeactivateConfGreeting($deactivateConfGreeting = null)
    {
        if ($deactivateConfGreeting === null) {
            $this->deactivateConfGreeting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deactivateConfGreeting = $deactivateConfGreeting;
        }
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
     * @return string|null
     */
    public function getRecordNewConfGreeting()
    {
        return $this->recordNewConfGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordNewConfGreeting;
    }

    /**
     * Setter for recordNewConfGreeting
     *
     * @param string|null $recordNewConfGreeting
     * @return $this
     */
    public function setRecordNewConfGreeting($recordNewConfGreeting = null)
    {
        if ($recordNewConfGreeting === null) {
            $this->recordNewConfGreeting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->recordNewConfGreeting = $recordNewConfGreeting;
        }
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
     * @return string|null
     */
    public function getListenToCurrentConfGreeting()
    {
        return $this->listenToCurrentConfGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listenToCurrentConfGreeting;
    }

    /**
     * Setter for listenToCurrentConfGreeting
     *
     * @param string|null $listenToCurrentConfGreeting
     * @return $this
     */
    public function setListenToCurrentConfGreeting($listenToCurrentConfGreeting = null)
    {
        if ($listenToCurrentConfGreeting === null) {
            $this->listenToCurrentConfGreeting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->listenToCurrentConfGreeting = $listenToCurrentConfGreeting;
        }
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
    public function setRepeatMenu($repeatMenu = null)
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

