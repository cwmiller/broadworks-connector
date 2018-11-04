<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeModifyRequest
 *
 * Modify a system service access code.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced by SystemBroadWorksMobilityServiceAccessCodeModifyRequest21.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemBroadWorksMobilityServiceAccessCodeModifyRequest21
 */
class SystemBroadWorksMobilityServiceAccessCodeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName countryCode
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName serviceAccessCode
     * @var string|null
     */
    private $serviceAccessCode = null;

    /**
     * @ElementName description
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

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
     * Getter for description
     *
     * @ElementName description
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

