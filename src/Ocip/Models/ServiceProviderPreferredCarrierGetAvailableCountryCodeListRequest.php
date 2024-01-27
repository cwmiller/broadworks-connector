<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPreferredCarrierGetAvailableCountryCodeListRequest
 *
 * Requests the default country code and the list of unused country codes for a service provider / enterprise.
 *         The response is either a ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse or an ErrorResponse.
 *
 * @see ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse
 * @see ErrorResponse
 * @Groups [{"id":"31dec625cdd18e8228eb61ffb34ddc0e:157","type":"sequence"}]
 */
class ServiceProviderPreferredCarrierGetAvailableCountryCodeListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:157
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

