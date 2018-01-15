<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeDeleteRequest21
 *
 * Delete a service access code from a list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobilityServiceAccessCodeDeleteRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceAccessCodeListName
     * @var string|null
     */
    private $serviceAccessCodeListName = null;

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
     * Getter for serviceAccessCodeListName
     *
     * @ElementName serviceAccessCodeListName
     * @return string|null
     */
    public function getServiceAccessCodeListName()
    {
        return $this->serviceAccessCodeListName;
    }

    /**
     * Setter for serviceAccessCodeListName
     *
     * @ElementName serviceAccessCodeListName
     * @param string|null $serviceAccessCodeListName
     * @return $this
     */
    public function setServiceAccessCodeListName($serviceAccessCodeListName)
    {
        $this->serviceAccessCodeListName = $serviceAccessCodeListName;
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


}

