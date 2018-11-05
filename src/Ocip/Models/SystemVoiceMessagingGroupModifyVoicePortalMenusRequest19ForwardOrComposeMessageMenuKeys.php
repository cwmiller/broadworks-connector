<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ForwardOrComposeMessageMenuKeys
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ForwardOrComposeMessageMenuKeys
{

    /**
     * @ElementName sendToPerson
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sendToPerson = null;

    /**
     * @ElementName sendToAllGroupMembers
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sendToAllGroupMembers = null;

    /**
     * @ElementName sendToDistributionList
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sendToDistributionList = null;

    /**
     * @ElementName changeCurrentIntroductionOrMessage
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $changeCurrentIntroductionOrMessage = null;

    /**
     * @ElementName listenToCurrentIntroductionOrMessage
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listenToCurrentIntroductionOrMessage = null;

    /**
     * @ElementName setOrClearUrgentIndicator
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $setOrClearUrgentIndicator = null;

    /**
     * @ElementName setOrClearConfidentialIndicator
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $setOrClearConfidentialIndicator = null;

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
     * Getter for sendToPerson
     *
     * @ElementName sendToPerson
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSendToPerson()
    {
        return $this->sendToPerson;
    }

    /**
     * Setter for sendToPerson
     *
     * @ElementName sendToPerson
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $sendToPerson
     * @return $this
     */
    public function setSendToPerson($sendToPerson)
    {
        $this->sendToPerson = $sendToPerson;
        return $this;
    }

    /**
     * Getter for sendToAllGroupMembers
     *
     * @ElementName sendToAllGroupMembers
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSendToAllGroupMembers()
    {
        return $this->sendToAllGroupMembers;
    }

    /**
     * Setter for sendToAllGroupMembers
     *
     * @ElementName sendToAllGroupMembers
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $sendToAllGroupMembers
     * @return $this
     */
    public function setSendToAllGroupMembers($sendToAllGroupMembers)
    {
        $this->sendToAllGroupMembers = $sendToAllGroupMembers;
        return $this;
    }

    /**
     * Getter for sendToDistributionList
     *
     * @ElementName sendToDistributionList
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSendToDistributionList()
    {
        return $this->sendToDistributionList;
    }

    /**
     * Setter for sendToDistributionList
     *
     * @ElementName sendToDistributionList
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $sendToDistributionList
     * @return $this
     */
    public function setSendToDistributionList($sendToDistributionList)
    {
        $this->sendToDistributionList = $sendToDistributionList;
        return $this;
    }

    /**
     * Getter for changeCurrentIntroductionOrMessage
     *
     * @ElementName changeCurrentIntroductionOrMessage
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getChangeCurrentIntroductionOrMessage()
    {
        return $this->changeCurrentIntroductionOrMessage;
    }

    /**
     * Setter for changeCurrentIntroductionOrMessage
     *
     * @ElementName changeCurrentIntroductionOrMessage
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $changeCurrentIntroductionOrMessage
     * @return $this
     */
    public function setChangeCurrentIntroductionOrMessage($changeCurrentIntroductionOrMessage)
    {
        $this->changeCurrentIntroductionOrMessage = $changeCurrentIntroductionOrMessage;
        return $this;
    }

    /**
     * Getter for listenToCurrentIntroductionOrMessage
     *
     * @ElementName listenToCurrentIntroductionOrMessage
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getListenToCurrentIntroductionOrMessage()
    {
        return $this->listenToCurrentIntroductionOrMessage;
    }

    /**
     * Setter for listenToCurrentIntroductionOrMessage
     *
     * @ElementName listenToCurrentIntroductionOrMessage
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $listenToCurrentIntroductionOrMessage
     * @return $this
     */
    public function setListenToCurrentIntroductionOrMessage($listenToCurrentIntroductionOrMessage)
    {
        $this->listenToCurrentIntroductionOrMessage = $listenToCurrentIntroductionOrMessage;
        return $this;
    }

    /**
     * Getter for setOrClearUrgentIndicator
     *
     * @ElementName setOrClearUrgentIndicator
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSetOrClearUrgentIndicator()
    {
        return $this->setOrClearUrgentIndicator;
    }

    /**
     * Setter for setOrClearUrgentIndicator
     *
     * @ElementName setOrClearUrgentIndicator
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $setOrClearUrgentIndicator
     * @return $this
     */
    public function setSetOrClearUrgentIndicator($setOrClearUrgentIndicator)
    {
        $this->setOrClearUrgentIndicator = $setOrClearUrgentIndicator;
        return $this;
    }

    /**
     * Getter for setOrClearConfidentialIndicator
     *
     * @ElementName setOrClearConfidentialIndicator
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSetOrClearConfidentialIndicator()
    {
        return $this->setOrClearConfidentialIndicator;
    }

    /**
     * Setter for setOrClearConfidentialIndicator
     *
     * @ElementName setOrClearConfidentialIndicator
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $setOrClearConfidentialIndicator
     * @return $this
     */
    public function setSetOrClearConfidentialIndicator($setOrClearConfidentialIndicator)
    {
        $this->setOrClearConfidentialIndicator = $setOrClearConfidentialIndicator;
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

