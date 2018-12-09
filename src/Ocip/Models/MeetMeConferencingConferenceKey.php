<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MeetMeConferencingConferenceKey
 *
 * Identifier for conference.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:2195","type":"sequence"}]
 */
class MeetMeConferencingConferenceKey
{

    /**
     * @ElementName bridgeId
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:2195
     * @var string|null
     */
    private $bridgeId = null;

    /**
     * @ElementName conferenceId
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:2195
     * @var string|null
     */
    private $conferenceId = null;

    /**
     * Getter for bridgeId
     *
     * @return string
     */
    public function getBridgeId()
    {
        return $this->bridgeId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->bridgeId;
    }

    /**
     * Setter for bridgeId
     *
     * @param string $bridgeId
     * @return $this
     */
    public function setBridgeId($bridgeId)
    {
        $this->bridgeId = $bridgeId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBridgeId()
    {
        $this->bridgeId = null;
        return $this;
    }

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


}

