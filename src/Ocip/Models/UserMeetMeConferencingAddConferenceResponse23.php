<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingAddConferenceResponse23
 *
 * Response to UserMeetMeConferencingAddConferenceRequest23.
 *         Contains the information of a conference.
 *
 * @see UserMeetMeConferencingAddConferenceRequest23
 * @Groups [{"id":"0fd24121d16995c994d40bc408dbcfa5:591","type":"sequence"}]
 */
class UserMeetMeConferencingAddConferenceResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceId
     * @Type string
     * @Group 0fd24121d16995c994d40bc408dbcfa5:591
     * @var string|null
     */
    private $conferenceId = null;

    /**
     * @ElementName moderatorPin
     * @Type string
     * @Group 0fd24121d16995c994d40bc408dbcfa5:591
     * @var string|null
     */
    private $moderatorPin = null;

    /**
     * @ElementName securityPin
     * @Type string
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:591
     * @var string|null
     */
    private $securityPin = null;

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

    /**
     * Getter for securityPin
     *
     * @return string
     */
    public function getSecurityPin()
    {
        return $this->securityPin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->securityPin;
    }

    /**
     * Setter for securityPin
     *
     * @param string $securityPin
     * @return $this
     */
    public function setSecurityPin($securityPin)
    {
        $this->securityPin = $securityPin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecurityPin()
    {
        $this->securityPin = null;
        return $this;
    }


}

