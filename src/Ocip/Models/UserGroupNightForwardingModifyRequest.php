<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGroupNightForwardingModifyRequest
 *
 * Request to modify the Group Night Forwarding user parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"1a3849774e8d2ffd90c3a2c57cbdd7a0:183","type":"sequence"}]
 */
class UserGroupNightForwardingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 1a3849774e8d2ffd90c3a2c57cbdd7a0:183
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName nightForwarding
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingUserServiceActivationMode
     * @Optional
     * @Group 1a3849774e8d2ffd90c3a2c57cbdd7a0:183
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingUserServiceActivationMode|null
     */
    private $nightForwarding = null;

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
     * Getter for nightForwarding
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingUserServiceActivationMode
     */
    public function getNightForwarding()
    {
        return $this->nightForwarding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nightForwarding;
    }

    /**
     * Setter for nightForwarding
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingUserServiceActivationMode $nightForwarding
     * @return $this
     */
    public function setNightForwarding(\CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingUserServiceActivationMode $nightForwarding)
    {
        $this->nightForwarding = $nightForwarding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNightForwarding()
    {
        $this->nightForwarding = null;
        return $this;
    }


}

