<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingLineIDDeliveryBlockingGetRequest
 *
 * Request the user level data associated with Calling Line ID Delivery Blocking.
 *         The response is either a UserCallingLineIDDeliveryBlockingGetResponse or
 * an
 *         ErrorResponse.
 *
 * @see UserCallingLineIDDeliveryBlockingGetResponse
 * @see ErrorResponse
 */
class UserCallingLineIDDeliveryBlockingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
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

