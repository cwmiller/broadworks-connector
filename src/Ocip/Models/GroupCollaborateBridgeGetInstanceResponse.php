<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCollaborateBridgeGetInstanceResponse
 *
 * Response to GroupCollaborateBridgeGetInstanceRequest.
 *         The system-level collaborate supportOutdial setting is returned in the
 * response when the system-level collaborate 
 *         supportOutdial setting is disabled. 
 *         Contains the service profile information and a table of assigned owners.
 *         The table has column headings: "User Id", "Last Name", "First Name",
 * "Hiragana Last Name", 
 *         "Hiragana First Name", Phone Number", "Extension", "Department", "Email
 * Address".
 *         Collaborate bridge maximum participant’s choices unlimited or a
 * quantified number of participants.
 *         
 *         Replaced by: GroupCollaborateBridgeGetInstanceResponse20sp1
 *
 * @see GroupCollaborateBridgeGetInstanceRequest
 * @see GroupCollaborateBridgeGetInstanceResponse20sp1
 */
class GroupCollaborateBridgeGetInstanceResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName maximumBridgeParticipants
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateBridgeMaximumParticipants|null
     */
    private $maximumBridgeParticipants = null;

    /**
     * @ElementName networkClassOfService
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName isDefault
     * @var bool|null
     */
    private $isDefault = null;

    /**
     * @ElementName maxCollaborateRoomParticipants
     * @var int|null
     */
    private $maxCollaborateRoomParticipants = null;

    /**
     * @ElementName supportOutdial
     * @var bool|null
     */
    private $supportOutdial = null;

    /**
     * @ElementName collaborateOwnerUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $collaborateOwnerUserTable = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1 $serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * Getter for maximumBridgeParticipants
     *
     * @ElementName maximumBridgeParticipants
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateBridgeMaximumParticipants|null
     */
    public function getMaximumBridgeParticipants()
    {
        return $this->maximumBridgeParticipants;
    }

    /**
     * Setter for maximumBridgeParticipants
     *
     * @ElementName maximumBridgeParticipants
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateBridgeMaximumParticipants|null $maximumBridgeParticipants
     * @return $this
     */
    public function setMaximumBridgeParticipants(\CWM\BroadWorksConnector\Ocip\Models\CollaborateBridgeMaximumParticipants $maximumBridgeParticipants)
    {
        $this->maximumBridgeParticipants = $maximumBridgeParticipants;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @return string|null
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @param string|null $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * Getter for isDefault
     *
     * @ElementName isDefault
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Setter for isDefault
     *
     * @ElementName isDefault
     * @param bool|null $isDefault
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
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

    /**
     * Getter for supportOutdial
     *
     * @ElementName supportOutdial
     * @return bool|null
     */
    public function getSupportOutdial()
    {
        return $this->supportOutdial;
    }

    /**
     * Setter for supportOutdial
     *
     * @ElementName supportOutdial
     * @param bool|null $supportOutdial
     * @return $this
     */
    public function setSupportOutdial($supportOutdial)
    {
        $this->supportOutdial = $supportOutdial;
        return $this;
    }

    /**
     * Getter for collaborateOwnerUserTable
     *
     * @ElementName collaborateOwnerUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCollaborateOwnerUserTable()
    {
        return $this->collaborateOwnerUserTable;
    }

    /**
     * Setter for collaborateOwnerUserTable
     *
     * @ElementName collaborateOwnerUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $collaborateOwnerUserTable
     * @return $this
     */
    public function setCollaborateOwnerUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $collaborateOwnerUserTable)
    {
        $this->collaborateOwnerUserTable = $collaborateOwnerUserTable;
        return $this;
    }


}

