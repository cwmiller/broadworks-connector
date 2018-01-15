<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDirectedCallPickupWithBargeInGetResponse14sp7
 *
 * Response to UserDirectedCallPickupWithBargeInGetRequest14sp7.
 */
class UserDirectedCallPickupWithBargeInGetResponse14sp7 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

