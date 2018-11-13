<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDirectedCallPickupWithBargeInGetResponse14sp7
 *
 * Response to UserDirectedCallPickupWithBargeInGetRequest14sp7.
 *
 * @see UserDirectedCallPickupWithBargeInGetRequest14sp7
 */
class UserDirectedCallPickupWithBargeInGetResponse14sp7 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableBargeInWarningTone
     * @Type bool
     * @var bool|null
     */
    private $enableBargeInWarningTone = null;

    /**
     * @ElementName enableAutomaticTargetSelection
     * @Type bool
     * @var bool|null
     */
    private $enableAutomaticTargetSelection = null;

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

