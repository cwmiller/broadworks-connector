<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSessionAuditModifyRequest
 *
 * Modify the system level data associated with session sudit.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: SystemSessionAuditModifyRequest14sp3
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemSessionAuditModifyRequest14sp3
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:5488","type":"sequence"}]
 */
class SystemSessionAuditModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:5488
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName intervalSeconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:5488
     * @var int|null
     */
    private $intervalSeconds = null;

    /**
     * @ElementName timeoutPeriodSeconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:5488
     * @var int|null
     */
    private $timeoutPeriodSeconds = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for intervalSeconds
     *
     * @return int
     */
    public function getIntervalSeconds()
    {
        return $this->intervalSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->intervalSeconds;
    }

    /**
     * Setter for intervalSeconds
     *
     * @param int $intervalSeconds
     * @return $this
     */
    public function setIntervalSeconds($intervalSeconds)
    {
        $this->intervalSeconds = $intervalSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIntervalSeconds()
    {
        $this->intervalSeconds = null;
        return $this;
    }

    /**
     * Getter for timeoutPeriodSeconds
     *
     * @return int
     */
    public function getTimeoutPeriodSeconds()
    {
        return $this->timeoutPeriodSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeoutPeriodSeconds;
    }

    /**
     * Setter for timeoutPeriodSeconds
     *
     * @param int $timeoutPeriodSeconds
     * @return $this
     */
    public function setTimeoutPeriodSeconds($timeoutPeriodSeconds)
    {
        $this->timeoutPeriodSeconds = $timeoutPeriodSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeoutPeriodSeconds()
    {
        $this->timeoutPeriodSeconds = null;
        return $this;
    }


}

