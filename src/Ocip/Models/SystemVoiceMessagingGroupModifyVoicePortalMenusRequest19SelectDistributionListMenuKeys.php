<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SelectDistributionListMenuKeys
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SelectDistributionListMenuKeys
{

    /**
     * @ElementName returnToPreviousMenu
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenuOrFinishEnteringDistributionListNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenuOrFinishEnteringDistributionListNumber = null;

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
     * Getter for repeatMenuOrFinishEnteringDistributionListNumber
     *
     * @ElementName repeatMenuOrFinishEnteringDistributionListNumber
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRepeatMenuOrFinishEnteringDistributionListNumber()
    {
        return $this->repeatMenuOrFinishEnteringDistributionListNumber;
    }

    /**
     * Setter for repeatMenuOrFinishEnteringDistributionListNumber
     *
     * @ElementName repeatMenuOrFinishEnteringDistributionListNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $repeatMenuOrFinishEnteringDistributionListNumber
     * @return $this
     */
    public function setRepeatMenuOrFinishEnteringDistributionListNumber($repeatMenuOrFinishEnteringDistributionListNumber)
    {
        $this->repeatMenuOrFinishEnteringDistributionListNumber = $repeatMenuOrFinishEnteringDistributionListNumber;
        return $this;
    }


}

