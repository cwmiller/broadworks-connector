<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceDirectedCallPickupWithBargeInInfo
 *
 * This is the configuration parameters for Directed Call Pickup With Barge In service
 *
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:4409","type":"sequence"}]
 */
class ProfileAndServiceDirectedCallPickupWithBargeInInfo
{

    /**
     * @ElementName enableBargeInWarningTone
     * @Type bool
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4409
     * @var bool|null
     */
    protected $enableBargeInWarningTone = null;

    /**
     * @ElementName enableAutomaticTargetSelection
     * @Type bool
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4409
     * @var bool|null
     */
    protected $enableAutomaticTargetSelection = null;

    /**
     * Getter for enableBargeInWarningTone
     *
     * @return bool
     */
    public function getEnableBargeInWarningTone()
    {
        return $this->enableBargeInWarningTone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableBargeInWarningTone;
    }

    /**
     * Setter for enableBargeInWarningTone
     *
     * @param bool $enableBargeInWarningTone
     * @return $this
     */
    public function setEnableBargeInWarningTone($enableBargeInWarningTone)
    {
        $this->enableBargeInWarningTone = $enableBargeInWarningTone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableBargeInWarningTone()
    {
        $this->enableBargeInWarningTone = null;
        return $this;
    }

    /**
     * Getter for enableAutomaticTargetSelection
     *
     * @return bool
     */
    public function getEnableAutomaticTargetSelection()
    {
        return $this->enableAutomaticTargetSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutomaticTargetSelection;
    }

    /**
     * Setter for enableAutomaticTargetSelection
     *
     * @param bool $enableAutomaticTargetSelection
     * @return $this
     */
    public function setEnableAutomaticTargetSelection($enableAutomaticTargetSelection)
    {
        $this->enableAutomaticTargetSelection = $enableAutomaticTargetSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutomaticTargetSelection()
    {
        $this->enableAutomaticTargetSelection = null;
        return $this;
    }


}

