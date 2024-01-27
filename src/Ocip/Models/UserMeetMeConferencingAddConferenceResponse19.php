<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingAddConferenceResponse19
 *
 * Response to UserMeetMeConferencingAddConferenceRequest19.
 *         Contains the information of a conference.
 *         
 *         Replaced by: UserMeetMeConferencingAddConferenceResponse23
 *
 * @see UserMeetMeConferencingAddConferenceRequest19
 * @see UserMeetMeConferencingAddConferenceResponse23
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:45722","type":"sequence"}]
 */
class UserMeetMeConferencingAddConferenceResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName conferenceId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:45722
     * @MinLength 6
     * @MaxLength 12
     * @var string|null
     */
    protected $conferenceId = null;

    /**
     * @ElementName moderatorPin
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:45722
     * @MinLength 6
     * @MaxLength 12
     * @var string|null
     */
    protected $moderatorPin = null;

    /**
     * @ElementName securityPin
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:45722
     * @MinLength 4
     * @MaxLength 12
     * @var string|null
     */
    protected $securityPin = null;

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

