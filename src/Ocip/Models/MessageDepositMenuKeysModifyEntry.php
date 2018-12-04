<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MessageDepositMenuKeysModifyEntry
 *
 * The voice portal message deposit menu keys modify entry.
 *
 * @Groups [{"id":"1624846b7d87d3ab55e907c443fca9d6:2653","type":"sequence"}]
 */
class MessageDepositMenuKeysModifyEntry
{

    /**
     * @ElementName enableMessageDeposit
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2653
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $enableMessageDeposit = null;

    /**
     * @ElementName disableMessageDeposit
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2653
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $disableMessageDeposit = null;

    /**
     * @ElementName listenToMessageDepositStatus
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2653
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listenToMessageDepositStatus = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2653
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2653
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

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
     * Getter for listenToMessageDepositStatus
     *
     * @return string|null
     */
    public function getListenToMessageDepositStatus()
    {
        return $this->listenToMessageDepositStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listenToMessageDepositStatus;
    }

    /**
     * Setter for listenToMessageDepositStatus
     *
     * @param string|null $listenToMessageDepositStatus
     * @return $this
     */
    public function setListenToMessageDepositStatus($listenToMessageDepositStatus)
    {
        if ($listenToMessageDepositStatus === null) {
            $this->listenToMessageDepositStatus = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->listenToMessageDepositStatus = $listenToMessageDepositStatus;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetListenToMessageDepositStatus()
    {
        $this->listenToMessageDepositStatus = null;
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

