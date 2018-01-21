<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceDirectedCallPickupWithBargeInInfo
 *
 * This is the configuration parameters for Directed Call Pickup With Barge In
 * service
 */
class ProfileAndServiceDirectedCallPickupWithBargeInInfo
{

    /**
     * @ElementName enableBargeInWarningTone
     * @var bool|null
     */
    private $enableBargeInWarningTone = null;

    /**
     * @ElementName enableAutomaticTargetSelection
     * @var bool|null
     */
    private $enableAutomaticTargetSelection = null;

    /**
     * Getter for enableBargeInWarningTone
     *
     * @ElementName enableBargeInWarningTone
     * @return bool|null
     */
    public function getEnableBargeInWarningTone()
    {
        return $this->enableBargeInWarningTone;
    }

    /**
     * Setter for enableBargeInWarningTone
     *
     * @ElementName enableBargeInWarningTone
     * @param bool|null $enableBargeInWarningTone
     * @return $this
     */
    public function setEnableBargeInWarningTone($enableBargeInWarningTone)
    {
        $this->enableBargeInWarningTone = $enableBargeInWarningTone;
        return $this;
    }

    /**
     * Getter for enableAutomaticTargetSelection
     *
     * @ElementName enableAutomaticTargetSelection
     * @return bool|null
     */
    public function getEnableAutomaticTargetSelection()
    {
        return $this->enableAutomaticTargetSelection;
    }

    /**
     * Setter for enableAutomaticTargetSelection
     *
     * @ElementName enableAutomaticTargetSelection
     * @param bool|null $enableAutomaticTargetSelection
     * @return $this
     */
    public function setEnableAutomaticTargetSelection($enableAutomaticTargetSelection)
    {
        $this->enableAutomaticTargetSelection = $enableAutomaticTargetSelection;
        return $this;
    }


}

