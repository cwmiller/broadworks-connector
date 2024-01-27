<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPreferredCarrierAddRequest
 *
 * Add a carrier to the system.
 *         More than one carrier may be assigned to each country code.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"31dec625cdd18e8228eb61ffb34ddc0e:319","type":"sequence"}]
 */
class SystemPreferredCarrierAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName carrier
     * @Type string
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:319
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $carrier = null;

    /**
     * @ElementName cic
     * @Type string
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:319
     * @MinLength 1
     * @MaxLength 6
     * @var string|null
     */
    protected $cic = null;

    /**
     * @ElementName countryCode
     * @Type string
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:319
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    protected $countryCode = null;

    /**
     * @ElementName isIntraLata
     * @Type bool
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:319
     * @var bool|null
     */
    protected $isIntraLata = null;

    /**
     * @ElementName isInterLata
     * @Type bool
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:319
     * @var bool|null
     */
    protected $isInterLata = null;

    /**
     * @ElementName isInternational
     * @Type bool
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:319
     * @var bool|null
     */
    protected $isInternational = null;

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

