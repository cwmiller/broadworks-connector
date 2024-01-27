<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFlexibleSeatingGuestGetRequest
 *
 * Request the user level data associated with flexible seating guest.
 *         The response is either a UserFlexibleSeatingGuestGetResponse or an ErrorResponse.
 *         
 *         Replaced by: UserFlexibleSeatingGuestGetRequest22.
 *
 * @see UserFlexibleSeatingGuestGetResponse
 * @see ErrorResponse
 * @see UserFlexibleSeatingGuestGetRequest22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:43605","type":"sequence"}]
 */
class UserFlexibleSeatingGuestGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:43605
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

