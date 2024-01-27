<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberGetLoginParametersResponse
 *
 * Response to the SystemSubscriberGetLoginParametersRequest.
 *
 * @see SystemSubscriberGetLoginParametersRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18254","type":"sequence"}]
 */
class SystemSubscriberGetLoginParametersResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName maxFailedLoginAttempts
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:18254
     * @MinInclusive 1
     * @MaxInclusive 1000
     * @var int|null
     */
    protected $maxFailedLoginAttempts = null;

    /**
     * @ElementName minLoginIdLength
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:18254
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

