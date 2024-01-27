<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRedundancyParametersGetResponse16sp2
 *
 * Response to SystemRedundancyParametersGetRequest16sp2.
 *         Contains a list of system Redundancy parameters.
 *
 * @see SystemRedundancyParametersGetRequest16sp2
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:15123","type":"sequence"}]
 */
class SystemRedundancyParametersGetResponse16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName rollBackTimerMinutes
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:15123
     * @MinInclusive 0
     * @MaxInclusive 3600
     * @var int|null
     */
    protected $rollBackTimerMinutes = null;

    /**
     * @ElementName sendSipOptionMessageUponMigration
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:15123
     * @var bool|null
     */
    protected $sendSipOptionMessageUponMigration = null;

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

    /**
     * Getter for sendSipOptionMessageUponMigration
     *
     * @return bool
     */
    public function getSendSipOptionMessageUponMigration()
    {
        return $this->sendSipOptionMessageUponMigration instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendSipOptionMessageUponMigration;
    }

    /**
     * Setter for sendSipOptionMessageUponMigration
     *
     * @param bool $sendSipOptionMessageUponMigration
     * @return $this
     */
    public function setSendSipOptionMessageUponMigration($sendSipOptionMessageUponMigration)
    {
        $this->sendSipOptionMessageUponMigration = $sendSipOptionMessageUponMigration;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendSipOptionMessageUponMigration()
    {
        $this->sendSipOptionMessageUponMigration = null;
        return $this;
    }
}

