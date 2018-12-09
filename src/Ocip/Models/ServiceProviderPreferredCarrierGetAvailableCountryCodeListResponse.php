<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse
 *
 * Response to a ServiceProviderPreferredCarrierGetAvailableCountryCodeListRequest.
 *         Contains the default country code and the list of unused country codes for a service provider / enterprise.
 *
 * @see ServiceProviderPreferredCarrierGetAvailableCountryCodeListRequest
 * @Groups [{"id":"56f1bd27c6955cc11e0869b6463fb814:174","type":"sequence"}]
 */
class ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultCountryCode
     * @Type string
     * @Optional
     * @Group 56f1bd27c6955cc11e0869b6463fb814:174
     * @var string|null
     */
    private $defaultCountryCode = null;

    /**
     * @ElementName countryCode
     * @Type string
     * @Array
     * @Optional
     * @Group 56f1bd27c6955cc11e0869b6463fb814:174
     * @var string[]
     */
    private $countryCode = array(
        
    );

    /**
     * Getter for defaultCountryCode
     *
     * @return string
     */
    public function getDefaultCountryCode()
    {
        return $this->defaultCountryCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultCountryCode;
    }

    /**
     * Setter for defaultCountryCode
     *
     * @param string $defaultCountryCode
     * @return $this
     */
    public function setDefaultCountryCode($defaultCountryCode)
    {
        $this->defaultCountryCode = $defaultCountryCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultCountryCode()
    {
        $this->defaultCountryCode = null;
        return $this;
    }

    /**
     * Getter for countryCode
     *
     * @return string[]
     */
    public function getCountryCode()
    {
        return $this->countryCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countryCode;
    }

    /**
     * Setter for countryCode
     *
     * @param string[] $countryCode
     * @return $this
     */
    public function setCountryCode(array $countryCode)
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

    /**
     * Adder for countryCode
     *
     * @param string $countryCode
     * @return $this
     */
    public function addCountryCode(string $countryCode)
    {
        $this->countryCode[] = $countryCode;
        return $this;
    }


}

