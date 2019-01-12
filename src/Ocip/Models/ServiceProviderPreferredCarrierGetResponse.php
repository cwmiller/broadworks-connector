<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPreferredCarrierGetResponse
 *
 * Response to a ServiceProviderPreferredCarrierGetRequest.
 *         Contains the currently configured carriers for a specified country code for a service provider / enterprise.
 *
 * @see ServiceProviderPreferredCarrierGetRequest
 * @Groups [{"id":"74a46a9bfccb54713c1d19735843f1df:274","type":"sequence"}]
 */
class ServiceProviderPreferredCarrierGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName intraLataCarrier
     * @Type string
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:274
     * @var string|null
     */
    private $intraLataCarrier = null;

    /**
     * @ElementName interLataCarrier
     * @Type string
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:274
     * @var string|null
     */
    private $interLataCarrier = null;

    /**
     * @ElementName internationalCarrier
     * @Type string
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:274
     * @var string|null
     */
    private $internationalCarrier = null;

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

