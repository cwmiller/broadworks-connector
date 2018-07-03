<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateBridgeGetRequest20sp1
 *
 * Request the collaborate bridged assigned to the user. The user can only be
 * assigned to one collaborate bridge at any given time.
 *         The response is either UserCollaborateBridgeGetResponse20sp1 or 
 *         ErrorResponse.
 *
 * @see UserCollaborateBridgeGetResponse20sp1
 * @see ErrorResponse
 */
class UserCollaborateBridgeGetRequest20sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

