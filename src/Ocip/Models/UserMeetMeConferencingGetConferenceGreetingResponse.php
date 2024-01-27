<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceGreetingResponse
 *
 * Response to UserMeetMeConferencingGetConferenceGreetingRequest.
 *         Contains the information of a conference custom greeting.
 *
 * @see UserMeetMeConferencingGetConferenceGreetingRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:45757","type":"sequence"}]
 */
class UserMeetMeConferencingGetConferenceGreetingResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName playEntranceGreeting
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:45757
     * @var bool|null
     */
    protected $playEntranceGreeting = null;

    /**
     * @ElementName entranceGreetingAudioFile
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:45757
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $entranceGreetingAudioFile = null;

    /**
     * @ElementName entranceGreetingMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:45757
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    protected $entranceGreetingMediaType = null;

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
     * Getter for entranceGreetingAudioFile
     *
     * @return string
     */
    public function getEntranceGreetingAudioFile()
    {
        return $this->entranceGreetingAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceGreetingAudioFile;
    }

    /**
     * Setter for entranceGreetingAudioFile
     *
     * @param string $entranceGreetingAudioFile
     * @return $this
     */
    public function setEntranceGreetingAudioFile($entranceGreetingAudioFile)
    {
        $this->entranceGreetingAudioFile = $entranceGreetingAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceGreetingAudioFile()
    {
        $this->entranceGreetingAudioFile = null;
        return $this;
    }

    /**
     * Getter for entranceGreetingMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getEntranceGreetingMediaType()
    {
        return $this->entranceGreetingMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceGreetingMediaType;
    }

    /**
     * Setter for entranceGreetingMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $entranceGreetingMediaType
     * @return $this
     */
    public function setEntranceGreetingMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $entranceGreetingMediaType)
    {
        $this->entranceGreetingMediaType = $entranceGreetingMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceGreetingMediaType()
    {
        $this->entranceGreetingMediaType = null;
        return $this;
    }
}

