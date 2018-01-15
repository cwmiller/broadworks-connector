<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19;

/**
 * PersonalizedNameMenuKeys
 */
class PersonalizedNameMenuKeys
{

    /**
     * @ElementName recordNewPersonalizedName
     * @var string|null
     */
    private $recordNewPersonalizedName = null;

    /**
     * @ElementName listenToCurrentPersonalizedName
     * @var string|null
     */
    private $listenToCurrentPersonalizedName = null;

    /**
     * @ElementName deletePersonalizedName
     * @var string|null
     */
    private $deletePersonalizedName = null;

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
     * Getter for recordNewPersonalizedName
     *
     * @ElementName recordNewPersonalizedName
     * @return string|null
     */
    public function getRecordNewPersonalizedName()
    {
        return $this->recordNewPersonalizedName;
    }

    /**
     * Setter for recordNewPersonalizedName
     *
     * @ElementName recordNewPersonalizedName
     * @param string|null $recordNewPersonalizedName
     * @return $this
     */
    public function setRecordNewPersonalizedName($recordNewPersonalizedName)
    {
        $this->recordNewPersonalizedName = $recordNewPersonalizedName;
        return $this;
    }

    /**
     * Getter for listenToCurrentPersonalizedName
     *
     * @ElementName listenToCurrentPersonalizedName
     * @return string|null
     */
    public function getListenToCurrentPersonalizedName()
    {
        return $this->listenToCurrentPersonalizedName;
    }

    /**
     * Setter for listenToCurrentPersonalizedName
     *
     * @ElementName listenToCurrentPersonalizedName
     * @param string|null $listenToCurrentPersonalizedName
     * @return $this
     */
    public function setListenToCurrentPersonalizedName($listenToCurrentPersonalizedName)
    {
        $this->listenToCurrentPersonalizedName = $listenToCurrentPersonalizedName;
        return $this;
    }

    /**
     * Getter for deletePersonalizedName
     *
     * @ElementName deletePersonalizedName
     * @return string|null
     */
    public function getDeletePersonalizedName()
    {
        return $this->deletePersonalizedName;
    }

    /**
     * Setter for deletePersonalizedName
     *
     * @ElementName deletePersonalizedName
     * @param string|null $deletePersonalizedName
     * @return $this
     */
    public function setDeletePersonalizedName($deletePersonalizedName)
    {
        $this->deletePersonalizedName = $deletePersonalizedName;
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

