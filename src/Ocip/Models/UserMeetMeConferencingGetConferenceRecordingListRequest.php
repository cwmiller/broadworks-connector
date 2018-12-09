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
 * @Groups [{"id":"7a29c84abb8473449085e6657fc6948d:717","type":"sequence"}]
 */
class UserMeetMeConferencingGetConferenceRecordingListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 7a29c84abb8473449085e6657fc6948d:717
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

