<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPreferredCarrierGetAvailableCountryCodeListRequest
 *
 * Requests the default country code and the list of unused country codes for a
 * service provider / enterprise.
 *         The response is either a
 * ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse or an
 * ErrorResponse.
 */
class ServiceProviderPreferredCarrierGetAvailableCountryCodeListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

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


}

