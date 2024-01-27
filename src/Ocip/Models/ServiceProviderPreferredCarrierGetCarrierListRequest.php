<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPreferredCarrierGetCarrierListRequest
 *
 * Requests the lists of carriers for a specified country code for a service provider / enterprise.
 *         The response is either a ServiceProviderPreferredCarrierGetCarrierListResponse or an ErrorResponse.
 *
 * @see ServiceProviderPreferredCarrierGetCarrierListResponse
 * @see ErrorResponse
 * @Groups [{"id":"31dec625cdd18e8228eb61ffb34ddc0e:190","type":"sequence"}]
 */
class ServiceProviderPreferredCarrierGetCarrierListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:190
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName countryCode
     * @Type string
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:190
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    protected $countryCode = null;

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
     * Getter for countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countryCode;
    }

    /**
     * Setter for countryCode
     *
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountryCode()
    {
        $this->countryCode = null;
        return $this;
    }
}

