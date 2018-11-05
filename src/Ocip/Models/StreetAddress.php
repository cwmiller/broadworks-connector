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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $addressLine1 = null;

    /**
     * @ElementName addressLine2
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $addressLine2 = null;

    /**
     * @ElementName city
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $city = null;

    /**
     * @ElementName stateOrProvince
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $stateOrProvince = null;

    /**
     * @ElementName stateOrProvinceDisplayName
     * @var string|null
     */
    private $stateOrProvinceDisplayName = null;

    /**
     * @ElementName zipOrPostalCode
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $zipOrPostalCode = null;

    /**
     * @ElementName country
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $country = null;

    /**
     * Getter for addressLine1
     *
     * @ElementName addressLine1
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Setter for addressLine1
     *
     * @ElementName addressLine1
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $addressLine1
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Setter for addressLine2
     *
     * @ElementName addressLine2
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $addressLine2
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Setter for city
     *
     * @ElementName city
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $city
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getStateOrProvince()
    {
        return $this->stateOrProvince;
    }

    /**
     * Setter for stateOrProvince
     *
     * @ElementName stateOrProvince
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $stateOrProvince
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getZipOrPostalCode()
    {
        return $this->zipOrPostalCode;
    }

    /**
     * Setter for zipOrPostalCode
     *
     * @ElementName zipOrPostalCode
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $zipOrPostalCode
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Setter for country
     *
     * @ElementName country
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }


}

