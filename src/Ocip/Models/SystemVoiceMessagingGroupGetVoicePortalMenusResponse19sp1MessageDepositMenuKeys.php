<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1MessageDepositMenuKeys
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:38208","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1MessageDepositMenuKeys
{

    /**
     * @ElementName enableMessageDeposit
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38208
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $enableMessageDeposit = null;

    /**
     * @ElementName disableMessageDeposit
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38208
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $disableMessageDeposit = null;

    /**
     * @ElementName listenToMessageDepositStatus
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38208
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $listenToMessageDepositStatus = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38208
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38208
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $repeatMenu = null;

    /**
     * Getter for enableMessageDeposit
     *
     * @return string
     */
    public function getEnableMessageDeposit()
    {
        return $this->enableMessageDeposit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableMessageDeposit;
    }

    /**
     * Setter for enableMessageDeposit
     *
     * @param string $enableMessageDeposit
     * @return $this
     */
    public function setEnableMessageDeposit($enableMessageDeposit)
    {
        $this->enableMessageDeposit = $enableMessageDeposit;
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
     * @return string
     */
    public function getDisableMessageDeposit()
    {
        return $this->disableMessageDeposit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disableMessageDeposit;
    }

    /**
     * Setter for disableMessageDeposit
     *
     * @param string $disableMessageDeposit
     * @return $this
     */
    public function setDisableMessageDeposit($disableMessageDeposit)
    {
        $this->disableMessageDeposit = $disableMessageDeposit;
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
     * @return string
     */
    public function getListenToMessageDepositStatus()
    {
        return $this->listenToMessageDepositStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listenToMessageDepositStatus;
    }

    /**
     * Setter for listenToMessageDepositStatus
     *
     * @param string $listenToMessageDepositStatus
     * @return $this
     */
    public function setListenToMessageDepositStatus($listenToMessageDepositStatus)
    {
        $this->listenToMessageDepositStatus = $listenToMessageDepositStatus;
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

