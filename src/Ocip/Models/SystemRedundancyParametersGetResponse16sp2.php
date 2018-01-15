<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRedundancyParametersGetResponse16sp2
 *
 * Response to SystemRedundancyParametersGetRequest16sp2.
 *         Contains a list of system Redundancy parameters.
 */
class SystemRedundancyParametersGetResponse16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName rollBackTimerMinutes
     * @var int|null
     */
    private $rollBackTimerMinutes = null;

    /**
     * @ElementName sendSipOptionMessageUponMigration
     * @var bool|null
     */
    private $sendSipOptionMessageUponMigration = null;

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

    /**
     * Getter for sendSipOptionMessageUponMigration
     *
     * @ElementName sendSipOptionMessageUponMigration
     * @return bool|null
     */
    public function getSendSipOptionMessageUponMigration()
    {
        return $this->sendSipOptionMessageUponMigration;
    }

    /**
     * Setter for sendSipOptionMessageUponMigration
     *
     * @ElementName sendSipOptionMessageUponMigration
     * @param bool|null $sendSipOptionMessageUponMigration
     * @return $this
     */
    public function setSendSipOptionMessageUponMigration($sendSipOptionMessageUponMigration)
    {
        $this->sendSipOptionMessageUponMigration = $sendSipOptionMessageUponMigration;
        return $this;
    }


}

