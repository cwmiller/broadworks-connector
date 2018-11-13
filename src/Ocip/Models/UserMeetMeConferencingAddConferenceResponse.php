<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingAddConferenceResponse
 *
 * Response to UserMeetMeConferencingAddConferenceRequest.
 *
 * @see UserMeetMeConferencingAddConferenceRequest
 */
class UserMeetMeConferencingAddConferenceResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceId
     * @Type string
     * @var string|null
     */
    private $conferenceId = null;

    /**
     * @ElementName moderatorPin
     * @Type string
     * @var string|null
     */
    private $moderatorPin = null;

    /**
     * Getter for conferenceId
     *
     * @return string
     */
    public function getConferenceId()
    {
        return $this->conferenceId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceId;
    }

    /**
     * Setter for conferenceId
     *
     * @param string $conferenceId
     * @return $this
     */
    public function setConferenceId($conferenceId)
    {
        $this->conferenceId = $conferenceId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceId()
    {
        $this->conferenceId = null;
        return $this;
    }

    /**
     * Getter for moderatorPin
     *
     * @return string
     */
    public function getModeratorPin()
    {
        return $this->moderatorPin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->moderatorPin;
    }

    /**
     * Setter for moderatorPin
     *
     * @param string $moderatorPin
     * @return $this
     */
    public function setModeratorPin($moderatorPin)
    {
        $this->moderatorPin = $moderatorPin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetModeratorPin()
    {
        $this->moderatorPin = null;
        return $this;
    }


}

