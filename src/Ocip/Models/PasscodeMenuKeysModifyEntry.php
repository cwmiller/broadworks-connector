<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasscodeMenuKeysModifyEntry
 *
 * The voice portal passcode menu keys modify entry.
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:2744","type":"sequence"}]
 */
class PasscodeMenuKeysModifyEntry
{
    /**
     * @ElementName finishEnteringOrReenteringPasscode
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2744
     * @Length 1
     * @Pattern \*|#
     * @var string|null
     */
    protected $finishEnteringOrReenteringPasscode = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2744
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

