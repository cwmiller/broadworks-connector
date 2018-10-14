<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingDeleteConferenceRecordingListRequest
 *
 * Request to delete one or more conference recordings owned by the user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserMeetMeConferencingDeleteConferenceRecordingListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName recordingKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceRecordingKey[]
     */
    private $recordingKey = array(
        
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
     * Getter for recordingKey
     *
     * @ElementName recordingKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceRecordingKey[]
     */
    public function getRecordingKey()
    {
        return $this->recordingKey;
    }

    /**
     * Setter for recordingKey
     *
     * @ElementName recordingKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceRecordingKey[] $recordingKey
     * @return $this
     */
    public function setRecordingKey(array $recordingKey)
    {
        $this->recordingKey = $recordingKey;
        return $this;
    }

    /**
     * Adder for recordingKey
     *
     * @ElementName recordingKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceRecordingKey $recordingKey
     * @return $this
     */
    public function addRecordingKey($recordingKey)
    {
        $this->recordingKey []= $recordingKey;
        return $this;
    }


}

