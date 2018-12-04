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
 * @Groups [{"id":"e51a0a16349851c3fad768a24a35838d:521","type":"sequence"}]
 */
class UserMeetMeConferencingDeleteConferenceRecordingListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group e51a0a16349851c3fad768a24a35838d:521
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName recordingKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceRecordingKey
     * @Array
     * @Group e51a0a16349851c3fad768a24a35838d:521
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceRecordingKey[]
     */
    private $recordingKey = array(
        
    );

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
     * Getter for recordingKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceRecordingKey[]
     */
    public function getRecordingKey()
    {
        return $this->recordingKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordingKey;
    }

    /**
     * Setter for recordingKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceRecordingKey[] $recordingKey
     * @return $this
     */
    public function setRecordingKey(array $recordingKey)
    {
        $this->recordingKey = $recordingKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecordingKey()
    {
        $this->recordingKey = null;
        return $this;
    }

    /**
     * Adder for recordingKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceRecordingKey $recordingKey
     * @return $this
     */
    public function addRecordingKey($recordingKey)
    {
        $this->recordingKey[] = $recordingKey;
        return $this;
    }


}

