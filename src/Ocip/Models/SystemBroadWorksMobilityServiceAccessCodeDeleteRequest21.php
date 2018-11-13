<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeDeleteRequest21
 *
 * Delete a service access code from a list.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemBroadWorksMobilityServiceAccessCodeDeleteRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceAccessCodeListName
     * @Type string
     * @var string|null
     */
    private $serviceAccessCodeListName = null;

    /**
     * @ElementName countryCode
     * @Type string
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName serviceAccessCode
     * @Type string
     * @var string|null
     */
    private $serviceAccessCode = null;

    /**
     * Getter for serviceAccessCodeListName
     *
     * @return string
     */
    public function getServiceAccessCodeListName()
    {
        return $this->serviceAccessCodeListName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceAccessCodeListName;
    }

    /**
     * Setter for serviceAccessCodeListName
     *
     * @param string $serviceAccessCodeListName
     * @return $this
     */
    public function setServiceAccessCodeListName($serviceAccessCodeListName)
    {
        $this->serviceAccessCodeListName = $serviceAccessCodeListName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceAccessCodeListName()
    {
        $this->serviceAccessCodeListName = null;
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

