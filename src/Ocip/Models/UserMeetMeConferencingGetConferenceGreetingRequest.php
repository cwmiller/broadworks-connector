<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceGreetingRequest
 *
 * Get the information of a conference custom greeting.
 *         The response is either UserMeetMeConferencingGetConferenceGreetingResponse or ErrorResponse.
 *
 * @see UserMeetMeConferencingGetConferenceGreetingResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:45070","type":"sequence"}]
 */
class UserMeetMeConferencingGetConferenceGreetingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45070
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName conferenceKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45070
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey|null
     */
    private $conferenceKey = null;

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
     * Getter for conferenceKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey
     */
    public function getConferenceKey()
    {
        return $this->conferenceKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceKey;
    }

    /**
     * Setter for conferenceKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey $conferenceKey
     * @return $this
     */
    public function setConferenceKey(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey $conferenceKey)
    {
        $this->conferenceKey = $conferenceKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceKey()
    {
        $this->conferenceKey = null;
        return $this;
    }


}

