<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoicePortalCallingMenuKeys
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:874","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoicePortalCallingMenuKeys
{

    /**
     * @ElementName endCurrentCallAndGoBackToPreviousMenu
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:874
     * @MinLength 1
     * @MaxLength 3
     * @Pattern ([0-9]|\*|#){0,3}
     * @var string|null
     */
    private $endCurrentCallAndGoBackToPreviousMenu = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:874
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $returnToPreviousMenu = null;

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

