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
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:24312","type":"sequence"}]
 */
class SystemSessionAuditGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 1a79c7896cb04feac6eff47a5321756e:24312
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName intervalSeconds
     * @Type int
     * @Group 1a79c7896cb04feac6eff47a5321756e:24312
     * @var int|null
     */
    private $intervalSeconds = null;

    /**
     * @ElementName timeoutPeriodSeconds
     * @Type int
     * @Group 1a79c7896cb04feac6eff47a5321756e:24312
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

