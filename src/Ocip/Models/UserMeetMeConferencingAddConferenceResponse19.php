<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingAddConferenceResponse19
 *
 * Response to UserMeetMeConferencingAddConferenceRequest19.
 *         Contains the information of a conference.
 *
 * @see UserMeetMeConferencingAddConferenceRequest19
 */
class UserMeetMeConferencingAddConferenceResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName securityPin
     * @var string|null
     */
    private $securityPin = null;

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

    /**
     * Getter for securityPin
     *
     * @ElementName securityPin
     * @return string|null
     */
    public function getSecurityPin()
    {
        return $this->securityPin;
    }

    /**
     * Setter for securityPin
     *
     * @ElementName securityPin
     * @param string|null $securityPin
     * @return $this
     */
    public function setSecurityPin($securityPin)
    {
        $this->securityPin = $securityPin;
        return $this;
    }


}

