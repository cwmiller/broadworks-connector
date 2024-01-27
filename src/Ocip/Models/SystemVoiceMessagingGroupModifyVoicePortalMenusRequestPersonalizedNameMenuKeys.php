<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPersonalizedNameMenuKeys
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:39608","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPersonalizedNameMenuKeys
{
    /**
     * @ElementName recordNewPersonalizedName
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39608
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $recordNewPersonalizedName = null;

    /**
     * @ElementName listenToCurrentPersonalizedName
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39608
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $listenToCurrentPersonalizedName = null;

    /**
     * @ElementName deletePersonalizedName
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39608
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $deletePersonalizedName = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39608
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39608
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $repeatMenu = null;

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
    public function setRecordNewPersonalizedName($recordNewPersonalizedName = null)
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
    public function setListenToCurrentPersonalizedName($listenToCurrentPersonalizedName = null)
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
    public function setDeletePersonalizedName($deletePersonalizedName = null)
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
    public function setRepeatMenu($repeatMenu = null)
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

