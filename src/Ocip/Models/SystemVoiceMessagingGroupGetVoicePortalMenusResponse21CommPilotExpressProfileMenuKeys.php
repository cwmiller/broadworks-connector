<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse21CommPilotExpressProfileMenuKeys
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:831","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse21CommPilotExpressProfileMenuKeys
{
    /**
     * @ElementName activateAvailableInOfficeProfile
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:831
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $activateAvailableInOfficeProfile = null;

    /**
     * @ElementName activateAvailableOutOfOfficeProfile
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:831
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $activateAvailableOutOfOfficeProfile = null;

    /**
     * @ElementName activateBusyProfile
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:831
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $activateBusyProfile = null;

    /**
     * @ElementName activateUnavailableProfile
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:831
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $activateUnavailableProfile = null;

    /**
     * @ElementName noProfile
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:831
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $noProfile = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:831
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:831
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $repeatMenu = null;

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

