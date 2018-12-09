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
 * @Groups [{"id":"3eadf352c9fbbaa1f7255275f5a66943:44","type":"sequence"}]
 */
class UserInternalCallingLineIDDeliveryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 3eadf352c9fbbaa1f7255275f5a66943:44
     * @var string|null
     */
    private $userId = null;

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

