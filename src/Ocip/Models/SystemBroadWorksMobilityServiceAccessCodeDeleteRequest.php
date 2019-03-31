<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeDeleteRequest
 *
 * Delete a system service access code.
 *                 The response is either SuccessResponse or ErrorResponse.
 *                 Replaced by SystemBroadWorksMobilityServiceAccessCodeDeleteRequest21.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemBroadWorksMobilityServiceAccessCodeDeleteRequest21
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:34251","type":"sequence"}]
 */
class SystemBroadWorksMobilityServiceAccessCodeDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName countryCode
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:34251
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName serviceAccessCode
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:34251
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    private $serviceAccessCode = null;

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
     * Getter for serviceAccessCode
     *
     * @return string
     */
    public function getServiceAccessCode()
    {
        return $this->serviceAccessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceAccessCode;
    }

    /**
     * Setter for serviceAccessCode
     *
     * @param string $serviceAccessCode
     * @return $this
     */
    public function setServiceAccessCode($serviceAccessCode)
    {
        $this->serviceAccessCode = $serviceAccessCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceAccessCode()
    {
        $this->serviceAccessCode = null;
        return $this;
    }


}

