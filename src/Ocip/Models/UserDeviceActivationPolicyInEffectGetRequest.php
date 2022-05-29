<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDeviceActivationPolicyInEffectGetRequest
 *
 * Request the Device Activation policies in effect for the user.
 *         The response is either a UserDeviceActivationPolicyInEffectGetResponse or an ErrorResponse.
 *
 * @see UserDeviceActivationPolicyInEffectGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:1553","type":"sequence"}]
 */
class UserDeviceActivationPolicyInEffectGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1553
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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


}

