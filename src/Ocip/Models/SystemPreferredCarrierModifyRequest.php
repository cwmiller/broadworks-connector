<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPreferredCarrierModifyRequest
 *
 * Modify the attributes of a carrier.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         An ErrorResponse is returned if countryCode modification is attempted while the carrier is assigned to a service provider.
 *         An ErrorResponse is returned if an attempt to set isIntraLata to false is made while the carrier is used as an intra-LATA carrier.
 *         An ErrorResponse is returned if an attempt to set isInternational to false is made while the carrier is used as an international carrier.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @Groups [{"id":"74a46a9bfccb54713c1d19735843f1df:515","type":"sequence"}]
 */
class SystemPreferredCarrierModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName carrier
     * @Type string
     * @Group 74a46a9bfccb54713c1d19735843f1df:515
     * @var string|null
     */
    private $carrier = null;

    /**
     * @ElementName cic
     * @Type string
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:515
     * @var string|null
     */
    private $cic = null;

    /**
     * @ElementName countryCode
     * @Type string
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:515
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName isIntraLata
     * @Type bool
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:515
     * @var bool|null
     */
    private $isIntraLata = null;

    /**
     * @ElementName isInterLata
     * @Type bool
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:515
     * @var bool|null
     */
    private $isInterLata = null;

    /**
     * @ElementName isInternational
     * @Type bool
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:515
     * @var bool|null
     */
    private $isInternational = null;

    /**
     * Getter for carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->carrier;
    }

    /**
     * Setter for carrier
     *
     * @param string $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCarrier()
    {
        $this->carrier = null;
        return $this;
    }

    /**
     * Getter for cic
     *
     * @return string
     */
    public function getCic()
    {
        return $this->cic instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cic;
    }

    /**
     * Setter for cic
     *
     * @param string $cic
     * @return $this
     */
    public function setCic($cic)
    {
        $this->cic = $cic;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCic()
    {
        $this->cic = null;
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
     * Getter for isIntraLata
     *
     * @return bool
     */
    public function getIsIntraLata()
    {
        return $this->isIntraLata instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isIntraLata;
    }

    /**
     * Setter for isIntraLata
     *
     * @param bool $isIntraLata
     * @return $this
     */
    public function setIsIntraLata($isIntraLata)
    {
        $this->isIntraLata = $isIntraLata;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsIntraLata()
    {
        $this->isIntraLata = null;
        return $this;
    }

    /**
     * Getter for isInterLata
     *
     * @return bool
     */
    public function getIsInterLata()
    {
        return $this->isInterLata instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isInterLata;
    }

    /**
     * Setter for isInterLata
     *
     * @param bool $isInterLata
     * @return $this
     */
    public function setIsInterLata($isInterLata)
    {
        $this->isInterLata = $isInterLata;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsInterLata()
    {
        $this->isInterLata = null;
        return $this;
    }

    /**
     * Getter for isInternational
     *
     * @return bool
     */
    public function getIsInternational()
    {
        return $this->isInternational instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isInternational;
    }

    /**
     * Setter for isInternational
     *
     * @param bool $isInternational
     * @return $this
     */
    public function setIsInternational($isInternational)
    {
        $this->isInternational = $isInternational;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsInternational()
    {
        $this->isInternational = null;
        return $this;
    }


}

