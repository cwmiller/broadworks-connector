<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerGetHomeZoneResponse
 *
 * Response to the EnterpriseBroadWorksMobileManagerGetHomeZoneRequest
 *
 * @see EnterpriseBroadWorksMobileManagerGetHomeZoneRequest
 */
class EnterpriseBroadWorksMobileManagerGetHomeZoneResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName homeZoneDomainName
     * @Type string
     * @var string|null
     */
    private $homeZoneDomainName = null;

    /**
     * @ElementName mobileCountryCode
     * @Type string
     * @var string|null
     */
    private $mobileCountryCode = null;

    /**
     * @ElementName mobileNetworkCode
     * @Type string
     * @var string|null
     */
    private $mobileNetworkCode = null;

    /**
     * @ElementName locationAreaCode
     * @Type string
     * @var string|null
     */
    private $locationAreaCode = null;

    /**
     * @ElementName cellIdentity
     * @Type string
     * @var string|null
     */
    private $cellIdentity = null;

    /**
     * Getter for homeZoneDomainName
     *
     * @return string
     */
    public function getHomeZoneDomainName()
    {
        return $this->homeZoneDomainName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeZoneDomainName;
    }

    /**
     * Setter for homeZoneDomainName
     *
     * @param string $homeZoneDomainName
     * @return $this
     */
    public function setHomeZoneDomainName($homeZoneDomainName)
    {
        $this->homeZoneDomainName = $homeZoneDomainName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHomeZoneDomainName()
    {
        $this->homeZoneDomainName = null;
        return $this;
    }

    /**
     * Getter for mobileCountryCode
     *
     * @return string
     */
    public function getMobileCountryCode()
    {
        return $this->mobileCountryCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileCountryCode;
    }

    /**
     * Setter for mobileCountryCode
     *
     * @param string $mobileCountryCode
     * @return $this
     */
    public function setMobileCountryCode($mobileCountryCode)
    {
        $this->mobileCountryCode = $mobileCountryCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileCountryCode()
    {
        $this->mobileCountryCode = null;
        return $this;
    }

    /**
     * Getter for mobileNetworkCode
     *
     * @return string
     */
    public function getMobileNetworkCode()
    {
        return $this->mobileNetworkCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileNetworkCode;
    }

    /**
     * Setter for mobileNetworkCode
     *
     * @param string $mobileNetworkCode
     * @return $this
     */
    public function setMobileNetworkCode($mobileNetworkCode)
    {
        $this->mobileNetworkCode = $mobileNetworkCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileNetworkCode()
    {
        $this->mobileNetworkCode = null;
        return $this;
    }

    /**
     * Getter for locationAreaCode
     *
     * @return string
     */
    public function getLocationAreaCode()
    {
        return $this->locationAreaCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locationAreaCode;
    }

    /**
     * Setter for locationAreaCode
     *
     * @param string $locationAreaCode
     * @return $this
     */
    public function setLocationAreaCode($locationAreaCode)
    {
        $this->locationAreaCode = $locationAreaCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocationAreaCode()
    {
        $this->locationAreaCode = null;
        return $this;
    }

    /**
     * Getter for cellIdentity
     *
     * @return string
     */
    public function getCellIdentity()
    {
        return $this->cellIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cellIdentity;
    }

    /**
     * Setter for cellIdentity
     *
     * @param string $cellIdentity
     * @return $this
     */
    public function setCellIdentity($cellIdentity)
    {
        $this->cellIdentity = $cellIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCellIdentity()
    {
        $this->cellIdentity = null;
        return $this;
    }


}

