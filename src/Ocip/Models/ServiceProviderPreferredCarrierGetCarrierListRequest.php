<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPreferredCarrierGetCarrierListRequest
 *
 * Requests the lists of carriers for a specified country code for a service
 * provider / enterprise.
 *         The response is either a
 * ServiceProviderPreferredCarrierGetCarrierListResponse or an ErrorResponse.
 */
class ServiceProviderPreferredCarrierGetCarrierListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName countryCode
     * @var string|null
     */
    private $countryCode = null;

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
     * Getter for countryCode
     *
     * @ElementName countryCode
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Setter for countryCode
     *
     * @ElementName countryCode
     * @param string|null $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }


}

