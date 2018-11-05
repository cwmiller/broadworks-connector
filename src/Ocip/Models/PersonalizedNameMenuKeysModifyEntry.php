<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PersonalizedNameMenuKeysModifyEntry
 *
 * The voice portal personalized name menu keys modify entry.
 */
class PersonalizedNameMenuKeysModifyEntry
{

    /**
     * @ElementName recordNewPersonalizedName
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $recordNewPersonalizedName = null;

    /**
     * @ElementName listenToCurrentPersonalizedName
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listenToCurrentPersonalizedName = null;

    /**
     * @ElementName deletePersonalizedName
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deletePersonalizedName = null;

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
     * Getter for recordNewPersonalizedName
     *
     * @ElementName recordNewPersonalizedName
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRecordNewPersonalizedName()
    {
        return $this->recordNewPersonalizedName;
    }

    /**
     * Setter for recordNewPersonalizedName
     *
     * @ElementName recordNewPersonalizedName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $recordNewPersonalizedName
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getListenToCurrentPersonalizedName()
    {
        return $this->listenToCurrentPersonalizedName;
    }

    /**
     * Setter for listenToCurrentPersonalizedName
     *
     * @ElementName listenToCurrentPersonalizedName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $listenToCurrentPersonalizedName
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDeletePersonalizedName()
    {
        return $this->deletePersonalizedName;
    }

    /**
     * Setter for deletePersonalizedName
     *
     * @ElementName deletePersonalizedName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $deletePersonalizedName
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

