<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPreferredCarrierAddRequest
 *
 * Add the country code preferred carriers for a service provider or enterprise.
 * For each
 *         combination of service provider and country code, you can assign an
 * intra-lata, inter-lata,
 *         and international carrier. Each of the three types of carriers is
 * optional.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Note: At the system level, more than one carrier may be assigned to each
 * country code.
 *         At the service provider level, you must choose from the carriers
 * assigned at the system level.
 */
class ServiceProviderPreferredCarrierAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName countryCode
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName intraLataCarrier
     * @var string|null
     */
    private $intraLataCarrier = null;

    /**
     * @ElementName interLataCarrier
     * @var string|null
     */
    private $interLataCarrier = null;

    /**
     * @ElementName internationalCarrier
     * @var string|null
     */
    private $internationalCarrier = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
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
     * Getter for intraLataCarrier
     *
     * @ElementName intraLataCarrier
     * @return string|null
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier;
    }

    /**
     * Setter for intraLataCarrier
     *
     * @ElementName intraLataCarrier
     * @param string|null $intraLataCarrier
     * @return $this
     */
    public function setIntraLataCarrier($intraLataCarrier)
    {
        $this->intraLataCarrier = $intraLataCarrier;
        return $this;
    }

    /**
     * Getter for interLataCarrier
     *
     * @ElementName interLataCarrier
     * @return string|null
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier;
    }

    /**
     * Setter for interLataCarrier
     *
     * @ElementName interLataCarrier
     * @param string|null $interLataCarrier
     * @return $this
     */
    public function setInterLataCarrier($interLataCarrier)
    {
        $this->interLataCarrier = $interLataCarrier;
        return $this;
    }

    /**
     * Getter for internationalCarrier
     *
     * @ElementName internationalCarrier
     * @return string|null
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier;
    }

    /**
     * Setter for internationalCarrier
     *
     * @ElementName internationalCarrier
     * @param string|null $internationalCarrier
     * @return $this
     */
    public function setInternationalCarrier($internationalCarrier)
    {
        $this->internationalCarrier = $internationalCarrier;
        return $this;
    }


}

