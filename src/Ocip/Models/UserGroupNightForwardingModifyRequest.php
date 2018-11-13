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
 */
class UserGroupNightForwardingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName nightForwarding
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingUserServiceActivationMode
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

