<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCallbackGetResponse
 *
 * Response to SystemAutomaticCallbackGetRequest.
 *         Replaced By: SystemAutomaticCallbackGetResponse15
 */
class SystemAutomaticCallbackGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName monitorMinutes
     * @var int|null
     */
    private $monitorMinutes = null;

    /**
     * @ElementName waitBetweenRetryOriginatorMinutes
     * @var int|null
     */
    private $waitBetweenRetryOriginatorMinutes = null;

    /**
     * @ElementName maxMonitorsPerOriginator
     * @var int|null
     */
    private $maxMonitorsPerOriginator = null;

    /**
     * @ElementName maxCallbackRings
     * @var int|null
     */
    private $maxCallbackRings = null;

    /**
     * @ElementName maxRetryOriginatorMinutes
     * @var int|null
     */
    private $maxRetryOriginatorMinutes = null;

    /**
     * Getter for monitorMinutes
     *
     * @ElementName monitorMinutes
     * @return int|null
     */
    public function getMonitorMinutes()
    {
        return $this->monitorMinutes;
    }

    /**
     * Setter for monitorMinutes
     *
     * @ElementName monitorMinutes
     * @param int|null $monitorMinutes
     * @return $this
     */
    public function setMonitorMinutes($monitorMinutes)
    {
        $this->monitorMinutes = $monitorMinutes;
        return $this;
    }

    /**
     * Getter for waitBetweenRetryOriginatorMinutes
     *
     * @ElementName waitBetweenRetryOriginatorMinutes
     * @return int|null
     */
    public function getWaitBetweenRetryOriginatorMinutes()
    {
        return $this->waitBetweenRetryOriginatorMinutes;
    }

    /**
     * Setter for waitBetweenRetryOriginatorMinutes
     *
     * @ElementName waitBetweenRetryOriginatorMinutes
     * @param int|null $waitBetweenRetryOriginatorMinutes
     * @return $this
     */
    public function setWaitBetweenRetryOriginatorMinutes($waitBetweenRetryOriginatorMinutes)
    {
        $this->waitBetweenRetryOriginatorMinutes = $waitBetweenRetryOriginatorMinutes;
        return $this;
    }

    /**
     * Getter for maxMonitorsPerOriginator
     *
     * @ElementName maxMonitorsPerOriginator
     * @return int|null
     */
    public function getMaxMonitorsPerOriginator()
    {
        return $this->maxMonitorsPerOriginator;
    }

    /**
     * Setter for maxMonitorsPerOriginator
     *
     * @ElementName maxMonitorsPerOriginator
     * @param int|null $maxMonitorsPerOriginator
     * @return $this
     */
    public function setMaxMonitorsPerOriginator($maxMonitorsPerOriginator)
    {
        $this->maxMonitorsPerOriginator = $maxMonitorsPerOriginator;
        return $this;
    }

    /**
     * Getter for maxCallbackRings
     *
     * @ElementName maxCallbackRings
     * @return int|null
     */
    public function getMaxCallbackRings()
    {
        return $this->maxCallbackRings;
    }

    /**
     * Setter for maxCallbackRings
     *
     * @ElementName maxCallbackRings
     * @param int|null $maxCallbackRings
     * @return $this
     */
    public function setMaxCallbackRings($maxCallbackRings)
    {
        $this->maxCallbackRings = $maxCallbackRings;
        return $this;
    }

    /**
     * Getter for maxRetryOriginatorMinutes
     *
     * @ElementName maxRetryOriginatorMinutes
     * @return int|null
     */
    public function getMaxRetryOriginatorMinutes()
    {
        return $this->maxRetryOriginatorMinutes;
    }

    /**
     * Setter for maxRetryOriginatorMinutes
     *
     * @ElementName maxRetryOriginatorMinutes
     * @param int|null $maxRetryOriginatorMinutes
     * @return $this
     */
    public function setMaxRetryOriginatorMinutes($maxRetryOriginatorMinutes)
    {
        $this->maxRetryOriginatorMinutes = $maxRetryOriginatorMinutes;
        return $this;
    }


}

