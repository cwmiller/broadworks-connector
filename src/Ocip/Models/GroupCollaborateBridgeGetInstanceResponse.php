<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCollaborateBridgeGetInstanceResponse
 *
 * Response to GroupCollaborateBridgeGetInstanceRequest.
 *         The system-level collaborate supportOutdial setting is returned in the response when the system-level collaborate 
 *         supportOutdial setting is disabled. 
 *         Contains the service profile information and a table of assigned owners.
 *         The table has column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", 
 *         "Hiragana First Name", Phone Number", "Extension", "Department", "Email Address".
 *         Collaborate bridge maximum participant’s choices unlimited or a quantified number of participants.
 *         
 *         Replaced by: GroupCollaborateBridgeGetInstanceResponse20sp1
 *
 * @see GroupCollaborateBridgeGetInstanceRequest
 * @see GroupCollaborateBridgeGetInstanceResponse20sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:35321","type":"sequence"}]
 */
class GroupCollaborateBridgeGetInstanceResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35321
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName maximumBridgeParticipants
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CollaborateBridgeMaximumParticipants
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35321
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateBridgeMaximumParticipants|null
     */
    private $maximumBridgeParticipants = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35321
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName isDefault
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35321
     * @var bool|null
     */
    private $isDefault = null;

    /**
     * @ElementName maxCollaborateRoomParticipants
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35321
     * @var int|null
     */
    private $maxCollaborateRoomParticipants = null;

    /**
     * @ElementName supportOutdial
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35321
     * @var bool|null
     */
    private $supportOutdial = null;

    /**
     * @ElementName collaborateOwnerUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35321
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $collaborateOwnerUserTable = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1 $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1 $serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInstanceProfile()
    {
        $this->serviceInstanceProfile = null;
        return $this;
    }

    /**
     * Getter for maximumBridgeParticipants
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateBridgeMaximumParticipants
     */
    public function getMaximumBridgeParticipants()
    {
        return $this->maximumBridgeParticipants instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maximumBridgeParticipants;
    }

    /**
     * Setter for maximumBridgeParticipants
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateBridgeMaximumParticipants $maximumBridgeParticipants
     * @return $this
     */
    public function setMaximumBridgeParticipants(\CWM\BroadWorksConnector\Ocip\Models\CollaborateBridgeMaximumParticipants $maximumBridgeParticipants)
    {
        $this->maximumBridgeParticipants = $maximumBridgeParticipants;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaximumBridgeParticipants()
    {
        $this->maximumBridgeParticipants = null;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @return string
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }

    /**
     * Getter for isDefault
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isDefault;
    }

    /**
     * Setter for isDefault
     *
     * @param bool $isDefault
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsDefault()
    {
        $this->isDefault = null;
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

    /**
     * Getter for supportOutdial
     *
     * @return bool
     */
    public function getSupportOutdial()
    {
        return $this->supportOutdial instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportOutdial;
    }

    /**
     * Setter for supportOutdial
     *
     * @param bool $supportOutdial
     * @return $this
     */
    public function setSupportOutdial($supportOutdial)
    {
        $this->supportOutdial = $supportOutdial;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportOutdial()
    {
        $this->supportOutdial = null;
        return $this;
    }

    /**
     * Getter for collaborateOwnerUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCollaborateOwnerUserTable()
    {
        return $this->collaborateOwnerUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->collaborateOwnerUserTable;
    }

    /**
     * Setter for collaborateOwnerUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $collaborateOwnerUserTable
     * @return $this
     */
    public function setCollaborateOwnerUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $collaborateOwnerUserTable = null)
    {
        if ($collaborateOwnerUserTable === null) {
            $this->collaborateOwnerUserTable = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->collaborateOwnerUserTable = $collaborateOwnerUserTable;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCollaborateOwnerUserTable()
    {
        $this->collaborateOwnerUserTable = null;
        return $this;
    }


}

