<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFlexibleSeatingGuestGetRequest22
 *
 * Request the user level data associated with flexible seating guest.
 *         The response is either a UserFlexibleSeatingGuestGetResponse22 or an ErrorResponse.
 *
 * @see UserFlexibleSeatingGuestGetResponse22
 * @see ErrorResponse
 * @Groups [{"id":"1d4e390f8cd01ca6f92589024d74dac6:404","type":"sequence"}]
 */
class UserFlexibleSeatingGuestGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 1d4e390f8cd01ca6f92589024d74dac6:404
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

