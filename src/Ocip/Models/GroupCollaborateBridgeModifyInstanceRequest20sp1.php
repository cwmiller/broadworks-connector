<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCollaborateBridgeModifyInstanceRequest20sp1
 *
 * Request to modify a Collaborate bridge.
 *         The request fails when the collaborateOwnerUserIdList is included in the
 * request for the default collaborate bridge.
 *         The request fails when the supportOutdial is included in the request and
 * the system-level collaborate supportOutdial setting is disabled.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCollaborateBridgeModifyInstanceRequest20sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName maximumBridgeParticipants
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CollaborateBridgeMaximumParticipants
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateBridgeMaximumParticipants|null
     */
    private $maximumBridgeParticipants = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName maxCollaborateRoomParticipants
     * @Type int
     * @var int|null
     */
    private $maxCollaborateRoomParticipants = null;

    /**
     * @ElementName supportOutdial
     * @Type bool
     * @var bool|null
     */
    private $supportOutdial = null;

    /**
     * @ElementName collaborateOwnerUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $collaborateOwnerUserIdList = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile $serviceInstanceProfile)
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
     * Getter for collaborateOwnerUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getCollaborateOwnerUserIdList()
    {
        return $this->collaborateOwnerUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->collaborateOwnerUserIdList;
    }

    /**
     * Setter for collaborateOwnerUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $collaborateOwnerUserIdList
     * @return $this
     */
    public function setCollaborateOwnerUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $collaborateOwnerUserIdList)
    {
        if ($collaborateOwnerUserIdList === null) {
            $this->collaborateOwnerUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->collaborateOwnerUserIdList = $collaborateOwnerUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCollaborateOwnerUserIdList()
    {
        $this->collaborateOwnerUserIdList = null;
        return $this;
    }


}

