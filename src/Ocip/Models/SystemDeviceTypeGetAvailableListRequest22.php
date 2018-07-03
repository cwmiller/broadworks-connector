<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetAvailableListRequest22
 *
 * Requests a list of non-obsolete Identity/device profile types defined in the
 * system and resellers. It is possible
 *         to get either all conference device types or all non-conference types.
 * This command is similar
 *         to the SystemSIPDeviceTypeGetListRequest and
 * SystemMGCPDeviceTypeGetListRequest
 *         but gets both SIP and MGCP types.    
 *         If excludeReseller is specified, only system level available device
 * types are returned.
 *         If resellerId is specified, all the system level available device types
 * and the device types in the given reseller are returned. 
 *         If reseller administrator sends the request, resellerId is not
 * specified, the administrator's resellerId is used.
 *         If neither excludeReseller nor resellerId is specified, all the system
 * level and reseller level available device types are returned.
 *         
 *         The following elements are only used in AS data mode and ignored in the
 * XS data mode:
 *           resellerId
 *
 *         The response is either SystemDeviceTypeGetAvailableListResponse22 or
 * ErrorResponse.
 *
 * @see SystemSIPDeviceTypeGetListRequest
 * @see SystemMGCPDeviceTypeGetListRequest
 * @see SystemDeviceTypeGetAvailableListResponse22
 * @see ErrorResponse
 */
class SystemDeviceTypeGetAvailableListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName allowConference
     * @var bool|null
     */
    private $allowConference = null;

    /**
     * @ElementName allowMusicOnHold
     * @var bool|null
     */
    private $allowMusicOnHold = null;

    /**
     * @ElementName onlyConference
     * @var bool|null
     */
    private $onlyConference = null;

    /**
     * @ElementName onlyVideoCapable
     * @var bool|null
     */
    private $onlyVideoCapable = null;

    /**
     * @ElementName onlyOptionalIpAddress
     * @var bool|null
     */
    private $onlyOptionalIpAddress = null;

    /**
     * @ElementName excludeReseller
     * @var bool|null
     */
    private $excludeReseller = null;

    /**
     * @ElementName resellerId
     * @var string|null
     */
    private $resellerId = null;

    /**
     * Getter for allowConference
     *
     * @ElementName allowConference
     * @return bool|null
     */
    public function getAllowConference()
    {
        return $this->allowConference;
    }

    /**
     * Setter for allowConference
     *
     * @ElementName allowConference
     * @param bool|null $allowConference
     * @return $this
     */
    public function setAllowConference($allowConference)
    {
        $this->allowConference = $allowConference;
        return $this;
    }

    /**
     * Getter for allowMusicOnHold
     *
     * @ElementName allowMusicOnHold
     * @return bool|null
     */
    public function getAllowMusicOnHold()
    {
        return $this->allowMusicOnHold;
    }

    /**
     * Setter for allowMusicOnHold
     *
     * @ElementName allowMusicOnHold
     * @param bool|null $allowMusicOnHold
     * @return $this
     */
    public function setAllowMusicOnHold($allowMusicOnHold)
    {
        $this->allowMusicOnHold = $allowMusicOnHold;
        return $this;
    }

    /**
     * Getter for onlyConference
     *
     * @ElementName onlyConference
     * @return bool|null
     */
    public function getOnlyConference()
    {
        return $this->onlyConference;
    }

    /**
     * Setter for onlyConference
     *
     * @ElementName onlyConference
     * @param bool|null $onlyConference
     * @return $this
     */
    public function setOnlyConference($onlyConference)
    {
        $this->onlyConference = $onlyConference;
        return $this;
    }

    /**
     * Getter for onlyVideoCapable
     *
     * @ElementName onlyVideoCapable
     * @return bool|null
     */
    public function getOnlyVideoCapable()
    {
        return $this->onlyVideoCapable;
    }

    /**
     * Setter for onlyVideoCapable
     *
     * @ElementName onlyVideoCapable
     * @param bool|null $onlyVideoCapable
     * @return $this
     */
    public function setOnlyVideoCapable($onlyVideoCapable)
    {
        $this->onlyVideoCapable = $onlyVideoCapable;
        return $this;
    }

    /**
     * Getter for onlyOptionalIpAddress
     *
     * @ElementName onlyOptionalIpAddress
     * @return bool|null
     */
    public function getOnlyOptionalIpAddress()
    {
        return $this->onlyOptionalIpAddress;
    }

    /**
     * Setter for onlyOptionalIpAddress
     *
     * @ElementName onlyOptionalIpAddress
     * @param bool|null $onlyOptionalIpAddress
     * @return $this
     */
    public function setOnlyOptionalIpAddress($onlyOptionalIpAddress)
    {
        $this->onlyOptionalIpAddress = $onlyOptionalIpAddress;
        return $this;
    }

    /**
     * Getter for excludeReseller
     *
     * @ElementName excludeReseller
     * @return bool|null
     */
    public function getExcludeReseller()
    {
        return $this->excludeReseller;
    }

    /**
     * Setter for excludeReseller
     *
     * @ElementName excludeReseller
     * @param bool|null $excludeReseller
     * @return $this
     */
    public function setExcludeReseller($excludeReseller)
    {
        $this->excludeReseller = $excludeReseller;
        return $this;
    }

    /**
     * Getter for resellerId
     *
     * @ElementName resellerId
     * @return string|null
     */
    public function getResellerId()
    {
        return $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @ElementName resellerId
     * @param string|null $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }


}

