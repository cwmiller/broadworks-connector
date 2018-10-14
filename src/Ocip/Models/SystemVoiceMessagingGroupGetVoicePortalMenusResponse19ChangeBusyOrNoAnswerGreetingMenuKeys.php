<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse19ChangeBusyOrNoAnswerGreetingMenuKeys
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse19ChangeBusyOrNoAnswerGreetingMenuKeys
{

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
     * @ElementName revertToSystemDefaultGreeting
     * @var string|null
     */
    private $revertToSystemDefaultGreeting = null;

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
     * Getter for revertToSystemDefaultGreeting
     *
     * @ElementName revertToSystemDefaultGreeting
     * @return string|null
     */
    public function getRevertToSystemDefaultGreeting()
    {
        return $this->revertToSystemDefaultGreeting;
    }

    /**
     * Setter for revertToSystemDefaultGreeting
     *
     * @ElementName revertToSystemDefaultGreeting
     * @param string|null $revertToSystemDefaultGreeting
     * @return $this
     */
    public function setRevertToSystemDefaultGreeting($revertToSystemDefaultGreeting)
    {
        $this->revertToSystemDefaultGreeting = $revertToSystemDefaultGreeting;
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

