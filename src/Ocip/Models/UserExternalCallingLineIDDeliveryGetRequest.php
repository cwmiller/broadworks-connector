<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExternalCallingLineIDDeliveryGetRequest
 *
 * Request the user level data associated with External Calling Line ID Delivery.
 *         The response is either a UserExternalCallingLineIDDeliveryGetResponse or an
 *         ErrorResponse.
 *
 * @see UserExternalCallingLineIDDeliveryGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"dcd29eef986f335219d138f47d461233:44","type":"sequence"}]
 */
class UserExternalCallingLineIDDeliveryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group dcd29eef986f335219d138f47d461233:44
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

