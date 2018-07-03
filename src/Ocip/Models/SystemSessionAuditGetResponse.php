<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSessionAuditGetResponse
 *
 * Response to SystemSessionAuditGetRequest.
 *         Replaced By: SystemSessionAuditGetResponse14sp3
 *
 * @see SystemSessionAuditGetRequest
 * @see SystemSessionAuditGetResponse14sp3
 */
class SystemSessionAuditGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName intervalSeconds
     * @var int|null
     */
    private $intervalSeconds = null;

    /**
     * @ElementName timeoutPeriodSeconds
     * @var int|null
     */
    private $timeoutPeriodSeconds = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for intervalSeconds
     *
     * @ElementName intervalSeconds
     * @return int|null
     */
    public function getIntervalSeconds()
    {
        return $this->intervalSeconds;
    }

    /**
     * Setter for intervalSeconds
     *
     * @ElementName intervalSeconds
     * @param int|null $intervalSeconds
     * @return $this
     */
    public function setIntervalSeconds($intervalSeconds)
    {
        $this->intervalSeconds = $intervalSeconds;
        return $this;
    }

    /**
     * Getter for timeoutPeriodSeconds
     *
     * @ElementName timeoutPeriodSeconds
     * @return int|null
     */
    public function getTimeoutPeriodSeconds()
    {
        return $this->timeoutPeriodSeconds;
    }

    /**
     * Setter for timeoutPeriodSeconds
     *
     * @ElementName timeoutPeriodSeconds
     * @param int|null $timeoutPeriodSeconds
     * @return $this
     */
    public function setTimeoutPeriodSeconds($timeoutPeriodSeconds)
    {
        $this->timeoutPeriodSeconds = $timeoutPeriodSeconds;
        return $this;
    }


}

