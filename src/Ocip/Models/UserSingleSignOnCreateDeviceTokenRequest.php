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
 */
class UserSingleSignOnCreateDeviceTokenRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName deviceLevel
     * @var string|null
     */
    private $deviceLevel = null;

    /**
     * @ElementName deviceName
     * @var string|null
     */
    private $deviceName = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for deviceLevel
     *
     * @ElementName deviceLevel
     * @return string|null
     */
    public function getDeviceLevel()
    {
        return $this->deviceLevel;
    }

    /**
     * Setter for deviceLevel
     *
     * @ElementName deviceLevel
     * @param string|null $deviceLevel
     * @return $this
     */
    public function setDeviceLevel($deviceLevel)
    {
        $this->deviceLevel = $deviceLevel;
        return $this;
    }

    /**
     * Getter for deviceName
     *
     * @ElementName deviceName
     * @return string|null
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @ElementName deviceName
     * @param string|null $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }


}

