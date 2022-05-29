<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberGetLoginParametersResponse
 *
 * Response to the SystemSubscriberGetLoginParametersRequest.
 *
 * @see SystemSubscriberGetLoginParametersRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:18022","type":"sequence"}]
 */
class SystemSubscriberGetLoginParametersResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxFailedLoginAttempts
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18022
     * @MinInclusive 1
     * @MaxInclusive 1000
     * @var int|null
     */
    protected $maxFailedLoginAttempts = null;

    /**
     * @ElementName minLoginIdLength
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18022
     * @MinInclusive 2
     * @MaxInclusive 80
     * @var int|null
     */
    protected $minLoginIdLength = null;

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

