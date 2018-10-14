<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPreferredCarrierGetCarrierListResponse
 *
 * Response to a ServiceProviderPreferredCarrierGetCarrierListRequest.
 *         Contains the lists of carriers for a specified country code for a
 * service provider / enterprise.
 *
 * @see ServiceProviderPreferredCarrierGetCarrierListRequest
 */
class ServiceProviderPreferredCarrierGetCarrierListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName intraLataCarrier
     * @var string[]
     */
    private $intraLataCarrier = array(
        
    );

    /**
     * @ElementName interLataCarrier
     * @var string[]
     */
    private $interLataCarrier = array(
        
    );

    /**
     * @ElementName internationalCarrier
     * @var string[]
     */
    private $internationalCarrier = array(
        
    );

    /**
     * Getter for intraLataCarrier
     *
     * @ElementName intraLataCarrier
     * @return string[]
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier;
    }

    /**
     * Setter for intraLataCarrier
     *
     * @ElementName intraLataCarrier
     * @param string[] $intraLataCarrier
     * @return $this
     */
    public function setIntraLataCarrier(array $intraLataCarrier)
    {
        $this->intraLataCarrier = $intraLataCarrier;
        return $this;
    }

    /**
     * Adder for intraLataCarrier
     *
     * @ElementName intraLataCarrier
     * @param string $intraLataCarrier
     * @return $this
     */
    public function addIntraLataCarrier(string $intraLataCarrier)
    {
        $this->intraLataCarrier []= $intraLataCarrier;
        return $this;
    }

    /**
     * Getter for interLataCarrier
     *
     * @ElementName interLataCarrier
     * @return string[]
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier;
    }

    /**
     * Setter for interLataCarrier
     *
     * @ElementName interLataCarrier
     * @param string[] $interLataCarrier
     * @return $this
     */
    public function setInterLataCarrier(array $interLataCarrier)
    {
        $this->interLataCarrier = $interLataCarrier;
        return $this;
    }

    /**
     * Adder for interLataCarrier
     *
     * @ElementName interLataCarrier
     * @param string $interLataCarrier
     * @return $this
     */
    public function addInterLataCarrier(string $interLataCarrier)
    {
        $this->interLataCarrier []= $interLataCarrier;
        return $this;
    }

    /**
     * Getter for internationalCarrier
     *
     * @ElementName internationalCarrier
     * @return string[]
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier;
    }

    /**
     * Setter for internationalCarrier
     *
     * @ElementName internationalCarrier
     * @param string[] $internationalCarrier
     * @return $this
     */
    public function setInternationalCarrier(array $internationalCarrier)
    {
        $this->internationalCarrier = $internationalCarrier;
        return $this;
    }

    /**
     * Adder for internationalCarrier
     *
     * @ElementName internationalCarrier
     * @param string $internationalCarrier
     * @return $this
     */
    public function addInternationalCarrier(string $internationalCarrier)
    {
        $this->internationalCarrier []= $internationalCarrier;
        return $this;
    }


}

