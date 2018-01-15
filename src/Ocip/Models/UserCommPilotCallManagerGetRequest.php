<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommPilotCallManagerGetRequest
 *
 * Request the user level data associated with CommPilot Call Manager.
 *         The response is either a UserCommPilotCallManagerGetResponse or an
 *         ErrorResponse.
 */
class UserCommPilotCallManagerGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

