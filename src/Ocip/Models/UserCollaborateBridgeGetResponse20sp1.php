<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateBridgeGetResponse20sp1
 *
 * The system-level collaborate supportOutdial setting is returned in the response
 * when the system-level collaborate supportOutdial setting is disabled.
 *         Response to UserCollaborateBridgeGetRequest20sp1.
 *
 * @see UserCollaborateBridgeGetRequest20sp1
 */
class UserCollaborateBridgeGetResponse20sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName bridgeId
     * @var string|null
     */
    private $bridgeId = null;

    /**
     * @ElementName bridgeName
     * @var string|null
     */
    private $bridgeName = null;

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName extension
     * @var string|null
     */
    private $extension = null;

    /**
     * @ElementName alternateNumberEntry
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21[]
     */
    private $alternateNumberEntry = array(
        
    );

    /**
     * @ElementName supportOutDial
     * @var bool|null
     */
    private $supportOutDial = null;

    /**
     * @ElementName maxCollaborateRoomParticipants
     * @var int|null
     */
    private $maxCollaborateRoomParticipants = null;

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
     * Getter for bridgeName
     *
     * @ElementName bridgeName
     * @return string|null
     */
    public function getBridgeName()
    {
        return $this->bridgeName;
    }

    /**
     * Setter for bridgeName
     *
     * @ElementName bridgeName
     * @param string|null $bridgeName
     * @return $this
     */
    public function setBridgeName($bridgeName)
    {
        $this->bridgeName = $bridgeName;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Getter for extension
     *
     * @ElementName extension
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Setter for extension
     *
     * @ElementName extension
     * @param string|null $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * Getter for alternateNumberEntry
     *
     * @ElementName alternateNumberEntry
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21[]
     */
    public function getAlternateNumberEntry()
    {
        return $this->alternateNumberEntry;
    }

    /**
     * Setter for alternateNumberEntry
     *
     * @ElementName alternateNumberEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21[] $alternateNumberEntry
     * @return $this
     */
    public function setAlternateNumberEntry($alternateNumberEntry)
    {
        $this->alternateNumberEntry = $alternateNumberEntry;
        return $this;
    }

    /**
     * Adder for alternateNumberEntry
     *
     * @ElementName alternateNumberEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21 $alternateNumberEntry
     * @return $this
     */
    public function addAlternateNumberEntry($alternateNumberEntry)
    {
        $this->alternateNumberEntry []= $alternateNumberEntry;
        return $this;
    }

    /**
     * Getter for supportOutDial
     *
     * @ElementName supportOutDial
     * @return bool|null
     */
    public function getSupportOutDial()
    {
        return $this->supportOutDial;
    }

    /**
     * Setter for supportOutDial
     *
     * @ElementName supportOutDial
     * @param bool|null $supportOutDial
     * @return $this
     */
    public function setSupportOutDial($supportOutDial)
    {
        $this->supportOutDial = $supportOutDial;
        return $this;
    }

    /**
     * Getter for maxCollaborateRoomParticipants
     *
     * @ElementName maxCollaborateRoomParticipants
     * @return int|null
     */
    public function getMaxCollaborateRoomParticipants()
    {
        return $this->maxCollaborateRoomParticipants;
    }

    /**
     * Setter for maxCollaborateRoomParticipants
     *
     * @ElementName maxCollaborateRoomParticipants
     * @param int|null $maxCollaborateRoomParticipants
     * @return $this
     */
    public function setMaxCollaborateRoomParticipants($maxCollaborateRoomParticipants)
    {
        $this->maxCollaborateRoomParticipants = $maxCollaborateRoomParticipants;
        return $this;
    }


}

