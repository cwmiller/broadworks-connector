<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeAddRequest
 *
 * Add a system service access code.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 *         Replaced by SystemBroadWorksMobilityServiceAccessCodeAddRequest21.
 */
class SystemBroadWorksMobilityServiceAccessCodeAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceAccessCode
     * @var string|null
     */
    private $serviceAccessCode = null;

    /**
     * @ElementName countryCode
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for serviceAccessCode
     *
     * @ElementName serviceAccessCode
     * @return string|null
     */
    public function getServiceAccessCode()
    {
        return $this->serviceAccessCode;
    }

    /**
     * Setter for serviceAccessCode
     *
     * @ElementName serviceAccessCode
     * @param string|null $serviceAccessCode
     * @return $this
     */
    public function setServiceAccessCode($serviceAccessCode)
    {
        $this->serviceAccessCode = $serviceAccessCode;
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

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

