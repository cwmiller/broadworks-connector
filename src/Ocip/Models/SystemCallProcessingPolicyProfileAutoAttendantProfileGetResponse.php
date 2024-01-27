<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileAutoAttendantProfileGetResponse
 *
 * Response to SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequest.
 *         
 *         Replaced by: SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequest22
 *
 * @see SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequest
 * @see SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequest22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:22967","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileAutoAttendantProfileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useCLIDPolicy
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $useCLIDPolicy = null;

    /**
     * @ElementName clidPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy|null
     */
    protected $clidPolicy = null;

    /**
     * @ElementName allowAlternateNumbersForRedirectingIdentity
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $allowAlternateNumbersForRedirectingIdentity = null;

    /**
     * @ElementName useGroupName
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $useGroupName = null;

    /**
     * @ElementName blockCallingNameForExternalCalls
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $blockCallingNameForExternalCalls = null;

    /**
     * @ElementName allowConfigurableCLIDForRedirectingIdentity
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $allowConfigurableCLIDForRedirectingIdentity = null;

    /**
     * @ElementName allowDepartmentCLIDNameOverride
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $allowDepartmentCLIDNameOverride = null;

    /**
     * @ElementName enterpriseCallsCLIDPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy|null
     */
    protected $enterpriseCallsCLIDPolicy = null;

    /**
     * @ElementName enterpriseGroupCallsCLIDPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy|null
     */
    protected $enterpriseGroupCallsCLIDPolicy = null;

    /**
     * @ElementName serviceProviderGroupCallsCLIDPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderInternalCallsCLIDPolicy
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderInternalCallsCLIDPolicy|null
     */
    protected $serviceProviderGroupCallsCLIDPolicy = null;

    /**
     * @ElementName useCallLimitsPolicy
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $useCallLimitsPolicy = null;

    /**
     * @ElementName useMaxSimultaneousCalls
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $useMaxSimultaneousCalls = null;

    /**
     * @ElementName maxSimultaneousCalls
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxSimultaneousCalls = null;

    /**
     * @ElementName useMaxSimultaneousVideoCalls
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $useMaxSimultaneousVideoCalls = null;

    /**
     * @ElementName maxSimultaneousVideoCalls
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxSimultaneousVideoCalls = null;

    /**
     * @ElementName useMaxCallTimeForAnsweredCalls
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $useMaxCallTimeForAnsweredCalls = null;

    /**
     * @ElementName maxCallTimeForAnsweredCallsMinutes
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @MinInclusive 3
     * @MaxInclusive 2880
     * @var int|null
     */
    protected $maxCallTimeForAnsweredCallsMinutes = null;

    /**
     * @ElementName useMaxConcurrentRedirectedCalls
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $useMaxConcurrentRedirectedCalls = null;

    /**
     * @ElementName maxConcurrentRedirectedCalls
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxConcurrentRedirectedCalls = null;

    /**
     * @ElementName maxRedirectionDepth
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    protected $maxRedirectionDepth = null;

    /**
     * @ElementName useTranslationRoutingPolicy
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $useTranslationRoutingPolicy = null;

    /**
     * @ElementName networkUsageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection|null
     */
    protected $networkUsageSelection = null;

    /**
     * @ElementName enableEnterpriseExtensionDialing
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $enableEnterpriseExtensionDialing = null;

    /**
     * @ElementName enforceGroupCallingLineIdentityRestriction
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $enforceGroupCallingLineIdentityRestriction = null;

    /**
     * @ElementName enforceEnterpriseCallingLineIdentityRestriction
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $enforceEnterpriseCallingLineIdentityRestriction = null;

    /**
     * @ElementName allowEnterpriseGroupCallTypingForPrivateDialingPlan
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $allowEnterpriseGroupCallTypingForPrivateDialingPlan = null;

    /**
     * @ElementName allowEnterpriseGroupCallTypingForPublicDialingPlan
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $allowEnterpriseGroupCallTypingForPublicDialingPlan = null;

    /**
     * @ElementName overrideCLIDRestrictionForPrivateCallCategory
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $overrideCLIDRestrictionForPrivateCallCategory = null;

    /**
     * @ElementName useEnterpriseCLIDForPrivateCallCategory
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $useEnterpriseCLIDForPrivateCallCategory = null;

    /**
     * @ElementName useIncomingCLIDPolicy
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $useIncomingCLIDPolicy = null;

    /**
     * @ElementName enableDialableCallerID
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22967
     * @var bool|null
     */
    protected $enableDialableCallerID = null;

    /**
     * Getter for useCLIDPolicy
     *
     * @return bool
     */
    public function getUseCLIDPolicy()
    {
        return $this->useCLIDPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useCLIDPolicy;
    }

    /**
     * Setter for useCLIDPolicy
     *
     * @param bool $useCLIDPolicy
     * @return $this
     */
    public function setUseCLIDPolicy($useCLIDPolicy)
    {
        $this->useCLIDPolicy = $useCLIDPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseCLIDPolicy()
    {
        $this->useCLIDPolicy = null;
        return $this;
    }

    /**
     * Getter for clidPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy
     */
    public function getClidPolicy()
    {
        return $this->clidPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->clidPolicy;
    }

    /**
     * Setter for clidPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy $clidPolicy
     * @return $this
     */
    public function setClidPolicy(\CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy $clidPolicy)
    {
        $this->clidPolicy = $clidPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetClidPolicy()
    {
        $this->clidPolicy = null;
        return $this;
    }

    /**
     * Getter for allowAlternateNumbersForRedirectingIdentity
     *
     * @return bool
     */
    public function getAllowAlternateNumbersForRedirectingIdentity()
    {
        return $this->allowAlternateNumbersForRedirectingIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowAlternateNumbersForRedirectingIdentity;
    }

    /**
     * Setter for allowAlternateNumbersForRedirectingIdentity
     *
     * @param bool $allowAlternateNumbersForRedirectingIdentity
     * @return $this
     */
    public function setAllowAlternateNumbersForRedirectingIdentity($allowAlternateNumbersForRedirectingIdentity)
    {
        $this->allowAlternateNumbersForRedirectingIdentity = $allowAlternateNumbersForRedirectingIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowAlternateNumbersForRedirectingIdentity()
    {
        $this->allowAlternateNumbersForRedirectingIdentity = null;
        return $this;
    }

    /**
     * Getter for useGroupName
     *
     * @return bool
     */
    public function getUseGroupName()
    {
        return $this->useGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useGroupName;
    }

    /**
     * Setter for useGroupName
     *
     * @param bool $useGroupName
     * @return $this
     */
    public function setUseGroupName($useGroupName)
    {
        $this->useGroupName = $useGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseGroupName()
    {
        $this->useGroupName = null;
        return $this;
    }

    /**
     * Getter for blockCallingNameForExternalCalls
     *
     * @return bool
     */
    public function getBlockCallingNameForExternalCalls()
    {
        return $this->blockCallingNameForExternalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->blockCallingNameForExternalCalls;
    }

    /**
     * Setter for blockCallingNameForExternalCalls
     *
     * @param bool $blockCallingNameForExternalCalls
     * @return $this
     */
    public function setBlockCallingNameForExternalCalls($blockCallingNameForExternalCalls)
    {
        $this->blockCallingNameForExternalCalls = $blockCallingNameForExternalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBlockCallingNameForExternalCalls()
    {
        $this->blockCallingNameForExternalCalls = null;
        return $this;
    }

    /**
     * Getter for allowConfigurableCLIDForRedirectingIdentity
     *
     * @return bool
     */
    public function getAllowConfigurableCLIDForRedirectingIdentity()
    {
        return $this->allowConfigurableCLIDForRedirectingIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowConfigurableCLIDForRedirectingIdentity;
    }

    /**
     * Setter for allowConfigurableCLIDForRedirectingIdentity
     *
     * @param bool $allowConfigurableCLIDForRedirectingIdentity
     * @return $this
     */
    public function setAllowConfigurableCLIDForRedirectingIdentity($allowConfigurableCLIDForRedirectingIdentity)
    {
        $this->allowConfigurableCLIDForRedirectingIdentity = $allowConfigurableCLIDForRedirectingIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowConfigurableCLIDForRedirectingIdentity()
    {
        $this->allowConfigurableCLIDForRedirectingIdentity = null;
        return $this;
    }

    /**
     * Getter for allowDepartmentCLIDNameOverride
     *
     * @return bool
     */
    public function getAllowDepartmentCLIDNameOverride()
    {
        return $this->allowDepartmentCLIDNameOverride instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowDepartmentCLIDNameOverride;
    }

    /**
     * Setter for allowDepartmentCLIDNameOverride
     *
     * @param bool $allowDepartmentCLIDNameOverride
     * @return $this
     */
    public function setAllowDepartmentCLIDNameOverride($allowDepartmentCLIDNameOverride)
    {
        $this->allowDepartmentCLIDNameOverride = $allowDepartmentCLIDNameOverride;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowDepartmentCLIDNameOverride()
    {
        $this->allowDepartmentCLIDNameOverride = null;
        return $this;
    }

    /**
     * Getter for enterpriseCallsCLIDPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy
     */
    public function getEnterpriseCallsCLIDPolicy()
    {
        return $this->enterpriseCallsCLIDPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseCallsCLIDPolicy;
    }

    /**
     * Setter for enterpriseCallsCLIDPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy $enterpriseCallsCLIDPolicy
     * @return $this
     */
    public function setEnterpriseCallsCLIDPolicy(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy $enterpriseCallsCLIDPolicy)
    {
        $this->enterpriseCallsCLIDPolicy = $enterpriseCallsCLIDPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseCallsCLIDPolicy()
    {
        $this->enterpriseCallsCLIDPolicy = null;
        return $this;
    }

    /**
     * Getter for enterpriseGroupCallsCLIDPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy
     */
    public function getEnterpriseGroupCallsCLIDPolicy()
    {
        return $this->enterpriseGroupCallsCLIDPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseGroupCallsCLIDPolicy;
    }

    /**
     * Setter for enterpriseGroupCallsCLIDPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy $enterpriseGroupCallsCLIDPolicy
     * @return $this
     */
    public function setEnterpriseGroupCallsCLIDPolicy(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy $enterpriseGroupCallsCLIDPolicy)
    {
        $this->enterpriseGroupCallsCLIDPolicy = $enterpriseGroupCallsCLIDPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseGroupCallsCLIDPolicy()
    {
        $this->enterpriseGroupCallsCLIDPolicy = null;
        return $this;
    }

    /**
     * Getter for serviceProviderGroupCallsCLIDPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderInternalCallsCLIDPolicy
     */
    public function getServiceProviderGroupCallsCLIDPolicy()
    {
        return $this->serviceProviderGroupCallsCLIDPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderGroupCallsCLIDPolicy;
    }

    /**
     * Setter for serviceProviderGroupCallsCLIDPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderInternalCallsCLIDPolicy $serviceProviderGroupCallsCLIDPolicy
     * @return $this
     */
    public function setServiceProviderGroupCallsCLIDPolicy(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderInternalCallsCLIDPolicy $serviceProviderGroupCallsCLIDPolicy)
    {
        $this->serviceProviderGroupCallsCLIDPolicy = $serviceProviderGroupCallsCLIDPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderGroupCallsCLIDPolicy()
    {
        $this->serviceProviderGroupCallsCLIDPolicy = null;
        return $this;
    }

    /**
     * Getter for useCallLimitsPolicy
     *
     * @return bool
     */
    public function getUseCallLimitsPolicy()
    {
        return $this->useCallLimitsPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useCallLimitsPolicy;
    }

    /**
     * Setter for useCallLimitsPolicy
     *
     * @param bool $useCallLimitsPolicy
     * @return $this
     */
    public function setUseCallLimitsPolicy($useCallLimitsPolicy)
    {
        $this->useCallLimitsPolicy = $useCallLimitsPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseCallLimitsPolicy()
    {
        $this->useCallLimitsPolicy = null;
        return $this;
    }

    /**
     * Getter for useMaxSimultaneousCalls
     *
     * @return bool
     */
    public function getUseMaxSimultaneousCalls()
    {
        return $this->useMaxSimultaneousCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMaxSimultaneousCalls;
    }

    /**
     * Setter for useMaxSimultaneousCalls
     *
     * @param bool $useMaxSimultaneousCalls
     * @return $this
     */
    public function setUseMaxSimultaneousCalls($useMaxSimultaneousCalls)
    {
        $this->useMaxSimultaneousCalls = $useMaxSimultaneousCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMaxSimultaneousCalls()
    {
        $this->useMaxSimultaneousCalls = null;
        return $this;
    }

    /**
     * Getter for maxSimultaneousCalls
     *
     * @return int
     */
    public function getMaxSimultaneousCalls()
    {
        return $this->maxSimultaneousCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxSimultaneousCalls;
    }

    /**
     * Setter for maxSimultaneousCalls
     *
     * @param int $maxSimultaneousCalls
     * @return $this
     */
    public function setMaxSimultaneousCalls($maxSimultaneousCalls)
    {
        $this->maxSimultaneousCalls = $maxSimultaneousCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxSimultaneousCalls()
    {
        $this->maxSimultaneousCalls = null;
        return $this;
    }

    /**
     * Getter for useMaxSimultaneousVideoCalls
     *
     * @return bool
     */
    public function getUseMaxSimultaneousVideoCalls()
    {
        return $this->useMaxSimultaneousVideoCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMaxSimultaneousVideoCalls;
    }

    /**
     * Setter for useMaxSimultaneousVideoCalls
     *
     * @param bool $useMaxSimultaneousVideoCalls
     * @return $this
     */
    public function setUseMaxSimultaneousVideoCalls($useMaxSimultaneousVideoCalls)
    {
        $this->useMaxSimultaneousVideoCalls = $useMaxSimultaneousVideoCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMaxSimultaneousVideoCalls()
    {
        $this->useMaxSimultaneousVideoCalls = null;
        return $this;
    }

    /**
     * Getter for maxSimultaneousVideoCalls
     *
     * @return int
     */
    public function getMaxSimultaneousVideoCalls()
    {
        return $this->maxSimultaneousVideoCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxSimultaneousVideoCalls;
    }

    /**
     * Setter for maxSimultaneousVideoCalls
     *
     * @param int $maxSimultaneousVideoCalls
     * @return $this
     */
    public function setMaxSimultaneousVideoCalls($maxSimultaneousVideoCalls)
    {
        $this->maxSimultaneousVideoCalls = $maxSimultaneousVideoCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxSimultaneousVideoCalls()
    {
        $this->maxSimultaneousVideoCalls = null;
        return $this;
    }

    /**
     * Getter for useMaxCallTimeForAnsweredCalls
     *
     * @return bool
     */
    public function getUseMaxCallTimeForAnsweredCalls()
    {
        return $this->useMaxCallTimeForAnsweredCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMaxCallTimeForAnsweredCalls;
    }

    /**
     * Setter for useMaxCallTimeForAnsweredCalls
     *
     * @param bool $useMaxCallTimeForAnsweredCalls
     * @return $this
     */
    public function setUseMaxCallTimeForAnsweredCalls($useMaxCallTimeForAnsweredCalls)
    {
        $this->useMaxCallTimeForAnsweredCalls = $useMaxCallTimeForAnsweredCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMaxCallTimeForAnsweredCalls()
    {
        $this->useMaxCallTimeForAnsweredCalls = null;
        return $this;
    }

    /**
     * Getter for maxCallTimeForAnsweredCallsMinutes
     *
     * @return int
     */
    public function getMaxCallTimeForAnsweredCallsMinutes()
    {
        return $this->maxCallTimeForAnsweredCallsMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxCallTimeForAnsweredCallsMinutes;
    }

    /**
     * Setter for maxCallTimeForAnsweredCallsMinutes
     *
     * @param int $maxCallTimeForAnsweredCallsMinutes
     * @return $this
     */
    public function setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes)
    {
        $this->maxCallTimeForAnsweredCallsMinutes = $maxCallTimeForAnsweredCallsMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxCallTimeForAnsweredCallsMinutes()
    {
        $this->maxCallTimeForAnsweredCallsMinutes = null;
        return $this;
    }

    /**
     * Getter for useMaxConcurrentRedirectedCalls
     *
     * @return bool
     */
    public function getUseMaxConcurrentRedirectedCalls()
    {
        return $this->useMaxConcurrentRedirectedCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMaxConcurrentRedirectedCalls;
    }

    /**
     * Setter for useMaxConcurrentRedirectedCalls
     *
     * @param bool $useMaxConcurrentRedirectedCalls
     * @return $this
     */
    public function setUseMaxConcurrentRedirectedCalls($useMaxConcurrentRedirectedCalls)
    {
        $this->useMaxConcurrentRedirectedCalls = $useMaxConcurrentRedirectedCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMaxConcurrentRedirectedCalls()
    {
        $this->useMaxConcurrentRedirectedCalls = null;
        return $this;
    }

    /**
     * Getter for maxConcurrentRedirectedCalls
     *
     * @return int
     */
    public function getMaxConcurrentRedirectedCalls()
    {
        return $this->maxConcurrentRedirectedCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConcurrentRedirectedCalls;
    }

    /**
     * Setter for maxConcurrentRedirectedCalls
     *
     * @param int $maxConcurrentRedirectedCalls
     * @return $this
     */
    public function setMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls)
    {
        $this->maxConcurrentRedirectedCalls = $maxConcurrentRedirectedCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxConcurrentRedirectedCalls()
    {
        $this->maxConcurrentRedirectedCalls = null;
        return $this;
    }

    /**
     * Getter for maxRedirectionDepth
     *
     * @return int
     */
    public function getMaxRedirectionDepth()
    {
        return $this->maxRedirectionDepth instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxRedirectionDepth;
    }

    /**
     * Setter for maxRedirectionDepth
     *
     * @param int $maxRedirectionDepth
     * @return $this
     */
    public function setMaxRedirectionDepth($maxRedirectionDepth)
    {
        $this->maxRedirectionDepth = $maxRedirectionDepth;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxRedirectionDepth()
    {
        $this->maxRedirectionDepth = null;
        return $this;
    }

    /**
     * Getter for useTranslationRoutingPolicy
     *
     * @return bool
     */
    public function getUseTranslationRoutingPolicy()
    {
        return $this->useTranslationRoutingPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useTranslationRoutingPolicy;
    }

    /**
     * Setter for useTranslationRoutingPolicy
     *
     * @param bool $useTranslationRoutingPolicy
     * @return $this
     */
    public function setUseTranslationRoutingPolicy($useTranslationRoutingPolicy)
    {
        $this->useTranslationRoutingPolicy = $useTranslationRoutingPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseTranslationRoutingPolicy()
    {
        $this->useTranslationRoutingPolicy = null;
        return $this;
    }

    /**
     * Getter for networkUsageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection
     */
    public function getNetworkUsageSelection()
    {
        return $this->networkUsageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkUsageSelection;
    }

    /**
     * Setter for networkUsageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection $networkUsageSelection
     * @return $this
     */
    public function setNetworkUsageSelection(\CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection $networkUsageSelection)
    {
        $this->networkUsageSelection = $networkUsageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkUsageSelection()
    {
        $this->networkUsageSelection = null;
        return $this;
    }

    /**
     * Getter for enableEnterpriseExtensionDialing
     *
     * @return bool
     */
    public function getEnableEnterpriseExtensionDialing()
    {
        return $this->enableEnterpriseExtensionDialing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableEnterpriseExtensionDialing;
    }

    /**
     * Setter for enableEnterpriseExtensionDialing
     *
     * @param bool $enableEnterpriseExtensionDialing
     * @return $this
     */
    public function setEnableEnterpriseExtensionDialing($enableEnterpriseExtensionDialing)
    {
        $this->enableEnterpriseExtensionDialing = $enableEnterpriseExtensionDialing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableEnterpriseExtensionDialing()
    {
        $this->enableEnterpriseExtensionDialing = null;
        return $this;
    }

    /**
     * Getter for enforceGroupCallingLineIdentityRestriction
     *
     * @return bool
     */
    public function getEnforceGroupCallingLineIdentityRestriction()
    {
        return $this->enforceGroupCallingLineIdentityRestriction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforceGroupCallingLineIdentityRestriction;
    }

    /**
     * Setter for enforceGroupCallingLineIdentityRestriction
     *
     * @param bool $enforceGroupCallingLineIdentityRestriction
     * @return $this
     */
    public function setEnforceGroupCallingLineIdentityRestriction($enforceGroupCallingLineIdentityRestriction)
    {
        $this->enforceGroupCallingLineIdentityRestriction = $enforceGroupCallingLineIdentityRestriction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforceGroupCallingLineIdentityRestriction()
    {
        $this->enforceGroupCallingLineIdentityRestriction = null;
        return $this;
    }

    /**
     * Getter for enforceEnterpriseCallingLineIdentityRestriction
     *
     * @return bool
     */
    public function getEnforceEnterpriseCallingLineIdentityRestriction()
    {
        return $this->enforceEnterpriseCallingLineIdentityRestriction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforceEnterpriseCallingLineIdentityRestriction;
    }

    /**
     * Setter for enforceEnterpriseCallingLineIdentityRestriction
     *
     * @param bool $enforceEnterpriseCallingLineIdentityRestriction
     * @return $this
     */
    public function setEnforceEnterpriseCallingLineIdentityRestriction($enforceEnterpriseCallingLineIdentityRestriction)
    {
        $this->enforceEnterpriseCallingLineIdentityRestriction = $enforceEnterpriseCallingLineIdentityRestriction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforceEnterpriseCallingLineIdentityRestriction()
    {
        $this->enforceEnterpriseCallingLineIdentityRestriction = null;
        return $this;
    }

    /**
     * Getter for allowEnterpriseGroupCallTypingForPrivateDialingPlan
     *
     * @return bool
     */
    public function getAllowEnterpriseGroupCallTypingForPrivateDialingPlan()
    {
        return $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan;
    }

    /**
     * Setter for allowEnterpriseGroupCallTypingForPrivateDialingPlan
     *
     * @param bool $allowEnterpriseGroupCallTypingForPrivateDialingPlan
     * @return $this
     */
    public function setAllowEnterpriseGroupCallTypingForPrivateDialingPlan($allowEnterpriseGroupCallTypingForPrivateDialingPlan)
    {
        $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan = $allowEnterpriseGroupCallTypingForPrivateDialingPlan;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowEnterpriseGroupCallTypingForPrivateDialingPlan()
    {
        $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan = null;
        return $this;
    }

    /**
     * Getter for allowEnterpriseGroupCallTypingForPublicDialingPlan
     *
     * @return bool
     */
    public function getAllowEnterpriseGroupCallTypingForPublicDialingPlan()
    {
        return $this->allowEnterpriseGroupCallTypingForPublicDialingPlan instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowEnterpriseGroupCallTypingForPublicDialingPlan;
    }

    /**
     * Setter for allowEnterpriseGroupCallTypingForPublicDialingPlan
     *
     * @param bool $allowEnterpriseGroupCallTypingForPublicDialingPlan
     * @return $this
     */
    public function setAllowEnterpriseGroupCallTypingForPublicDialingPlan($allowEnterpriseGroupCallTypingForPublicDialingPlan)
    {
        $this->allowEnterpriseGroupCallTypingForPublicDialingPlan = $allowEnterpriseGroupCallTypingForPublicDialingPlan;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowEnterpriseGroupCallTypingForPublicDialingPlan()
    {
        $this->allowEnterpriseGroupCallTypingForPublicDialingPlan = null;
        return $this;
    }

    /**
     * Getter for overrideCLIDRestrictionForPrivateCallCategory
     *
     * @return bool
     */
    public function getOverrideCLIDRestrictionForPrivateCallCategory()
    {
        return $this->overrideCLIDRestrictionForPrivateCallCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->overrideCLIDRestrictionForPrivateCallCategory;
    }

    /**
     * Setter for overrideCLIDRestrictionForPrivateCallCategory
     *
     * @param bool $overrideCLIDRestrictionForPrivateCallCategory
     * @return $this
     */
    public function setOverrideCLIDRestrictionForPrivateCallCategory($overrideCLIDRestrictionForPrivateCallCategory)
    {
        $this->overrideCLIDRestrictionForPrivateCallCategory = $overrideCLIDRestrictionForPrivateCallCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOverrideCLIDRestrictionForPrivateCallCategory()
    {
        $this->overrideCLIDRestrictionForPrivateCallCategory = null;
        return $this;
    }

    /**
     * Getter for useEnterpriseCLIDForPrivateCallCategory
     *
     * @return bool
     */
    public function getUseEnterpriseCLIDForPrivateCallCategory()
    {
        return $this->useEnterpriseCLIDForPrivateCallCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useEnterpriseCLIDForPrivateCallCategory;
    }

    /**
     * Setter for useEnterpriseCLIDForPrivateCallCategory
     *
     * @param bool $useEnterpriseCLIDForPrivateCallCategory
     * @return $this
     */
    public function setUseEnterpriseCLIDForPrivateCallCategory($useEnterpriseCLIDForPrivateCallCategory)
    {
        $this->useEnterpriseCLIDForPrivateCallCategory = $useEnterpriseCLIDForPrivateCallCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseEnterpriseCLIDForPrivateCallCategory()
    {
        $this->useEnterpriseCLIDForPrivateCallCategory = null;
        return $this;
    }

    /**
     * Getter for useIncomingCLIDPolicy
     *
     * @return bool
     */
    public function getUseIncomingCLIDPolicy()
    {
        return $this->useIncomingCLIDPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useIncomingCLIDPolicy;
    }

    /**
     * Setter for useIncomingCLIDPolicy
     *
     * @param bool $useIncomingCLIDPolicy
     * @return $this
     */
    public function setUseIncomingCLIDPolicy($useIncomingCLIDPolicy)
    {
        $this->useIncomingCLIDPolicy = $useIncomingCLIDPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseIncomingCLIDPolicy()
    {
        $this->useIncomingCLIDPolicy = null;
        return $this;
    }

    /**
     * Getter for enableDialableCallerID
     *
     * @return bool
     */
    public function getEnableDialableCallerID()
    {
        return $this->enableDialableCallerID instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableDialableCallerID;
    }

    /**
     * Setter for enableDialableCallerID
     *
     * @param bool $enableDialableCallerID
     * @return $this
     */
    public function setEnableDialableCallerID($enableDialableCallerID)
    {
        $this->enableDialableCallerID = $enableDialableCallerID;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableDialableCallerID()
    {
        $this->enableDialableCallerID = null;
        return $this;
    }
}

