<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberModifyLoginParametersRequest
 *
 * Modify the system login configuration for all subscribers
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:15981","type":"sequence"}]
 */
class SystemSubscriberModifyLoginParametersRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName maxFailedLoginAttempts
     * @Type int
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:15981
     * @var int|null
     */
    private $maxFailedLoginAttempts = null;

    /**
     * @ElementName minLoginIdLength
     * @Type int
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:15981
     * @var int|null
     */
    private $minLoginIdLength = null;

    /**
     * Getter for maxFailedLoginAttempts
     *
     * @return int
     */
    public function getMaxFailedLoginAttempts()
    {
        return $this->maxFailedLoginAttempts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxFailedLoginAttempts;
    }

    /**
     * Setter for maxFailedLoginAttempts
     *
     * @param int $maxFailedLoginAttempts
     * @return $this
     */
    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts)
    {
        $this->maxFailedLoginAttempts = $maxFailedLoginAttempts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxFailedLoginAttempts()
    {
        $this->maxFailedLoginAttempts = null;
        return $this;
    }

    /**
     * Getter for minLoginIdLength
     *
     * @return int
     */
    public function getMinLoginIdLength()
    {
        return $this->minLoginIdLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minLoginIdLength;
    }

    /**
     * Setter for minLoginIdLength
     *
     * @param int $minLoginIdLength
     * @return $this
     */
    public function setMinLoginIdLength($minLoginIdLength)
    {
        $this->minLoginIdLength = $minLoginIdLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinLoginIdLength()
    {
        $this->minLoginIdLength = null;
        return $this;
    }


}

