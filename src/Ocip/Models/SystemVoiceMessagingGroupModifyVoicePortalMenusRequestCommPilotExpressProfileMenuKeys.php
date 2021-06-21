<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestCommPilotExpressProfileMenuKeys
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:38843","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestCommPilotExpressProfileMenuKeys
{

    /**
     * @ElementName activateAvailableInOfficeProfile
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38843
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $activateAvailableInOfficeProfile = null;

    /**
     * @ElementName activateAvailableOutOfOfficeProfile
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38843
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $activateAvailableOutOfOfficeProfile = null;

    /**
     * @ElementName activateBusyProfile
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38843
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $activateBusyProfile = null;

    /**
     * @ElementName activateUnavailableProfile
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38843
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $activateUnavailableProfile = null;

    /**
     * @ElementName noProfile
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38843
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $noProfile = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38843
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38843
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

    /**
     * Getter for activateAvailableInOfficeProfile
     *
     * @return string|null
     */
    public function getActivateAvailableInOfficeProfile()
    {
        return $this->activateAvailableInOfficeProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activateAvailableInOfficeProfile;
    }

    /**
     * Setter for activateAvailableInOfficeProfile
     *
     * @param string|null $activateAvailableInOfficeProfile
     * @return $this
     */
    public function setActivateAvailableInOfficeProfile($activateAvailableInOfficeProfile = null)
    {
        if ($activateAvailableInOfficeProfile === null) {
            $this->activateAvailableInOfficeProfile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->activateAvailableInOfficeProfile = $activateAvailableInOfficeProfile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivateAvailableInOfficeProfile()
    {
        $this->activateAvailableInOfficeProfile = null;
        return $this;
    }

    /**
     * Getter for activateAvailableOutOfOfficeProfile
     *
     * @return string|null
     */
    public function getActivateAvailableOutOfOfficeProfile()
    {
        return $this->activateAvailableOutOfOfficeProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activateAvailableOutOfOfficeProfile;
    }

    /**
     * Setter for activateAvailableOutOfOfficeProfile
     *
     * @param string|null $activateAvailableOutOfOfficeProfile
     * @return $this
     */
    public function setActivateAvailableOutOfOfficeProfile($activateAvailableOutOfOfficeProfile = null)
    {
        if ($activateAvailableOutOfOfficeProfile === null) {
            $this->activateAvailableOutOfOfficeProfile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->activateAvailableOutOfOfficeProfile = $activateAvailableOutOfOfficeProfile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivateAvailableOutOfOfficeProfile()
    {
        $this->activateAvailableOutOfOfficeProfile = null;
        return $this;
    }

    /**
     * Getter for activateBusyProfile
     *
     * @return string|null
     */
    public function getActivateBusyProfile()
    {
        return $this->activateBusyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activateBusyProfile;
    }

    /**
     * Setter for activateBusyProfile
     *
     * @param string|null $activateBusyProfile
     * @return $this
     */
    public function setActivateBusyProfile($activateBusyProfile = null)
    {
        if ($activateBusyProfile === null) {
            $this->activateBusyProfile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->activateBusyProfile = $activateBusyProfile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivateBusyProfile()
    {
        $this->activateBusyProfile = null;
        return $this;
    }

    /**
     * Getter for activateUnavailableProfile
     *
     * @return string|null
     */
    public function getActivateUnavailableProfile()
    {
        return $this->activateUnavailableProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activateUnavailableProfile;
    }

    /**
     * Setter for activateUnavailableProfile
     *
     * @param string|null $activateUnavailableProfile
     * @return $this
     */
    public function setActivateUnavailableProfile($activateUnavailableProfile = null)
    {
        if ($activateUnavailableProfile === null) {
            $this->activateUnavailableProfile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->activateUnavailableProfile = $activateUnavailableProfile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivateUnavailableProfile()
    {
        $this->activateUnavailableProfile = null;
        return $this;
    }

    /**
     * Getter for noProfile
     *
     * @return string|null
     */
    public function getNoProfile()
    {
        return $this->noProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noProfile;
    }

    /**
     * Setter for noProfile
     *
     * @param string|null $noProfile
     * @return $this
     */
    public function setNoProfile($noProfile = null)
    {
        if ($noProfile === null) {
            $this->noProfile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->noProfile = $noProfile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoProfile()
    {
        $this->noProfile = null;
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

