<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * StreetAddress
 *
 * Street address information.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5161","type":"sequence"}]
 */
class StreetAddress
{
    /**
     * @ElementName addressLine1
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5161
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $addressLine1 = null;

    /**
     * @ElementName addressLine2
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5161
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $addressLine2 = null;

    /**
     * @ElementName city
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5161
     * @MinLength 1
     * @MaxLength 50
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $city = null;

    /**
     * @ElementName stateOrProvince
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5161
     * @MinLength 1
     * @MaxLength 50
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $stateOrProvince = null;

    /**
     * @ElementName stateOrProvinceDisplayName
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5161
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    protected $stateOrProvinceDisplayName = null;

    /**
     * @ElementName zipOrPostalCode
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5161
     * @MinLength 1
     * @MaxLength 50
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $zipOrPostalCode = null;

    /**
     * @ElementName country
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5161
     * @MinLength 1
     * @MaxLength 50
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $country = null;

    /**
     * Getter for addressLine1
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->addressLine1 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->addressLine1;
    }

    /**
     * Setter for addressLine1
     *
     * @param string|null $addressLine1
     * @return $this
     */
    public function setAddressLine1($addressLine1 = null)
    {
        if ($addressLine1 === null) {
            $this->addressLine1 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->addressLine1 = $addressLine1;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddressLine1()
    {
        $this->addressLine1 = null;
        return $this;
    }

    /**
     * Getter for addressLine2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->addressLine2 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->addressLine2;
    }

    /**
     * Setter for addressLine2
     *
     * @param string|null $addressLine2
     * @return $this
     */
    public function setAddressLine2($addressLine2 = null)
    {
        if ($addressLine2 === null) {
            $this->addressLine2 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->addressLine2 = $addressLine2;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddressLine2()
    {
        $this->addressLine2 = null;
        return $this;
    }

    /**
     * Getter for city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->city instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->city;
    }

    /**
     * Setter for city
     *
     * @param string|null $city
     * @return $this
     */
    public function setCity($city = null)
    {
        if ($city === null) {
            $this->city = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->city = $city;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCity()
    {
        $this->city = null;
        return $this;
    }

    /**
     * Getter for stateOrProvince
     *
     * @return string|null
     */
    public function getStateOrProvince()
    {
        return $this->stateOrProvince instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->stateOrProvince;
    }

    /**
     * Setter for stateOrProvince
     *
     * @param string|null $stateOrProvince
     * @return $this
     */
    public function setStateOrProvince($stateOrProvince = null)
    {
        if ($stateOrProvince === null) {
            $this->stateOrProvince = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->stateOrProvince = $stateOrProvince;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStateOrProvince()
    {
        $this->stateOrProvince = null;
        return $this;
    }

    /**
     * Getter for stateOrProvinceDisplayName
     *
     * @return string
     */
    public function getStateOrProvinceDisplayName()
    {
        return $this->stateOrProvinceDisplayName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->stateOrProvinceDisplayName;
    }

    /**
     * Setter for stateOrProvinceDisplayName
     *
     * @param string $stateOrProvinceDisplayName
     * @return $this
     */
    public function setStateOrProvinceDisplayName($stateOrProvinceDisplayName)
    {
        $this->stateOrProvinceDisplayName = $stateOrProvinceDisplayName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStateOrProvinceDisplayName()
    {
        $this->stateOrProvinceDisplayName = null;
        return $this;
    }

    /**
     * Getter for zipOrPostalCode
     *
     * @return string|null
     */
    public function getZipOrPostalCode()
    {
        return $this->zipOrPostalCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->zipOrPostalCode;
    }

    /**
     * Setter for zipOrPostalCode
     *
     * @param string|null $zipOrPostalCode
     * @return $this
     */
    public function setZipOrPostalCode($zipOrPostalCode = null)
    {
        if ($zipOrPostalCode === null) {
            $this->zipOrPostalCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->zipOrPostalCode = $zipOrPostalCode;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetZipOrPostalCode()
    {
        $this->zipOrPostalCode = null;
        return $this;
    }

    /**
     * Getter for country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->country;
    }

    /**
     * Setter for country
     *
     * @param string|null $country
     * @return $this
     */
    public function setCountry($country = null)
    {
        if ($country === null) {
            $this->country = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->country = $country;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountry()
    {
        $this->country = null;
        return $this;
    }
}

