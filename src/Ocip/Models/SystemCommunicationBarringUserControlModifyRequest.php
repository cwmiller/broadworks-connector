<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringUserControlModifyRequest
 *
 * Modifies the system's Communication Barring User-Control settings.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6844af6fc359ada5d958622d62cbd13f:77","type":"sequence"}]
 */
class SystemCommunicationBarringUserControlModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName enableLockout
     * @Type bool
     * @Optional
     * @Group 6844af6fc359ada5d958622d62cbd13f:77
     * @var bool|null
     */
    protected $enableLockout = null;

    /**
     * @ElementName maxNumberOfFailedAttempts
     * @Type int
     * @Optional
     * @Group 6844af6fc359ada5d958622d62cbd13f:77
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $maxNumberOfFailedAttempts = null;

    /**
     * @ElementName lockoutMinutes
     * @Type int
     * @Optional
     * @Group 6844af6fc359ada5d958622d62cbd13f:77
     * @MinInclusive 1
     * @MaxInclusive 600
     * @var int|null
     */
    protected $lockoutMinutes = null;

    /**
     * Getter for enableLockout
     *
     * @return bool
     */
    public function getEnableLockout()
    {
        return $this->enableLockout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableLockout;
    }

    /**
     * Setter for enableLockout
     *
     * @param bool $enableLockout
     * @return $this
     */
    public function setEnableLockout($enableLockout)
    {
        $this->enableLockout = $enableLockout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableLockout()
    {
        $this->enableLockout = null;
        return $this;
    }

    /**
     * Getter for maxNumberOfFailedAttempts
     *
     * @return int
     */
    public function getMaxNumberOfFailedAttempts()
    {
        return $this->maxNumberOfFailedAttempts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxNumberOfFailedAttempts;
    }

    /**
     * Setter for maxNumberOfFailedAttempts
     *
     * @param int $maxNumberOfFailedAttempts
     * @return $this
     */
    public function setMaxNumberOfFailedAttempts($maxNumberOfFailedAttempts)
    {
        $this->maxNumberOfFailedAttempts = $maxNumberOfFailedAttempts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxNumberOfFailedAttempts()
    {
        $this->maxNumberOfFailedAttempts = null;
        return $this;
    }

    /**
     * Getter for lockoutMinutes
     *
     * @return int
     */
    public function getLockoutMinutes()
    {
        return $this->lockoutMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lockoutMinutes;
    }

    /**
     * Setter for lockoutMinutes
     *
     * @param int $lockoutMinutes
     * @return $this
     */
    public function setLockoutMinutes($lockoutMinutes)
    {
        $this->lockoutMinutes = $lockoutMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLockoutMinutes()
    {
        $this->lockoutMinutes = null;
        return $this;
    }
}

