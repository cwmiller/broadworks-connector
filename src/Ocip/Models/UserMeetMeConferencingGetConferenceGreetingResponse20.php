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
     * @Type bool
     * @var bool|null
     */
    private $playEntranceGreeting = null;

    /**
     * @ElementName entranceGreetingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    private $entranceGreetingFile = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     */
    public function getEntranceGreetingFile()
    {
        return $this->entranceGreetingFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceGreetingFile;
    }

    /**
     * Setter for entranceGreetingFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $entranceGreetingFile
     * @return $this
     */
    public function setEntranceGreetingFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $entranceGreetingFile)
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

