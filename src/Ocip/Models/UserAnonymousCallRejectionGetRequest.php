<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnonymousCallRejectionGetRequest
 *
 * Request the user level data associated with Anonymous Call Rejection.
 *         The response is either a UserAnonymousCallRejectionGetResponse or an
 *         ErrorResponse.
 *
 * @see UserAnonymousCallRejectionGetResponse
 * @see ErrorResponse
 */
class UserAnonymousCallRejectionGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

