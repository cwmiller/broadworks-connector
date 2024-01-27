<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSelectDistributionListMenuKeys
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:39765","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSelectDistributionListMenuKeys
{
    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39765
     * @Length 1
     * @Pattern \*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenuOrFinishEnteringDistributionListNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39765
     * @Length 1
     * @Pattern \*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $repeatMenuOrFinishEnteringDistributionListNumber = null;

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
     * Getter for repeatMenuOrFinishEnteringDistributionListNumber
     *
     * @return string|null
     */
    public function getRepeatMenuOrFinishEnteringDistributionListNumber()
    {
        return $this->repeatMenuOrFinishEnteringDistributionListNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->repeatMenuOrFinishEnteringDistributionListNumber;
    }

    /**
     * Setter for repeatMenuOrFinishEnteringDistributionListNumber
     *
     * @param string|null $repeatMenuOrFinishEnteringDistributionListNumber
     * @return $this
     */
    public function setRepeatMenuOrFinishEnteringDistributionListNumber($repeatMenuOrFinishEnteringDistributionListNumber = null)
    {
        if ($repeatMenuOrFinishEnteringDistributionListNumber === null) {
            $this->repeatMenuOrFinishEnteringDistributionListNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->repeatMenuOrFinishEnteringDistributionListNumber = $repeatMenuOrFinishEnteringDistributionListNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRepeatMenuOrFinishEnteringDistributionListNumber()
    {
        $this->repeatMenuOrFinishEnteringDistributionListNumber = null;
        return $this;
    }
}

