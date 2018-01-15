<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGroupNightForwardingModifyRequest
 *
 * Request to modify the Group Night Forwarding user parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserGroupNightForwardingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName nightForwarding
     * @var string|null
     */
    private $nightForwarding = null;

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
     * Getter for nightForwarding
     *
     * @ElementName nightForwarding
     * @return string|null
     */
    public function getNightForwarding()
    {
        return $this->nightForwarding;
    }

    /**
     * Setter for nightForwarding
     *
     * @ElementName nightForwarding
     * @param string|null $nightForwarding
     * @return $this
     */
    public function setNightForwarding($nightForwarding)
    {
        $this->nightForwarding = $nightForwarding;
        return $this;
    }


}

