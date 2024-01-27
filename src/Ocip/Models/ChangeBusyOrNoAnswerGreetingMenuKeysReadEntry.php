<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ChangeBusyOrNoAnswerGreetingMenuKeysReadEntry
 *
 * The voice portal change busy or not answer greeting menu keys.
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:2347","type":"sequence"}]
 */
class ChangeBusyOrNoAnswerGreetingMenuKeysReadEntry
{
    /**
     * @ElementName recordNewGreeting
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2347
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $recordNewGreeting = null;

    /**
     * @ElementName listenToCurrentGreeting
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2347
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $listenToCurrentGreeting = null;

    /**
     * @ElementName revertToSystemDefaultGreeting
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2347
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $revertToSystemDefaultGreeting = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2347
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2347
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $repeatMenu = null;

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
     * Getter for revertToSystemDefaultGreeting
     *
     * @return string
     */
    public function getRevertToSystemDefaultGreeting()
    {
        return $this->revertToSystemDefaultGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->revertToSystemDefaultGreeting;
    }

    /**
     * Setter for revertToSystemDefaultGreeting
     *
     * @param string $revertToSystemDefaultGreeting
     * @return $this
     */
    public function setRevertToSystemDefaultGreeting($revertToSystemDefaultGreeting)
    {
        $this->revertToSystemDefaultGreeting = $revertToSystemDefaultGreeting;
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

