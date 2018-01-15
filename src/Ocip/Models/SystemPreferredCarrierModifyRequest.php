<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPreferredCarrierModifyRequest
 *
 * Modify the attributes of a carrier.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         An ErrorResponse is returned if countryCode modification is attempted
 * while the carrier is assigned to a service provider.
 *         An ErrorResponse is returned if an attempt to set isIntraLata to false
 * is made while the carrier is used as an intra-LATA carrier.
 *         An ErrorResponse is returned if an attempt to set isInternational to
 * false is made while the carrier is used as an international carrier.
 */
class SystemPreferredCarrierModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName carrier
     * @var string|null
     */
    private $carrier = null;

    /**
     * @ElementName cic
     * @var string|null
     */
    private $cic = null;

    /**
     * @ElementName countryCode
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName isIntraLata
     * @var bool|null
     */
    private $isIntraLata = null;

    /**
     * @ElementName isInterLata
     * @var bool|null
     */
    private $isInterLata = null;

    /**
     * @ElementName isInternational
     * @var bool|null
     */
    private $isInternational = null;

    /**
     * Getter for carrier
     *
     * @ElementName carrier
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Setter for carrier
     *
     * @ElementName carrier
     * @param string|null $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * Getter for cic
     *
     * @ElementName cic
     * @return string|null
     */
    public function getCic()
    {
        return $this->cic;
    }

    /**
     * Setter for cic
     *
     * @ElementName cic
     * @param string|null $cic
     * @return $this
     */
    public function setCic($cic)
    {
        $this->cic = $cic;
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
     * Getter for isIntraLata
     *
     * @ElementName isIntraLata
     * @return bool|null
     */
    public function getIsIntraLata()
    {
        return $this->isIntraLata;
    }

    /**
     * Setter for isIntraLata
     *
     * @ElementName isIntraLata
     * @param bool|null $isIntraLata
     * @return $this
     */
    public function setIsIntraLata($isIntraLata)
    {
        $this->isIntraLata = $isIntraLata;
        return $this;
    }

    /**
     * Getter for isInterLata
     *
     * @ElementName isInterLata
     * @return bool|null
     */
    public function getIsInterLata()
    {
        return $this->isInterLata;
    }

    /**
     * Setter for isInterLata
     *
     * @ElementName isInterLata
     * @param bool|null $isInterLata
     * @return $this
     */
    public function setIsInterLata($isInterLata)
    {
        $this->isInterLata = $isInterLata;
        return $this;
    }

    /**
     * Getter for isInternational
     *
     * @ElementName isInternational
     * @return bool|null
     */
    public function getIsInternational()
    {
        return $this->isInternational;
    }

    /**
     * Setter for isInternational
     *
     * @ElementName isInternational
     * @param bool|null $isInternational
     * @return $this
     */
    public function setIsInternational($isInternational)
    {
        $this->isInternational = $isInternational;
        return $this;
    }


}

