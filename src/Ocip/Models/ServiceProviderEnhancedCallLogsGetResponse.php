<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderEnhancedCallLogsGetResponse
 *
 * Response to ServiceProviderEnhancedCallLogsGetRequest.
 *
 * @see ServiceProviderEnhancedCallLogsGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:19241","type":"sequence"}]
 */
class ServiceProviderEnhancedCallLogsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName maxLoggedCalls
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:19241
     * @MinInclusive 1
     * @MaxInclusive 10000
     * @var int|null
     */
    protected $maxLoggedCalls = null;

    /**
     * @ElementName callExpirationDays
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:19241
     * @MinInclusive 1
     * @MaxInclusive 1000
     * @var int|null
     */
    protected $callExpirationDays = null;

    /**
     * Getter for maxLoggedCalls
     *
     * @return int
     */
    public function getMaxLoggedCalls()
    {
        return $this->maxLoggedCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxLoggedCalls;
    }

    /**
     * Setter for maxLoggedCalls
     *
     * @param int $maxLoggedCalls
     * @return $this
     */
    public function setMaxLoggedCalls($maxLoggedCalls)
    {
        $this->maxLoggedCalls = $maxLoggedCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxLoggedCalls()
    {
        $this->maxLoggedCalls = null;
        return $this;
    }

    /**
     * Getter for callExpirationDays
     *
     * @return int
     */
    public function getCallExpirationDays()
    {
        return $this->callExpirationDays instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callExpirationDays;
    }

    /**
     * Setter for callExpirationDays
     *
     * @param int $callExpirationDays
     * @return $this
     */
    public function setCallExpirationDays($callExpirationDays)
    {
        $this->callExpirationDays = $callExpirationDays;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallExpirationDays()
    {
        $this->callExpirationDays = null;
        return $this;
    }
}

