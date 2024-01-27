<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeAddRequest
 *
 * Add a system service access code.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced by SystemBroadWorksMobilityServiceAccessCodeAddRequest21.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemBroadWorksMobilityServiceAccessCodeAddRequest21
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:21208","type":"sequence"}]
 */
class SystemBroadWorksMobilityServiceAccessCodeAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceAccessCode
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:21208
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    protected $serviceAccessCode = null;

    /**
     * @ElementName countryCode
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:21208
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    protected $countryCode = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:21208
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

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
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }
}

