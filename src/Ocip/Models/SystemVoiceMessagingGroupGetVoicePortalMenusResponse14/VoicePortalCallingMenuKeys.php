<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse14;

/**
 * VoicePortalCallingMenuKeys
 */
class VoicePortalCallingMenuKeys
{

    /**
     * @ElementName endCurrentCallAndGoBackToPreviousMenu
     * @var string|null
     */
    private $endCurrentCallAndGoBackToPreviousMenu = null;

    /**
     * @ElementName returnToPreviousMenu
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * Getter for endCurrentCallAndGoBackToPreviousMenu
     *
     * @ElementName endCurrentCallAndGoBackToPreviousMenu
     * @return string|null
     */
    public function getEndCurrentCallAndGoBackToPreviousMenu()
    {
        return $this->endCurrentCallAndGoBackToPreviousMenu;
    }

    /**
     * Setter for endCurrentCallAndGoBackToPreviousMenu
     *
     * @ElementName endCurrentCallAndGoBackToPreviousMenu
     * @param string|null $endCurrentCallAndGoBackToPreviousMenu
     * @return $this
     */
    public function setEndCurrentCallAndGoBackToPreviousMenu($endCurrentCallAndGoBackToPreviousMenu)
    {
        $this->endCurrentCallAndGoBackToPreviousMenu = $endCurrentCallAndGoBackToPreviousMenu;
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


}

