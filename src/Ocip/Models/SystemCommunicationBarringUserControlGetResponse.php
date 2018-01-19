<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringUserControlGetResponse
 *
 * Response to the SystemCommunicationBarringUserControlGetRequest.
 *         Contains the settings to whole system for Communication Barring
 * User-Control
 */
class SystemCommunicationBarringUserControlGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableLockout
     * @var bool|null
     */
    private $enableLockout = null;

    /**
     * @ElementName maxNumberOfFailedAttempts
     * @var int|null
     */
    private $maxNumberOfFailedAttempts = null;

    /**
     * @ElementName lockoutMinutes
     * @var int|null
     */
    private $lockoutMinutes = null;

    /**
     * Getter for enableLockout
     *
     * @ElementName enableLockout
     * @return bool|null
     */
    public function getEnableLockout()
    {
        return $this->enableLockout;
    }

    /**
     * Setter for enableLockout
     *
     * @ElementName enableLockout
     * @param bool|null $enableLockout
     * @return $this
     */
    public function setEnableLockout($enableLockout)
    {
        $this->enableLockout = $enableLockout;
        return $this;
    }

    /**
     * Getter for maxNumberOfFailedAttempts
     *
     * @ElementName maxNumberOfFailedAttempts
     * @return int|null
     */
    public function getMaxNumberOfFailedAttempts()
    {
        return $this->maxNumberOfFailedAttempts;
    }

    /**
     * Setter for maxNumberOfFailedAttempts
     *
     * @ElementName maxNumberOfFailedAttempts
     * @param int|null $maxNumberOfFailedAttempts
     * @return $this
     */
    public function setMaxNumberOfFailedAttempts($maxNumberOfFailedAttempts)
    {
        $this->maxNumberOfFailedAttempts = $maxNumberOfFailedAttempts;
        return $this;
    }

    /**
     * Getter for lockoutMinutes
     *
     * @ElementName lockoutMinutes
     * @return int|null
     */
    public function getLockoutMinutes()
    {
        return $this->lockoutMinutes;
    }

    /**
     * Setter for lockoutMinutes
     *
     * @ElementName lockoutMinutes
     * @param int|null $lockoutMinutes
     * @return $this
     */
    public function setLockoutMinutes($lockoutMinutes)
    {
        $this->lockoutMinutes = $lockoutMinutes;
        return $this;
    }


}
