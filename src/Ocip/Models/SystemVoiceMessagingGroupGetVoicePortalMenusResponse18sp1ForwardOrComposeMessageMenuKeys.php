<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse18sp1ForwardOrComposeMessageMenuKeys
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:37278","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse18sp1ForwardOrComposeMessageMenuKeys
{

    /**
     * @ElementName sendToPerson
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37278
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $sendToPerson = null;

    /**
     * @ElementName sendToAllGroupMembers
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37278
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $sendToAllGroupMembers = null;

    /**
     * @ElementName sendToDistributionList
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37278
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $sendToDistributionList = null;

    /**
     * @ElementName changeCurrentIntroductionOrMessage
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37278
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $changeCurrentIntroductionOrMessage = null;

    /**
     * @ElementName listenToCurrentIntroductionOrMessage
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37278
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $listenToCurrentIntroductionOrMessage = null;

    /**
     * @ElementName setOrClearUrgentIndicator
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37278
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $setOrClearUrgentIndicator = null;

    /**
     * @ElementName setOrClearConfidentialIndicator
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37278
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $setOrClearConfidentialIndicator = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37278
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37278
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $repeatMenu = null;

    /**
     * Getter for sendToPerson
     *
     * @return string
     */
    public function getSendToPerson()
    {
        return $this->sendToPerson instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendToPerson;
    }

    /**
     * Setter for sendToPerson
     *
     * @param string $sendToPerson
     * @return $this
     */
    public function setSendToPerson($sendToPerson)
    {
        $this->sendToPerson = $sendToPerson;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendToPerson()
    {
        $this->sendToPerson = null;
        return $this;
    }

    /**
     * Getter for sendToAllGroupMembers
     *
     * @return string
     */
    public function getSendToAllGroupMembers()
    {
        return $this->sendToAllGroupMembers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendToAllGroupMembers;
    }

    /**
     * Setter for sendToAllGroupMembers
     *
     * @param string $sendToAllGroupMembers
     * @return $this
     */
    public function setSendToAllGroupMembers($sendToAllGroupMembers)
    {
        $this->sendToAllGroupMembers = $sendToAllGroupMembers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendToAllGroupMembers()
    {
        $this->sendToAllGroupMembers = null;
        return $this;
    }

    /**
     * Getter for sendToDistributionList
     *
     * @return string
     */
    public function getSendToDistributionList()
    {
        return $this->sendToDistributionList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendToDistributionList;
    }

    /**
     * Setter for sendToDistributionList
     *
     * @param string $sendToDistributionList
     * @return $this
     */
    public function setSendToDistributionList($sendToDistributionList)
    {
        $this->sendToDistributionList = $sendToDistributionList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendToDistributionList()
    {
        $this->sendToDistributionList = null;
        return $this;
    }

    /**
     * Getter for changeCurrentIntroductionOrMessage
     *
     * @return string
     */
    public function getChangeCurrentIntroductionOrMessage()
    {
        return $this->changeCurrentIntroductionOrMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeCurrentIntroductionOrMessage;
    }

    /**
     * Setter for changeCurrentIntroductionOrMessage
     *
     * @param string $changeCurrentIntroductionOrMessage
     * @return $this
     */
    public function setChangeCurrentIntroductionOrMessage($changeCurrentIntroductionOrMessage)
    {
        $this->changeCurrentIntroductionOrMessage = $changeCurrentIntroductionOrMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChangeCurrentIntroductionOrMessage()
    {
        $this->changeCurrentIntroductionOrMessage = null;
        return $this;
    }

    /**
     * Getter for listenToCurrentIntroductionOrMessage
     *
     * @return string
     */
    public function getListenToCurrentIntroductionOrMessage()
    {
        return $this->listenToCurrentIntroductionOrMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listenToCurrentIntroductionOrMessage;
    }

    /**
     * Setter for listenToCurrentIntroductionOrMessage
     *
     * @param string $listenToCurrentIntroductionOrMessage
     * @return $this
     */
    public function setListenToCurrentIntroductionOrMessage($listenToCurrentIntroductionOrMessage)
    {
        $this->listenToCurrentIntroductionOrMessage = $listenToCurrentIntroductionOrMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetListenToCurrentIntroductionOrMessage()
    {
        $this->listenToCurrentIntroductionOrMessage = null;
        return $this;
    }

    /**
     * Getter for setOrClearUrgentIndicator
     *
     * @return string
     */
    public function getSetOrClearUrgentIndicator()
    {
        return $this->setOrClearUrgentIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setOrClearUrgentIndicator;
    }

    /**
     * Setter for setOrClearUrgentIndicator
     *
     * @param string $setOrClearUrgentIndicator
     * @return $this
     */
    public function setSetOrClearUrgentIndicator($setOrClearUrgentIndicator)
    {
        $this->setOrClearUrgentIndicator = $setOrClearUrgentIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSetOrClearUrgentIndicator()
    {
        $this->setOrClearUrgentIndicator = null;
        return $this;
    }

    /**
     * Getter for setOrClearConfidentialIndicator
     *
     * @return string
     */
    public function getSetOrClearConfidentialIndicator()
    {
        return $this->setOrClearConfidentialIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setOrClearConfidentialIndicator;
    }

    /**
     * Setter for setOrClearConfidentialIndicator
     *
     * @param string $setOrClearConfidentialIndicator
     * @return $this
     */
    public function setSetOrClearConfidentialIndicator($setOrClearConfidentialIndicator)
    {
        $this->setOrClearConfidentialIndicator = $setOrClearConfidentialIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSetOrClearConfidentialIndicator()
    {
        $this->setOrClearConfidentialIndicator = null;
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

