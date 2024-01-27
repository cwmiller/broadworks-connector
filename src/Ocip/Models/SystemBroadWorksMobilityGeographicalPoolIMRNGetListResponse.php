<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGeographicalPoolIMRNGetListResponse
 *
 * Response to SystemBroadWorksMobilityGeographicalPoolIMRNGetListRequest.
 *
 * @see SystemBroadWorksMobilityGeographicalPoolIMRNGetListRequest
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:863","type":"sequence"}]
 */
class SystemBroadWorksMobilityGeographicalPoolIMRNGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName countryCode
     * @Type string
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:863
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    protected $countryCode = null;

    /**
     * @ElementName imrnNumber
     * @Type string
     * @Array
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:863
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $imrnNumber = [
        
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
     * Getter for imrnNumber
     *
     * @return string[]
     */
    public function getImrnNumber()
    {
        return $this->imrnNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->imrnNumber;
    }

    /**
     * Setter for imrnNumber
     *
     * @param string[] $imrnNumber
     * @return $this
     */
    public function setImrnNumber(array $imrnNumber)
    {
        $this->imrnNumber = $imrnNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetImrnNumber()
    {
        $this->imrnNumber = null;
        return $this;
    }

    /**
     * Adder for imrnNumber
     *
     * @param string $imrnNumber
     * @return $this
     */
    public function addImrnNumber(string $imrnNumber)
    {
        $this->imrnNumber[] = $imrnNumber;
        return $this;
    }
}

