<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse14ForwardOrComposeMessageMenuKeys
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse14ForwardOrComposeMessageMenuKeys
{

    /**
     * @ElementName sendToPerson
     * @var string|null
     */
    private $sendToPerson = null;

    /**
     * @ElementName sendToAllGroupMembers
     * @var string|null
     */
    private $sendToAllGroupMembers = null;

    /**
     * @ElementName sendToDistributionList
     * @var string|null
     */
    private $sendToDistributionList = null;

    /**
     * @ElementName changeCurrentIntroductionOrMessage
     * @var string|null
     */
    private $changeCurrentIntroductionOrMessage = null;

    /**
     * @ElementName listenToCurrentIntroductionOrMessage
     * @var string|null
     */
    private $listenToCurrentIntroductionOrMessage = null;

    /**
     * @ElementName setOrClearUrgentIndicator
     * @var string|null
     */
    private $setOrClearUrgentIndicator = null;

    /**
     * @ElementName setOrClearConfidentialIndicator
     * @var string|null
     */
    private $setOrClearConfidentialIndicator = null;

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
     * Getter for sendToPerson
     *
     * @ElementName sendToPerson
     * @return string|null
     */
    public function getSendToPerson()
    {
        return $this->sendToPerson;
    }

    /**
     * Setter for sendToPerson
     *
     * @ElementName sendToPerson
     * @param string|null $sendToPerson
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
     * @return string|null
     */
    public function getSendToAllGroupMembers()
    {
        return $this->sendToAllGroupMembers;
    }

    /**
     * Setter for sendToAllGroupMembers
     *
     * @ElementName sendToAllGroupMembers
     * @param string|null $sendToAllGroupMembers
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
     * @return string|null
     */
    public function getSendToDistributionList()
    {
        return $this->sendToDistributionList;
    }

    /**
     * Setter for sendToDistributionList
     *
     * @ElementName sendToDistributionList
     * @param string|null $sendToDistributionList
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
     * @return string|null
     */
    public function getChangeCurrentIntroductionOrMessage()
    {
        return $this->changeCurrentIntroductionOrMessage;
    }

    /**
     * Setter for changeCurrentIntroductionOrMessage
     *
     * @ElementName changeCurrentIntroductionOrMessage
     * @param string|null $changeCurrentIntroductionOrMessage
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
     * @return string|null
     */
    public function getListenToCurrentIntroductionOrMessage()
    {
        return $this->listenToCurrentIntroductionOrMessage;
    }

    /**
     * Setter for listenToCurrentIntroductionOrMessage
     *
     * @ElementName listenToCurrentIntroductionOrMessage
     * @param string|null $listenToCurrentIntroductionOrMessage
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
     * @return string|null
     */
    public function getSetOrClearUrgentIndicator()
    {
        return $this->setOrClearUrgentIndicator;
    }

    /**
     * Setter for setOrClearUrgentIndicator
     *
     * @ElementName setOrClearUrgentIndicator
     * @param string|null $setOrClearUrgentIndicator
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
     * @return string|null
     */
    public function getSetOrClearConfidentialIndicator()
    {
        return $this->setOrClearConfidentialIndicator;
    }

    /**
     * Setter for setOrClearConfidentialIndicator
     *
     * @ElementName setOrClearConfidentialIndicator
     * @param string|null $setOrClearConfidentialIndicator
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

