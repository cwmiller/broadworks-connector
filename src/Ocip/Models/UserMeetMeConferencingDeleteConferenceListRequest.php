<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingDeleteConferenceListRequest
 *
 * Request to delete one or more conferences which are owned by the user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserMeetMeConferencingDeleteConferenceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName conferenceKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey[]
     */
    private $conferenceKey = array(
        
    );

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
     * Getter for conferenceKey
     *
     * @ElementName conferenceKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey[]
     */
    public function getConferenceKey()
    {
        return $this->conferenceKey;
    }

    /**
     * Setter for conferenceKey
     *
     * @ElementName conferenceKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey[] $conferenceKey
     * @return $this
     */
    public function setConferenceKey(array $conferenceKey)
    {
        $this->conferenceKey = $conferenceKey;
        return $this;
    }

    /**
     * Adder for conferenceKey
     *
     * @ElementName conferenceKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey $conferenceKey
     * @return $this
     */
    public function addConferenceKey($conferenceKey)
    {
        $this->conferenceKey []= $conferenceKey;
        return $this;
    }


}

