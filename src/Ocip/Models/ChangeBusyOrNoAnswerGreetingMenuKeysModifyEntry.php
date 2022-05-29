<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ChangeBusyOrNoAnswerGreetingMenuKeysModifyEntry
 *
 * The voice portal change busy or not answer greeting menu keys modify entry.
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:2326","type":"sequence"}]
 */
class ChangeBusyOrNoAnswerGreetingMenuKeysModifyEntry
{

    /**
     * @ElementName recordNewGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2326
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $recordNewGreeting = null;

    /**
     * @ElementName listenToCurrentGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2326
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $listenToCurrentGreeting = null;

    /**
     * @ElementName revertToSystemDefaultGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2326
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $revertToSystemDefaultGreeting = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2326
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2326
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $repeatMenu = null;

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
    public function setRecordNewGreeting($recordNewGreeting = null)
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
    public function setListenToCurrentGreeting($listenToCurrentGreeting = null)
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
     * Getter for revertToSystemDefaultGreeting
     *
     * @return string|null
     */
    public function getRevertToSystemDefaultGreeting()
    {
        return $this->revertToSystemDefaultGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->revertToSystemDefaultGreeting;
    }

    /**
     * Setter for revertToSystemDefaultGreeting
     *
     * @param string|null $revertToSystemDefaultGreeting
     * @return $this
     */
    public function setRevertToSystemDefaultGreeting($revertToSystemDefaultGreeting = null)
    {
        if ($revertToSystemDefaultGreeting === null) {
            $this->revertToSystemDefaultGreeting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->revertToSystemDefaultGreeting = $revertToSystemDefaultGreeting;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRevertToSystemDefaultGreeting()
    {
        $this->revertToSystemDefaultGreeting = null;
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

