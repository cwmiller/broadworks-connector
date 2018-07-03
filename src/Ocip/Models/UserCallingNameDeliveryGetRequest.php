<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingNameDeliveryGetRequest
 *
 * Request the user level data associated with Calling
 *         Name Delivery. The response is either a
 *         UserCallingNameDeliveryGetResponse or an ErrorResponse.
 *
 * @see UserCallingNameDeliveryGetResponse
 * @see ErrorResponse
 */
class UserCallingNameDeliveryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

