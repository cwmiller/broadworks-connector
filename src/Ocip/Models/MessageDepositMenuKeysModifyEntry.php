<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MessageDepositMenuKeysModifyEntry
 *
 * The voice portal message deposit menu keys modify entry.
 */
class MessageDepositMenuKeysModifyEntry
{

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
     * @ElementName listenToMessageDepositStatus
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listenToMessageDepositStatus = null;

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
     * Getter for listenToMessageDepositStatus
     *
     * @ElementName listenToMessageDepositStatus
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getListenToMessageDepositStatus()
    {
        return $this->listenToMessageDepositStatus;
    }

    /**
     * Setter for listenToMessageDepositStatus
     *
     * @ElementName listenToMessageDepositStatus
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $listenToMessageDepositStatus
     * @return $this
     */
    public function setListenToMessageDepositStatus($listenToMessageDepositStatus)
    {
        $this->listenToMessageDepositStatus = $listenToMessageDepositStatus;
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

