<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SendToDistributionListMenuKeysReadEntry
 *
 * The voice portal send to distribution list menu keys.
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:3110","type":"sequence"}]
 */
class SendToDistributionListMenuKeysReadEntry
{

    /**
     * @ElementName sendMessageToSelectedDistributionList
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3110
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $sendMessageToSelectedDistributionList = null;

    /**
     * @ElementName selectDistributionList
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3110
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $selectDistributionList = null;

    /**
     * @ElementName reviewSelectedDistributionList
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3110
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $reviewSelectedDistributionList = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3110
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3110
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $repeatMenu = null;

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
     * @return string
     */
    public function getSelectDistributionList()
    {
        return $this->selectDistributionList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->selectDistributionList;
    }

    /**
     * Setter for selectDistributionList
     *
     * @param string $selectDistributionList
     * @return $this
     */
    public function setSelectDistributionList($selectDistributionList)
    {
        $this->selectDistributionList = $selectDistributionList;
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
     * @return string
     */
    public function getReviewSelectedDistributionList()
    {
        return $this->reviewSelectedDistributionList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reviewSelectedDistributionList;
    }

    /**
     * Setter for reviewSelectedDistributionList
     *
     * @param string $reviewSelectedDistributionList
     * @return $this
     */
    public function setReviewSelectedDistributionList($reviewSelectedDistributionList)
    {
        $this->reviewSelectedDistributionList = $reviewSelectedDistributionList;
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

