<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingModifyConferenceGreetingExecutionServerRequest
 *
 * Modify an existing custom greeting audio file.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Engineering Note: This command can only be executed from the Execution
 * Server
 */
class UserMeetMeConferencingModifyConferenceGreetingExecutionServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName playEntranceGreeting
     * @var bool|null
     */
    private $playEntranceGreeting = null;

    /**
     * @ElementName entranceGreetingFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    private $entranceGreetingFile = null;

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

    /**
     * Getter for playEntranceGreeting
     *
     * @ElementName playEntranceGreeting
     * @return bool|null
     */
    public function getPlayEntranceGreeting()
    {
        return $this->playEntranceGreeting;
    }

    /**
     * Setter for playEntranceGreeting
     *
     * @ElementName playEntranceGreeting
     * @param bool|null $playEntranceGreeting
     * @return $this
     */
    public function setPlayEntranceGreeting($playEntranceGreeting)
    {
        $this->playEntranceGreeting = $playEntranceGreeting;
        return $this;
    }

    /**
     * Getter for entranceGreetingFile
     *
     * @ElementName entranceGreetingFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    public function getEntranceGreetingFile()
    {
        return $this->entranceGreetingFile;
    }

    /**
     * Setter for entranceGreetingFile
     *
     * @ElementName entranceGreetingFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null $entranceGreetingFile
     * @return $this
     */
    public function setEntranceGreetingFile($entranceGreetingFile)
    {
        $this->entranceGreetingFile = $entranceGreetingFile;
        return $this;
    }


}

