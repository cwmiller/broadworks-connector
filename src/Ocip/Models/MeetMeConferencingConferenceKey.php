<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MeetMeConferencingConferenceKey
 *
 * Identifier for conference.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2405","type":"sequence"}]
 */
class MeetMeConferencingConferenceKey
{

    /**
     * @ElementName bridgeId
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2405
     * @var string|null
     */
    private $bridgeId = null;

    /**
     * @ElementName conferenceId
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2405
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

