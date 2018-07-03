<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateInstantRoomParametersGetRequest
 *
 * Request collaborate instant room settings.
 *         The response is either UserCollaborateInstantRoomParametersGetResponse
 * or 
 *         ErrorResponse.
 *
 * @see UserCollaborateInstantRoomParametersGetResponse
 * @see ErrorResponse
 */
class UserCollaborateInstantRoomParametersGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

