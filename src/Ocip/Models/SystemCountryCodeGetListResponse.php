<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCountryCodeGetListResponse
 *
 * Response to a SystemCountryCodeGetListRequest. Contains the default country code
 *         and a table with one row per country code.  The table columns are
 *         "Country Code", "Country Name", "Off Hook Warning Seconds",
 *         "Ring Period Milliseconds", "National Prefix", "Use Prefix",
 *         "Maximum Call Waiting Tones", "Time Between Call Waiting Tones
 * Milliseconds"
 *         and "Disable National Prefix for OffNet Calls".
 *         
 *         The following columns are only returned in AS data mode:       
 *           "Disable National Prefix for OffNet Calls"
 *
 * @see SystemCountryCodeGetListRequest
 */
class SystemCountryCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultCountryCode
     * @var string|null
     */
    private $defaultCountryCode = null;

    /**
     * @ElementName countryCodeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $countryCodeTable = null;

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
     * Getter for countryCodeTable
     *
     * @ElementName countryCodeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCountryCodeTable()
    {
        return $this->countryCodeTable;
    }

    /**
     * Setter for countryCodeTable
     *
     * @ElementName countryCodeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $countryCodeTable
     * @return $this
     */
    public function setCountryCodeTable($countryCodeTable)
    {
        $this->countryCodeTable = $countryCodeTable;
        return $this;
    }


}

