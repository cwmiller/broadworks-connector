<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasscodeMenuKeysReadEntry
 *
 * The voice portal passcode menu keys.
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:2756","type":"sequence"}]
 */
class PasscodeMenuKeysReadEntry
{
    /**
     * @ElementName finishEnteringOrReenteringPasscode
     * @Type string
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2756
     * @Length 1
     * @Pattern \*|#
     * @var string|null
     */
    protected $finishEnteringOrReenteringPasscode = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2756
     * @Length 1
     * @Pattern \*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

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

