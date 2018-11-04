<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19;

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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $selectDistributionList = null;

    /**
     * @ElementName reviewSelectedDistributionList
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $reviewSelectedDistributionList = null;

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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSelectDistributionList()
    {
        return $this->selectDistributionList;
    }

    /**
     * Setter for selectDistributionList
     *
     * @ElementName selectDistributionList
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $selectDistributionList
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getReviewSelectedDistributionList()
    {
        return $this->reviewSelectedDistributionList;
    }

    /**
     * Setter for reviewSelectedDistributionList
     *
     * @ElementName reviewSelectedDistributionList
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $reviewSelectedDistributionList
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

