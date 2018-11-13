<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeBusyOrNoAnswerGreetingMenuKeys
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeBusyOrNoAnswerGreetingMenuKeys
{

    /**
     * @ElementName recordNewGreeting
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $recordNewGreeting = null;

    /**
     * @ElementName listenToCurrentGreeting
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listenToCurrentGreeting = null;

    /**
     * @ElementName revertToSystemDefaultGreeting
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $revertToSystemDefaultGreeting = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

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
    public function setRevertToSystemDefaultGreeting($revertToSystemDefaultGreeting)
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

