<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse18sp1PersonalizedNameMenuKeys
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:37163","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse18sp1PersonalizedNameMenuKeys
{

    /**
     * @ElementName recordNewPersonalizedName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37163
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $recordNewPersonalizedName = null;

    /**
     * @ElementName listenToCurrentPersonalizedName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37163
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $listenToCurrentPersonalizedName = null;

    /**
     * @ElementName deletePersonalizedName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37163
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $deletePersonalizedName = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37163
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37163
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $repeatMenu = null;

    /**
     * Getter for recordNewPersonalizedName
     *
     * @return string
     */
    public function getRecordNewPersonalizedName()
    {
        return $this->recordNewPersonalizedName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordNewPersonalizedName;
    }

    /**
     * Setter for recordNewPersonalizedName
     *
     * @param string $recordNewPersonalizedName
     * @return $this
     */
    public function setRecordNewPersonalizedName($recordNewPersonalizedName)
    {
        $this->recordNewPersonalizedName = $recordNewPersonalizedName;
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
     * @return string
     */
    public function getListenToCurrentPersonalizedName()
    {
        return $this->listenToCurrentPersonalizedName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listenToCurrentPersonalizedName;
    }

    /**
     * Setter for listenToCurrentPersonalizedName
     *
     * @param string $listenToCurrentPersonalizedName
     * @return $this
     */
    public function setListenToCurrentPersonalizedName($listenToCurrentPersonalizedName)
    {
        $this->listenToCurrentPersonalizedName = $listenToCurrentPersonalizedName;
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
     * @return string
     */
    public function getDeletePersonalizedName()
    {
        return $this->deletePersonalizedName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deletePersonalizedName;
    }

    /**
     * Setter for deletePersonalizedName
     *
     * @param string $deletePersonalizedName
     * @return $this
     */
    public function setDeletePersonalizedName($deletePersonalizedName)
    {
        $this->deletePersonalizedName = $deletePersonalizedName;
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

