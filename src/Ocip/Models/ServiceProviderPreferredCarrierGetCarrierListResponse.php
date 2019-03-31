<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPreferredCarrierGetCarrierListResponse
 *
 * Response to a ServiceProviderPreferredCarrierGetCarrierListRequest.
 *         Contains the lists of carriers for a specified country code for a service provider / enterprise.
 *
 * @see ServiceProviderPreferredCarrierGetCarrierListRequest
 * @Groups [{"id":"74a46a9bfccb54713c1d19735843f1df:207","type":"sequence"}]
 */
class ServiceProviderPreferredCarrierGetCarrierListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName intraLataCarrier
     * @Type string
     * @Array
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:207
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    private $intraLataCarrier = array(
        
    );

    /**
     * @ElementName interLataCarrier
     * @Type string
     * @Array
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:207
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    private $interLataCarrier = array(
        
    );

    /**
     * @ElementName internationalCarrier
     * @Type string
     * @Array
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:207
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    private $internationalCarrier = array(
        
    );

    /**
     * Getter for intraLataCarrier
     *
     * @return string[]
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->intraLataCarrier;
    }

    /**
     * Setter for intraLataCarrier
     *
     * @param string[] $intraLataCarrier
     * @return $this
     */
    public function setIntraLataCarrier(array $intraLataCarrier)
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
     * Adder for intraLataCarrier
     *
     * @param string $intraLataCarrier
     * @return $this
     */
    public function addIntraLataCarrier(string $intraLataCarrier)
    {
        $this->intraLataCarrier[] = $intraLataCarrier;
        return $this;
    }

    /**
     * Getter for interLataCarrier
     *
     * @return string[]
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interLataCarrier;
    }

    /**
     * Setter for interLataCarrier
     *
     * @param string[] $interLataCarrier
     * @return $this
     */
    public function setInterLataCarrier(array $interLataCarrier)
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
     * Adder for interLataCarrier
     *
     * @param string $interLataCarrier
     * @return $this
     */
    public function addInterLataCarrier(string $interLataCarrier)
    {
        $this->interLataCarrier[] = $interLataCarrier;
        return $this;
    }

    /**
     * Getter for internationalCarrier
     *
     * @return string[]
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->internationalCarrier;
    }

    /**
     * Setter for internationalCarrier
     *
     * @param string[] $internationalCarrier
     * @return $this
     */
    public function setInternationalCarrier(array $internationalCarrier)
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

    /**
     * Adder for internationalCarrier
     *
     * @param string $internationalCarrier
     * @return $this
     */
    public function addInternationalCarrier(string $internationalCarrier)
    {
        $this->internationalCarrier[] = $internationalCarrier;
        return $this;
    }


}

