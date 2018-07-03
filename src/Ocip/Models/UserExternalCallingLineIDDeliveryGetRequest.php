<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExternalCallingLineIDDeliveryGetRequest
 *
 * Request the user level data associated with External Calling Line ID Delivery.
 *         The response is either a UserExternalCallingLineIDDeliveryGetResponse or
 * an
 *         ErrorResponse.
 *
 * @see UserExternalCallingLineIDDeliveryGetResponse
 * @see ErrorResponse
 */
class UserExternalCallingLineIDDeliveryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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


}

