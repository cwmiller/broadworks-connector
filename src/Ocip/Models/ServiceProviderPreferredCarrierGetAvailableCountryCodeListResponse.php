<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse
 *
 * Response to a ServiceProviderPreferredCarrierGetAvailableCountryCodeListRequest.
 *         Contains the default country code and the list of unused country codes
 * for a service provider / enterprise.
 *
 * @see ServiceProviderPreferredCarrierGetAvailableCountryCodeListRequest
 */
class ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultCountryCode
     * @var string|null
     */
    private $defaultCountryCode = null;

    /**
     * @ElementName countryCode
     * @var string[]
     */
    private $countryCode = array(
        
    );

    /**
     * Getter for defaultCountryCode
     *
     * @ElementName defaultCountryCode
     * @return string|null
     */
    public function getDefaultCountryCode()
    {
        return $this->defaultCountryCode;
    }

    /**
     * Setter for defaultCountryCode
     *
     * @ElementName defaultCountryCode
     * @param string|null $defaultCountryCode
     * @return $this
     */
    public function setDefaultCountryCode($defaultCountryCode)
    {
        $this->defaultCountryCode = $defaultCountryCode;
        return $this;
    }

    /**
     * Getter for countryCode
     *
     * @ElementName countryCode
     * @return string[]
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Setter for countryCode
     *
     * @ElementName countryCode
     * @param string[] $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Adder for countryCode
     *
     * @ElementName countryCode
     * @param string $countryCode
     * @return $this
     */
    public function addCountryCode($countryCode)
    {
        $this->countryCode []= $countryCode;
        return $this;
    }


}

