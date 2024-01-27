<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMaliciousCallTraceGetRequest
 *
 * Get the service provider's Malicious Call Trace settings.
 *         The response is either a ServiceProviderMaliciousCallTraceGetResponse 
 *         or an ErrorResponse.
 *
 * @see ServiceProviderMaliciousCallTraceGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"be7f3162f133f8d7fcc75e712b0258e6:46","type":"sequence"}]
 */
class ServiceProviderMaliciousCallTraceGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group be7f3162f133f8d7fcc75e712b0258e6:46
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

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
}

