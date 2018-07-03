<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderEnhancedCallLogsModifyRequest
 *
 * Modify the Service Provider level data associated with Enhanced Call Logs.
 *         Configures the maximum number of logged calls and maximum age of your
 * user's call logs.
 *         Log entries are deleted when either of the two limits is reached.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderEnhancedCallLogsModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

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
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

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

