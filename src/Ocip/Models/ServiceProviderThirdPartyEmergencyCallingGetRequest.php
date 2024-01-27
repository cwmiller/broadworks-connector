<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderThirdPartyEmergencyCallingGetRequest
 *
 * Get the third-party emergency call service settings for the service provider.
 *         The response is either a ServiceProviderThirdPartyEmergencyCallingGetResponse or an ErrorResponse.
 *
 * @see ServiceProviderThirdPartyEmergencyCallingGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:19793","type":"sequence"}]
 */
class ServiceProviderThirdPartyEmergencyCallingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:19793
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

