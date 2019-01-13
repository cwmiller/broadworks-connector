<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ForwardOrComposeMessageMenuKeys
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:1478","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ForwardOrComposeMessageMenuKeys
{

    /**
     * @ElementName sendToPerson
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1478
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sendToPerson = null;

    /**
     * @ElementName sendToAllGroupMembers
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1478
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sendToAllGroupMembers = null;

    /**
     * @ElementName sendToDistributionList
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1478
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sendToDistributionList = null;

    /**
     * @ElementName changeCurrentIntroductionOrMessage
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1478
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $changeCurrentIntroductionOrMessage = null;

    /**
     * @ElementName listenToCurrentIntroductionOrMessage
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1478
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listenToCurrentIntroductionOrMessage = null;

    /**
     * @ElementName setOrClearUrgentIndicator
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1478
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $setOrClearUrgentIndicator = null;

    /**
     * @ElementName setOrClearConfidentialIndicator
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1478
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $setOrClearConfidentialIndicator = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1478
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1478
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

    /**
     * Getter for sendToPerson
     *
     * @return string|null
     */
    public function getSendToPerson()
    {
        return $this->sendToPerson instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendToPerson;
    }

    /**
     * Setter for sendToPerson
     *
     * @param string|null $sendToPerson
     * @return $this
     */
    public function setSendToPerson($sendToPerson)
    {
        if ($sendToPerson === null) {
            $this->sendToPerson = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->sendToPerson = $sendToPerson;
        }
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
     * @return string|null
     */
    public function getSendToAllGroupMembers()
    {
        return $this->sendToAllGroupMembers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendToAllGroupMembers;
    }

    /**
     * Setter for sendToAllGroupMembers
     *
     * @param string|null $sendToAllGroupMembers
     * @return $this
     */
    public function setSendToAllGroupMembers($sendToAllGroupMembers)
    {
        if ($sendToAllGroupMembers === null) {
            $this->sendToAllGroupMembers = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->sendToAllGroupMembers = $sendToAllGroupMembers;
        }
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
     * @return string|null
     */
    public function getSendToDistributionList()
    {
        return $this->sendToDistributionList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendToDistributionList;
    }

    /**
     * Setter for sendToDistributionList
     *
     * @param string|null $sendToDistributionList
     * @return $this
     */
    public function setSendToDistributionList($sendToDistributionList)
    {
        if ($sendToDistributionList === null) {
            $this->sendToDistributionList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->sendToDistributionList = $sendToDistributionList;
        }
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
     * @return string|null
     */
    public function getChangeCurrentIntroductionOrMessage()
    {
        return $this->changeCurrentIntroductionOrMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeCurrentIntroductionOrMessage;
    }

    /**
     * Setter for changeCurrentIntroductionOrMessage
     *
     * @param string|null $changeCurrentIntroductionOrMessage
     * @return $this
     */
    public function setChangeCurrentIntroductionOrMessage($changeCurrentIntroductionOrMessage)
    {
        if ($changeCurrentIntroductionOrMessage === null) {
            $this->changeCurrentIntroductionOrMessage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->changeCurrentIntroductionOrMessage = $changeCurrentIntroductionOrMessage;
        }
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
     * @return string|null
     */
    public function getListenToCurrentIntroductionOrMessage()
    {
        return $this->listenToCurrentIntroductionOrMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listenToCurrentIntroductionOrMessage;
    }

    /**
     * Setter for listenToCurrentIntroductionOrMessage
     *
     * @param string|null $listenToCurrentIntroductionOrMessage
     * @return $this
     */
    public function setListenToCurrentIntroductionOrMessage($listenToCurrentIntroductionOrMessage)
    {
        if ($listenToCurrentIntroductionOrMessage === null) {
            $this->listenToCurrentIntroductionOrMessage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->listenToCurrentIntroductionOrMessage = $listenToCurrentIntroductionOrMessage;
        }
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
     * @return string|null
     */
    public function getSetOrClearUrgentIndicator()
    {
        return $this->setOrClearUrgentIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setOrClearUrgentIndicator;
    }

    /**
     * Setter for setOrClearUrgentIndicator
     *
     * @param string|null $setOrClearUrgentIndicator
     * @return $this
     */
    public function setSetOrClearUrgentIndicator($setOrClearUrgentIndicator)
    {
        if ($setOrClearUrgentIndicator === null) {
            $this->setOrClearUrgentIndicator = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->setOrClearUrgentIndicator = $setOrClearUrgentIndicator;
        }
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
     * @return string|null
     */
    public function getSetOrClearConfidentialIndicator()
    {
        return $this->setOrClearConfidentialIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setOrClearConfidentialIndicator;
    }

    /**
     * Setter for setOrClearConfidentialIndicator
     *
     * @param string|null $setOrClearConfidentialIndicator
     * @return $this
     */
    public function setSetOrClearConfidentialIndicator($setOrClearConfidentialIndicator)
    {
        if ($setOrClearConfidentialIndicator === null) {
            $this->setOrClearConfidentialIndicator = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->setOrClearConfidentialIndicator = $setOrClearConfidentialIndicator;
        }
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
