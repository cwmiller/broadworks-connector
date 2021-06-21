<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse19PasscodeMenuKeys
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:37619","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse19PasscodeMenuKeys
{

    /**
     * @ElementName finishEnteringOrReenteringPasscode
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37619
     * @Length 1
     * @Pattern \*|#
     * @var string|null
     */
    private $finishEnteringOrReenteringPasscode = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37619
     * @Length 1
     * @Pattern \*|#
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

