<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceListRequest
 *
 * Get the list of all conferences for which user is a host or a delegate.
 *         The response is either UserMeetMeConferencingGetConferenceListResponse or ErrorResponse.
 *
 * @see UserMeetMeConferencingGetConferenceListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e51a0a16349851c3fad768a24a35838d:681","type":"sequence"}]
 */
class UserMeetMeConferencingGetConferenceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group e51a0a16349851c3fad768a24a35838d:681
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName bridgeId
     * @Type string
     * @Optional
     * @Group e51a0a16349851c3fad768a24a35838d:681
     * @var string|null
     */
    private $bridgeId = null;

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

    /**
     * Getter for bridgeId
     *
     * @return string
     */
    public function getBridgeId()
    {
        return $this->bridgeId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->bridgeId;
    }

    /**
     * Setter for bridgeId
     *
     * @param string $bridgeId
     * @return $this
     */
    public function setBridgeId($bridgeId)
    {
        $this->bridgeId = $bridgeId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBridgeId()
    {
        $this->bridgeId = null;
        return $this;
    }


}

