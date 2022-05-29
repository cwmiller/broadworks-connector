<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderEnhancedCallLogsModifyRequest
 *
 * Modify the Service Provider level data associated with Enhanced Call Logs.
 *         Configures the maximum number of logged calls and maximum age of your user's call logs.
 *         Log entries are deleted when either of the two limits is reached.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f6b3702edb5f67fa12c2c426d98657db:138","type":"sequence"}]
 */
class ServiceProviderEnhancedCallLogsModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f6b3702edb5f67fa12c2c426d98657db:138
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName maxLoggedCalls
     * @Type int
     * @Optional
     * @Group f6b3702edb5f67fa12c2c426d98657db:138
     * @MinInclusive 1
     * @MaxInclusive 99000
     * @var int|null
     */
    protected $maxLoggedCalls = null;

    /**
     * @ElementName callExpirationDays
     * @Type int
     * @Optional
     * @Group f6b3702edb5f67fa12c2c426d98657db:138
     * @MinInclusive 1
     * @MaxInclusive 1000
     * @var int|null
     */
    protected $callExpirationDays = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

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

