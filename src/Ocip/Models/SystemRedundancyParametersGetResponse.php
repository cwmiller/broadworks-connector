<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRedundancyParametersGetResponse
 *
 * Replaced by: SystemRedundancyParametersGetResponse16sp2
 *       
 *         Response to SystemRedundancyParametersGetRequest.
 *         Contains a list of system Redundancy parameters.
 */
class SystemRedundancyParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName rollBackTimerMinutes
     * @var int|null
     */
    private $rollBackTimerMinutes = null;

    /**
     * Getter for rollBackTimerMinutes
     *
     * @ElementName rollBackTimerMinutes
     * @return int|null
     */
    public function getRollBackTimerMinutes()
    {
        return $this->rollBackTimerMinutes;
    }

    /**
     * Setter for rollBackTimerMinutes
     *
     * @ElementName rollBackTimerMinutes
     * @param int|null $rollBackTimerMinutes
     * @return $this
     */
    public function setRollBackTimerMinutes($rollBackTimerMinutes)
    {
        $this->rollBackTimerMinutes = $rollBackTimerMinutes;
        return $this;
    }


}

