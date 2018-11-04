<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCollaborateBridgeConsolidatedModifyInstanceRequest
 *
 * Request to modify a Collaborate bridge.
 *         The request fails when the collaborateOwnerUserIdList is included in the
 * request for the default collaborate bridge.
 *         The request fails when the supportOutdial is included in the request and
 * the system-level collaborate supportOutdial setting is disabled.
 *         When phone numbers are un-assigned from the user, the unused numbers may
 * be un-assigned from the group and service provider. If UnassignPhoneNumbersLevel
 * is set to 'Group', the user's primary phone number, fax number and any alternate
 * numbers, will be un-assigned from the group if the command is executed by a
 * service provider administrator or above.
 *         When set to 'Service Provider', they will be un-assigned from the group
 * and service provider if the command is executed by a provisioning administrator
 * or above.
 *         When omitted, the number(s) will be left assigned to the group.
 *         An ErrorResponse will be returned if any number cannot be unassigned
 * because of insufficient privilege.
 *         
 *         If the phoneNumber has not been assigned to the group and
 * addPhoneNumberToGroup is set to true, it will be added to group if needed if the
 * command is executed by a service provider administrator and above. The command
 * will fail otherwise.
 *         
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see ErrorResponse
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCollaborateBridgeConsolidatedModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName unassignPhoneNumbers
     * @var string|null
     */
    private $unassignPhoneNumbers = null;

    /**
     * @ElementName addPhoneNumberToGroup
     * @var bool|null
     */
    private $addPhoneNumberToGroup = null;

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
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
     * @ElementName collaborateOwnerUserIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $collaborateOwnerUserIdList = null;

    /**
     * @ElementName serviceList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serviceList = null;

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
     * Getter for unassignPhoneNumbers
     *
     * @ElementName unassignPhoneNumbers
     * @return string|null
     */
    public function getUnassignPhoneNumbers()
    {
        return $this->unassignPhoneNumbers;
    }

    /**
     * Setter for unassignPhoneNumbers
     *
     * @ElementName unassignPhoneNumbers
     * @param string|null $unassignPhoneNumbers
     * @return $this
     */
    public function setUnassignPhoneNumbers($unassignPhoneNumbers)
    {
        $this->unassignPhoneNumbers = $unassignPhoneNumbers;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null $serviceInstanceProfile
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
     * Getter for collaborateOwnerUserIdList
     *
     * @ElementName collaborateOwnerUserIdList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCollaborateOwnerUserIdList()
    {
        return $this->collaborateOwnerUserIdList;
    }

    /**
     * Setter for collaborateOwnerUserIdList
     *
     * @ElementName collaborateOwnerUserIdList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil $collaborateOwnerUserIdList
     * @return $this
     */
    public function setCollaborateOwnerUserIdList($collaborateOwnerUserIdList)
    {
        $this->collaborateOwnerUserIdList = $collaborateOwnerUserIdList;
        return $this;
    }

    /**
     * Getter for serviceList
     *
     * @ElementName serviceList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getServiceList()
    {
        return $this->serviceList;
    }

    /**
     * Setter for serviceList
     *
     * @ElementName serviceList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList|null|\CWM\BroadWorksConnector\Ocip\Nil $serviceList
     * @return $this
     */
    public function setServiceList($serviceList)
    {
        $this->serviceList = $serviceList;
        return $this;
    }


}

