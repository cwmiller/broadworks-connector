<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderEnhancedCallLogsGetResponse
 *
 * Response to ServiceProviderEnhancedCallLogsGetRequest.
 *
 * @see ServiceProviderEnhancedCallLogsGetRequest
 */
class ServiceProviderEnhancedCallLogsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxLoggedCalls
     * @var int|null
     */
    private $maxLoggedCalls = null;

    /**
     * @ElementName callExpirationDays
     * @var int|null
     */
    private $callExpirationDays = null;

    /**
     * Getter for maxLoggedCalls
     *
     * @ElementName maxLoggedCalls
     * @return int|null
     */
    public function getMaxLoggedCalls()
    {
        return $this->maxLoggedCalls;
    }

    /**
     * Setter for maxLoggedCalls
     *
     * @ElementName maxLoggedCalls
     * @param int|null $maxLoggedCalls
     * @return $this
     */
    public function setMaxLoggedCalls($maxLoggedCalls)
    {
        $this->maxLoggedCalls = $maxLoggedCalls;
        return $this;
    }

    /**
     * Getter for callExpirationDays
     *
     * @ElementName callExpirationDays
     * @return int|null
     */
    public function getCallExpirationDays()
    {
        return $this->callExpirationDays;
    }

    /**
     * Setter for callExpirationDays
     *
     * @ElementName callExpirationDays
     * @param int|null $callExpirationDays
     * @return $this
     */
    public function setCallExpirationDays($callExpirationDays)
    {
        $this->callExpirationDays = $callExpirationDays;
        return $this;
    }


}

