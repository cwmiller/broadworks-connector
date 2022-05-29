<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserInternalCallingLineIDDeliveryGetRequest
 *
 * Request the user level data associated with Internal Calling Line ID Delivery.
 *         The response is either a UserInternalCallingLineIDDeliveryGetResponse or an
 *         ErrorResponse.
 *
 * @see UserInternalCallingLineIDDeliveryGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"7230ce25187ba26cc29fe67d7389f945:44","type":"sequence"}]
 */
class UserInternalCallingLineIDDeliveryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 7230ce25187ba26cc29fe67d7389f945:44
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

