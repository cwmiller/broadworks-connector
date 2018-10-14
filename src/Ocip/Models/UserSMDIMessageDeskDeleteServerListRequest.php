<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSMDIMessageDeskDeleteServerListRequest
 *
 * Request to delete a list of SMDI Servers for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserSMDIMessageDeskDeleteServerListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName deviceName
     * @var string[]
     */
    private $deviceName = array(
        
    );

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
     * Getter for deviceName
     *
     * @ElementName deviceName
     * @return string[]
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @ElementName deviceName
     * @param string[] $deviceName
     * @return $this
     */
    public function setDeviceName(array $deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * Adder for deviceName
     *
     * @ElementName deviceName
     * @param string $deviceName
     * @return $this
     */
    public function addDeviceName(string $deviceName)
    {
        $this->deviceName []= $deviceName;
        return $this;
    }


}

