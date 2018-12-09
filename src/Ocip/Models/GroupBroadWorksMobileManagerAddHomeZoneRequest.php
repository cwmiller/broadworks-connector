<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobileManagerAddHomeZoneRequest
 *
 * Add a home zone to the BroadWorks Mobile Manager.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"15129cd25fa2d5581f4edfd652c24f93:1531","type":"sequence"}]
 */
class GroupBroadWorksMobileManagerAddHomeZoneRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 15129cd25fa2d5581f4edfd652c24f93:1531
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 15129cd25fa2d5581f4edfd652c24f93:1531
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName homeZoneDomainName
     * @Type string
     * @Group 15129cd25fa2d5581f4edfd652c24f93:1531
     * @var string|null
     */
    private $homeZoneDomainName = null;

    /**
     * @ElementName mobileCountryCode
     * @Type string
     * @Group 15129cd25fa2d5581f4edfd652c24f93:1531
     * @var string|null
     */
    private $mobileCountryCode = null;

    /**
     * @ElementName mobileNetworkCode
     * @Type string
     * @Group 15129cd25fa2d5581f4edfd652c24f93:1531
     * @var string|null
     */
    private $mobileNetworkCode = null;

    /**
     * @ElementName locationAreaCode
     * @Type string
     * @Group 15129cd25fa2d5581f4edfd652c24f93:1531
     * @var string|null
     */
    private $locationAreaCode = null;

    /**
     * @ElementName cellIdentity
     * @Type string
     * @Group 15129cd25fa2d5581f4edfd652c24f93:1531
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

