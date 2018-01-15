<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest;

/**
 * SendToDistributionListMenuKeys
 */
class SendToDistributionListMenuKeys
{

    /**
     * @ElementName sendMessageToSelectedDistributionList
     * @var string|null
     */
    private $sendMessageToSelectedDistributionList = null;

    /**
     * @ElementName selectDistributionList
     * @var string|null
     */
    private $selectDistributionList = null;

    /**
     * @ElementName reviewSelectedDistributionList
     * @var string|null
     */
    private $reviewSelectedDistributionList = null;

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
     * Getter for sendMessageToSelectedDistributionList
     *
     * @ElementName sendMessageToSelectedDistributionList
     * @return string|null
     */
    public function getSendMessageToSelectedDistributionList()
    {
        return $this->sendMessageToSelectedDistributionList;
    }

    /**
     * Setter for sendMessageToSelectedDistributionList
     *
     * @ElementName sendMessageToSelectedDistributionList
     * @param string|null $sendMessageToSelectedDistributionList
     * @return $this
     */
    public function setSendMessageToSelectedDistributionList($sendMessageToSelectedDistributionList)
    {
        $this->sendMessageToSelectedDistributionList = $sendMessageToSelectedDistributionList;
        return $this;
    }

    /**
     * Getter for selectDistributionList
     *
     * @ElementName selectDistributionList
     * @return string|null
     */
    public function getSelectDistributionList()
    {
        return $this->selectDistributionList;
    }

    /**
     * Setter for selectDistributionList
     *
     * @ElementName selectDistributionList
     * @param string|null $selectDistributionList
     * @return $this
     */
    public function setSelectDistributionList($selectDistributionList)
    {
        $this->selectDistributionList = $selectDistributionList;
        return $this;
    }

    /**
     * Getter for reviewSelectedDistributionList
     *
     * @ElementName reviewSelectedDistributionList
     * @return string|null
     */
    public function getReviewSelectedDistributionList()
    {
        return $this->reviewSelectedDistributionList;
    }

    /**
     * Setter for reviewSelectedDistributionList
     *
     * @ElementName reviewSelectedDistributionList
     * @param string|null $reviewSelectedDistributionList
     * @return $this
     */
    public function setReviewSelectedDistributionList($reviewSelectedDistributionList)
    {
        $this->reviewSelectedDistributionList = $reviewSelectedDistributionList;
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

