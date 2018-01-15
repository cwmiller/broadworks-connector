<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingAddConferenceResponse
 *
 * Response to UserMeetMeConferencingAddConferenceRequest.
 */
class UserMeetMeConferencingAddConferenceResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceId
     * @var string|null
     */
    private $conferenceId = null;

    /**
     * @ElementName moderatorPin
     * @var string|null
     */
    private $moderatorPin = null;

    /**
     * Getter for conferenceId
     *
     * @ElementName conferenceId
     * @return string|null
     */
    public function getConferenceId()
    {
        return $this->conferenceId;
    }

    /**
     * Setter for conferenceId
     *
     * @ElementName conferenceId
     * @param string|null $conferenceId
     * @return $this
     */
    public function setConferenceId($conferenceId)
    {
        $this->conferenceId = $conferenceId;
        return $this;
    }

    /**
     * Getter for moderatorPin
     *
     * @ElementName moderatorPin
     * @return string|null
     */
    public function getModeratorPin()
    {
        return $this->moderatorPin;
    }

    /**
     * Setter for moderatorPin
     *
     * @ElementName moderatorPin
     * @param string|null $moderatorPin
     * @return $this
     */
    public function setModeratorPin($moderatorPin)
    {
        $this->moderatorPin = $moderatorPin;
        return $this;
    }


}

