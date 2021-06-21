<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRedundancyParametersModifyRequest
 *
 * Request to modify Redundancy system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:14927","type":"sequence"}]
 */
class SystemRedundancyParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName rollBackTimerMinutes
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14927
     * @MinInclusive 0
     * @MaxInclusive 3600
     * @var int|null
     */
    private $rollBackTimerMinutes = null;

    /**
     * @ElementName sendSipOptionMessageUponMigration
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14927
     * @var bool|null
     */
    private $sendSipOptionMessageUponMigration = null;

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

