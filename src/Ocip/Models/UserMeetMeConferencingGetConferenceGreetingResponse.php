<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceGreetingResponse
 *
 * Response to UserMeetMeConferencingGetConferenceGreetingRequest.
 *         Contains the information of a conference custom greeting.
 */
class UserMeetMeConferencingGetConferenceGreetingResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName playEntranceGreeting
     * @var bool|null
     */
    private $playEntranceGreeting = null;

    /**
     * @ElementName entranceGreetingAudioFile
     * @var string|null
     */
    private $entranceGreetingAudioFile = null;

    /**
     * @ElementName entranceGreetingMediaType
     * @var string|null
     */
    private $entranceGreetingMediaType = null;

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
     * Getter for entranceGreetingAudioFile
     *
     * @ElementName entranceGreetingAudioFile
     * @return string|null
     */
    public function getEntranceGreetingAudioFile()
    {
        return $this->entranceGreetingAudioFile;
    }

    /**
     * Setter for entranceGreetingAudioFile
     *
     * @ElementName entranceGreetingAudioFile
     * @param string|null $entranceGreetingAudioFile
     * @return $this
     */
    public function setEntranceGreetingAudioFile($entranceGreetingAudioFile)
    {
        $this->entranceGreetingAudioFile = $entranceGreetingAudioFile;
        return $this;
    }

    /**
     * Getter for entranceGreetingMediaType
     *
     * @ElementName entranceGreetingMediaType
     * @return string|null
     */
    public function getEntranceGreetingMediaType()
    {
        return $this->entranceGreetingMediaType;
    }

    /**
     * Setter for entranceGreetingMediaType
     *
     * @ElementName entranceGreetingMediaType
     * @param string|null $entranceGreetingMediaType
     * @return $this
     */
    public function setEntranceGreetingMediaType($entranceGreetingMediaType)
    {
        $this->entranceGreetingMediaType = $entranceGreetingMediaType;
        return $this;
    }


}

