<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PersonalizedNameMenuKeysModifyEntry
 *
 * The voice portal personalized name menu keys modify entry.
 *
 * @Groups [{"id":"1624846b7d87d3ab55e907c443fca9d6:2751","type":"sequence"}]
 */
class PersonalizedNameMenuKeysModifyEntry
{

    /**
     * @ElementName recordNewPersonalizedName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2751
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $recordNewPersonalizedName = null;

    /**
     * @ElementName listenToCurrentPersonalizedName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2751
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listenToCurrentPersonalizedName = null;

    /**
     * @ElementName deletePersonalizedName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2751
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deletePersonalizedName = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2751
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2751
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

    /**
     * Getter for recordNewPersonalizedName
     *
     * @return string|null
     */
    public function getRecordNewPersonalizedName()
    {
        return $this->recordNewPersonalizedName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordNewPersonalizedName;
    }

    /**
     * Setter for recordNewPersonalizedName
     *
     * @param string|null $recordNewPersonalizedName
     * @return $this
     */
    public function setRecordNewPersonalizedName($recordNewPersonalizedName)
    {
        if ($recordNewPersonalizedName === null) {
            $this->recordNewPersonalizedName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->recordNewPersonalizedName = $recordNewPersonalizedName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecordNewPersonalizedName()
    {
        $this->recordNewPersonalizedName = null;
        return $this;
    }

    /**
     * Getter for listenToCurrentPersonalizedName
     *
     * @return string|null
     */
    public function getListenToCurrentPersonalizedName()
    {
        return $this->listenToCurrentPersonalizedName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listenToCurrentPersonalizedName;
    }

    /**
     * Setter for listenToCurrentPersonalizedName
     *
     * @param string|null $listenToCurrentPersonalizedName
     * @return $this
     */
    public function setListenToCurrentPersonalizedName($listenToCurrentPersonalizedName)
    {
        if ($listenToCurrentPersonalizedName === null) {
            $this->listenToCurrentPersonalizedName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->listenToCurrentPersonalizedName = $listenToCurrentPersonalizedName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetListenToCurrentPersonalizedName()
    {
        $this->listenToCurrentPersonalizedName = null;
        return $this;
    }

    /**
     * Getter for deletePersonalizedName
     *
     * @return string|null
     */
    public function getDeletePersonalizedName()
    {
        return $this->deletePersonalizedName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deletePersonalizedName;
    }

    /**
     * Setter for deletePersonalizedName
     *
     * @param string|null $deletePersonalizedName
     * @return $this
     */
    public function setDeletePersonalizedName($deletePersonalizedName)
    {
        if ($deletePersonalizedName === null) {
            $this->deletePersonalizedName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deletePersonalizedName = $deletePersonalizedName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeletePersonalizedName()
    {
        $this->deletePersonalizedName = null;
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

