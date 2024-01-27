<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse19DisableMessageDepositMenuKeys
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:38561","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse19DisableMessageDepositMenuKeys
{
    /**
     * @ElementName disconnectAfterGreeting
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:38561
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $disconnectAfterGreeting = null;

    /**
     * @ElementName forwardAfterGreeting
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:38561
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $forwardAfterGreeting = null;

    /**
     * @ElementName changeForwardingDestination
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:38561
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $changeForwardingDestination = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:38561
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:38561
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $repeatMenu = null;

    /**
     * Getter for disconnectAfterGreeting
     *
     * @return string
     */
    public function getDisconnectAfterGreeting()
    {
        return $this->disconnectAfterGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disconnectAfterGreeting;
    }

    /**
     * Setter for disconnectAfterGreeting
     *
     * @param string $disconnectAfterGreeting
     * @return $this
     */
    public function setDisconnectAfterGreeting($disconnectAfterGreeting)
    {
        $this->disconnectAfterGreeting = $disconnectAfterGreeting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisconnectAfterGreeting()
    {
        $this->disconnectAfterGreeting = null;
        return $this;
    }

    /**
     * Getter for forwardAfterGreeting
     *
     * @return string
     */
    public function getForwardAfterGreeting()
    {
        return $this->forwardAfterGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardAfterGreeting;
    }

    /**
     * Setter for forwardAfterGreeting
     *
     * @param string $forwardAfterGreeting
     * @return $this
     */
    public function setForwardAfterGreeting($forwardAfterGreeting)
    {
        $this->forwardAfterGreeting = $forwardAfterGreeting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardAfterGreeting()
    {
        $this->forwardAfterGreeting = null;
        return $this;
    }

    /**
     * Getter for changeForwardingDestination
     *
     * @return string
     */
    public function getChangeForwardingDestination()
    {
        return $this->changeForwardingDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeForwardingDestination;
    }

    /**
     * Setter for changeForwardingDestination
     *
     * @param string $changeForwardingDestination
     * @return $this
     */
    public function setChangeForwardingDestination($changeForwardingDestination)
    {
        $this->changeForwardingDestination = $changeForwardingDestination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChangeForwardingDestination()
    {
        $this->changeForwardingDestination = null;
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

