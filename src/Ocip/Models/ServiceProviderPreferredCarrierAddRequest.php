<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPreferredCarrierAddRequest
 *
 * Add the country code preferred carriers for a service provider or enterprise. For each
 *         combination of service provider and country code, you can assign an intra-lata, inter-lata,
 *         and international carrier. Each of the three types of carriers is optional.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Note: At the system level, more than one carrier may be assigned to each country code.
 *         At the service provider level, you must choose from the carriers assigned at the system level.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"74a46a9bfccb54713c1d19735843f1df:116","type":"sequence"}]
 */
class ServiceProviderPreferredCarrierAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 74a46a9bfccb54713c1d19735843f1df:116
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName countryCode
     * @Type string
     * @Group 74a46a9bfccb54713c1d19735843f1df:116
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName intraLataCarrier
     * @Type string
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:116
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $intraLataCarrier = null;

    /**
     * @ElementName interLataCarrier
     * @Type string
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:116
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $interLataCarrier = null;

    /**
     * @ElementName internationalCarrier
     * @Type string
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:116
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $internationalCarrier = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
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
     * Getter for intraLataCarrier
     *
     * @return string
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->intraLataCarrier;
    }

    /**
     * Setter for intraLataCarrier
     *
     * @param string $intraLataCarrier
     * @return $this
     */
    public function setIntraLataCarrier($intraLataCarrier)
    {
        $this->intraLataCarrier = $intraLataCarrier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIntraLataCarrier()
    {
        $this->intraLataCarrier = null;
        return $this;
    }

    /**
     * Getter for interLataCarrier
     *
     * @return string
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interLataCarrier;
    }

    /**
     * Setter for interLataCarrier
     *
     * @param string $interLataCarrier
     * @return $this
     */
    public function setInterLataCarrier($interLataCarrier)
    {
        $this->interLataCarrier = $interLataCarrier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInterLataCarrier()
    {
        $this->interLataCarrier = null;
        return $this;
    }

    /**
     * Getter for internationalCarrier
     *
     * @return string
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->internationalCarrier;
    }

    /**
     * Setter for internationalCarrier
     *
     * @param string $internationalCarrier
     * @return $this
     */
    public function setInternationalCarrier($internationalCarrier)
    {
        $this->internationalCarrier = $internationalCarrier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInternationalCarrier()
    {
        $this->internationalCarrier = null;
        return $this;
    }


}

