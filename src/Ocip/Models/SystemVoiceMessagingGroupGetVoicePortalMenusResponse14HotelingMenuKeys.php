<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse14HotelingMenuKeys
 *
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:29432","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse14HotelingMenuKeys
{

    /**
     * @ElementName checkHostStatus
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:29432
     * @var string|null
     */
    private $checkHostStatus = null;

    /**
     * @ElementName associateWithHost
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:29432
     * @var string|null
     */
    private $associateWithHost = null;

    /**
     * @ElementName disassociateFromHost
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:29432
     * @var string|null
     */
    private $disassociateFromHost = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:29432
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:29432
     * @var string|null
     */
    private $repeatMenu = null;

    /**
     * Getter for checkHostStatus
     *
     * @return string
     */
    public function getCheckHostStatus()
    {
        return $this->checkHostStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->checkHostStatus;
    }

    /**
     * Setter for checkHostStatus
     *
     * @param string $checkHostStatus
     * @return $this
     */
    public function setCheckHostStatus($checkHostStatus)
    {
        $this->checkHostStatus = $checkHostStatus;
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
     * @return string
     */
    public function getAssociateWithHost()
    {
        return $this->associateWithHost instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->associateWithHost;
    }

    /**
     * Setter for associateWithHost
     *
     * @param string $associateWithHost
     * @return $this
     */
    public function setAssociateWithHost($associateWithHost)
    {
        $this->associateWithHost = $associateWithHost;
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
     * @return string
     */
    public function getDisassociateFromHost()
    {
        return $this->disassociateFromHost instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disassociateFromHost;
    }

    /**
     * Setter for disassociateFromHost
     *
     * @param string $disassociateFromHost
     * @return $this
     */
    public function setDisassociateFromHost($disassociateFromHost)
    {
        $this->disassociateFromHost = $disassociateFromHost;
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

