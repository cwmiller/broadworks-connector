<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPasscodeMenuKeys
 *
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:31856","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPasscodeMenuKeys
{

    /**
     * @ElementName finishEnteringOrReenteringPasscode
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:31856
     * @var string|null
     */
    private $finishEnteringOrReenteringPasscode = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:31856
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * Getter for finishEnteringOrReenteringPasscode
     *
     * @return string
     */
    public function getFinishEnteringOrReenteringPasscode()
    {
        return $this->finishEnteringOrReenteringPasscode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->finishEnteringOrReenteringPasscode;
    }

    /**
     * Setter for finishEnteringOrReenteringPasscode
     *
     * @param string $finishEnteringOrReenteringPasscode
     * @return $this
     */
    public function setFinishEnteringOrReenteringPasscode($finishEnteringOrReenteringPasscode)
    {
        $this->finishEnteringOrReenteringPasscode = $finishEnteringOrReenteringPasscode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFinishEnteringOrReenteringPasscode()
    {
        $this->finishEnteringOrReenteringPasscode = null;
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


}

