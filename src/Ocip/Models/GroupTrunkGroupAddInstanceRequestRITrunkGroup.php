<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupAddInstanceRequestRITrunkGroup
 *
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:971","type":"sequence"}]
 */
class GroupTrunkGroupAddInstanceRequestRITrunkGroup
{
    /**
     * @ElementName maxActiveCalls
     * @Type int
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @MinInclusive 1
     * @var int|null
     */
    protected $maxActiveCalls = null;

    /**
     * @ElementName maxIncomingCalls
     * @Type int
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @MinInclusive 0
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxIncomingCalls = null;

    /**
     * @ElementName maxOutgoingCalls
     * @Type int
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @MinInclusive 0
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxOutgoingCalls = null;

    /**
     * @ElementName enableBursting
     * @Type bool
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @var bool|null
     */
    protected $enableBursting = null;

    /**
     * @ElementName burstingMaxActiveCalls
     * @Type int
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @MinInclusive 0
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $burstingMaxActiveCalls = null;

    /**
     * @ElementName burstingMaxIncomingCalls
     * @Type int
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @MinInclusive 0
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $burstingMaxIncomingCalls = null;

    /**
     * @ElementName burstingMaxOutgoingCalls
     * @Type int
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @MinInclusive 0
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $burstingMaxOutgoingCalls = null;

    /**
     * @ElementName capacityExceededAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction|null
     */
    protected $capacityExceededAction = null;

    /**
     * @ElementName capacityExceededForwardAddress
     * @Type string
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $capacityExceededForwardAddress = null;

    /**
     * @ElementName capacityExceededRerouteTrunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    protected $capacityExceededRerouteTrunkGroupKey = null;

    /**
     * @ElementName capacityExceededTrapInitialCalls
     * @Type int
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @MinInclusive 0
     * @var int|null
     */
    protected $capacityExceededTrapInitialCalls = null;

    /**
     * @ElementName capacityExceededTrapOffsetCalls
     * @Type int
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @MinInclusive 0
     * @var int|null
     */
    protected $capacityExceededTrapOffsetCalls = null;

    /**
     * @ElementName trunkGroupIdentity
     * @Type string
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $trunkGroupIdentity = null;

    /**
     * @ElementName allowTerminationToTrunkGroupIdentity
     * @Type bool
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @var bool|null
     */
    protected $allowTerminationToTrunkGroupIdentity = null;

    /**
     * @ElementName allowTerminationToDtgIdentity
     * @Type bool
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @var bool|null
     */
    protected $allowTerminationToDtgIdentity = null;

    /**
     * @ElementName includeTrunkGroupIdentity
     * @Type bool
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @var bool|null
     */
    protected $includeTrunkGroupIdentity = null;

    /**
     * @ElementName includeDtgIdentity
     * @Type bool
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @var bool|null
     */
    protected $includeDtgIdentity = null;

    /**
     * @ElementName includeTrunkGroupIdentityForNetworkCalls
     * @Type bool
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @var bool|null
     */
    protected $includeTrunkGroupIdentityForNetworkCalls = null;

    /**
     * @ElementName includeOtgIdentityForNetworkCalls
     * @Type bool
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @var bool|null
     */
    protected $includeOtgIdentityForNetworkCalls = null;

    /**
     * @ElementName enableNetworkAddressIdentity
     * @Type bool
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @var bool|null
     */
    protected $enableNetworkAddressIdentity = null;

    /**
     * @ElementName prefixEnabled
     * @Type bool
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @var bool|null
     */
    protected $prefixEnabled = null;

    /**
     * @ElementName prefix
     * @Type string
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @MinLength 1
     * @MaxLength 15
     * @var string|null
     */
    protected $prefix = null;

    /**
     * @ElementName pilotUserCallOptimizationPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallOptimizationPolicy
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:971
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallOptimizationPolicy|null
     */
    protected $pilotUserCallOptimizationPolicy = null;

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
     * @return int
     */
    public function getMaxIncomingCalls()
    {
        return $this->maxIncomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxIncomingCalls;
    }

    /**
     * Setter for maxIncomingCalls
     *
     * @param int $maxIncomingCalls
     * @return $this
     */
    public function setMaxIncomingCalls($maxIncomingCalls)
    {
        $this->maxIncomingCalls = $maxIncomingCalls;
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
     * @return int
     */
    public function getMaxOutgoingCalls()
    {
        return $this->maxOutgoingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxOutgoingCalls;
    }

    /**
     * Setter for maxOutgoingCalls
     *
     * @param int $maxOutgoingCalls
     * @return $this
     */
    public function setMaxOutgoingCalls($maxOutgoingCalls)
    {
        $this->maxOutgoingCalls = $maxOutgoingCalls;
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
     * @return int
     */
    public function getBurstingMaxActiveCalls()
    {
        return $this->burstingMaxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->burstingMaxActiveCalls;
    }

    /**
     * Setter for burstingMaxActiveCalls
     *
     * @param int $burstingMaxActiveCalls
     * @return $this
     */
    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls)
    {
        $this->burstingMaxActiveCalls = $burstingMaxActiveCalls;
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
     * @return int
     */
    public function getBurstingMaxIncomingCalls()
    {
        return $this->burstingMaxIncomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->burstingMaxIncomingCalls;
    }

    /**
     * Setter for burstingMaxIncomingCalls
     *
     * @param int $burstingMaxIncomingCalls
     * @return $this
     */
    public function setBurstingMaxIncomingCalls($burstingMaxIncomingCalls)
    {
        $this->burstingMaxIncomingCalls = $burstingMaxIncomingCalls;
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
     * @return int
     */
    public function getBurstingMaxOutgoingCalls()
    {
        return $this->burstingMaxOutgoingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->burstingMaxOutgoingCalls;
    }

    /**
     * Setter for burstingMaxOutgoingCalls
     *
     * @param int $burstingMaxOutgoingCalls
     * @return $this
     */
    public function setBurstingMaxOutgoingCalls($burstingMaxOutgoingCalls)
    {
        $this->burstingMaxOutgoingCalls = $burstingMaxOutgoingCalls;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction
     */
    public function getCapacityExceededAction()
    {
        return $this->capacityExceededAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededAction;
    }

    /**
     * Setter for capacityExceededAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction $capacityExceededAction
     * @return $this
     */
    public function setCapacityExceededAction(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupCapacityExceededAction $capacityExceededAction)
    {
        $this->capacityExceededAction = $capacityExceededAction;
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
     * @return string
     */
    public function getCapacityExceededForwardAddress()
    {
        return $this->capacityExceededForwardAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededForwardAddress;
    }

    /**
     * Setter for capacityExceededForwardAddress
     *
     * @param string $capacityExceededForwardAddress
     * @return $this
     */
    public function setCapacityExceededForwardAddress($capacityExceededForwardAddress)
    {
        $this->capacityExceededForwardAddress = $capacityExceededForwardAddress;
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
     * Getter for capacityExceededRerouteTrunkGroupKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     */
    public function getCapacityExceededRerouteTrunkGroupKey()
    {
        return $this->capacityExceededRerouteTrunkGroupKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->capacityExceededRerouteTrunkGroupKey;
    }

    /**
     * Setter for capacityExceededRerouteTrunkGroupKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $capacityExceededRerouteTrunkGroupKey
     * @return $this
     */
    public function setCapacityExceededRerouteTrunkGroupKey(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $capacityExceededRerouteTrunkGroupKey)
    {
        $this->capacityExceededRerouteTrunkGroupKey = $capacityExceededRerouteTrunkGroupKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCapacityExceededRerouteTrunkGroupKey()
    {
        $this->capacityExceededRerouteTrunkGroupKey = null;
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
     * Getter for trunkGroupIdentity
     *
     * @return string
     */
    public function getTrunkGroupIdentity()
    {
        return $this->trunkGroupIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupIdentity;
    }

    /**
     * Setter for trunkGroupIdentity
     *
     * @param string $trunkGroupIdentity
     * @return $this
     */
    public function setTrunkGroupIdentity($trunkGroupIdentity)
    {
        $this->trunkGroupIdentity = $trunkGroupIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupIdentity()
    {
        $this->trunkGroupIdentity = null;
        return $this;
    }

    /**
     * Getter for allowTerminationToTrunkGroupIdentity
     *
     * @return bool
     */
    public function getAllowTerminationToTrunkGroupIdentity()
    {
        return $this->allowTerminationToTrunkGroupIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowTerminationToTrunkGroupIdentity;
    }

    /**
     * Setter for allowTerminationToTrunkGroupIdentity
     *
     * @param bool $allowTerminationToTrunkGroupIdentity
     * @return $this
     */
    public function setAllowTerminationToTrunkGroupIdentity($allowTerminationToTrunkGroupIdentity)
    {
        $this->allowTerminationToTrunkGroupIdentity = $allowTerminationToTrunkGroupIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowTerminationToTrunkGroupIdentity()
    {
        $this->allowTerminationToTrunkGroupIdentity = null;
        return $this;
    }

    /**
     * Getter for allowTerminationToDtgIdentity
     *
     * @return bool
     */
    public function getAllowTerminationToDtgIdentity()
    {
        return $this->allowTerminationToDtgIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowTerminationToDtgIdentity;
    }

    /**
     * Setter for allowTerminationToDtgIdentity
     *
     * @param bool $allowTerminationToDtgIdentity
     * @return $this
     */
    public function setAllowTerminationToDtgIdentity($allowTerminationToDtgIdentity)
    {
        $this->allowTerminationToDtgIdentity = $allowTerminationToDtgIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowTerminationToDtgIdentity()
    {
        $this->allowTerminationToDtgIdentity = null;
        return $this;
    }

    /**
     * Getter for includeTrunkGroupIdentity
     *
     * @return bool
     */
    public function getIncludeTrunkGroupIdentity()
    {
        return $this->includeTrunkGroupIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeTrunkGroupIdentity;
    }

    /**
     * Setter for includeTrunkGroupIdentity
     *
     * @param bool $includeTrunkGroupIdentity
     * @return $this
     */
    public function setIncludeTrunkGroupIdentity($includeTrunkGroupIdentity)
    {
        $this->includeTrunkGroupIdentity = $includeTrunkGroupIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeTrunkGroupIdentity()
    {
        $this->includeTrunkGroupIdentity = null;
        return $this;
    }

    /**
     * Getter for includeDtgIdentity
     *
     * @return bool
     */
    public function getIncludeDtgIdentity()
    {
        return $this->includeDtgIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeDtgIdentity;
    }

    /**
     * Setter for includeDtgIdentity
     *
     * @param bool $includeDtgIdentity
     * @return $this
     */
    public function setIncludeDtgIdentity($includeDtgIdentity)
    {
        $this->includeDtgIdentity = $includeDtgIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeDtgIdentity()
    {
        $this->includeDtgIdentity = null;
        return $this;
    }

    /**
     * Getter for includeTrunkGroupIdentityForNetworkCalls
     *
     * @return bool
     */
    public function getIncludeTrunkGroupIdentityForNetworkCalls()
    {
        return $this->includeTrunkGroupIdentityForNetworkCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeTrunkGroupIdentityForNetworkCalls;
    }

    /**
     * Setter for includeTrunkGroupIdentityForNetworkCalls
     *
     * @param bool $includeTrunkGroupIdentityForNetworkCalls
     * @return $this
     */
    public function setIncludeTrunkGroupIdentityForNetworkCalls($includeTrunkGroupIdentityForNetworkCalls)
    {
        $this->includeTrunkGroupIdentityForNetworkCalls = $includeTrunkGroupIdentityForNetworkCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeTrunkGroupIdentityForNetworkCalls()
    {
        $this->includeTrunkGroupIdentityForNetworkCalls = null;
        return $this;
    }

    /**
     * Getter for includeOtgIdentityForNetworkCalls
     *
     * @return bool
     */
    public function getIncludeOtgIdentityForNetworkCalls()
    {
        return $this->includeOtgIdentityForNetworkCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeOtgIdentityForNetworkCalls;
    }

    /**
     * Setter for includeOtgIdentityForNetworkCalls
     *
     * @param bool $includeOtgIdentityForNetworkCalls
     * @return $this
     */
    public function setIncludeOtgIdentityForNetworkCalls($includeOtgIdentityForNetworkCalls)
    {
        $this->includeOtgIdentityForNetworkCalls = $includeOtgIdentityForNetworkCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeOtgIdentityForNetworkCalls()
    {
        $this->includeOtgIdentityForNetworkCalls = null;
        return $this;
    }

    /**
     * Getter for enableNetworkAddressIdentity
     *
     * @return bool
     */
    public function getEnableNetworkAddressIdentity()
    {
        return $this->enableNetworkAddressIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableNetworkAddressIdentity;
    }

    /**
     * Setter for enableNetworkAddressIdentity
     *
     * @param bool $enableNetworkAddressIdentity
     * @return $this
     */
    public function setEnableNetworkAddressIdentity($enableNetworkAddressIdentity)
    {
        $this->enableNetworkAddressIdentity = $enableNetworkAddressIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableNetworkAddressIdentity()
    {
        $this->enableNetworkAddressIdentity = null;
        return $this;
    }

    /**
     * Getter for prefixEnabled
     *
     * @return bool
     */
    public function getPrefixEnabled()
    {
        return $this->prefixEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefixEnabled;
    }

    /**
     * Setter for prefixEnabled
     *
     * @param bool $prefixEnabled
     * @return $this
     */
    public function setPrefixEnabled($prefixEnabled)
    {
        $this->prefixEnabled = $prefixEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefixEnabled()
    {
        $this->prefixEnabled = null;
        return $this;
    }

    /**
     * Getter for prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @param string $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefix()
    {
        $this->prefix = null;
        return $this;
    }

    /**
     * Getter for pilotUserCallOptimizationPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallOptimizationPolicy
     */
    public function getPilotUserCallOptimizationPolicy()
    {
        return $this->pilotUserCallOptimizationPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pilotUserCallOptimizationPolicy;
    }

    /**
     * Setter for pilotUserCallOptimizationPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallOptimizationPolicy $pilotUserCallOptimizationPolicy
     * @return $this
     */
    public function setPilotUserCallOptimizationPolicy(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupPilotUserCallOptimizationPolicy $pilotUserCallOptimizationPolicy)
    {
        $this->pilotUserCallOptimizationPolicy = $pilotUserCallOptimizationPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPilotUserCallOptimizationPolicy()
    {
        $this->pilotUserCallOptimizationPolicy = null;
        return $this;
    }
}

