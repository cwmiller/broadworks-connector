<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRedundancyParametersGetResponse
 *
 * Replaced by: SystemRedundancyParametersGetResponse16sp2
 *       
 *         Response to SystemRedundancyParametersGetRequest.
 *         Contains a list of system Redundancy parameters.
 *
 * @see SystemRedundancyParametersGetResponse16sp2
 * @see SystemRedundancyParametersGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:29550","type":"sequence"}]
 */
class SystemRedundancyParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName rollBackTimerMinutes
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:29550
     * @MinInclusive 0
     * @MaxInclusive 3600
     * @var int|null
     */
    protected $rollBackTimerMinutes = null;

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

