<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGeographicalPoolPrefixGetListResponse
 *
 * Response to the SystemBroadWorksMobilityGetGeographicalPoolPrefixListRequest.
 *
 * @see SystemBroadWorksMobilityGetGeographicalPoolPrefixListRequest
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:948","type":"sequence"}]
 */
class SystemBroadWorksMobilityGeographicalPoolPrefixGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName countryCode
     * @Type string
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:948
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    protected $countryCode = null;

    /**
     * @ElementName prefix
     * @Type string
     * @Array
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:948
     * @MinLength 2
     * @MaxLength 5
     * @var string[]
     */
    protected $prefix = [
        
    ];

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

    /**
     * Getter for prefix
     *
     * @return string[]
     */
    public function getPrefix()
    {
        return $this->prefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @param string[] $prefix
     * @return $this
     */
    public function setPrefix(array $prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefix()
    {
        $this->prefix = null;
        return $this;
    }

    /**
     * Adder for prefix
     *
     * @param string $prefix
     * @return $this
     */
    public function addPrefix(string $prefix)
    {
        $this->prefix[] = $prefix;
        return $this;
    }
}

