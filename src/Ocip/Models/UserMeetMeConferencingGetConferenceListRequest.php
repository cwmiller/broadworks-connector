<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceListRequest
 *
 * Get the list of all conferences for which user is a host or a delegate.
 *         The response is either UserMeetMeConferencingGetConferenceListResponse
 * or ErrorResponse.
 */
class UserMeetMeConferencingGetConferenceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName bridgeId
     * @var string|null
     */
    private $bridgeId = null;

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

    /**
     * Getter for bridgeId
     *
     * @ElementName bridgeId
     * @return string|null
     */
    public function getBridgeId()
    {
        return $this->bridgeId;
    }

    /**
     * Setter for bridgeId
     *
     * @ElementName bridgeId
     * @param string|null $bridgeId
     * @return $this
     */
    public function setBridgeId($bridgeId)
    {
        $this->bridgeId = $bridgeId;
        return $this;
    }


}

