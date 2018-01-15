<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MeetMeConferencingConferenceKey
 *
 * Identifier for conference.
 */
class MeetMeConferencingConferenceKey
{

    /**
     * @ElementName bridgeId
     * @var string|null
     */
    private $bridgeId = null;

    /**
     * @ElementName conferenceId
     * @var string|null
     */
    private $conferenceId = null;

    /**
     * Getter for bridgeId
     *
     * @ElementName bridgeId
     * @return string|null
     */
    public function getBridgeId()
    {
        return $this->bridgeId;
    }

    /**
     * Setter for bridgeId
     *
     * @ElementName bridgeId
     * @param string|null $bridgeId
     * @return $this
     */
    public function setBridgeId($bridgeId)
    {
        $this->bridgeId = $bridgeId;
        return $this;
    }

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


}

