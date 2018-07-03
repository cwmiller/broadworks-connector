<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCollaborateBridgeConsolidatedAddInstanceRequest
 *
 * Add a collaborate bridge to a group.
 *         The domain is required in the serviceUserId.
 *         The request fails when supportOutdial is enabled and the system-level
 * collaborate supportOutdial setting is disabled.
 *         If the phoneNumber has not been assigned to the group and
 * addPhoneNumberToGroup is set to true,
 *         it will be added to group if the command is executed by a service
 * provider administrator or above
 *         and the number is already assigned to the service provider. The command
 * will fail otherwise.
 *         
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCollaborateBridgeConsolidatedAddInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName addPhoneNumberToGroup
     * @var bool|null
     */
    private $addPhoneNumberToGroup = null;

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile|null
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
     * @ElementName collaborateOwnerUserId
     * @var string[]
     */
    private $collaborateOwnerUserId = array(
        
    );

    /**
     * @ElementName service
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[]
     */
    private $service = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for addPhoneNumberToGroup
     *
     * @ElementName addPhoneNumberToGroup
     * @return bool|null
     */
    public function getAddPhoneNumberToGroup()
    {
        return $this->addPhoneNumberToGroup;
    }

    /**
     * Setter for addPhoneNumberToGroup
     *
     * @ElementName addPhoneNumberToGroup
     * @param bool|null $addPhoneNumberToGroup
     * @return $this
     */
    public function setAddPhoneNumberToGroup($addPhoneNumberToGroup)
    {
        $this->addPhoneNumberToGroup = $addPhoneNumberToGroup;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile|null $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile($serviceInstanceProfile)
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
    public function setMaximumBridgeParticipants($maximumBridgeParticipants)
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
     * Getter for collaborateOwnerUserId
     *
     * @ElementName collaborateOwnerUserId
     * @return string[]
     */
    public function getCollaborateOwnerUserId()
    {
        return $this->collaborateOwnerUserId;
    }

    /**
     * Setter for collaborateOwnerUserId
     *
     * @ElementName collaborateOwnerUserId
     * @param string[] $collaborateOwnerUserId
     * @return $this
     */
    public function setCollaborateOwnerUserId($collaborateOwnerUserId)
    {
        $this->collaborateOwnerUserId = $collaborateOwnerUserId;
        return $this;
    }

    /**
     * Adder for collaborateOwnerUserId
     *
     * @ElementName collaborateOwnerUserId
     * @param string $collaborateOwnerUserId
     * @return $this
     */
    public function addCollaborateOwnerUserId($collaborateOwnerUserId)
    {
        $this->collaborateOwnerUserId []= $collaborateOwnerUserId;
        return $this;
    }

    /**
     * Getter for service
     *
     * @ElementName service
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Setter for service
     *
     * @ElementName service
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[] $service
     * @return $this
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Adder for service
     *
     * @ElementName service
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment $service
     * @return $this
     */
    public function addService($service)
    {
        $this->service []= $service;
        return $this;
    }


}

