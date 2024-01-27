<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallProcessingGetPolicyResponse14sp4
 *
 * Response to GroupCallProcessingGetPolicyRequest14sp4.
 *         Replaced By : GroupCallProcessingGetPolicyResponse15
 *
 * @see GroupCallProcessingGetPolicyRequest14sp4
 * @see GroupCallProcessingGetPolicyResponse15
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:8081","type":"sequence"}]
 */
class GroupCallProcessingGetPolicyResponse14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useGroupSetting
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @var bool|null
     */
    protected $useGroupSetting = null;

    /**
     * @ElementName useMaxSimultaneousCalls
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @var bool|null
     */
    protected $useMaxSimultaneousCalls = null;

    /**
     * @ElementName maxSimultaneousCalls
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @MinInclusive 1
     * @MaxInclusive 500
     * @var int|null
     */
    protected $maxSimultaneousCalls = null;

    /**
     * @ElementName useMaxSimultaneousVideoCalls
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @var bool|null
     */
    protected $useMaxSimultaneousVideoCalls = null;

    /**
     * @ElementName maxSimultaneousVideoCalls
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @MinInclusive 1
     * @MaxInclusive 500
     * @var int|null
     */
    protected $maxSimultaneousVideoCalls = null;

    /**
     * @ElementName useMaxCallTimeForAnsweredCalls
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @var bool|null
     */
    protected $useMaxCallTimeForAnsweredCalls = null;

    /**
     * @ElementName maxCallTimeForAnsweredCallsMinutes
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @MinInclusive 5
     * @MaxInclusive 2880
     * @var int|null
     */
    protected $maxCallTimeForAnsweredCallsMinutes = null;

    /**
     * @ElementName useMaxCallTimeForUnansweredCalls
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @var bool|null
     */
    protected $useMaxCallTimeForUnansweredCalls = null;

    /**
     * @ElementName maxCallTimeForUnansweredCallsMinutes
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @MinInclusive 1
     * @MaxInclusive 60
     * @var int|null
     */
    protected $maxCallTimeForUnansweredCallsMinutes = null;

    /**
     * @ElementName mediaPolicySelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection|null
     */
    protected $mediaPolicySelection = null;

    /**
     * @ElementName supportedMediaSetName
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $supportedMediaSetName = null;

    /**
     * @ElementName networkUsageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection|null
     */
    protected $networkUsageSelection = null;

    /**
     * @ElementName enforceGroupCallingLineIdentityRestriction
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @var bool|null
     */
    protected $enforceGroupCallingLineIdentityRestriction = null;

    /**
     * @ElementName allowEnterpriseGroupCallTypingForPrivateDialingPlan
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @var bool|null
     */
    protected $allowEnterpriseGroupCallTypingForPrivateDialingPlan = null;

    /**
     * @ElementName allowEnterpriseGroupCallTypingForPublicDialingPlan
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @var bool|null
     */
    protected $allowEnterpriseGroupCallTypingForPublicDialingPlan = null;

    /**
     * @ElementName overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @var bool|null
     */
    protected $overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan = null;

    /**
     * @ElementName enableEnterpriseExtensionDialing
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @var bool|null
     */
    protected $enableEnterpriseExtensionDialing = null;

    /**
     * @ElementName useMaxConcurrentRedirectedCalls
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @var bool|null
     */
    protected $useMaxConcurrentRedirectedCalls = null;

    /**
     * @ElementName maxConcurrentRedirectedCalls
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @MinInclusive 1
     * @MaxInclusive 32
     * @var int|null
     */
    protected $maxConcurrentRedirectedCalls = null;

    /**
     * @ElementName useMaxFindMeFollowMeDepth
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @var bool|null
     */
    protected $useMaxFindMeFollowMeDepth = null;

    /**
     * @ElementName maxFindMeFollowMeDepth
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $maxFindMeFollowMeDepth = null;

    /**
     * @ElementName maxRedirectionDepth
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @MinInclusive 1
     * @MaxInclusive 15
     * @var int|null
     */
    protected $maxRedirectionDepth = null;

    /**
     * @ElementName useMaxConcurrentFindMeFollowMeInvocations
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @var bool|null
     */
    protected $useMaxConcurrentFindMeFollowMeInvocations = null;

    /**
     * @ElementName maxConcurrentFindMeFollowMeInvocations
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:8081
     * @MinInclusive 1
     * @MaxInclusive 32
     * @var int|null
     */
    protected $maxConcurrentFindMeFollowMeInvocations = null;

    /**
     * Getter for useGroupSetting
     *
     * @return bool
     */
    public function getUseGroupSetting()
    {
        return $this->useGroupSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useGroupSetting;
    }

    /**
     * Setter for useGroupSetting
     *
     * @param bool $useGroupSetting
     * @return $this
     */
    public function setUseGroupSetting($useGroupSetting)
    {
        $this->useGroupSetting = $useGroupSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseGroupSetting()
    {
        $this->useGroupSetting = null;
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
     * Getter for useMaxCallTimeForUnansweredCalls
     *
     * @return bool
     */
    public function getUseMaxCallTimeForUnansweredCalls()
    {
        return $this->useMaxCallTimeForUnansweredCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMaxCallTimeForUnansweredCalls;
    }

    /**
     * Setter for useMaxCallTimeForUnansweredCalls
     *
     * @param bool $useMaxCallTimeForUnansweredCalls
     * @return $this
     */
    public function setUseMaxCallTimeForUnansweredCalls($useMaxCallTimeForUnansweredCalls)
    {
        $this->useMaxCallTimeForUnansweredCalls = $useMaxCallTimeForUnansweredCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMaxCallTimeForUnansweredCalls()
    {
        $this->useMaxCallTimeForUnansweredCalls = null;
        return $this;
    }

    /**
     * Getter for maxCallTimeForUnansweredCallsMinutes
     *
     * @return int
     */
    public function getMaxCallTimeForUnansweredCallsMinutes()
    {
        return $this->maxCallTimeForUnansweredCallsMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxCallTimeForUnansweredCallsMinutes;
    }

    /**
     * Setter for maxCallTimeForUnansweredCallsMinutes
     *
     * @param int $maxCallTimeForUnansweredCallsMinutes
     * @return $this
     */
    public function setMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes)
    {
        $this->maxCallTimeForUnansweredCallsMinutes = $maxCallTimeForUnansweredCallsMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxCallTimeForUnansweredCallsMinutes()
    {
        $this->maxCallTimeForUnansweredCallsMinutes = null;
        return $this;
    }

    /**
     * Getter for mediaPolicySelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection
     */
    public function getMediaPolicySelection()
    {
        return $this->mediaPolicySelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaPolicySelection;
    }

    /**
     * Setter for mediaPolicySelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection $mediaPolicySelection
     * @return $this
     */
    public function setMediaPolicySelection(\CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection $mediaPolicySelection)
    {
        $this->mediaPolicySelection = $mediaPolicySelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaPolicySelection()
    {
        $this->mediaPolicySelection = null;
        return $this;
    }

    /**
     * Getter for supportedMediaSetName
     *
     * @return string
     */
    public function getSupportedMediaSetName()
    {
        return $this->supportedMediaSetName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportedMediaSetName;
    }

    /**
     * Setter for supportedMediaSetName
     *
     * @param string $supportedMediaSetName
     * @return $this
     */
    public function setSupportedMediaSetName($supportedMediaSetName)
    {
        $this->supportedMediaSetName = $supportedMediaSetName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportedMediaSetName()
    {
        $this->supportedMediaSetName = null;
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
     * Getter for overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan
     *
     * @return bool
     */
    public function getOverrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan()
    {
        return $this->overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan;
    }

    /**
     * Setter for overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan
     *
     * @param bool $overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan
     * @return $this
     */
    public function setOverrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan($overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan)
    {
        $this->overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan = $overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOverrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan()
    {
        $this->overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan = null;
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
     * Getter for useMaxFindMeFollowMeDepth
     *
     * @return bool
     */
    public function getUseMaxFindMeFollowMeDepth()
    {
        return $this->useMaxFindMeFollowMeDepth instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMaxFindMeFollowMeDepth;
    }

    /**
     * Setter for useMaxFindMeFollowMeDepth
     *
     * @param bool $useMaxFindMeFollowMeDepth
     * @return $this
     */
    public function setUseMaxFindMeFollowMeDepth($useMaxFindMeFollowMeDepth)
    {
        $this->useMaxFindMeFollowMeDepth = $useMaxFindMeFollowMeDepth;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMaxFindMeFollowMeDepth()
    {
        $this->useMaxFindMeFollowMeDepth = null;
        return $this;
    }

    /**
     * Getter for maxFindMeFollowMeDepth
     *
     * @return int
     */
    public function getMaxFindMeFollowMeDepth()
    {
        return $this->maxFindMeFollowMeDepth instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxFindMeFollowMeDepth;
    }

    /**
     * Setter for maxFindMeFollowMeDepth
     *
     * @param int $maxFindMeFollowMeDepth
     * @return $this
     */
    public function setMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth)
    {
        $this->maxFindMeFollowMeDepth = $maxFindMeFollowMeDepth;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxFindMeFollowMeDepth()
    {
        $this->maxFindMeFollowMeDepth = null;
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
     * Getter for useMaxConcurrentFindMeFollowMeInvocations
     *
     * @return bool
     */
    public function getUseMaxConcurrentFindMeFollowMeInvocations()
    {
        return $this->useMaxConcurrentFindMeFollowMeInvocations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMaxConcurrentFindMeFollowMeInvocations;
    }

    /**
     * Setter for useMaxConcurrentFindMeFollowMeInvocations
     *
     * @param bool $useMaxConcurrentFindMeFollowMeInvocations
     * @return $this
     */
    public function setUseMaxConcurrentFindMeFollowMeInvocations($useMaxConcurrentFindMeFollowMeInvocations)
    {
        $this->useMaxConcurrentFindMeFollowMeInvocations = $useMaxConcurrentFindMeFollowMeInvocations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMaxConcurrentFindMeFollowMeInvocations()
    {
        $this->useMaxConcurrentFindMeFollowMeInvocations = null;
        return $this;
    }

    /**
     * Getter for maxConcurrentFindMeFollowMeInvocations
     *
     * @return int
     */
    public function getMaxConcurrentFindMeFollowMeInvocations()
    {
        return $this->maxConcurrentFindMeFollowMeInvocations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConcurrentFindMeFollowMeInvocations;
    }

    /**
     * Setter for maxConcurrentFindMeFollowMeInvocations
     *
     * @param int $maxConcurrentFindMeFollowMeInvocations
     * @return $this
     */
    public function setMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations)
    {
        $this->maxConcurrentFindMeFollowMeInvocations = $maxConcurrentFindMeFollowMeInvocations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxConcurrentFindMeFollowMeInvocations()
    {
        $this->maxConcurrentFindMeFollowMeInvocations = null;
        return $this;
    }
}

