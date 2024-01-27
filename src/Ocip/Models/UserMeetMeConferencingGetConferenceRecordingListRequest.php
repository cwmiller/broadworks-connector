<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceRecordingListRequest
 *
 * Get the list of recordings of the conferences owned by the host.
 *         The response is either UserMeetMeConferencingGetConferenceRecordingListResponse or ErrorResponse.
 *
 * @see UserMeetMeConferencingGetConferenceRecordingListResponse
 * @see ErrorResponse
 * @Groups [{"id":"adf25df72505d1c476ebb480b6cce18d:786","type":"sequence"}]
 */
class UserMeetMeConferencingGetConferenceRecordingListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group adf25df72505d1c476ebb480b6cce18d:786
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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
}

