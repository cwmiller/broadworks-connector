<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDirectedCallPickupWithBargeInGetRequest
 *
 * Request the user level data associated with Directed Call Pickup With Barge In.
 *         The response is either a UserDirectedCallPickupWithBargeInGetResponse or
 * an
 *         ErrorResponse.
 *
 * @see UserDirectedCallPickupWithBargeInGetResponse
 * @see ErrorResponse
 */
class UserDirectedCallPickupWithBargeInGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

