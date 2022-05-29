<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerModifyHomeZoneRequest
 *
 * Modify an existing home zone in the BroadWorks Mobile Manager.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"5395c7df0157d44aa22f3351d1a5f3da:351","type":"sequence"}]
 */
class EnterpriseBroadWorksMobileManagerModifyHomeZoneRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:351
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName homeZoneId
     * @Type string
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:351
     * @var string|null
     */
    protected $homeZoneId = null;

    /**
     * @ElementName homeZoneDomainName
     * @Type string
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:351
     * @MinLength 1
     * @MaxLength 100
     * @var string|null
     */
    protected $homeZoneDomainName = null;

    /**
     * @ElementName mobileCountryCode
     * @Type string
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:351
     * @MinLength 1
     * @MaxLength 3
     * @var string|null
     */
    protected $mobileCountryCode = null;

    /**
     * @ElementName mobileNetworkCode
     * @Type string
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:351
     * @MinLength 1
     * @MaxLength 3
     * @var string|null
     */
    protected $mobileNetworkCode = null;

    /**
     * @ElementName locationAreaCode
     * @Type string
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:351
     * @MinLength 1
     * @MaxLength 5
     * @var string|null
     */
    protected $locationAreaCode = null;

    /**
     * @ElementName cellIdentity
     * @Type string
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:351
     * @MinLength 1
     * @MaxLength 5
     * @var string|null
     */
    protected $cellIdentity = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for homeZoneId
     *
     * @return string
     */
    public function getHomeZoneId()
    {
        return $this->homeZoneId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeZoneId;
    }

    /**
     * Setter for homeZoneId
     *
     * @param string $homeZoneId
     * @return $this
     */
    public function setHomeZoneId($homeZoneId)
    {
        $this->homeZoneId = $homeZoneId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHomeZoneId()
    {
        $this->homeZoneId = null;
        return $this;
    }

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

