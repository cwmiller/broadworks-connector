<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGeographicalPoolGetListRequest
 *
 * Get a list of geographical pools defined in the system. If countryCode is set, return the IMRN pools associated with the country code. 
 *         The response is either SystemBroadWorksMobilityGeographicalPoolGetListResponse or ErrorResponse.
 *
 * @see SystemBroadWorksMobilityGeographicalPoolGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:778","type":"sequence"}]
 */
class SystemBroadWorksMobilityGeographicalPoolGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName countryCode
     * @Type string
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:778
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    protected $countryCode = null;

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

