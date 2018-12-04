<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressProfileMenuKeysReadEntry
 *
 * The voice portal commPilot express profile menu keys.
 *
 * @Groups [{"id":"1624846b7d87d3ab55e907c443fca9d6:2396","type":"sequence"}]
 */
class CommPilotExpressProfileMenuKeysReadEntry
{

    /**
     * @ElementName activateAvailableInOfficeProfile
     * @Type string
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2396
     * @var string|null
     */
    private $activateAvailableInOfficeProfile = null;

    /**
     * @ElementName activateAvailableOutOfOfficeProfile
     * @Type string
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2396
     * @var string|null
     */
    private $activateAvailableOutOfOfficeProfile = null;

    /**
     * @ElementName activateBusyProfile
     * @Type string
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2396
     * @var string|null
     */
    private $activateBusyProfile = null;

    /**
     * @ElementName activateUnavailableProfile
     * @Type string
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2396
     * @var string|null
     */
    private $activateUnavailableProfile = null;

    /**
     * @ElementName noProfile
     * @Type string
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2396
     * @var string|null
     */
    private $noProfile = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2396
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2396
     * @var string|null
     */
    private $repeatMenu = null;

    /**
     * Getter for activateAvailableInOfficeProfile
     *
     * @return string
     */
    public function getActivateAvailableInOfficeProfile()
    {
        return $this->activateAvailableInOfficeProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activateAvailableInOfficeProfile;
    }

    /**
     * Setter for activateAvailableInOfficeProfile
     *
     * @param string $activateAvailableInOfficeProfile
     * @return $this
     */
    public function setActivateAvailableInOfficeProfile($activateAvailableInOfficeProfile)
    {
        $this->activateAvailableInOfficeProfile = $activateAvailableInOfficeProfile;
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
     * @return string
     */
    public function getActivateAvailableOutOfOfficeProfile()
    {
        return $this->activateAvailableOutOfOfficeProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activateAvailableOutOfOfficeProfile;
    }

    /**
     * Setter for activateAvailableOutOfOfficeProfile
     *
     * @param string $activateAvailableOutOfOfficeProfile
     * @return $this
     */
    public function setActivateAvailableOutOfOfficeProfile($activateAvailableOutOfOfficeProfile)
    {
        $this->activateAvailableOutOfOfficeProfile = $activateAvailableOutOfOfficeProfile;
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
     * @return string
     */
    public function getActivateBusyProfile()
    {
        return $this->activateBusyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activateBusyProfile;
    }

    /**
     * Setter for activateBusyProfile
     *
     * @param string $activateBusyProfile
     * @return $this
     */
    public function setActivateBusyProfile($activateBusyProfile)
    {
        $this->activateBusyProfile = $activateBusyProfile;
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
     * @return string
     */
    public function getActivateUnavailableProfile()
    {
        return $this->activateUnavailableProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activateUnavailableProfile;
    }

    /**
     * Setter for activateUnavailableProfile
     *
     * @param string $activateUnavailableProfile
     * @return $this
     */
    public function setActivateUnavailableProfile($activateUnavailableProfile)
    {
        $this->activateUnavailableProfile = $activateUnavailableProfile;
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
     * @return string
     */
    public function getNoProfile()
    {
        return $this->noProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noProfile;
    }

    /**
     * Setter for noProfile
     *
     * @param string $noProfile
     * @return $this
     */
    public function setNoProfile($noProfile)
    {
        $this->noProfile = $noProfile;
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

