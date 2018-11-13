<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceRecordingListRequest
 *
 * Get the list of recordings of the conferences owned by the host.
 *         The response is either
 * UserMeetMeConferencingGetConferenceRecordingListResponse or ErrorResponse.
 *
 * @see UserMeetMeConferencingGetConferenceRecordingListResponse
 * @see ErrorResponse
 */
class UserMeetMeConferencingGetConferenceRecordingListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

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

