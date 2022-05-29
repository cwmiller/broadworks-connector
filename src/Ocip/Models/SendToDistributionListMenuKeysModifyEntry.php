<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SendToDistributionListMenuKeysModifyEntry
 *
 * The voice portal send to distribution list menu keys modify entry.
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:3096","type":"sequence"}]
 */
class SendToDistributionListMenuKeysModifyEntry
{

    /**
     * @ElementName sendMessageToSelectedDistributionList
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3096
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $sendMessageToSelectedDistributionList = null;

    /**
     * @ElementName selectDistributionList
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3096
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $selectDistributionList = null;

    /**
     * @ElementName reviewSelectedDistributionList
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3096
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $reviewSelectedDistributionList = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3096
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3096
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $repeatMenu = null;

    /**
     * Getter for sendMessageToSelectedDistributionList
     *
     * @return string
     */
    public function getSendMessageToSelectedDistributionList()
    {
        return $this->sendMessageToSelectedDistributionList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendMessageToSelectedDistributionList;
    }

    /**
     * Setter for sendMessageToSelectedDistributionList
     *
     * @param string $sendMessageToSelectedDistributionList
     * @return $this
     */
    public function setSendMessageToSelectedDistributionList($sendMessageToSelectedDistributionList)
    {
        $this->sendMessageToSelectedDistributionList = $sendMessageToSelectedDistributionList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendMessageToSelectedDistributionList()
    {
        $this->sendMessageToSelectedDistributionList = null;
        return $this;
    }

    /**
     * Getter for selectDistributionList
     *
     * @return string|null
     */
    public function getSelectDistributionList()
    {
        return $this->selectDistributionList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->selectDistributionList;
    }

    /**
     * Setter for selectDistributionList
     *
     * @param string|null $selectDistributionList
     * @return $this
     */
    public function setSelectDistributionList($selectDistributionList = null)
    {
        if ($selectDistributionList === null) {
            $this->selectDistributionList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->selectDistributionList = $selectDistributionList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSelectDistributionList()
    {
        $this->selectDistributionList = null;
        return $this;
    }

    /**
     * Getter for reviewSelectedDistributionList
     *
     * @return string|null
     */
    public function getReviewSelectedDistributionList()
    {
        return $this->reviewSelectedDistributionList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reviewSelectedDistributionList;
    }

    /**
     * Setter for reviewSelectedDistributionList
     *
     * @param string|null $reviewSelectedDistributionList
     * @return $this
     */
    public function setReviewSelectedDistributionList($reviewSelectedDistributionList = null)
    {
        if ($reviewSelectedDistributionList === null) {
            $this->reviewSelectedDistributionList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->reviewSelectedDistributionList = $reviewSelectedDistributionList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReviewSelectedDistributionList()
    {
        $this->reviewSelectedDistributionList = null;
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
    public function setRepeatMenu($repeatMenu = null)
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

