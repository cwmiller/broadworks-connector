<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberGetLoginParametersResponse
 *
 * Response to the SystemSubscriberGetLoginParametersRequest.
 *
 * @see SystemSubscriberGetLoginParametersRequest
 */
class SystemSubscriberGetLoginParametersResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

