<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLegacyAutomaticCallbackGetResponse
 *
 * Response to SystemLegacyAutomaticCallbackGetRequest.
 *
 * @see SystemLegacyAutomaticCallbackGetRequest
 * @Groups [{"id":"6bf3c0ead6c4d948122ea83af7fc6e34:93","type":"sequence"}]
 */
class SystemLegacyAutomaticCallbackGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxMonitorsPerOriginator
     * @Type int
     * @Group 6bf3c0ead6c4d948122ea83af7fc6e34:93
     * @MinInclusive 1
     * @MaxInclusive 30
     * @var int|null
     */
    private $maxMonitorsPerOriginator = null;

    /**
     * @ElementName maxMonitorsPerTerminator
     * @Type int
     * @Group 6bf3c0ead6c4d948122ea83af7fc6e34:93
     * @MinInclusive 1
     * @MaxInclusive 30
     * @var int|null
     */
    private $maxMonitorsPerTerminator = null;

    /**
     * @ElementName t2Minutes
     * @Type int
     * @Group 6bf3c0ead6c4d948122ea83af7fc6e34:93
     * @MinInclusive 1
     * @MaxInclusive 20
     * @var int|null
     */
    private $t2Minutes = null;

    /**
     * @ElementName t4Seconds
     * @Type int
     * @Group 6bf3c0ead6c4d948122ea83af7fc6e34:93
     * @MinInclusive 0
     * @MaxInclusive 15
     * @var int|null
     */
    private $t4Seconds = null;

    /**
     * @ElementName t5Seconds
     * @Type int
     * @Group 6bf3c0ead6c4d948122ea83af7fc6e34:93
     * @MinInclusive 2
     * @MaxInclusive 10
     * @var int|null
     */
    private $t5Seconds = null;

    /**
     * @ElementName t6Minutes
     * @Type int
     * @Group 6bf3c0ead6c4d948122ea83af7fc6e34:93
     * @MinInclusive 1
     * @MaxInclusive 60
     * @var int|null
     */
    private $t6Minutes = null;

    /**
     * @ElementName t7Minutes
     * @Type int
     * @Group 6bf3c0ead6c4d948122ea83af7fc6e34:93
     * @MinInclusive 5
     * @MaxInclusive 180
     * @var int|null
     */
    private $t7Minutes = null;

    /**
     * @ElementName t8Seconds
     * @Type int
     * @Group 6bf3c0ead6c4d948122ea83af7fc6e34:93
     * @MinInclusive 0
     * @MaxInclusive 120
     * @var int|null
     */
    private $t8Seconds = null;

    /**
     * @ElementName tRingSeconds
     * @Type int
     * @Group 6bf3c0ead6c4d948122ea83af7fc6e34:93
     * @MinInclusive 1
     * @MaxInclusive 120
     * @var int|null
     */
    private $tRingSeconds = null;

    /**
     * @ElementName t10OMinutes
     * @Type int
     * @Group 6bf3c0ead6c4d948122ea83af7fc6e34:93
     * @MinInclusive 1
     * @MaxInclusive 120
     * @var int|null
     */
    private $t10OMinutes = null;

    /**
     * @ElementName t10TMinutes
     * @Type int
     * @Group 6bf3c0ead6c4d948122ea83af7fc6e34:93
     * @MinInclusive 1
     * @MaxInclusive 120
     * @var int|null
     */
    private $t10TMinutes = null;

    /**
     * Getter for maxMonitorsPerOriginator
     *
     * @return int
     */
    public function getMaxMonitorsPerOriginator()
    {
        return $this->maxMonitorsPerOriginator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxMonitorsPerOriginator;
    }

    /**
     * Setter for maxMonitorsPerOriginator
     *
     * @param int $maxMonitorsPerOriginator
     * @return $this
     */
    public function setMaxMonitorsPerOriginator($maxMonitorsPerOriginator)
    {
        $this->maxMonitorsPerOriginator = $maxMonitorsPerOriginator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxMonitorsPerOriginator()
    {
        $this->maxMonitorsPerOriginator = null;
        return $this;
    }

    /**
     * Getter for maxMonitorsPerTerminator
     *
     * @return int
     */
    public function getMaxMonitorsPerTerminator()
    {
        return $this->maxMonitorsPerTerminator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxMonitorsPerTerminator;
    }

    /**
     * Setter for maxMonitorsPerTerminator
     *
     * @param int $maxMonitorsPerTerminator
     * @return $this
     */
    public function setMaxMonitorsPerTerminator($maxMonitorsPerTerminator)
    {
        $this->maxMonitorsPerTerminator = $maxMonitorsPerTerminator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxMonitorsPerTerminator()
    {
        $this->maxMonitorsPerTerminator = null;
        return $this;
    }

    /**
     * Getter for t2Minutes
     *
     * @return int
     */
    public function getT2Minutes()
    {
        return $this->t2Minutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->t2Minutes;
    }

    /**
     * Setter for t2Minutes
     *
     * @param int $t2Minutes
     * @return $this
     */
    public function setT2Minutes($t2Minutes)
    {
        $this->t2Minutes = $t2Minutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetT2Minutes()
    {
        $this->t2Minutes = null;
        return $this;
    }

    /**
     * Getter for t4Seconds
     *
     * @return int
     */
    public function getT4Seconds()
    {
        return $this->t4Seconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->t4Seconds;
    }

    /**
     * Setter for t4Seconds
     *
     * @param int $t4Seconds
     * @return $this
     */
    public function setT4Seconds($t4Seconds)
    {
        $this->t4Seconds = $t4Seconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetT4Seconds()
    {
        $this->t4Seconds = null;
        return $this;
    }

    /**
     * Getter for t5Seconds
     *
     * @return int
     */
    public function getT5Seconds()
    {
        return $this->t5Seconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->t5Seconds;
    }

    /**
     * Setter for t5Seconds
     *
     * @param int $t5Seconds
     * @return $this
     */
    public function setT5Seconds($t5Seconds)
    {
        $this->t5Seconds = $t5Seconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetT5Seconds()
    {
        $this->t5Seconds = null;
        return $this;
    }

    /**
     * Getter for t6Minutes
     *
     * @return int
     */
    public function getT6Minutes()
    {
        return $this->t6Minutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->t6Minutes;
    }

    /**
     * Setter for t6Minutes
     *
     * @param int $t6Minutes
     * @return $this
     */
    public function setT6Minutes($t6Minutes)
    {
        $this->t6Minutes = $t6Minutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetT6Minutes()
    {
        $this->t6Minutes = null;
        return $this;
    }

    /**
     * Getter for t7Minutes
     *
     * @return int
     */
    public function getT7Minutes()
    {
        return $this->t7Minutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->t7Minutes;
    }

    /**
     * Setter for t7Minutes
     *
     * @param int $t7Minutes
     * @return $this
     */
    public function setT7Minutes($t7Minutes)
    {
        $this->t7Minutes = $t7Minutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetT7Minutes()
    {
        $this->t7Minutes = null;
        return $this;
    }

    /**
     * Getter for t8Seconds
     *
     * @return int
     */
    public function getT8Seconds()
    {
        return $this->t8Seconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->t8Seconds;
    }

    /**
     * Setter for t8Seconds
     *
     * @param int $t8Seconds
     * @return $this
     */
    public function setT8Seconds($t8Seconds)
    {
        $this->t8Seconds = $t8Seconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetT8Seconds()
    {
        $this->t8Seconds = null;
        return $this;
    }

    /**
     * Getter for tRingSeconds
     *
     * @return int
     */
    public function getTRingSeconds()
    {
        return $this->tRingSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tRingSeconds;
    }

    /**
     * Setter for tRingSeconds
     *
     * @param int $tRingSeconds
     * @return $this
     */
    public function setTRingSeconds($tRingSeconds)
    {
        $this->tRingSeconds = $tRingSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTRingSeconds()
    {
        $this->tRingSeconds = null;
        return $this;
    }

    /**
     * Getter for t10OMinutes
     *
     * @return int
     */
    public function getT10OMinutes()
    {
        return $this->t10OMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->t10OMinutes;
    }

    /**
     * Setter for t10OMinutes
     *
     * @param int $t10OMinutes
     * @return $this
     */
    public function setT10OMinutes($t10OMinutes)
    {
        $this->t10OMinutes = $t10OMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetT10OMinutes()
    {
        $this->t10OMinutes = null;
        return $this;
    }

    /**
     * Getter for t10TMinutes
     *
     * @return int
     */
    public function getT10TMinutes()
    {
        return $this->t10TMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->t10TMinutes;
    }

    /**
     * Setter for t10TMinutes
     *
     * @param int $t10TMinutes
     * @return $this
     */
    public function setT10TMinutes($t10TMinutes)
    {
        $this->t10TMinutes = $t10TMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetT10TMinutes()
    {
        $this->t10TMinutes = null;
        return $this;
    }


}

