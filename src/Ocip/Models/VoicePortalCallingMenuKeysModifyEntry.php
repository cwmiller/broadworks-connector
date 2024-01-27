<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoicePortalCallingMenuKeysModifyEntry
 *
 * The voice portal calling menu keys modify entry.
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:3256","type":"sequence"}]
 */
class VoicePortalCallingMenuKeysModifyEntry
{
    /**
     * @ElementName endCurrentCallAndGoBackToPreviousMenu
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:3256
     * @MinLength 1
     * @MaxLength 3
     * @Pattern ([0-9]|\*|#){0,3}
     * @var string|null
     */
    protected $endCurrentCallAndGoBackToPreviousMenu = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:3256
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * Getter for endCurrentCallAndGoBackToPreviousMenu
     *
     * @return string
     */
    public function getEndCurrentCallAndGoBackToPreviousMenu()
    {
        return $this->endCurrentCallAndGoBackToPreviousMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endCurrentCallAndGoBackToPreviousMenu;
    }

    /**
     * Setter for endCurrentCallAndGoBackToPreviousMenu
     *
     * @param string $endCurrentCallAndGoBackToPreviousMenu
     * @return $this
     */
    public function setEndCurrentCallAndGoBackToPreviousMenu($endCurrentCallAndGoBackToPreviousMenu)
    {
        $this->endCurrentCallAndGoBackToPreviousMenu = $endCurrentCallAndGoBackToPreviousMenu;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndCurrentCallAndGoBackToPreviousMenu()
    {
        $this->endCurrentCallAndGoBackToPreviousMenu = null;
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

