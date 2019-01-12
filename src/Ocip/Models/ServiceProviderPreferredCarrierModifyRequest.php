<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPreferredCarrierModifyRequest
 *
 * Modify the country code preferred carriers for a service provider or enterprise. For each
 *         combination of service provider and country code, you can assign an intra-lata, inter-lata,
 *         and international carrier. Each of the 3 types of carriers is optional.
 *         If an optional carrier is not specified, the assignment will not change.
 *         To clear a preferred carrier, set the value to an empty string.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Note: At the system level, more than one carrier may be assigned to each country code.
 *         At the service provider level, you must choose from the carriers assigned at the system level.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"74a46a9bfccb54713c1d19735843f1df:298","type":"sequence"}]
 */
class ServiceProviderPreferredCarrierModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 74a46a9bfccb54713c1d19735843f1df:298
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName countryCode
     * @Type string
     * @Group 74a46a9bfccb54713c1d19735843f1df:298
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName intraLataCarrier
     * @Type string
     * @Nillable
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:298
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $intraLataCarrier = null;

    /**
     * @ElementName interLataCarrier
     * @Type string
     * @Nillable
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:298
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $interLataCarrier = null;

    /**
     * @ElementName internationalCarrier
     * @Type string
     * @Nillable
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:298
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @return string|null
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->intraLataCarrier;
    }

    /**
     * Setter for intraLataCarrier
     *
     * @param string|null $intraLataCarrier
     * @return $this
     */
    public function setIntraLataCarrier($intraLataCarrier)
    {
        if ($intraLataCarrier === null) {
            $this->intraLataCarrier = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->intraLataCarrier = $intraLataCarrier;
        }
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
     * @return string|null
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interLataCarrier;
    }

    /**
     * Setter for interLataCarrier
     *
     * @param string|null $interLataCarrier
     * @return $this
     */
    public function setInterLataCarrier($interLataCarrier)
    {
        if ($interLataCarrier === null) {
            $this->interLataCarrier = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->interLataCarrier = $interLataCarrier;
        }
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
     * @return string|null
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->internationalCarrier;
    }

    /**
     * Setter for internationalCarrier
     *
     * @param string|null $internationalCarrier
     * @return $this
     */
    public function setInternationalCarrier($internationalCarrier)
    {
        if ($internationalCarrier === null) {
            $this->internationalCarrier = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->internationalCarrier = $internationalCarrier;
        }
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

