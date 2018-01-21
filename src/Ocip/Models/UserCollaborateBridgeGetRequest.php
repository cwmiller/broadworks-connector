<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateBridgeGetRequest
 *
 * Request the collaborate bridged assigned to the user. The user can only be
 * assigned to one collaborate bridge at any given time.
 *         The response is either UserCollaborateBridgeGetResponse or
 * ErrorResponse.
 *         
 *         Replaced by: UserCollaborateBridgeGetRequest20sp1
 */
class UserCollaborateBridgeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

