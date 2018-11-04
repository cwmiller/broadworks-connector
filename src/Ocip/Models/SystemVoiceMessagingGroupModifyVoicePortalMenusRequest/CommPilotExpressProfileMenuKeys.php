<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest;

/**
 * CommPilotExpressProfileMenuKeys
 */
class CommPilotExpressProfileMenuKeys
{

    /**
     * @ElementName activateAvailableInOfficeProfile
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $activateAvailableInOfficeProfile = null;

    /**
     * @ElementName activateAvailableOutOfOfficeProfile
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $activateAvailableOutOfOfficeProfile = null;

    /**
     * @ElementName activateBusyProfile
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $activateBusyProfile = null;

    /**
     * @ElementName activateUnavailableProfile
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $activateUnavailableProfile = null;

    /**
     * @ElementName noProfile
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $noProfile = null;

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
     * Getter for activateAvailableInOfficeProfile
     *
     * @ElementName activateAvailableInOfficeProfile
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getActivateAvailableInOfficeProfile()
    {
        return $this->activateAvailableInOfficeProfile;
    }

    /**
     * Setter for activateAvailableInOfficeProfile
     *
     * @ElementName activateAvailableInOfficeProfile
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $activateAvailableInOfficeProfile
     * @return $this
     */
    public function setActivateAvailableInOfficeProfile($activateAvailableInOfficeProfile)
    {
        $this->activateAvailableInOfficeProfile = $activateAvailableInOfficeProfile;
        return $this;
    }

    /**
     * Getter for activateAvailableOutOfOfficeProfile
     *
     * @ElementName activateAvailableOutOfOfficeProfile
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getActivateAvailableOutOfOfficeProfile()
    {
        return $this->activateAvailableOutOfOfficeProfile;
    }

    /**
     * Setter for activateAvailableOutOfOfficeProfile
     *
     * @ElementName activateAvailableOutOfOfficeProfile
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $activateAvailableOutOfOfficeProfile
     * @return $this
     */
    public function setActivateAvailableOutOfOfficeProfile($activateAvailableOutOfOfficeProfile)
    {
        $this->activateAvailableOutOfOfficeProfile = $activateAvailableOutOfOfficeProfile;
        return $this;
    }

    /**
     * Getter for activateBusyProfile
     *
     * @ElementName activateBusyProfile
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getActivateBusyProfile()
    {
        return $this->activateBusyProfile;
    }

    /**
     * Setter for activateBusyProfile
     *
     * @ElementName activateBusyProfile
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $activateBusyProfile
     * @return $this
     */
    public function setActivateBusyProfile($activateBusyProfile)
    {
        $this->activateBusyProfile = $activateBusyProfile;
        return $this;
    }

    /**
     * Getter for activateUnavailableProfile
     *
     * @ElementName activateUnavailableProfile
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getActivateUnavailableProfile()
    {
        return $this->activateUnavailableProfile;
    }

    /**
     * Setter for activateUnavailableProfile
     *
     * @ElementName activateUnavailableProfile
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $activateUnavailableProfile
     * @return $this
     */
    public function setActivateUnavailableProfile($activateUnavailableProfile)
    {
        $this->activateUnavailableProfile = $activateUnavailableProfile;
        return $this;
    }

    /**
     * Getter for noProfile
     *
     * @ElementName noProfile
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getNoProfile()
    {
        return $this->noProfile;
    }

    /**
     * Setter for noProfile
     *
     * @ElementName noProfile
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $noProfile
     * @return $this
     */
    public function setNoProfile($noProfile)
    {
        $this->noProfile = $noProfile;
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

