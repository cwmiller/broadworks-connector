<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLegacyAutomaticCallbackGetResponse
 *
 * Response to SystemLegacyAutomaticCallbackGetRequest.
 */
class SystemLegacyAutomaticCallbackGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxMonitorsPerOriginator
     * @var int|null
     */
    private $maxMonitorsPerOriginator = null;

    /**
     * @ElementName maxMonitorsPerTerminator
     * @var int|null
     */
    private $maxMonitorsPerTerminator = null;

    /**
     * @ElementName t2Minutes
     * @var int|null
     */
    private $t2Minutes = null;

    /**
     * @ElementName t4Seconds
     * @var int|null
     */
    private $t4Seconds = null;

    /**
     * @ElementName t5Seconds
     * @var int|null
     */
    private $t5Seconds = null;

    /**
     * @ElementName t6Minutes
     * @var int|null
     */
    private $t6Minutes = null;

    /**
     * @ElementName t7Minutes
     * @var int|null
     */
    private $t7Minutes = null;

    /**
     * @ElementName t8Seconds
     * @var int|null
     */
    private $t8Seconds = null;

    /**
     * @ElementName tRingSeconds
     * @var int|null
     */
    private $tRingSeconds = null;

    /**
     * @ElementName t10OMinutes
     * @var int|null
     */
    private $t10OMinutes = null;

    /**
     * @ElementName t10TMinutes
     * @var int|null
     */
    private $t10TMinutes = null;

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
     * Getter for maxMonitorsPerTerminator
     *
     * @ElementName maxMonitorsPerTerminator
     * @return int|null
     */
    public function getMaxMonitorsPerTerminator()
    {
        return $this->maxMonitorsPerTerminator;
    }

    /**
     * Setter for maxMonitorsPerTerminator
     *
     * @ElementName maxMonitorsPerTerminator
     * @param int|null $maxMonitorsPerTerminator
     * @return $this
     */
    public function setMaxMonitorsPerTerminator($maxMonitorsPerTerminator)
    {
        $this->maxMonitorsPerTerminator = $maxMonitorsPerTerminator;
        return $this;
    }

    /**
     * Getter for t2Minutes
     *
     * @ElementName t2Minutes
     * @return int|null
     */
    public function getT2Minutes()
    {
        return $this->t2Minutes;
    }

    /**
     * Setter for t2Minutes
     *
     * @ElementName t2Minutes
     * @param int|null $t2Minutes
     * @return $this
     */
    public function setT2Minutes($t2Minutes)
    {
        $this->t2Minutes = $t2Minutes;
        return $this;
    }

    /**
     * Getter for t4Seconds
     *
     * @ElementName t4Seconds
     * @return int|null
     */
    public function getT4Seconds()
    {
        return $this->t4Seconds;
    }

    /**
     * Setter for t4Seconds
     *
     * @ElementName t4Seconds
     * @param int|null $t4Seconds
     * @return $this
     */
    public function setT4Seconds($t4Seconds)
    {
        $this->t4Seconds = $t4Seconds;
        return $this;
    }

    /**
     * Getter for t5Seconds
     *
     * @ElementName t5Seconds
     * @return int|null
     */
    public function getT5Seconds()
    {
        return $this->t5Seconds;
    }

    /**
     * Setter for t5Seconds
     *
     * @ElementName t5Seconds
     * @param int|null $t5Seconds
     * @return $this
     */
    public function setT5Seconds($t5Seconds)
    {
        $this->t5Seconds = $t5Seconds;
        return $this;
    }

    /**
     * Getter for t6Minutes
     *
     * @ElementName t6Minutes
     * @return int|null
     */
    public function getT6Minutes()
    {
        return $this->t6Minutes;
    }

    /**
     * Setter for t6Minutes
     *
     * @ElementName t6Minutes
     * @param int|null $t6Minutes
     * @return $this
     */
    public function setT6Minutes($t6Minutes)
    {
        $this->t6Minutes = $t6Minutes;
        return $this;
    }

    /**
     * Getter for t7Minutes
     *
     * @ElementName t7Minutes
     * @return int|null
     */
    public function getT7Minutes()
    {
        return $this->t7Minutes;
    }

    /**
     * Setter for t7Minutes
     *
     * @ElementName t7Minutes
     * @param int|null $t7Minutes
     * @return $this
     */
    public function setT7Minutes($t7Minutes)
    {
        $this->t7Minutes = $t7Minutes;
        return $this;
    }

    /**
     * Getter for t8Seconds
     *
     * @ElementName t8Seconds
     * @return int|null
     */
    public function getT8Seconds()
    {
        return $this->t8Seconds;
    }

    /**
     * Setter for t8Seconds
     *
     * @ElementName t8Seconds
     * @param int|null $t8Seconds
     * @return $this
     */
    public function setT8Seconds($t8Seconds)
    {
        $this->t8Seconds = $t8Seconds;
        return $this;
    }

    /**
     * Getter for tRingSeconds
     *
     * @ElementName tRingSeconds
     * @return int|null
     */
    public function getTRingSeconds()
    {
        return $this->tRingSeconds;
    }

    /**
     * Setter for tRingSeconds
     *
     * @ElementName tRingSeconds
     * @param int|null $tRingSeconds
     * @return $this
     */
    public function setTRingSeconds($tRingSeconds)
    {
        $this->tRingSeconds = $tRingSeconds;
        return $this;
    }

    /**
     * Getter for t10OMinutes
     *
     * @ElementName t10OMinutes
     * @return int|null
     */
    public function getT10OMinutes()
    {
        return $this->t10OMinutes;
    }

    /**
     * Setter for t10OMinutes
     *
     * @ElementName t10OMinutes
     * @param int|null $t10OMinutes
     * @return $this
     */
    public function setT10OMinutes($t10OMinutes)
    {
        $this->t10OMinutes = $t10OMinutes;
        return $this;
    }

    /**
     * Getter for t10TMinutes
     *
     * @ElementName t10TMinutes
     * @return int|null
     */
    public function getT10TMinutes()
    {
        return $this->t10TMinutes;
    }

    /**
     * Setter for t10TMinutes
     *
     * @ElementName t10TMinutes
     * @param int|null $t10TMinutes
     * @return $this
     */
    public function setT10TMinutes($t10TMinutes)
    {
        $this->t10TMinutes = $t10TMinutes;
        return $this;
    }


}

