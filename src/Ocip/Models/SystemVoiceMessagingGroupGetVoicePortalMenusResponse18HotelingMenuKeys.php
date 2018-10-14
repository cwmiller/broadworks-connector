<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse18HotelingMenuKeys
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse18HotelingMenuKeys
{

    /**
     * @ElementName checkHostStatus
     * @var string|null
     */
    private $checkHostStatus = null;

    /**
     * @ElementName associateWithHost
     * @var string|null
     */
    private $associateWithHost = null;

    /**
     * @ElementName disassociateFromHost
     * @var string|null
     */
    private $disassociateFromHost = null;

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
     * Getter for checkHostStatus
     *
     * @ElementName checkHostStatus
     * @return string|null
     */
    public function getCheckHostStatus()
    {
        return $this->checkHostStatus;
    }

    /**
     * Setter for checkHostStatus
     *
     * @ElementName checkHostStatus
     * @param string|null $checkHostStatus
     * @return $this
     */
    public function setCheckHostStatus($checkHostStatus)
    {
        $this->checkHostStatus = $checkHostStatus;
        return $this;
    }

    /**
     * Getter for associateWithHost
     *
     * @ElementName associateWithHost
     * @return string|null
     */
    public function getAssociateWithHost()
    {
        return $this->associateWithHost;
    }

    /**
     * Setter for associateWithHost
     *
     * @ElementName associateWithHost
     * @param string|null $associateWithHost
     * @return $this
     */
    public function setAssociateWithHost($associateWithHost)
    {
        $this->associateWithHost = $associateWithHost;
        return $this;
    }

    /**
     * Getter for disassociateFromHost
     *
     * @ElementName disassociateFromHost
     * @return string|null
     */
    public function getDisassociateFromHost()
    {
        return $this->disassociateFromHost;
    }

    /**
     * Setter for disassociateFromHost
     *
     * @ElementName disassociateFromHost
     * @param string|null $disassociateFromHost
     * @return $this
     */
    public function setDisassociateFromHost($disassociateFromHost)
    {
        $this->disassociateFromHost = $disassociateFromHost;
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

