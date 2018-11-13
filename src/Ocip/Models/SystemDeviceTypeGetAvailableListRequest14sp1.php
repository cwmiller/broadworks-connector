<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetAvailableListRequest14sp1
 *
 * Requests a list of non-obsolete Identity/device profile types defined in the
 * system. It is possible
 *         to get either all conference device types or all non-conferernce types.
 * This command is similar
 *         to the SystemSIPDeviceTypeGetListRequest and
 * SystemMGCPDeviceTypeGetListRequest
 *         but gets both SIP and MGCP types.
 *         The response is either SystemDeviceTypeGetAvailableListResponse14sp1 or
 * ErrorResponse.
 *         Replaced By: SystemDeviceTypeGetAvailableListRequest14sp3
 *
 * @see SystemSIPDeviceTypeGetListRequest
 * @see SystemMGCPDeviceTypeGetListRequest
 * @see SystemDeviceTypeGetAvailableListResponse14sp1
 * @see ErrorResponse
 * @see SystemDeviceTypeGetAvailableListRequest14sp3
 */
class SystemDeviceTypeGetAvailableListRequest14sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName allowConference
     * @Type bool
     * @var bool|null
     */
    private $allowConference = null;

    /**
     * @ElementName allowMusicOnHold
     * @Type bool
     * @var bool|null
     */
    private $allowMusicOnHold = null;

    /**
     * @ElementName onlyConference
     * @Type bool
     * @var bool|null
     */
    private $onlyConference = null;

    /**
     * @ElementName onlyVideoCapable
     * @Type bool
     * @var bool|null
     */
    private $onlyVideoCapable = null;

    /**
     * @ElementName onlyOptionalIpAddress
     * @Type bool
     * @var bool|null
     */
    private $onlyOptionalIpAddress = null;

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


}

