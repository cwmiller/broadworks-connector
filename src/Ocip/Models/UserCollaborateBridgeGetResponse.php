<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateBridgeGetResponse
 *
 * The system-level collaborate supportOutdial setting is returned in the response when the system-level collaborate supportOutdial setting is disabled.
 *         Response to UserCollaborateBridgeGetRequest.
 *         
 *         Replaced by: UserCollaborateBridgeGetResponse20sp1
 *
 * @see UserCollaborateBridgeGetRequest
 * @see UserCollaborateBridgeGetResponse20sp1
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:34073","type":"sequence"}]
 */
class UserCollaborateBridgeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName bridgeId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:34073
     * @var string|null
     */
    private $bridgeId = null;

    /**
     * @ElementName bridgeName
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:34073
     * @var string|null
     */
    private $bridgeName = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:34073
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName extension
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:34073
     * @var string|null
     */
    private $extension = null;

    /**
     * @ElementName alternateNumberEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21
     * @Array
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:34073
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21[]
     */
    private $alternateNumberEntry = array(
        
    );

    /**
     * @ElementName supportOutDial
     * @Type bool
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:34073
     * @var bool|null
     */
    private $supportOutDial = null;

    /**
     * @ElementName maxCollaborateRoomParticipants
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:34073
     * @var int|null
     */
    private $maxCollaborateRoomParticipants = null;

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
     * Getter for bridgeName
     *
     * @return string
     */
    public function getBridgeName()
    {
        return $this->bridgeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->bridgeName;
    }

    /**
     * Setter for bridgeName
     *
     * @param string $bridgeName
     * @return $this
     */
    public function setBridgeName($bridgeName)
    {
        $this->bridgeName = $bridgeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBridgeName()
    {
        $this->bridgeName = null;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Getter for extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extension;
    }

    /**
     * Setter for extension
     *
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtension()
    {
        $this->extension = null;
        return $this;
    }

    /**
     * Getter for alternateNumberEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21[]
     */
    public function getAlternateNumberEntry()
    {
        return $this->alternateNumberEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateNumberEntry;
    }

    /**
     * Setter for alternateNumberEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21[] $alternateNumberEntry
     * @return $this
     */
    public function setAlternateNumberEntry(array $alternateNumberEntry)
    {
        $this->alternateNumberEntry = $alternateNumberEntry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateNumberEntry()
    {
        $this->alternateNumberEntry = null;
        return $this;
    }

    /**
     * Adder for alternateNumberEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21 $alternateNumberEntry
     * @return $this
     */
    public function addAlternateNumberEntry($alternateNumberEntry)
    {
        $this->alternateNumberEntry[] = $alternateNumberEntry;
        return $this;
    }

    /**
     * Getter for supportOutDial
     *
     * @return bool
     */
    public function getSupportOutDial()
    {
        return $this->supportOutDial instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportOutDial;
    }

    /**
     * Setter for supportOutDial
     *
     * @param bool $supportOutDial
     * @return $this
     */
    public function setSupportOutDial($supportOutDial)
    {
        $this->supportOutDial = $supportOutDial;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportOutDial()
    {
        $this->supportOutDial = null;
        return $this;
    }

    /**
     * Getter for maxCollaborateRoomParticipants
     *
     * @return int
     */
    public function getMaxCollaborateRoomParticipants()
    {
        return $this->maxCollaborateRoomParticipants instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxCollaborateRoomParticipants;
    }

    /**
     * Setter for maxCollaborateRoomParticipants
     *
     * @param int $maxCollaborateRoomParticipants
     * @return $this
     */
    public function setMaxCollaborateRoomParticipants($maxCollaborateRoomParticipants)
    {
        $this->maxCollaborateRoomParticipants = $maxCollaborateRoomParticipants;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxCollaborateRoomParticipants()
    {
        $this->maxCollaborateRoomParticipants = null;
        return $this;
    }


}

