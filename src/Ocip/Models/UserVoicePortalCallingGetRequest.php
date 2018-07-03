<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoicePortalCallingGetRequest
 *
 * Request the user level data associated with Voice Portal Calling.
 *         The response is either a UserVoicePortalCallingGetResponse or an
 *         ErrorResponse.
 *
 * @see UserVoicePortalCallingGetResponse
 * @see ErrorResponse
 */
class UserVoicePortalCallingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

