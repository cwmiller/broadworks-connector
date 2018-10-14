<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1MessageDepositMenuKeys
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1MessageDepositMenuKeys
{

    /**
     * @ElementName enableMessageDeposit
     * @var string|null
     */
    private $enableMessageDeposit = null;

    /**
     * @ElementName disableMessageDeposit
     * @var string|null
     */
    private $disableMessageDeposit = null;

    /**
     * @ElementName listenToMessageDepositStatus
     * @var string|null
     */
    private $listenToMessageDepositStatus = null;

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
     * Getter for enableMessageDeposit
     *
     * @ElementName enableMessageDeposit
     * @return string|null
     */
    public function getEnableMessageDeposit()
    {
        return $this->enableMessageDeposit;
    }

    /**
     * Setter for enableMessageDeposit
     *
     * @ElementName enableMessageDeposit
     * @param string|null $enableMessageDeposit
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
     * @return string|null
     */
    public function getDisableMessageDeposit()
    {
        return $this->disableMessageDeposit;
    }

    /**
     * Setter for disableMessageDeposit
     *
     * @ElementName disableMessageDeposit
     * @param string|null $disableMessageDeposit
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
     * @return string|null
     */
    public function getListenToMessageDepositStatus()
    {
        return $this->listenToMessageDepositStatus;
    }

    /**
     * Setter for listenToMessageDepositStatus
     *
     * @ElementName listenToMessageDepositStatus
     * @param string|null $listenToMessageDepositStatus
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

