<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDirectedCallPickupWithBargeInGetRequest14sp7
 *
 * Request the user level data associated with Directed Call Pickup With Barge In.
 *         The response is either a
 * UserDirectedCallPickupWithBargeInGetResponse14sp7 or an
 *         ErrorResponse.
 *
 * @see UserDirectedCallPickupWithBargeInGetResponse14sp7
 * @see ErrorResponse
 */
class UserDirectedCallPickupWithBargeInGetRequest14sp7 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

