<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallPickupGetRequest
 *
 * Gets the details of the Call Pickup group that a user belongs to (if any).
 *         Any user can only belong to one Call Pickup group.
 *         The response is either UserCallPickupGetResponse or ErrorResponse.
 *
 * @see UserCallPickupGetResponse
 * @see ErrorResponse
 */
class UserCallPickupGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

