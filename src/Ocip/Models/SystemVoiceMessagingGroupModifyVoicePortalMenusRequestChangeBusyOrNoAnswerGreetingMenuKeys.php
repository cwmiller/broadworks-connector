<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeBusyOrNoAnswerGreetingMenuKeys
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeBusyOrNoAnswerGreetingMenuKeys
{

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
     * @ElementName revertToSystemDefaultGreeting
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $revertToSystemDefaultGreeting = null;

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
     * Getter for revertToSystemDefaultGreeting
     *
     * @ElementName revertToSystemDefaultGreeting
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRevertToSystemDefaultGreeting()
    {
        return $this->revertToSystemDefaultGreeting;
    }

    /**
     * Setter for revertToSystemDefaultGreeting
     *
     * @ElementName revertToSystemDefaultGreeting
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $revertToSystemDefaultGreeting
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

