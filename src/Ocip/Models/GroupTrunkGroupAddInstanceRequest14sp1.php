<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupAddInstanceRequest14sp1
 *
 * Add a Trunk Group instance to a group.
 *         The domain is required in the serviceUserId.
 *         The publicUserIdentity in the ServiceInstanceAddProfile is not allowed
 * for trunk groups.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupTrunkGroupAddInstanceRequest14sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfileTrunkGroup|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointAdd|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName maxActiveCalls
     * @var int|null
     */
    private $maxActiveCalls = null;

    /**
     * @ElementName maxIncomingCalls
     * @var int|null
     */
    private $maxIncomingCalls = null;

    /**
     * @ElementName maxOutgoingCalls
     * @var int|null
     */
    private $maxOutgoingCalls = null;

    /**
     * @ElementName enableBursting
     * @var bool|null
     */
    private $enableBursting = null;

    /**
     * @ElementName burstingMaxActiveCalls
     * @var int|null
     */
    private $burstingMaxActiveCalls = null;

    /**
     * @ElementName burstingMaxIncomingCalls
     * @var int|null
     */
    private $burstingMaxIncomingCalls = null;

    /**
     * @ElementName burstingMaxOutgoingCalls
     * @var int|null
     */
    private $burstingMaxOutgoingCalls = null;

    /**
     * @ElementName capacityExceededAction
     * @var string|null
     */
    private $capacityExceededAction = null;

    /**
     * @ElementName capacityExceededForwardAddress
     * @var string|null
     */
    private $capacityExceededForwardAddress = null;

    /**
     * @ElementName capacityExceededRerouteTrunkGroupId
     * @var string|null
     */
    private $capacityExceededRerouteTrunkGroupId = null;

    /**
     * @ElementName capacityExceededTrapInitialCalls
     * @var int|null
     */
    private $capacityExceededTrapInitialCalls = null;

    /**
     * @ElementName capacityExceededTrapOffsetCalls
     * @var int|null
     */
    private $capacityExceededTrapOffsetCalls = null;

    /**
     * @ElementName unreachableDestinationAction
     * @var string|null
     */
    private $unreachableDestinationAction = null;

    /**
     * @ElementName unreachableDestinationForwardAddress
     * @var string|null
     */
    private $unreachableDestinationForwardAddress = null;

    /**
     * @ElementName unreachableDestinationRerouteTrunkGroupId
     * @var string|null
     */
    private $unreachableDestinationRerouteTrunkGroupId = null;

    /**
     * @ElementName unreachableDestinationTrapInitialCalls
     * @var int|null
     */
    private $unreachableDestinationTrapInitialCalls = null;

    /**
     * @ElementName unreachableDestinationTrapOffsetCalls
     * @var int|null
     */
    private $unreachableDestinationTrapOffsetCalls = null;

    /**
     * @ElementName invitationTimeout
     * @var int|null
     */
    private $invitationTimeout = null;

    /**
     * @ElementName requireAuthentication
     * @var bool|null
     */
    private $requireAuthentication = null;

    /**
     * @ElementName sipAuthenticationUserName
     * @var string|null
     */
    private $sipAuthenticationUserName = null;

    /**
     * @ElementName sipAuthenticationPassword
     * @var string|null
     */
    private $sipAuthenticationPassword = null;

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
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfileTrunkGroup|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfileTrunkGroup|null $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * Getter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointAdd|null
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointAdd|null $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint($accessDeviceEndpoint)
    {
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        return $this;
    }

    /**
     * Getter for maxActiveCalls
     *
     * @ElementName maxActiveCalls
     * @return int|null
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls;
    }

    /**
     * Setter for maxActiveCalls
     *
     * @ElementName maxActiveCalls
     * @param int|null $maxActiveCalls
     * @return $this
     */
    public function setMaxActiveCalls($maxActiveCalls)
    {
        $this->maxActiveCalls = $maxActiveCalls;
        return $this;
    }

    /**
     * Getter for maxIncomingCalls
     *
     * @ElementName maxIncomingCalls
     * @return int|null
     */
    public function getMaxIncomingCalls()
    {
        return $this->maxIncomingCalls;
    }

    /**
     * Setter for maxIncomingCalls
     *
     * @ElementName maxIncomingCalls
     * @param int|null $maxIncomingCalls
     * @return $this
     */
    public function setMaxIncomingCalls($maxIncomingCalls)
    {
        $this->maxIncomingCalls = $maxIncomingCalls;
        return $this;
    }

    /**
     * Getter for maxOutgoingCalls
     *
     * @ElementName maxOutgoingCalls
     * @return int|null
     */
    public function getMaxOutgoingCalls()
    {
        return $this->maxOutgoingCalls;
    }

    /**
     * Setter for maxOutgoingCalls
     *
     * @ElementName maxOutgoingCalls
     * @param int|null $maxOutgoingCalls
     * @return $this
     */
    public function setMaxOutgoingCalls($maxOutgoingCalls)
    {
        $this->maxOutgoingCalls = $maxOutgoingCalls;
        return $this;
    }

    /**
     * Getter for enableBursting
     *
     * @ElementName enableBursting
     * @return bool|null
     */
    public function getEnableBursting()
    {
        return $this->enableBursting;
    }

    /**
     * Setter for enableBursting
     *
     * @ElementName enableBursting
     * @param bool|null $enableBursting
     * @return $this
     */
    public function setEnableBursting($enableBursting)
    {
        $this->enableBursting = $enableBursting;
        return $this;
    }

    /**
     * Getter for burstingMaxActiveCalls
     *
     * @ElementName burstingMaxActiveCalls
     * @return int|null
     */
    public function getBurstingMaxActiveCalls()
    {
        return $this->burstingMaxActiveCalls;
    }

    /**
     * Setter for burstingMaxActiveCalls
     *
     * @ElementName burstingMaxActiveCalls
     * @param int|null $burstingMaxActiveCalls
     * @return $this
     */
    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls)
    {
        $this->burstingMaxActiveCalls = $burstingMaxActiveCalls;
        return $this;
    }

    /**
     * Getter for burstingMaxIncomingCalls
     *
     * @ElementName burstingMaxIncomingCalls
     * @return int|null
     */
    public function getBurstingMaxIncomingCalls()
    {
        return $this->burstingMaxIncomingCalls;
    }

    /**
     * Setter for burstingMaxIncomingCalls
     *
     * @ElementName burstingMaxIncomingCalls
     * @param int|null $burstingMaxIncomingCalls
     * @return $this
     */
    public function setBurstingMaxIncomingCalls($burstingMaxIncomingCalls)
    {
        $this->burstingMaxIncomingCalls = $burstingMaxIncomingCalls;
        return $this;
    }

    /**
     * Getter for burstingMaxOutgoingCalls
     *
     * @ElementName burstingMaxOutgoingCalls
     * @return int|null
     */
    public function getBurstingMaxOutgoingCalls()
    {
        return $this->burstingMaxOutgoingCalls;
    }

    /**
     * Setter for burstingMaxOutgoingCalls
     *
     * @ElementName burstingMaxOutgoingCalls
     * @param int|null $burstingMaxOutgoingCalls
     * @return $this
     */
    public function setBurstingMaxOutgoingCalls($burstingMaxOutgoingCalls)
    {
        $this->burstingMaxOutgoingCalls = $burstingMaxOutgoingCalls;
        return $this;
    }

    /**
     * Getter for capacityExceededAction
     *
     * @ElementName capacityExceededAction
     * @return string|null
     */
    public function getCapacityExceededAction()
    {
        return $this->capacityExceededAction;
    }

    /**
     * Setter for capacityExceededAction
     *
     * @ElementName capacityExceededAction
     * @param string|null $capacityExceededAction
     * @return $this
     */
    public function setCapacityExceededAction($capacityExceededAction)
    {
        $this->capacityExceededAction = $capacityExceededAction;
        return $this;
    }

    /**
     * Getter for capacityExceededForwardAddress
     *
     * @ElementName capacityExceededForwardAddress
     * @return string|null
     */
    public function getCapacityExceededForwardAddress()
    {
        return $this->capacityExceededForwardAddress;
    }

    /**
     * Setter for capacityExceededForwardAddress
     *
     * @ElementName capacityExceededForwardAddress
     * @param string|null $capacityExceededForwardAddress
     * @return $this
     */
    public function setCapacityExceededForwardAddress($capacityExceededForwardAddress)
    {
        $this->capacityExceededForwardAddress = $capacityExceededForwardAddress;
        return $this;
    }

    /**
     * Getter for capacityExceededRerouteTrunkGroupId
     *
     * @ElementName capacityExceededRerouteTrunkGroupId
     * @return string|null
     */
    public function getCapacityExceededRerouteTrunkGroupId()
    {
        return $this->capacityExceededRerouteTrunkGroupId;
    }

    /**
     * Setter for capacityExceededRerouteTrunkGroupId
     *
     * @ElementName capacityExceededRerouteTrunkGroupId
     * @param string|null $capacityExceededRerouteTrunkGroupId
     * @return $this
     */
    public function setCapacityExceededRerouteTrunkGroupId($capacityExceededRerouteTrunkGroupId)
    {
        $this->capacityExceededRerouteTrunkGroupId = $capacityExceededRerouteTrunkGroupId;
        return $this;
    }

    /**
     * Getter for capacityExceededTrapInitialCalls
     *
     * @ElementName capacityExceededTrapInitialCalls
     * @return int|null
     */
    public function getCapacityExceededTrapInitialCalls()
    {
        return $this->capacityExceededTrapInitialCalls;
    }

    /**
     * Setter for capacityExceededTrapInitialCalls
     *
     * @ElementName capacityExceededTrapInitialCalls
     * @param int|null $capacityExceededTrapInitialCalls
     * @return $this
     */
    public function setCapacityExceededTrapInitialCalls($capacityExceededTrapInitialCalls)
    {
        $this->capacityExceededTrapInitialCalls = $capacityExceededTrapInitialCalls;
        return $this;
    }

    /**
     * Getter for capacityExceededTrapOffsetCalls
     *
     * @ElementName capacityExceededTrapOffsetCalls
     * @return int|null
     */
    public function getCapacityExceededTrapOffsetCalls()
    {
        return $this->capacityExceededTrapOffsetCalls;
    }

    /**
     * Setter for capacityExceededTrapOffsetCalls
     *
     * @ElementName capacityExceededTrapOffsetCalls
     * @param int|null $capacityExceededTrapOffsetCalls
     * @return $this
     */
    public function setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls)
    {
        $this->capacityExceededTrapOffsetCalls = $capacityExceededTrapOffsetCalls;
        return $this;
    }

    /**
     * Getter for unreachableDestinationAction
     *
     * @ElementName unreachableDestinationAction
     * @return string|null
     */
    public function getUnreachableDestinationAction()
    {
        return $this->unreachableDestinationAction;
    }

    /**
     * Setter for unreachableDestinationAction
     *
     * @ElementName unreachableDestinationAction
     * @param string|null $unreachableDestinationAction
     * @return $this
     */
    public function setUnreachableDestinationAction($unreachableDestinationAction)
    {
        $this->unreachableDestinationAction = $unreachableDestinationAction;
        return $this;
    }

    /**
     * Getter for unreachableDestinationForwardAddress
     *
     * @ElementName unreachableDestinationForwardAddress
     * @return string|null
     */
    public function getUnreachableDestinationForwardAddress()
    {
        return $this->unreachableDestinationForwardAddress;
    }

    /**
     * Setter for unreachableDestinationForwardAddress
     *
     * @ElementName unreachableDestinationForwardAddress
     * @param string|null $unreachableDestinationForwardAddress
     * @return $this
     */
    public function setUnreachableDestinationForwardAddress($unreachableDestinationForwardAddress)
    {
        $this->unreachableDestinationForwardAddress = $unreachableDestinationForwardAddress;
        return $this;
    }

    /**
     * Getter for unreachableDestinationRerouteTrunkGroupId
     *
     * @ElementName unreachableDestinationRerouteTrunkGroupId
     * @return string|null
     */
    public function getUnreachableDestinationRerouteTrunkGroupId()
    {
        return $this->unreachableDestinationRerouteTrunkGroupId;
    }

    /**
     * Setter for unreachableDestinationRerouteTrunkGroupId
     *
     * @ElementName unreachableDestinationRerouteTrunkGroupId
     * @param string|null $unreachableDestinationRerouteTrunkGroupId
     * @return $this
     */
    public function setUnreachableDestinationRerouteTrunkGroupId($unreachableDestinationRerouteTrunkGroupId)
    {
        $this->unreachableDestinationRerouteTrunkGroupId = $unreachableDestinationRerouteTrunkGroupId;
        return $this;
    }

    /**
     * Getter for unreachableDestinationTrapInitialCalls
     *
     * @ElementName unreachableDestinationTrapInitialCalls
     * @return int|null
     */
    public function getUnreachableDestinationTrapInitialCalls()
    {
        return $this->unreachableDestinationTrapInitialCalls;
    }

    /**
     * Setter for unreachableDestinationTrapInitialCalls
     *
     * @ElementName unreachableDestinationTrapInitialCalls
     * @param int|null $unreachableDestinationTrapInitialCalls
     * @return $this
     */
    public function setUnreachableDestinationTrapInitialCalls($unreachableDestinationTrapInitialCalls)
    {
        $this->unreachableDestinationTrapInitialCalls = $unreachableDestinationTrapInitialCalls;
        return $this;
    }

    /**
     * Getter for unreachableDestinationTrapOffsetCalls
     *
     * @ElementName unreachableDestinationTrapOffsetCalls
     * @return int|null
     */
    public function getUnreachableDestinationTrapOffsetCalls()
    {
        return $this->unreachableDestinationTrapOffsetCalls;
    }

    /**
     * Setter for unreachableDestinationTrapOffsetCalls
     *
     * @ElementName unreachableDestinationTrapOffsetCalls
     * @param int|null $unreachableDestinationTrapOffsetCalls
     * @return $this
     */
    public function setUnreachableDestinationTrapOffsetCalls($unreachableDestinationTrapOffsetCalls)
    {
        $this->unreachableDestinationTrapOffsetCalls = $unreachableDestinationTrapOffsetCalls;
        return $this;
    }

    /**
     * Getter for invitationTimeout
     *
     * @ElementName invitationTimeout
     * @return int|null
     */
    public function getInvitationTimeout()
    {
        return $this->invitationTimeout;
    }

    /**
     * Setter for invitationTimeout
     *
     * @ElementName invitationTimeout
     * @param int|null $invitationTimeout
     * @return $this
     */
    public function setInvitationTimeout($invitationTimeout)
    {
        $this->invitationTimeout = $invitationTimeout;
        return $this;
    }

    /**
     * Getter for requireAuthentication
     *
     * @ElementName requireAuthentication
     * @return bool|null
     */
    public function getRequireAuthentication()
    {
        return $this->requireAuthentication;
    }

    /**
     * Setter for requireAuthentication
     *
     * @ElementName requireAuthentication
     * @param bool|null $requireAuthentication
     * @return $this
     */
    public function setRequireAuthentication($requireAuthentication)
    {
        $this->requireAuthentication = $requireAuthentication;
        return $this;
    }

    /**
     * Getter for sipAuthenticationUserName
     *
     * @ElementName sipAuthenticationUserName
     * @return string|null
     */
    public function getSipAuthenticationUserName()
    {
        return $this->sipAuthenticationUserName;
    }

    /**
     * Setter for sipAuthenticationUserName
     *
     * @ElementName sipAuthenticationUserName
     * @param string|null $sipAuthenticationUserName
     * @return $this
     */
    public function setSipAuthenticationUserName($sipAuthenticationUserName)
    {
        $this->sipAuthenticationUserName = $sipAuthenticationUserName;
        return $this;
    }

    /**
     * Getter for sipAuthenticationPassword
     *
     * @ElementName sipAuthenticationPassword
     * @return string|null
     */
    public function getSipAuthenticationPassword()
    {
        return $this->sipAuthenticationPassword;
    }

    /**
     * Setter for sipAuthenticationPassword
     *
     * @ElementName sipAuthenticationPassword
     * @param string|null $sipAuthenticationPassword
     * @return $this
     */
    public function setSipAuthenticationPassword($sipAuthenticationPassword)
    {
        $this->sipAuthenticationPassword = $sipAuthenticationPassword;
        return $this;
    }


}

