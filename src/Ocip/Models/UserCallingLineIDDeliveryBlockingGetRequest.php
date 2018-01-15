<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingLineIDDeliveryBlockingGetRequest
 *
 * Request the user level data associated with Calling Line ID Delivery Blocking.
 *         The response is either a UserCallingLineIDDeliveryBlockingGetResponse or
 * an
 *         ErrorResponse.
 */
class UserCallingLineIDDeliveryBlockingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

