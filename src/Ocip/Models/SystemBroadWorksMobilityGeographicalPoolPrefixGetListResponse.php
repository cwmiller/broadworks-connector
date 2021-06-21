<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGeographicalPoolPrefixGetListResponse
 *
 * Response to the SystemBroadWorksMobilityGetGeographicalPoolPrefixListRequest.
 *
 * @see SystemBroadWorksMobilityGetGeographicalPoolPrefixListRequest
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:948","type":"sequence"}]
 */
class SystemBroadWorksMobilityGeographicalPoolPrefixGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName countryCode
     * @Type string
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:948
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName prefix
     * @Type string
     * @Array
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:948
     * @MinLength 2
     * @MaxLength 5
     * @var string[]
     */
    private $prefix = array(
        
    );

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

