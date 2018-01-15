<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberModifyLoginParametersRequest
 *
 * Modify the system login configuration for all subscribers
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSubscriberModifyLoginParametersRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName maxFailedLoginAttempts
     * @var int|null
     */
    private $maxFailedLoginAttempts = null;

    /**
     * @ElementName minLoginIdLength
     * @var int|null
     */
    private $minLoginIdLength = null;

    /**
     * Getter for maxFailedLoginAttempts
     *
     * @ElementName maxFailedLoginAttempts
     * @return int|null
     */
    public function getMaxFailedLoginAttempts()
    {
        return $this->maxFailedLoginAttempts;
    }

    /**
     * Setter for maxFailedLoginAttempts
     *
     * @ElementName maxFailedLoginAttempts
     * @param int|null $maxFailedLoginAttempts
     * @return $this
     */
    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts)
    {
        $this->maxFailedLoginAttempts = $maxFailedLoginAttempts;
        return $this;
    }

    /**
     * Getter for minLoginIdLength
     *
     * @ElementName minLoginIdLength
     * @return int|null
     */
    public function getMinLoginIdLength()
    {
        return $this->minLoginIdLength;
    }

    /**
     * Setter for minLoginIdLength
     *
     * @ElementName minLoginIdLength
     * @param int|null $minLoginIdLength
     * @return $this
     */
    public function setMinLoginIdLength($minLoginIdLength)
    {
        $this->minLoginIdLength = $minLoginIdLength;
        return $this;
    }


}

