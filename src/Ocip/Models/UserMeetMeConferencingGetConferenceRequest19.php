<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceRequest19
 *
 * Get the information of a conference owned by the user.
 *         The response is either UserMeetMeConferencingGetConferenceResponse19 or ErrorResponse.
 *
 * @see UserMeetMeConferencingGetConferenceResponse19
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:45792","type":"sequence"}]
 */
class UserMeetMeConferencingGetConferenceRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:45792
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName conferenceKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey
     * @Group d8f04177e438f303b41c211e518706bf:45792
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey|null
     */
    protected $conferenceKey = null;

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

