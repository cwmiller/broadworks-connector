<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceGreetingRequest
 *
 * Get the information of a conference custom greeting.
 *         The response is either
 * UserMeetMeConferencingGetConferenceGreetingResponse or ErrorResponse.
 */
class UserMeetMeConferencingGetConferenceGreetingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName conferenceKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey|null
     */
    private $conferenceKey = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey|null
     */
    public function getConferenceKey()
    {
        return $this->conferenceKey;
    }

    /**
     * Setter for conferenceKey
     *
     * @ElementName conferenceKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey|null $conferenceKey
     * @return $this
     */
    public function setConferenceKey($conferenceKey)
    {
        $this->conferenceKey = $conferenceKey;
        return $this;
    }


}

