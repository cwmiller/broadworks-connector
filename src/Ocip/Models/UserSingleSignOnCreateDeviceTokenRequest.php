<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSingleSignOnCreateDeviceTokenRequest
 *
 * This command allows a BroadWorks or Third-Party Client Application to
 *         create a Single Sign-On token for a device of a user.
 *         The token is created only if:
 *         1. the specified user is the owner of a lineport on the specified device
 *            (including a trunk user on a trunk device).
 *         2. and, the specified device is not in locked state.
 *         3. and, the device type of the device does support Device Management.
 *         The response is either UserSingleSignOnCreateDeviceTokenResponse
 *         or ErrorResponse.
 *
 * @see UserSingleSignOnCreateDeviceTokenResponse
 * @see ErrorResponse
 * @Groups [{"id":"ef3c4f453d01f7ce750331de83ebc765:595","type":"sequence"}]
 */
class UserSingleSignOnCreateDeviceTokenRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group ef3c4f453d01f7ce750331de83ebc765:595
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName deviceLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel
     * @Group ef3c4f453d01f7ce750331de83ebc765:595
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel|null
     */
    protected $deviceLevel = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Group ef3c4f453d01f7ce750331de83ebc765:595
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for deviceLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel
     */
    public function getDeviceLevel()
    {
        return $this->deviceLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceLevel;
    }

    /**
     * Setter for deviceLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel $deviceLevel
     * @return $this
     */
    public function setDeviceLevel(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel $deviceLevel)
    {
        $this->deviceLevel = $deviceLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceLevel()
    {
        $this->deviceLevel = null;
        return $this;
    }

    /**
     * Getter for deviceName
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @param string $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceName()
    {
        $this->deviceName = null;
        return $this;
    }
}

