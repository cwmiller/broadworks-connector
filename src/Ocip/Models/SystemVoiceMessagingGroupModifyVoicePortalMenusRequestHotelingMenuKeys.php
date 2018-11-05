<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestHotelingMenuKeys
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestHotelingMenuKeys
{

    /**
     * @ElementName checkHostStatus
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $checkHostStatus = null;

    /**
     * @ElementName associateWithHost
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $associateWithHost = null;

    /**
     * @ElementName disassociateFromHost
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $disassociateFromHost = null;

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
     * Getter for checkHostStatus
     *
     * @ElementName checkHostStatus
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCheckHostStatus()
    {
        return $this->checkHostStatus;
    }

    /**
     * Setter for checkHostStatus
     *
     * @ElementName checkHostStatus
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $checkHostStatus
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAssociateWithHost()
    {
        return $this->associateWithHost;
    }

    /**
     * Setter for associateWithHost
     *
     * @ElementName associateWithHost
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $associateWithHost
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDisassociateFromHost()
    {
        return $this->disassociateFromHost;
    }

    /**
     * Setter for disassociateFromHost
     *
     * @ElementName disassociateFromHost
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $disassociateFromHost
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

