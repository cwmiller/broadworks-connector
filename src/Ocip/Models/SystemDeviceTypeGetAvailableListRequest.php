<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetAvailableListRequest
 *
 * Requests a list of non-obsolete Identity/device profile types defined in the
 * system. It is possible
 *         to get either all conference device types or all non-conferernce types.
 * This command is similar
 *         to the SystemSIPDeviceTypeGetListRequest and
 * SystemMGCPDeviceTypeGetListRequest
 *         but gets both SIP and MGCP types.
 *         The response is either SystemDeviceTypeGetlAvailableListResponse or
 * ErrorResponse.
 *
 * @see SystemSIPDeviceTypeGetListRequest
 * @see SystemMGCPDeviceTypeGetListRequest
 * @see SystemDeviceTypeGetlAvailableListResponse
 * @see ErrorResponse
 */
class SystemDeviceTypeGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


}

