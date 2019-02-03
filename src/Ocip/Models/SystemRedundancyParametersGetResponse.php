<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRedundancyParametersGetResponse
 *
 * Replaced by: SystemRedundancyParametersGetResponse16sp2
 *
 *                 Response to SystemRedundancyParametersGetRequest.
 *                 Contains a list of system Redundancy parameters.
 *
 * @see SystemRedundancyParametersGetResponse16sp2
 * @see SystemRedundancyParametersGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:22167","type":"sequence"}]
 */
class SystemRedundancyParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName rollBackTimerMinutes
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:22167
     * @var int|null
     */
    private $rollBackTimerMinutes = null;

    /**
     * Getter for rollBackTimerMinutes
     *
     * @return int
     */
    public function getRollBackTimerMinutes()
    {
        return $this->rollBackTimerMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rollBackTimerMinutes;
    }

    /**
     * Setter for rollBackTimerMinutes
     *
     * @param int $rollBackTimerMinutes
     * @return $this
     */
    public function setRollBackTimerMinutes($rollBackTimerMinutes)
    {
        $this->rollBackTimerMinutes = $rollBackTimerMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRollBackTimerMinutes()
    {
        $this->rollBackTimerMinutes = null;
        return $this;
    }


}

