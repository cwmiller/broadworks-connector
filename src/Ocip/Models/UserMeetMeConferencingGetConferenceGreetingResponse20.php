<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceGreetingResponse20
 *
 * Response to UserMeetMeConferencingGetConferenceGreetingRequest20.
 *         Contains the information of a conference custom greeting.
 *
 * @see UserMeetMeConferencingGetConferenceGreetingRequest20
 */
class UserMeetMeConferencingGetConferenceGreetingResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName playEntranceGreeting
     * @var bool|null
     */
    private $playEntranceGreeting = null;

    /**
     * @ElementName entranceGreetingFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    private $entranceGreetingFile = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    public function getEntranceGreetingFile()
    {
        return $this->entranceGreetingFile;
    }

    /**
     * Setter for entranceGreetingFile
     *
     * @ElementName entranceGreetingFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null $entranceGreetingFile
     * @return $this
     */
    public function setEntranceGreetingFile($entranceGreetingFile)
    {
        $this->entranceGreetingFile = $entranceGreetingFile;
        return $this;
    }


}

