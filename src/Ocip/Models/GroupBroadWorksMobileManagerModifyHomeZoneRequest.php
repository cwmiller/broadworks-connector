<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobileManagerModifyHomeZoneRequest
 *
 * Modify an existing home zone in the BroadWorks Mobile Manager.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:2461","type":"sequence"}]
 */
class GroupBroadWorksMobileManagerModifyHomeZoneRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2461
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2461
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName homeZoneId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2461
     * @var string|null
     */
    private $homeZoneId = null;

    /**
     * @ElementName homeZoneDomainName
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2461
     * @MinLength 1
     * @MaxLength 100
     * @var string|null
     */
    private $homeZoneDomainName = null;

    /**
     * @ElementName mobileCountryCode
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2461
     * @MinLength 1
     * @MaxLength 3
     * @var string|null
     */
    private $mobileCountryCode = null;

    /**
     * @ElementName mobileNetworkCode
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2461
     * @MinLength 1
     * @MaxLength 3
     * @var string|null
     */
    private $mobileNetworkCode = null;

    /**
     * @ElementName locationAreaCode
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2461
     * @MinLength 1
     * @MaxLength 5
     * @var string|null
     */
    private $locationAreaCode = null;

    /**
     * @ElementName cellIdentity
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2461
     * @MinLength 1
     * @MaxLength 5
     * @var string|null
     */
    private $cellIdentity = null;

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
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
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

