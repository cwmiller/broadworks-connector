<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestHotelingMenuKeys
 *
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:31844","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestHotelingMenuKeys
{

    /**
     * @ElementName checkHostStatus
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:31844
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $checkHostStatus = null;

    /**
     * @ElementName associateWithHost
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:31844
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $associateWithHost = null;

    /**
     * @ElementName disassociateFromHost
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:31844
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $disassociateFromHost = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:31844
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:31844
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

    /**
     * Getter for checkHostStatus
     *
     * @return string|null
     */
    public function getCheckHostStatus()
    {
        return $this->checkHostStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->checkHostStatus;
    }

    /**
     * Setter for checkHostStatus
     *
     * @param string|null $checkHostStatus
     * @return $this
     */
    public function setCheckHostStatus($checkHostStatus)
    {
        if ($checkHostStatus === null) {
            $this->checkHostStatus = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->checkHostStatus = $checkHostStatus;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCheckHostStatus()
    {
        $this->checkHostStatus = null;
        return $this;
    }

    /**
     * Getter for associateWithHost
     *
     * @return string|null
     */
    public function getAssociateWithHost()
    {
        return $this->associateWithHost instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->associateWithHost;
    }

    /**
     * Setter for associateWithHost
     *
     * @param string|null $associateWithHost
     * @return $this
     */
    public function setAssociateWithHost($associateWithHost)
    {
        if ($associateWithHost === null) {
            $this->associateWithHost = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->associateWithHost = $associateWithHost;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssociateWithHost()
    {
        $this->associateWithHost = null;
        return $this;
    }

    /**
     * Getter for disassociateFromHost
     *
     * @return string|null
     */
    public function getDisassociateFromHost()
    {
        return $this->disassociateFromHost instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disassociateFromHost;
    }

    /**
     * Setter for disassociateFromHost
     *
     * @param string|null $disassociateFromHost
     * @return $this
     */
    public function setDisassociateFromHost($disassociateFromHost)
    {
        if ($disassociateFromHost === null) {
            $this->disassociateFromHost = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->disassociateFromHost = $disassociateFromHost;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisassociateFromHost()
    {
        $this->disassociateFromHost = null;
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

