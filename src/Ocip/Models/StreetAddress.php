<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * StreetAddress
 *
 * Street address information.
 */
class StreetAddress
{

    /**
     * @ElementName addressLine1
     * @var string|null
     */
    private $addressLine1 = null;

    /**
     * @ElementName addressLine2
     * @var string|null
     */
    private $addressLine2 = null;

    /**
     * @ElementName city
     * @var string|null
     */
    private $city = null;

    /**
     * @ElementName stateOrProvince
     * @var string|null
     */
    private $stateOrProvince = null;

    /**
     * @ElementName stateOrProvinceDisplayName
     * @var string|null
     */
    private $stateOrProvinceDisplayName = null;

    /**
     * @ElementName zipOrPostalCode
     * @var string|null
     */
    private $zipOrPostalCode = null;

    /**
     * @ElementName country
     * @var string|null
     */
    private $country = null;

    /**
     * Getter for addressLine1
     *
     * @ElementName addressLine1
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Setter for addressLine1
     *
     * @ElementName addressLine1
     * @param string|null $addressLine1
     * @return $this
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
        return $this;
    }

    /**
     * Getter for addressLine2
     *
     * @ElementName addressLine2
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Setter for addressLine2
     *
     * @ElementName addressLine2
     * @param string|null $addressLine2
     * @return $this
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;
        return $this;
    }

    /**
     * Getter for city
     *
     * @ElementName city
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Setter for city
     *
     * @ElementName city
     * @param string|null $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Getter for stateOrProvince
     *
     * @ElementName stateOrProvince
     * @return string|null
     */
    public function getStateOrProvince()
    {
        return $this->stateOrProvince;
    }

    /**
     * Setter for stateOrProvince
     *
     * @ElementName stateOrProvince
     * @param string|null $stateOrProvince
     * @return $this
     */
    public function setStateOrProvince($stateOrProvince)
    {
        $this->stateOrProvince = $stateOrProvince;
        return $this;
    }

    /**
     * Getter for stateOrProvinceDisplayName
     *
     * @ElementName stateOrProvinceDisplayName
     * @return string|null
     */
    public function getStateOrProvinceDisplayName()
    {
        return $this->stateOrProvinceDisplayName;
    }

    /**
     * Setter for stateOrProvinceDisplayName
     *
     * @ElementName stateOrProvinceDisplayName
     * @param string|null $stateOrProvinceDisplayName
     * @return $this
     */
    public function setStateOrProvinceDisplayName($stateOrProvinceDisplayName)
    {
        $this->stateOrProvinceDisplayName = $stateOrProvinceDisplayName;
        return $this;
    }

    /**
     * Getter for zipOrPostalCode
     *
     * @ElementName zipOrPostalCode
     * @return string|null
     */
    public function getZipOrPostalCode()
    {
        return $this->zipOrPostalCode;
    }

    /**
     * Setter for zipOrPostalCode
     *
     * @ElementName zipOrPostalCode
     * @param string|null $zipOrPostalCode
     * @return $this
     */
    public function setZipOrPostalCode($zipOrPostalCode)
    {
        $this->zipOrPostalCode = $zipOrPostalCode;
        return $this;
    }

    /**
     * Getter for country
     *
     * @ElementName country
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Setter for country
     *
     * @ElementName country
     * @param string|null $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }


}

