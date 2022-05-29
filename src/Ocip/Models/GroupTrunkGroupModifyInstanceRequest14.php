<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupModifyInstanceRequest14
 *
 * Modify a Trunk Group Instance in a group.
 *         The publicUserIdentity in the ServiceInstanceModifyProfile is not allowed for trunk groups.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:15634","type":"sequence"}]
 */
class GroupTrunkGroupModifyInstanceRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfileTrunkGroup
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfileTrunkGroup|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $accessDeviceEndpoint = null;

    /**
     * @ElementName maxActiveCalls
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinInclusive 1
     * @var int|null
     */
    protected $maxActiveCalls = null;

    /**
     * @ElementName maxIncomingCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $maxIncomingCalls = null;

    /**
     * @ElementName maxOutgoingCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $maxOutgoingCalls = null;

    /**
     * @ElementName enableBursting
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @var bool|null
     */
    protected $enableBursting = null;

    /**
     * @ElementName burstingMaxActiveCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinInclusive 0
     * @MaxInclusive 999999
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $burstingMaxActiveCalls = null;

    /**
     * @ElementName burstingMaxIncomingCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinInclusive 0
     * @MaxInclusive 999999
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $burstingMaxIncomingCalls = null;

    /**
     * @ElementName burstingMaxOutgoingCalls
     * @Type int
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinInclusive 0
     * @MaxInclusive 999999
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $burstingMaxOutgoingCalls = null;

    /**
     * @ElementName capacityExceededAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $capacityExceededAction = null;

    /**
     * @ElementName capacityExceededForwardAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $capacityExceededForwardAddress = null;

    /**
     * @ElementName capacityExceededRerouteTrunkGroupId
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $capacityExceededRerouteTrunkGroupId = null;

    /**
     * @ElementName capacityExceededTrapInitialCalls
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinInclusive 0
     * @var int|null
     */
    protected $capacityExceededTrapInitialCalls = null;

    /**
     * @ElementName capacityExceededTrapOffsetCalls
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinInclusive 0
     * @var int|null
     */
    protected $capacityExceededTrapOffsetCalls = null;

    /**
     * @ElementName unreachableDestinationAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $unreachableDestinationAction = null;

    /**
     * @ElementName unreachableDestinationForwardAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $unreachableDestinationForwardAddress = null;

    /**
     * @ElementName unreachableDestinationRerouteTrunkGroupId
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $unreachableDestinationRerouteTrunkGroupId = null;

    /**
     * @ElementName unreachableDestinationTrapInitialCalls
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinInclusive 0
     * @var int|null
     */
    protected $unreachableDestinationTrapInitialCalls = null;

    /**
     * @ElementName unreachableDestinationTrapOffsetCalls
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinInclusive 0
     * @var int|null
     */
    protected $unreachableDestinationTrapOffsetCalls = null;

    /**
     * @ElementName invitationTimeout
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinInclusive 1
     * @MaxInclusive 255
     * @var int|null
     */
    protected $invitationTimeout = null;

    /**
     * @ElementName requireAuthentication
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @var bool|null
     */
    protected $requireAuthentication = null;

    /**
     * @ElementName sipAuthenticationUserName
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $sipAuthenticationUserName = null;

    /**
     * @ElementName sipAuthenticationPassword
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15634
     * @MinLength 1
     * @MaxLength 60
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $sipAuthenticationPassword = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfileTrunkGroup
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfileTrunkGroup $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfileTrunkGroup $serviceInstanceProfile)
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
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify $accessDeviceEndpoint = null)
    {
        if ($accessDeviceEndpoint === null) {
            $this->accessDeviceEndpoint = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceEndpoint()
    {
        $this->accessDeviceEndpoint = null;
        return $this;
    }

    /**
     * Getter for maxActiveCalls
     *
     * @return int
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxActiveCalls;
    }

    /**
     * Setter for maxActiveCalls
     *
     * @param int $maxActiveCalls
     * @return $this
     */
    public function setMaxActiveCalls($maxActiveCalls)
    {
        $this->maxActiveCalls = $maxActiveCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxActiveCalls()
    {
        $this->maxActiveCalls = null;
        return $this;
    }

    /**
     * Getter for maxIncomingCalls
     *
     * @return int|null
     */
    public function getMaxIncomingCalls()
    {
        return $this->maxIncomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxIncomingCalls;
    }

    /**
     * Setter for maxIncomingCalls
     *
     * @param int|null $maxIncomingCalls
     * @return $this
     */
    public function setMaxIncomingCalls($maxIncomingCalls = null)
    {
        if ($maxIncomingCalls === null) {
            $this->maxIncomingCalls = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->maxIncomingCalls = $maxIncomingCalls;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxIncomingCalls()
    {
        $this->maxIncomingCalls = null;
        return $this;
    }

    /**
     * Getter for maxOutgoingCalls
     *
     * @return int|null
     */
    public function getMaxOutgoingCalls()
    {
        return $this->maxOutgoingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxOutgoingCalls;
    }

    /**
     * Setter for maxOutgoingCalls
     *
     * @param int|null $maxOutgoingCalls
     * @return $this
     */
    public function setMaxOutgoingCalls($maxOutgoingCalls = null)
    {
        if ($maxOutgoingCalls === null) {
            $this->maxOutgoingCalls = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->maxOutgoingCalls = $maxOutgoingCalls;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxOutgoingCalls()
    {
        $this->maxOutgoingCalls = null;
        return $this;
    }

    /**
     * Getter for enableBursting
     *
     * @return bool
     */
    public function getEnableBursting()
    {
        return $this->enableBursting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableBursting;
    }

    /**
     * Setter for enableBursting
     *
     * @param bool $enableBursting
     * @return $this
     */
    public function setEnableBursting($enableBursting)
    {
        $this->enableBursting = $enableBursting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableBursting()
    {
        $this->enableBursting = null;
        return $this;
    }

    /**
     * Getter for burstingMaxActiveCalls
     *
     * @return int|null
     */
    public function getBurstingMaxActiveCalls()
    {
        return $this->burstingMaxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->burstingMaxActiveCalls;
    }

    /**
     * Setter for burstingMaxActiveCalls
     *
     * @param int|null $burstingMaxActiveCalls
     * @return $this
     */
    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls = null)
    {
        if ($burstingMaxActiveCalls === null) {
            $this->burstingMaxActiveCalls = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->burstingMaxActiveCalls = $burstingMaxActiveCalls;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBurstingMaxActiveCalls()
    {
        $this->burstingMaxActiveCalls = null;
        return $this;
    }

    /**
     * Getter for burstingMaxIncomingCalls
     *
     * @return int|null
     */
    public function getBurstingMaxIncomingCalls()
    {
        return $this->burstingMaxIncomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->burstingMaxIncomingCalls;
    }

    /**
     * Setter for burstingMaxIncomingCalls
     *
     * @param int|null $burstingMaxIncomingCalls
     * @return $this
     */
    public function setBurstingMaxIncomingCalls($burstingMaxIncomingCalls = null)
    {
        if ($burstingMaxIncomingCalls === null) {
            $this->burstingMaxIncomingCalls = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->burstingMaxIncomingCalls = $burstingMaxIncomingCalls;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBurstingMaxIncomingCalls()
    {
        $this->burstingMaxIncomingCalls = null;
        return $this;
    }

    /**
     * Getter for burstingMaxOutgoingCalls
     *
     * @return int|null
     */
    public function getBurstingMaxOutgoingCalls()
    {
        return $this->burstingMaxOutgoingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->burstingMaxOutgoingCalls;
    }

    /**
     * Setter for burstingMaxOutgoingCalls
     *
     * @param int|null $burstingMaxOutgoingCalls
     * @return $this
     */
    public function setBurstingMaxOutgoingCalls($burstingMaxOutgoingCalls = null)
    {
        if ($burstingMaxOutgoingCalls === null) {
            $this->burstingMaxOutgoingCalls = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->burstingMaxOutgoingCalls = $burstingMaxOutgoingCalls;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBurstingMaxOutgoingCalls()
    {
        $this->burstingMaxOutgoingCalls = null;
        return $this;
    }

    /**
     * Getter for capacityExceededAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction|null
     */
    public function getCapacityExceededAction()
    {
        return $this->capacityExceededAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededAction;
    }

    /**
     * Setter for capacityExceededAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction|null $capacityExceededAction
     * @return $this
     */
    public function setCapacityExceededAction(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction $capacityExceededAction = null)
    {
        if ($capacityExceededAction === null) {
            $this->capacityExceededAction = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->capacityExceededAction = $capacityExceededAction;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCapacityExceededAction()
    {
        $this->capacityExceededAction = null;
        return $this;
    }

    /**
     * Getter for capacityExceededForwardAddress
     *
     * @return string|null
     */
    public function getCapacityExceededForwardAddress()
    {
        return $this->capacityExceededForwardAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededForwardAddress;
    }

    /**
     * Setter for capacityExceededForwardAddress
     *
     * @param string|null $capacityExceededForwardAddress
     * @return $this
     */
    public function setCapacityExceededForwardAddress($capacityExceededForwardAddress = null)
    {
        if ($capacityExceededForwardAddress === null) {
            $this->capacityExceededForwardAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->capacityExceededForwardAddress = $capacityExceededForwardAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCapacityExceededForwardAddress()
    {
        $this->capacityExceededForwardAddress = null;
        return $this;
    }

    /**
     * Getter for capacityExceededRerouteTrunkGroupId
     *
     * @return string|null
     */
    public function getCapacityExceededRerouteTrunkGroupId()
    {
        return $this->capacityExceededRerouteTrunkGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededRerouteTrunkGroupId;
    }

    /**
     * Setter for capacityExceededRerouteTrunkGroupId
     *
     * @param string|null $capacityExceededRerouteTrunkGroupId
     * @return $this
     */
    public function setCapacityExceededRerouteTrunkGroupId($capacityExceededRerouteTrunkGroupId = null)
    {
        if ($capacityExceededRerouteTrunkGroupId === null) {
            $this->capacityExceededRerouteTrunkGroupId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->capacityExceededRerouteTrunkGroupId = $capacityExceededRerouteTrunkGroupId;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCapacityExceededRerouteTrunkGroupId()
    {
        $this->capacityExceededRerouteTrunkGroupId = null;
        return $this;
    }

    /**
     * Getter for capacityExceededTrapInitialCalls
     *
     * @return int
     */
    public function getCapacityExceededTrapInitialCalls()
    {
        return $this->capacityExceededTrapInitialCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededTrapInitialCalls;
    }

    /**
     * Setter for capacityExceededTrapInitialCalls
     *
     * @param int $capacityExceededTrapInitialCalls
     * @return $this
     */
    public function setCapacityExceededTrapInitialCalls($capacityExceededTrapInitialCalls)
    {
        $this->capacityExceededTrapInitialCalls = $capacityExceededTrapInitialCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCapacityExceededTrapInitialCalls()
    {
        $this->capacityExceededTrapInitialCalls = null;
        return $this;
    }

    /**
     * Getter for capacityExceededTrapOffsetCalls
     *
     * @return int
     */
    public function getCapacityExceededTrapOffsetCalls()
    {
        return $this->capacityExceededTrapOffsetCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededTrapOffsetCalls;
    }

    /**
     * Setter for capacityExceededTrapOffsetCalls
     *
     * @param int $capacityExceededTrapOffsetCalls
     * @return $this
     */
    public function setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls)
    {
        $this->capacityExceededTrapOffsetCalls = $capacityExceededTrapOffsetCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCapacityExceededTrapOffsetCalls()
    {
        $this->capacityExceededTrapOffsetCalls = null;
        return $this;
    }

    /**
     * Getter for unreachableDestinationAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction|null
     */
    public function getUnreachableDestinationAction()
    {
        return $this->unreachableDestinationAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unreachableDestinationAction;
    }

    /**
     * Setter for unreachableDestinationAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction|null $unreachableDestinationAction
     * @return $this
     */
    public function setUnreachableDestinationAction(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUnreachableDestinationAction $unreachableDestinationAction = null)
    {
        if ($unreachableDestinationAction === null) {
            $this->unreachableDestinationAction = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->unreachableDestinationAction = $unreachableDestinationAction;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnreachableDestinationAction()
    {
        $this->unreachableDestinationAction = null;
        return $this;
    }

    /**
     * Getter for unreachableDestinationForwardAddress
     *
     * @return string|null
     */
    public function getUnreachableDestinationForwardAddress()
    {
        return $this->unreachableDestinationForwardAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unreachableDestinationForwardAddress;
    }

    /**
     * Setter for unreachableDestinationForwardAddress
     *
     * @param string|null $unreachableDestinationForwardAddress
     * @return $this
     */
    public function setUnreachableDestinationForwardAddress($unreachableDestinationForwardAddress = null)
    {
        if ($unreachableDestinationForwardAddress === null) {
            $this->unreachableDestinationForwardAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->unreachableDestinationForwardAddress = $unreachableDestinationForwardAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnreachableDestinationForwardAddress()
    {
        $this->unreachableDestinationForwardAddress = null;
        return $this;
    }

    /**
     * Getter for unreachableDestinationRerouteTrunkGroupId
     *
     * @return string|null
     */
    public function getUnreachableDestinationRerouteTrunkGroupId()
    {
        return $this->unreachableDestinationRerouteTrunkGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unreachableDestinationRerouteTrunkGroupId;
    }

    /**
     * Setter for unreachableDestinationRerouteTrunkGroupId
     *
     * @param string|null $unreachableDestinationRerouteTrunkGroupId
     * @return $this
     */
    public function setUnreachableDestinationRerouteTrunkGroupId($unreachableDestinationRerouteTrunkGroupId = null)
    {
        if ($unreachableDestinationRerouteTrunkGroupId === null) {
            $this->unreachableDestinationRerouteTrunkGroupId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->unreachableDestinationRerouteTrunkGroupId = $unreachableDestinationRerouteTrunkGroupId;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnreachableDestinationRerouteTrunkGroupId()
    {
        $this->unreachableDestinationRerouteTrunkGroupId = null;
        return $this;
    }

    /**
     * Getter for unreachableDestinationTrapInitialCalls
     *
     * @return int
     */
    public function getUnreachableDestinationTrapInitialCalls()
    {
        return $this->unreachableDestinationTrapInitialCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unreachableDestinationTrapInitialCalls;
    }

    /**
     * Setter for unreachableDestinationTrapInitialCalls
     *
     * @param int $unreachableDestinationTrapInitialCalls
     * @return $this
     */
    public function setUnreachableDestinationTrapInitialCalls($unreachableDestinationTrapInitialCalls)
    {
        $this->unreachableDestinationTrapInitialCalls = $unreachableDestinationTrapInitialCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnreachableDestinationTrapInitialCalls()
    {
        $this->unreachableDestinationTrapInitialCalls = null;
        return $this;
    }

    /**
     * Getter for unreachableDestinationTrapOffsetCalls
     *
     * @return int
     */
    public function getUnreachableDestinationTrapOffsetCalls()
    {
        return $this->unreachableDestinationTrapOffsetCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unreachableDestinationTrapOffsetCalls;
    }

    /**
     * Setter for unreachableDestinationTrapOffsetCalls
     *
     * @param int $unreachableDestinationTrapOffsetCalls
     * @return $this
     */
    public function setUnreachableDestinationTrapOffsetCalls($unreachableDestinationTrapOffsetCalls)
    {
        $this->unreachableDestinationTrapOffsetCalls = $unreachableDestinationTrapOffsetCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnreachableDestinationTrapOffsetCalls()
    {
        $this->unreachableDestinationTrapOffsetCalls = null;
        return $this;
    }

    /**
     * Getter for invitationTimeout
     *
     * @return int
     */
    public function getInvitationTimeout()
    {
        return $this->invitationTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->invitationTimeout;
    }

    /**
     * Setter for invitationTimeout
     *
     * @param int $invitationTimeout
     * @return $this
     */
    public function setInvitationTimeout($invitationTimeout)
    {
        $this->invitationTimeout = $invitationTimeout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInvitationTimeout()
    {
        $this->invitationTimeout = null;
        return $this;
    }

    /**
     * Getter for requireAuthentication
     *
     * @return bool
     */
    public function getRequireAuthentication()
    {
        return $this->requireAuthentication instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requireAuthentication;
    }

    /**
     * Setter for requireAuthentication
     *
     * @param bool $requireAuthentication
     * @return $this
     */
    public function setRequireAuthentication($requireAuthentication)
    {
        $this->requireAuthentication = $requireAuthentication;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequireAuthentication()
    {
        $this->requireAuthentication = null;
        return $this;
    }

    /**
     * Getter for sipAuthenticationUserName
     *
     * @return string|null
     */
    public function getSipAuthenticationUserName()
    {
        return $this->sipAuthenticationUserName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipAuthenticationUserName;
    }

    /**
     * Setter for sipAuthenticationUserName
     *
     * @param string|null $sipAuthenticationUserName
     * @return $this
     */
    public function setSipAuthenticationUserName($sipAuthenticationUserName = null)
    {
        if ($sipAuthenticationUserName === null) {
            $this->sipAuthenticationUserName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->sipAuthenticationUserName = $sipAuthenticationUserName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipAuthenticationUserName()
    {
        $this->sipAuthenticationUserName = null;
        return $this;
    }

    /**
     * Getter for sipAuthenticationPassword
     *
     * @return string|null
     */
    public function getSipAuthenticationPassword()
    {
        return $this->sipAuthenticationPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipAuthenticationPassword;
    }

    /**
     * Setter for sipAuthenticationPassword
     *
     * @param string|null $sipAuthenticationPassword
     * @return $this
     */
    public function setSipAuthenticationPassword($sipAuthenticationPassword = null)
    {
        if ($sipAuthenticationPassword === null) {
            $this->sipAuthenticationPassword = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->sipAuthenticationPassword = $sipAuthenticationPassword;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipAuthenticationPassword()
    {
        $this->sipAuthenticationPassword = null;
        return $this;
    }


}

