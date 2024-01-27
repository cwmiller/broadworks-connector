<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetAvailableListRequest22V2
 *
 * Requests a list of non-obsolete Identity/device profile types defined in the system and resellers. It is possible
 *         to get either all conference device types or all non-conference types. This command is similar
 *         to the SystemSIPDeviceTypeGetListRequest and SystemMGCPDeviceTypeGetListRequest
 *         but gets both SIP and MGCP types.    
 *         If excludeReseller is specified, only system level available device types are returned.
 *         If resellerId is specified, all the system level available device types and the device types in the given reseller are returned. 
 *         If reseller administrator sends the request, resellerId is not specified, the administrator's resellerId is used.
 *         If neither excludeReseller nor resellerId is specified, all the system level and reseller level available device types are returned.
 *         If excludeLeafDeviceTypes is specified, leaf device types are excluded in the response returned.  Leaf
 *         device types are device types that have the option supportLinks set to "Support Link to Device" or "Support Link to Device and User". 
 *         If onlyTreeDeviceTypes is specified, all available tree device types are returned.  Tree
 *         device types are device types that have the option supportLinks set to "Support Links from Devices". 
 *         
 *         The following elements are only used in AS data mode and ignored in the XS data mode:
 *           resellerId
 *           excludeLeafDeviceTypes
 *           onlyTreeDeviceTypes
 *
 *         The response is either SystemDeviceTypeGetAvailableListResponse22V2 or ErrorResponse.
 *
 * @see SystemSIPDeviceTypeGetListRequest
 * @see SystemMGCPDeviceTypeGetListRequest
 * @see SystemDeviceTypeGetAvailableListResponse22V2
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:8821","type":"sequence","children":[{"id":"da582a1f8028404e70d260cf1f891033:8827","type":"choice"}]}]
 */
class SystemDeviceTypeGetAvailableListRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName allowConference
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:8821
     * @var bool|null
     */
    protected $allowConference = null;

    /**
     * @ElementName allowMusicOnHold
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:8821
     * @var bool|null
     */
    protected $allowMusicOnHold = null;

    /**
     * @ElementName onlyConference
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:8821
     * @var bool|null
     */
    protected $onlyConference = null;

    /**
     * @ElementName onlyVideoCapable
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:8821
     * @var bool|null
     */
    protected $onlyVideoCapable = null;

    /**
     * @ElementName onlyOptionalIpAddress
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:8821
     * @var bool|null
     */
    protected $onlyOptionalIpAddress = null;

    /**
     * @ElementName excludeReseller
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:8827
     * @var bool|null
     */
    protected $excludeReseller = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:8827
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName excludeLeafDeviceTypes
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:8821
     * @var bool|null
     */
    protected $excludeLeafDeviceTypes = null;

    /**
     * @ElementName onlyTreeDeviceTypes
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:8821
     * @var bool|null
     */
    protected $onlyTreeDeviceTypes = null;

    /**
     * Getter for allowConference
     *
     * @return bool
     */
    public function getAllowConference()
    {
        return $this->allowConference instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowConference;
    }

    /**
     * Setter for allowConference
     *
     * @param bool $allowConference
     * @return $this
     */
    public function setAllowConference($allowConference)
    {
        $this->allowConference = $allowConference;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowConference()
    {
        $this->allowConference = null;
        return $this;
    }

    /**
     * Getter for allowMusicOnHold
     *
     * @return bool
     */
    public function getAllowMusicOnHold()
    {
        return $this->allowMusicOnHold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowMusicOnHold;
    }

    /**
     * Setter for allowMusicOnHold
     *
     * @param bool $allowMusicOnHold
     * @return $this
     */
    public function setAllowMusicOnHold($allowMusicOnHold)
    {
        $this->allowMusicOnHold = $allowMusicOnHold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowMusicOnHold()
    {
        $this->allowMusicOnHold = null;
        return $this;
    }

    /**
     * Getter for onlyConference
     *
     * @return bool
     */
    public function getOnlyConference()
    {
        return $this->onlyConference instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onlyConference;
    }

    /**
     * Setter for onlyConference
     *
     * @param bool $onlyConference
     * @return $this
     */
    public function setOnlyConference($onlyConference)
    {
        $this->onlyConference = $onlyConference;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnlyConference()
    {
        $this->onlyConference = null;
        return $this;
    }

    /**
     * Getter for onlyVideoCapable
     *
     * @return bool
     */
    public function getOnlyVideoCapable()
    {
        return $this->onlyVideoCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onlyVideoCapable;
    }

    /**
     * Setter for onlyVideoCapable
     *
     * @param bool $onlyVideoCapable
     * @return $this
     */
    public function setOnlyVideoCapable($onlyVideoCapable)
    {
        $this->onlyVideoCapable = $onlyVideoCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnlyVideoCapable()
    {
        $this->onlyVideoCapable = null;
        return $this;
    }

    /**
     * Getter for onlyOptionalIpAddress
     *
     * @return bool
     */
    public function getOnlyOptionalIpAddress()
    {
        return $this->onlyOptionalIpAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onlyOptionalIpAddress;
    }

    /**
     * Setter for onlyOptionalIpAddress
     *
     * @param bool $onlyOptionalIpAddress
     * @return $this
     */
    public function setOnlyOptionalIpAddress($onlyOptionalIpAddress)
    {
        $this->onlyOptionalIpAddress = $onlyOptionalIpAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnlyOptionalIpAddress()
    {
        $this->onlyOptionalIpAddress = null;
        return $this;
    }

    /**
     * Getter for excludeReseller
     *
     * @return bool
     */
    public function getExcludeReseller()
    {
        return $this->excludeReseller instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->excludeReseller;
    }

    /**
     * Setter for excludeReseller
     *
     * @param bool $excludeReseller
     * @return $this
     */
    public function setExcludeReseller($excludeReseller)
    {
        $this->excludeReseller = $excludeReseller;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExcludeReseller()
    {
        $this->excludeReseller = null;
        return $this;
    }

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

    /**
     * Getter for excludeLeafDeviceTypes
     *
     * @return bool
     */
    public function getExcludeLeafDeviceTypes()
    {
        return $this->excludeLeafDeviceTypes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->excludeLeafDeviceTypes;
    }

    /**
     * Setter for excludeLeafDeviceTypes
     *
     * @param bool $excludeLeafDeviceTypes
     * @return $this
     */
    public function setExcludeLeafDeviceTypes($excludeLeafDeviceTypes)
    {
        $this->excludeLeafDeviceTypes = $excludeLeafDeviceTypes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExcludeLeafDeviceTypes()
    {
        $this->excludeLeafDeviceTypes = null;
        return $this;
    }

    /**
     * Getter for onlyTreeDeviceTypes
     *
     * @return bool
     */
    public function getOnlyTreeDeviceTypes()
    {
        return $this->onlyTreeDeviceTypes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onlyTreeDeviceTypes;
    }

    /**
     * Setter for onlyTreeDeviceTypes
     *
     * @param bool $onlyTreeDeviceTypes
     * @return $this
     */
    public function setOnlyTreeDeviceTypes($onlyTreeDeviceTypes)
    {
        $this->onlyTreeDeviceTypes = $onlyTreeDeviceTypes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnlyTreeDeviceTypes()
    {
        $this->onlyTreeDeviceTypes = null;
        return $this;
    }
}

