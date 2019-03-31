<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCollaborateBridgeConsolidatedAddInstanceRequest
 *
 * Add a collaborate bridge to a group.
 *         The domain is required in the serviceUserId.
 *         The request fails when supportOutdial is enabled and the system-level collaborate supportOutdial setting is disabled.
 *         If the phoneNumber has not been assigned to the group and addPhoneNumberToGroup is set to true,
 *         it will be added to group if the command is executed by a service provider administrator or above
 *         and the number is already assigned to the service provider. The command will fail otherwise.
 *         
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"939fd5846dfae8bdf58308d6cb9ebb12:103","type":"sequence"}]
 */
class GroupCollaborateBridgeConsolidatedAddInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:103
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:103
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:103
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName addPhoneNumberToGroup
     * @Type bool
     * @Optional
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:103
     * @var bool|null
     */
    private $addPhoneNumberToGroup = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:103
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName maximumBridgeParticipants
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CollaborateBridgeMaximumParticipants
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:103
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateBridgeMaximumParticipants|null
     */
    private $maximumBridgeParticipants = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:103
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName maxCollaborateRoomParticipants
     * @Type int
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:103
     * @MinInclusive 3
     * @MaxInclusive 145
     * @var int|null
     */
    private $maxCollaborateRoomParticipants = null;

    /**
     * @ElementName supportOutdial
     * @Type bool
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:103
     * @var bool|null
     */
    private $supportOutdial = null;

    /**
     * @ElementName collaborateOwnerUserId
     * @Type string
     * @Array
     * @Optional
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:103
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    private $collaborateOwnerUserId = array(
        
    );

    /**
     * @ElementName service
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment
     * @Array
     * @Optional
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:103
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[]
     */
    private $service = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

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
     * Getter for addPhoneNumberToGroup
     *
     * @return bool
     */
    public function getAddPhoneNumberToGroup()
    {
        return $this->addPhoneNumberToGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->addPhoneNumberToGroup;
    }

    /**
     * Setter for addPhoneNumberToGroup
     *
     * @param bool $addPhoneNumberToGroup
     * @return $this
     */
    public function setAddPhoneNumberToGroup($addPhoneNumberToGroup)
    {
        $this->addPhoneNumberToGroup = $addPhoneNumberToGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddPhoneNumberToGroup()
    {
        $this->addPhoneNumberToGroup = null;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile $serviceInstanceProfile)
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
     * Getter for collaborateOwnerUserId
     *
     * @return string[]
     */
    public function getCollaborateOwnerUserId()
    {
        return $this->collaborateOwnerUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->collaborateOwnerUserId;
    }

    /**
     * Setter for collaborateOwnerUserId
     *
     * @param string[] $collaborateOwnerUserId
     * @return $this
     */
    public function setCollaborateOwnerUserId(array $collaborateOwnerUserId)
    {
        $this->collaborateOwnerUserId = $collaborateOwnerUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCollaborateOwnerUserId()
    {
        $this->collaborateOwnerUserId = null;
        return $this;
    }

    /**
     * Adder for collaborateOwnerUserId
     *
     * @param string $collaborateOwnerUserId
     * @return $this
     */
    public function addCollaborateOwnerUserId(string $collaborateOwnerUserId)
    {
        $this->collaborateOwnerUserId[] = $collaborateOwnerUserId;
        return $this;
    }

    /**
     * Getter for service
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[]
     */
    public function getService()
    {
        return $this->service instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->service;
    }

    /**
     * Setter for service
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[] $service
     * @return $this
     */
    public function setService(array $service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetService()
    {
        $this->service = null;
        return $this;
    }

    /**
     * Adder for service
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment $service
     * @return $this
     */
    public function addService($service)
    {
        $this->service[] = $service;
        return $this;
    }


}

