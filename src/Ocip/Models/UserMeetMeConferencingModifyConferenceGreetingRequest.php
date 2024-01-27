<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingModifyConferenceGreetingRequest
 *
 * Modify an existing custom greeting audio file.
 *         The response is either SuccessResponse or
 *         ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:45922","type":"sequence"}]
 */
class UserMeetMeConferencingModifyConferenceGreetingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:45922
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName conferenceKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey
     * @Group d8f04177e438f303b41c211e518706bf:45922
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceKey|null
     */
    protected $conferenceKey = null;

    /**
     * @ElementName playEntranceGreeting
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:45922
     * @var bool|null
     */
    protected $playEntranceGreeting = null;

    /**
     * @ElementName entranceGreetingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:45922
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    protected $entranceGreetingFile = null;

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

    /**
     * Getter for playEntranceGreeting
     *
     * @return bool
     */
    public function getPlayEntranceGreeting()
    {
        return $this->playEntranceGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playEntranceGreeting;
    }

    /**
     * Setter for playEntranceGreeting
     *
     * @param bool $playEntranceGreeting
     * @return $this
     */
    public function setPlayEntranceGreeting($playEntranceGreeting)
    {
        $this->playEntranceGreeting = $playEntranceGreeting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayEntranceGreeting()
    {
        $this->playEntranceGreeting = null;
        return $this;
    }

    /**
     * Getter for entranceGreetingFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getEntranceGreetingFile()
    {
        return $this->entranceGreetingFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceGreetingFile;
    }

    /**
     * Setter for entranceGreetingFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $entranceGreetingFile
     * @return $this
     */
    public function setEntranceGreetingFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $entranceGreetingFile)
    {
        $this->entranceGreetingFile = $entranceGreetingFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceGreetingFile()
    {
        $this->entranceGreetingFile = null;
        return $this;
    }
}

