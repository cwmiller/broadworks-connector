<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallProcessingGetPolicyResponse22
 *
 * Response to GroupCallProcessingGetPolicyRequest22.
 *         The following elements are only used in AS data mode:
 *           useGroupDCLIDSetting
 *           enableDialableCallerID
 *           allowConfigurableCLIDForRedirectingIdentity
 *           allowDepartmentCLIDNameOverride
 *           enterpriseCallsCLIDPolicy, value "Use Location Code plus Extension" is
 * returned in XS data mode.
 *           groupCallsCLIDPolicy, value "Use Extension" is returned in XS data
 * mode.
 *           useGroupPhoneListLookupSetting, value "false" is returned in XS data
 * mode.
 *           enablePhoneListLookup, value "false" is returned in XS data mode.
 *           useMaxConcurrentTerminatingAlertingRequests, value "false" is returned
 * in XS data mode.
 *           maxConcurrentTerminatingAlertingRequests, value "10" is returned in XS
 * data mode.
 *           includeRedirectionsInMaximumNumberOfConcurrentCalls, value "false" is
 * returned in XS data mode.
 *           useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable, value
 * "false" is returned in XS data mode.
 *           useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable, value
 * "false" is returned in XS data mode.
 *         The following elements are only used in XS data mode and not returned in
 * AS data mode:
 *           routeOverrideDomain
 *           routeOverridePrefix
 */
class GroupCallProcessingGetPolicyResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useGroupCLIDSetting
     * @var bool|null
     */
    private $useGroupCLIDSetting = null;

    /**
     * @ElementName useGroupMediaSetting
     * @var bool|null
     */
    private $useGroupMediaSetting = null;

    /**
     * @ElementName useGroupCallLimitsSetting
     * @var bool|null
     */
    private $useGroupCallLimitsSetting = null;

    /**
     * @ElementName useGroupTranslationRoutingSetting
     * @var bool|null
     */
    private $useGroupTranslationRoutingSetting = null;

    /**
     * @ElementName useGroupDCLIDSetting
     * @var bool|null
     */
    private $useGroupDCLIDSetting = null;

    /**
     * @ElementName useMaxSimultaneousCalls
     * @var bool|null
     */
    private $useMaxSimultaneousCalls = null;

    /**
     * @ElementName maxSimultaneousCalls
     * @var int|null
     */
    private $maxSimultaneousCalls = null;

    /**
     * @ElementName useMaxSimultaneousVideoCalls
     * @var bool|null
     */
    private $useMaxSimultaneousVideoCalls = null;

    /**
     * @ElementName maxSimultaneousVideoCalls
     * @var int|null
     */
    private $maxSimultaneousVideoCalls = null;

    /**
     * @ElementName useMaxCallTimeForAnsweredCalls
     * @var bool|null
     */
    private $useMaxCallTimeForAnsweredCalls = null;

    /**
     * @ElementName maxCallTimeForAnsweredCallsMinutes
     * @var int|null
     */
    private $maxCallTimeForAnsweredCallsMinutes = null;

    /**
     * @ElementName useMaxCallTimeForUnansweredCalls
     * @var bool|null
     */
    private $useMaxCallTimeForUnansweredCalls = null;

    /**
     * @ElementName maxCallTimeForUnansweredCallsMinutes
     * @var int|null
     */
    private $maxCallTimeForUnansweredCallsMinutes = null;

    /**
     * @ElementName mediaPolicySelection
     * @var string|null
     */
    private $mediaPolicySelection = null;

    /**
     * @ElementName supportedMediaSetName
     * @var string|null
     */
    private $supportedMediaSetName = null;

    /**
     * @ElementName networkUsageSelection
     * @var string|null
     */
    private $networkUsageSelection = null;

    /**
     * @ElementName enforceGroupCallingLineIdentityRestriction
     * @var bool|null
     */
    private $enforceGroupCallingLineIdentityRestriction = null;

    /**
     * @ElementName allowEnterpriseGroupCallTypingForPrivateDialingPlan
     * @var bool|null
     */
    private $allowEnterpriseGroupCallTypingForPrivateDialingPlan = null;

    /**
     * @ElementName allowEnterpriseGroupCallTypingForPublicDialingPlan
     * @var bool|null
     */
    private $allowEnterpriseGroupCallTypingForPublicDialingPlan = null;

    /**
     * @ElementName overrideCLIDRestrictionForPrivateCallCategory
     * @var bool|null
     */
    private $overrideCLIDRestrictionForPrivateCallCategory = null;

    /**
     * @ElementName useEnterpriseCLIDForPrivateCallCategory
     * @var bool|null
     */
    private $useEnterpriseCLIDForPrivateCallCategory = null;

    /**
     * @ElementName enableEnterpriseExtensionDialing
     * @var bool|null
     */
    private $enableEnterpriseExtensionDialing = null;

    /**
     * @ElementName useMaxConcurrentRedirectedCalls
     * @var bool|null
     */
    private $useMaxConcurrentRedirectedCalls = null;

    /**
     * @ElementName maxConcurrentRedirectedCalls
     * @var int|null
     */
    private $maxConcurrentRedirectedCalls = null;

    /**
     * @ElementName useMaxFindMeFollowMeDepth
     * @var bool|null
     */
    private $useMaxFindMeFollowMeDepth = null;

    /**
     * @ElementName maxFindMeFollowMeDepth
     * @var int|null
     */
    private $maxFindMeFollowMeDepth = null;

    /**
     * @ElementName maxRedirectionDepth
     * @var int|null
     */
    private $maxRedirectionDepth = null;

    /**
     * @ElementName useMaxConcurrentFindMeFollowMeInvocations
     * @var bool|null
     */
    private $useMaxConcurrentFindMeFollowMeInvocations = null;

    /**
     * @ElementName maxConcurrentFindMeFollowMeInvocations
     * @var int|null
     */
    private $maxConcurrentFindMeFollowMeInvocations = null;

    /**
     * @ElementName clidPolicy
     * @var string|null
     */
    private $clidPolicy = null;

    /**
     * @ElementName emergencyClidPolicy
     * @var string|null
     */
    private $emergencyClidPolicy = null;

    /**
     * @ElementName allowAlternateNumbersForRedirectingIdentity
     * @var bool|null
     */
    private $allowAlternateNumbersForRedirectingIdentity = null;

    /**
     * @ElementName useGroupName
     * @var bool|null
     */
    private $useGroupName = null;

    /**
     * @ElementName blockCallingNameForExternalCalls
     * @var bool|null
     */
    private $blockCallingNameForExternalCalls = null;

    /**
     * @ElementName enableDialableCallerID
     * @var bool|null
     */
    private $enableDialableCallerID = null;

    /**
     * @ElementName allowConfigurableCLIDForRedirectingIdentity
     * @var bool|null
     */
    private $allowConfigurableCLIDForRedirectingIdentity = null;

    /**
     * @ElementName allowDepartmentCLIDNameOverride
     * @var bool|null
     */
    private $allowDepartmentCLIDNameOverride = null;

    /**
     * @ElementName enterpriseCallsCLIDPolicy
     * @var string|null
     */
    private $enterpriseCallsCLIDPolicy = null;

    /**
     * @ElementName groupCallsCLIDPolicy
     * @var string|null
     */
    private $groupCallsCLIDPolicy = null;

    /**
     * @ElementName useGroupPhoneListLookupSetting
     * @var bool|null
     */
    private $useGroupPhoneListLookupSetting = null;

    /**
     * @ElementName enablePhoneListLookup
     * @var bool|null
     */
    private $enablePhoneListLookup = null;

    /**
     * @ElementName useMaxConcurrentTerminatingAlertingRequests
     * @var bool|null
     */
    private $useMaxConcurrentTerminatingAlertingRequests = null;

    /**
     * @ElementName maxConcurrentTerminatingAlertingRequests
     * @var int|null
     */
    private $maxConcurrentTerminatingAlertingRequests = null;

    /**
     * @ElementName includeRedirectionsInMaximumNumberOfConcurrentCalls
     * @var bool|null
     */
    private $includeRedirectionsInMaximumNumberOfConcurrentCalls = null;

    /**
     * @ElementName useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
     * @var bool|null
     */
    private $useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable = null;

    /**
     * @ElementName useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
     * @var bool|null
     */
    private $useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable = null;

    /**
     * @ElementName routeOverrideDomain
     * @var string|null
     */
    private $routeOverrideDomain = null;

    /**
     * @ElementName routeOverridePrefix
     * @var string|null
     */
    private $routeOverridePrefix = null;

    /**
     * Getter for useGroupCLIDSetting
     *
     * @ElementName useGroupCLIDSetting
     * @return bool|null
     */
    public function getUseGroupCLIDSetting()
    {
        return $this->useGroupCLIDSetting;
    }

    /**
     * Setter for useGroupCLIDSetting
     *
     * @ElementName useGroupCLIDSetting
     * @param bool|null $useGroupCLIDSetting
     * @return $this
     */
    public function setUseGroupCLIDSetting($useGroupCLIDSetting)
    {
        $this->useGroupCLIDSetting = $useGroupCLIDSetting;
        return $this;
    }

    /**
     * Getter for useGroupMediaSetting
     *
     * @ElementName useGroupMediaSetting
     * @return bool|null
     */
    public function getUseGroupMediaSetting()
    {
        return $this->useGroupMediaSetting;
    }

    /**
     * Setter for useGroupMediaSetting
     *
     * @ElementName useGroupMediaSetting
     * @param bool|null $useGroupMediaSetting
     * @return $this
     */
    public function setUseGroupMediaSetting($useGroupMediaSetting)
    {
        $this->useGroupMediaSetting = $useGroupMediaSetting;
        return $this;
    }

    /**
     * Getter for useGroupCallLimitsSetting
     *
     * @ElementName useGroupCallLimitsSetting
     * @return bool|null
     */
    public function getUseGroupCallLimitsSetting()
    {
        return $this->useGroupCallLimitsSetting;
    }

    /**
     * Setter for useGroupCallLimitsSetting
     *
     * @ElementName useGroupCallLimitsSetting
     * @param bool|null $useGroupCallLimitsSetting
     * @return $this
     */
    public function setUseGroupCallLimitsSetting($useGroupCallLimitsSetting)
    {
        $this->useGroupCallLimitsSetting = $useGroupCallLimitsSetting;
        return $this;
    }

    /**
     * Getter for useGroupTranslationRoutingSetting
     *
     * @ElementName useGroupTranslationRoutingSetting
     * @return bool|null
     */
    public function getUseGroupTranslationRoutingSetting()
    {
        return $this->useGroupTranslationRoutingSetting;
    }

    /**
     * Setter for useGroupTranslationRoutingSetting
     *
     * @ElementName useGroupTranslationRoutingSetting
     * @param bool|null $useGroupTranslationRoutingSetting
     * @return $this
     */
    public function setUseGroupTranslationRoutingSetting($useGroupTranslationRoutingSetting)
    {
        $this->useGroupTranslationRoutingSetting = $useGroupTranslationRoutingSetting;
        return $this;
    }

    /**
     * Getter for useGroupDCLIDSetting
     *
     * @ElementName useGroupDCLIDSetting
     * @return bool|null
     */
    public function getUseGroupDCLIDSetting()
    {
        return $this->useGroupDCLIDSetting;
    }

    /**
     * Setter for useGroupDCLIDSetting
     *
     * @ElementName useGroupDCLIDSetting
     * @param bool|null $useGroupDCLIDSetting
     * @return $this
     */
    public function setUseGroupDCLIDSetting($useGroupDCLIDSetting)
    {
        $this->useGroupDCLIDSetting = $useGroupDCLIDSetting;
        return $this;
    }

    /**
     * Getter for useMaxSimultaneousCalls
     *
     * @ElementName useMaxSimultaneousCalls
     * @return bool|null
     */
    public function getUseMaxSimultaneousCalls()
    {
        return $this->useMaxSimultaneousCalls;
    }

    /**
     * Setter for useMaxSimultaneousCalls
     *
     * @ElementName useMaxSimultaneousCalls
     * @param bool|null $useMaxSimultaneousCalls
     * @return $this
     */
    public function setUseMaxSimultaneousCalls($useMaxSimultaneousCalls)
    {
        $this->useMaxSimultaneousCalls = $useMaxSimultaneousCalls;
        return $this;
    }

    /**
     * Getter for maxSimultaneousCalls
     *
     * @ElementName maxSimultaneousCalls
     * @return int|null
     */
    public function getMaxSimultaneousCalls()
    {
        return $this->maxSimultaneousCalls;
    }

    /**
     * Setter for maxSimultaneousCalls
     *
     * @ElementName maxSimultaneousCalls
     * @param int|null $maxSimultaneousCalls
     * @return $this
     */
    public function setMaxSimultaneousCalls($maxSimultaneousCalls)
    {
        $this->maxSimultaneousCalls = $maxSimultaneousCalls;
        return $this;
    }

    /**
     * Getter for useMaxSimultaneousVideoCalls
     *
     * @ElementName useMaxSimultaneousVideoCalls
     * @return bool|null
     */
    public function getUseMaxSimultaneousVideoCalls()
    {
        return $this->useMaxSimultaneousVideoCalls;
    }

    /**
     * Setter for useMaxSimultaneousVideoCalls
     *
     * @ElementName useMaxSimultaneousVideoCalls
     * @param bool|null $useMaxSimultaneousVideoCalls
     * @return $this
     */
    public function setUseMaxSimultaneousVideoCalls($useMaxSimultaneousVideoCalls)
    {
        $this->useMaxSimultaneousVideoCalls = $useMaxSimultaneousVideoCalls;
        return $this;
    }

    /**
     * Getter for maxSimultaneousVideoCalls
     *
     * @ElementName maxSimultaneousVideoCalls
     * @return int|null
     */
    public function getMaxSimultaneousVideoCalls()
    {
        return $this->maxSimultaneousVideoCalls;
    }

    /**
     * Setter for maxSimultaneousVideoCalls
     *
     * @ElementName maxSimultaneousVideoCalls
     * @param int|null $maxSimultaneousVideoCalls
     * @return $this
     */
    public function setMaxSimultaneousVideoCalls($maxSimultaneousVideoCalls)
    {
        $this->maxSimultaneousVideoCalls = $maxSimultaneousVideoCalls;
        return $this;
    }

    /**
     * Getter for useMaxCallTimeForAnsweredCalls
     *
     * @ElementName useMaxCallTimeForAnsweredCalls
     * @return bool|null
     */
    public function getUseMaxCallTimeForAnsweredCalls()
    {
        return $this->useMaxCallTimeForAnsweredCalls;
    }

    /**
     * Setter for useMaxCallTimeForAnsweredCalls
     *
     * @ElementName useMaxCallTimeForAnsweredCalls
     * @param bool|null $useMaxCallTimeForAnsweredCalls
     * @return $this
     */
    public function setUseMaxCallTimeForAnsweredCalls($useMaxCallTimeForAnsweredCalls)
    {
        $this->useMaxCallTimeForAnsweredCalls = $useMaxCallTimeForAnsweredCalls;
        return $this;
    }

    /**
     * Getter for maxCallTimeForAnsweredCallsMinutes
     *
     * @ElementName maxCallTimeForAnsweredCallsMinutes
     * @return int|null
     */
    public function getMaxCallTimeForAnsweredCallsMinutes()
    {
        return $this->maxCallTimeForAnsweredCallsMinutes;
    }

    /**
     * Setter for maxCallTimeForAnsweredCallsMinutes
     *
     * @ElementName maxCallTimeForAnsweredCallsMinutes
     * @param int|null $maxCallTimeForAnsweredCallsMinutes
     * @return $this
     */
    public function setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes)
    {
        $this->maxCallTimeForAnsweredCallsMinutes = $maxCallTimeForAnsweredCallsMinutes;
        return $this;
    }

    /**
     * Getter for useMaxCallTimeForUnansweredCalls
     *
     * @ElementName useMaxCallTimeForUnansweredCalls
     * @return bool|null
     */
    public function getUseMaxCallTimeForUnansweredCalls()
    {
        return $this->useMaxCallTimeForUnansweredCalls;
    }

    /**
     * Setter for useMaxCallTimeForUnansweredCalls
     *
     * @ElementName useMaxCallTimeForUnansweredCalls
     * @param bool|null $useMaxCallTimeForUnansweredCalls
     * @return $this
     */
    public function setUseMaxCallTimeForUnansweredCalls($useMaxCallTimeForUnansweredCalls)
    {
        $this->useMaxCallTimeForUnansweredCalls = $useMaxCallTimeForUnansweredCalls;
        return $this;
    }

    /**
     * Getter for maxCallTimeForUnansweredCallsMinutes
     *
     * @ElementName maxCallTimeForUnansweredCallsMinutes
     * @return int|null
     */
    public function getMaxCallTimeForUnansweredCallsMinutes()
    {
        return $this->maxCallTimeForUnansweredCallsMinutes;
    }

    /**
     * Setter for maxCallTimeForUnansweredCallsMinutes
     *
     * @ElementName maxCallTimeForUnansweredCallsMinutes
     * @param int|null $maxCallTimeForUnansweredCallsMinutes
     * @return $this
     */
    public function setMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes)
    {
        $this->maxCallTimeForUnansweredCallsMinutes = $maxCallTimeForUnansweredCallsMinutes;
        return $this;
    }

    /**
     * Getter for mediaPolicySelection
     *
     * @ElementName mediaPolicySelection
     * @return string|null
     */
    public function getMediaPolicySelection()
    {
        return $this->mediaPolicySelection;
    }

    /**
     * Setter for mediaPolicySelection
     *
     * @ElementName mediaPolicySelection
     * @param string|null $mediaPolicySelection
     * @return $this
     */
    public function setMediaPolicySelection($mediaPolicySelection)
    {
        $this->mediaPolicySelection = $mediaPolicySelection;
        return $this;
    }

    /**
     * Getter for supportedMediaSetName
     *
     * @ElementName supportedMediaSetName
     * @return string|null
     */
    public function getSupportedMediaSetName()
    {
        return $this->supportedMediaSetName;
    }

    /**
     * Setter for supportedMediaSetName
     *
     * @ElementName supportedMediaSetName
     * @param string|null $supportedMediaSetName
     * @return $this
     */
    public function setSupportedMediaSetName($supportedMediaSetName)
    {
        $this->supportedMediaSetName = $supportedMediaSetName;
        return $this;
    }

    /**
     * Getter for networkUsageSelection
     *
     * @ElementName networkUsageSelection
     * @return string|null
     */
    public function getNetworkUsageSelection()
    {
        return $this->networkUsageSelection;
    }

    /**
     * Setter for networkUsageSelection
     *
     * @ElementName networkUsageSelection
     * @param string|null $networkUsageSelection
     * @return $this
     */
    public function setNetworkUsageSelection($networkUsageSelection)
    {
        $this->networkUsageSelection = $networkUsageSelection;
        return $this;
    }

    /**
     * Getter for enforceGroupCallingLineIdentityRestriction
     *
     * @ElementName enforceGroupCallingLineIdentityRestriction
     * @return bool|null
     */
    public function getEnforceGroupCallingLineIdentityRestriction()
    {
        return $this->enforceGroupCallingLineIdentityRestriction;
    }

    /**
     * Setter for enforceGroupCallingLineIdentityRestriction
     *
     * @ElementName enforceGroupCallingLineIdentityRestriction
     * @param bool|null $enforceGroupCallingLineIdentityRestriction
     * @return $this
     */
    public function setEnforceGroupCallingLineIdentityRestriction($enforceGroupCallingLineIdentityRestriction)
    {
        $this->enforceGroupCallingLineIdentityRestriction = $enforceGroupCallingLineIdentityRestriction;
        return $this;
    }

    /**
     * Getter for allowEnterpriseGroupCallTypingForPrivateDialingPlan
     *
     * @ElementName allowEnterpriseGroupCallTypingForPrivateDialingPlan
     * @return bool|null
     */
    public function getAllowEnterpriseGroupCallTypingForPrivateDialingPlan()
    {
        return $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan;
    }

    /**
     * Setter for allowEnterpriseGroupCallTypingForPrivateDialingPlan
     *
     * @ElementName allowEnterpriseGroupCallTypingForPrivateDialingPlan
     * @param bool|null $allowEnterpriseGroupCallTypingForPrivateDialingPlan
     * @return $this
     */
    public function setAllowEnterpriseGroupCallTypingForPrivateDialingPlan($allowEnterpriseGroupCallTypingForPrivateDialingPlan)
    {
        $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan = $allowEnterpriseGroupCallTypingForPrivateDialingPlan;
        return $this;
    }

    /**
     * Getter for allowEnterpriseGroupCallTypingForPublicDialingPlan
     *
     * @ElementName allowEnterpriseGroupCallTypingForPublicDialingPlan
     * @return bool|null
     */
    public function getAllowEnterpriseGroupCallTypingForPublicDialingPlan()
    {
        return $this->allowEnterpriseGroupCallTypingForPublicDialingPlan;
    }

    /**
     * Setter for allowEnterpriseGroupCallTypingForPublicDialingPlan
     *
     * @ElementName allowEnterpriseGroupCallTypingForPublicDialingPlan
     * @param bool|null $allowEnterpriseGroupCallTypingForPublicDialingPlan
     * @return $this
     */
    public function setAllowEnterpriseGroupCallTypingForPublicDialingPlan($allowEnterpriseGroupCallTypingForPublicDialingPlan)
    {
        $this->allowEnterpriseGroupCallTypingForPublicDialingPlan = $allowEnterpriseGroupCallTypingForPublicDialingPlan;
        return $this;
    }

    /**
     * Getter for overrideCLIDRestrictionForPrivateCallCategory
     *
     * @ElementName overrideCLIDRestrictionForPrivateCallCategory
     * @return bool|null
     */
    public function getOverrideCLIDRestrictionForPrivateCallCategory()
    {
        return $this->overrideCLIDRestrictionForPrivateCallCategory;
    }

    /**
     * Setter for overrideCLIDRestrictionForPrivateCallCategory
     *
     * @ElementName overrideCLIDRestrictionForPrivateCallCategory
     * @param bool|null $overrideCLIDRestrictionForPrivateCallCategory
     * @return $this
     */
    public function setOverrideCLIDRestrictionForPrivateCallCategory($overrideCLIDRestrictionForPrivateCallCategory)
    {
        $this->overrideCLIDRestrictionForPrivateCallCategory = $overrideCLIDRestrictionForPrivateCallCategory;
        return $this;
    }

    /**
     * Getter for useEnterpriseCLIDForPrivateCallCategory
     *
     * @ElementName useEnterpriseCLIDForPrivateCallCategory
     * @return bool|null
     */
    public function getUseEnterpriseCLIDForPrivateCallCategory()
    {
        return $this->useEnterpriseCLIDForPrivateCallCategory;
    }

    /**
     * Setter for useEnterpriseCLIDForPrivateCallCategory
     *
     * @ElementName useEnterpriseCLIDForPrivateCallCategory
     * @param bool|null $useEnterpriseCLIDForPrivateCallCategory
     * @return $this
     */
    public function setUseEnterpriseCLIDForPrivateCallCategory($useEnterpriseCLIDForPrivateCallCategory)
    {
        $this->useEnterpriseCLIDForPrivateCallCategory = $useEnterpriseCLIDForPrivateCallCategory;
        return $this;
    }

    /**
     * Getter for enableEnterpriseExtensionDialing
     *
     * @ElementName enableEnterpriseExtensionDialing
     * @return bool|null
     */
    public function getEnableEnterpriseExtensionDialing()
    {
        return $this->enableEnterpriseExtensionDialing;
    }

    /**
     * Setter for enableEnterpriseExtensionDialing
     *
     * @ElementName enableEnterpriseExtensionDialing
     * @param bool|null $enableEnterpriseExtensionDialing
     * @return $this
     */
    public function setEnableEnterpriseExtensionDialing($enableEnterpriseExtensionDialing)
    {
        $this->enableEnterpriseExtensionDialing = $enableEnterpriseExtensionDialing;
        return $this;
    }

    /**
     * Getter for useMaxConcurrentRedirectedCalls
     *
     * @ElementName useMaxConcurrentRedirectedCalls
     * @return bool|null
     */
    public function getUseMaxConcurrentRedirectedCalls()
    {
        return $this->useMaxConcurrentRedirectedCalls;
    }

    /**
     * Setter for useMaxConcurrentRedirectedCalls
     *
     * @ElementName useMaxConcurrentRedirectedCalls
     * @param bool|null $useMaxConcurrentRedirectedCalls
     * @return $this
     */
    public function setUseMaxConcurrentRedirectedCalls($useMaxConcurrentRedirectedCalls)
    {
        $this->useMaxConcurrentRedirectedCalls = $useMaxConcurrentRedirectedCalls;
        return $this;
    }

    /**
     * Getter for maxConcurrentRedirectedCalls
     *
     * @ElementName maxConcurrentRedirectedCalls
     * @return int|null
     */
    public function getMaxConcurrentRedirectedCalls()
    {
        return $this->maxConcurrentRedirectedCalls;
    }

    /**
     * Setter for maxConcurrentRedirectedCalls
     *
     * @ElementName maxConcurrentRedirectedCalls
     * @param int|null $maxConcurrentRedirectedCalls
     * @return $this
     */
    public function setMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls)
    {
        $this->maxConcurrentRedirectedCalls = $maxConcurrentRedirectedCalls;
        return $this;
    }

    /**
     * Getter for useMaxFindMeFollowMeDepth
     *
     * @ElementName useMaxFindMeFollowMeDepth
     * @return bool|null
     */
    public function getUseMaxFindMeFollowMeDepth()
    {
        return $this->useMaxFindMeFollowMeDepth;
    }

    /**
     * Setter for useMaxFindMeFollowMeDepth
     *
     * @ElementName useMaxFindMeFollowMeDepth
     * @param bool|null $useMaxFindMeFollowMeDepth
     * @return $this
     */
    public function setUseMaxFindMeFollowMeDepth($useMaxFindMeFollowMeDepth)
    {
        $this->useMaxFindMeFollowMeDepth = $useMaxFindMeFollowMeDepth;
        return $this;
    }

    /**
     * Getter for maxFindMeFollowMeDepth
     *
     * @ElementName maxFindMeFollowMeDepth
     * @return int|null
     */
    public function getMaxFindMeFollowMeDepth()
    {
        return $this->maxFindMeFollowMeDepth;
    }

    /**
     * Setter for maxFindMeFollowMeDepth
     *
     * @ElementName maxFindMeFollowMeDepth
     * @param int|null $maxFindMeFollowMeDepth
     * @return $this
     */
    public function setMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth)
    {
        $this->maxFindMeFollowMeDepth = $maxFindMeFollowMeDepth;
        return $this;
    }

    /**
     * Getter for maxRedirectionDepth
     *
     * @ElementName maxRedirectionDepth
     * @return int|null
     */
    public function getMaxRedirectionDepth()
    {
        return $this->maxRedirectionDepth;
    }

    /**
     * Setter for maxRedirectionDepth
     *
     * @ElementName maxRedirectionDepth
     * @param int|null $maxRedirectionDepth
     * @return $this
     */
    public function setMaxRedirectionDepth($maxRedirectionDepth)
    {
        $this->maxRedirectionDepth = $maxRedirectionDepth;
        return $this;
    }

    /**
     * Getter for useMaxConcurrentFindMeFollowMeInvocations
     *
     * @ElementName useMaxConcurrentFindMeFollowMeInvocations
     * @return bool|null
     */
    public function getUseMaxConcurrentFindMeFollowMeInvocations()
    {
        return $this->useMaxConcurrentFindMeFollowMeInvocations;
    }

    /**
     * Setter for useMaxConcurrentFindMeFollowMeInvocations
     *
     * @ElementName useMaxConcurrentFindMeFollowMeInvocations
     * @param bool|null $useMaxConcurrentFindMeFollowMeInvocations
     * @return $this
     */
    public function setUseMaxConcurrentFindMeFollowMeInvocations($useMaxConcurrentFindMeFollowMeInvocations)
    {
        $this->useMaxConcurrentFindMeFollowMeInvocations = $useMaxConcurrentFindMeFollowMeInvocations;
        return $this;
    }

    /**
     * Getter for maxConcurrentFindMeFollowMeInvocations
     *
     * @ElementName maxConcurrentFindMeFollowMeInvocations
     * @return int|null
     */
    public function getMaxConcurrentFindMeFollowMeInvocations()
    {
        return $this->maxConcurrentFindMeFollowMeInvocations;
    }

    /**
     * Setter for maxConcurrentFindMeFollowMeInvocations
     *
     * @ElementName maxConcurrentFindMeFollowMeInvocations
     * @param int|null $maxConcurrentFindMeFollowMeInvocations
     * @return $this
     */
    public function setMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations)
    {
        $this->maxConcurrentFindMeFollowMeInvocations = $maxConcurrentFindMeFollowMeInvocations;
        return $this;
    }

    /**
     * Getter for clidPolicy
     *
     * @ElementName clidPolicy
     * @return string|null
     */
    public function getClidPolicy()
    {
        return $this->clidPolicy;
    }

    /**
     * Setter for clidPolicy
     *
     * @ElementName clidPolicy
     * @param string|null $clidPolicy
     * @return $this
     */
    public function setClidPolicy($clidPolicy)
    {
        $this->clidPolicy = $clidPolicy;
        return $this;
    }

    /**
     * Getter for emergencyClidPolicy
     *
     * @ElementName emergencyClidPolicy
     * @return string|null
     */
    public function getEmergencyClidPolicy()
    {
        return $this->emergencyClidPolicy;
    }

    /**
     * Setter for emergencyClidPolicy
     *
     * @ElementName emergencyClidPolicy
     * @param string|null $emergencyClidPolicy
     * @return $this
     */
    public function setEmergencyClidPolicy($emergencyClidPolicy)
    {
        $this->emergencyClidPolicy = $emergencyClidPolicy;
        return $this;
    }

    /**
     * Getter for allowAlternateNumbersForRedirectingIdentity
     *
     * @ElementName allowAlternateNumbersForRedirectingIdentity
     * @return bool|null
     */
    public function getAllowAlternateNumbersForRedirectingIdentity()
    {
        return $this->allowAlternateNumbersForRedirectingIdentity;
    }

    /**
     * Setter for allowAlternateNumbersForRedirectingIdentity
     *
     * @ElementName allowAlternateNumbersForRedirectingIdentity
     * @param bool|null $allowAlternateNumbersForRedirectingIdentity
     * @return $this
     */
    public function setAllowAlternateNumbersForRedirectingIdentity($allowAlternateNumbersForRedirectingIdentity)
    {
        $this->allowAlternateNumbersForRedirectingIdentity = $allowAlternateNumbersForRedirectingIdentity;
        return $this;
    }

    /**
     * Getter for useGroupName
     *
     * @ElementName useGroupName
     * @return bool|null
     */
    public function getUseGroupName()
    {
        return $this->useGroupName;
    }

    /**
     * Setter for useGroupName
     *
     * @ElementName useGroupName
     * @param bool|null $useGroupName
     * @return $this
     */
    public function setUseGroupName($useGroupName)
    {
        $this->useGroupName = $useGroupName;
        return $this;
    }

    /**
     * Getter for blockCallingNameForExternalCalls
     *
     * @ElementName blockCallingNameForExternalCalls
     * @return bool|null
     */
    public function getBlockCallingNameForExternalCalls()
    {
        return $this->blockCallingNameForExternalCalls;
    }

    /**
     * Setter for blockCallingNameForExternalCalls
     *
     * @ElementName blockCallingNameForExternalCalls
     * @param bool|null $blockCallingNameForExternalCalls
     * @return $this
     */
    public function setBlockCallingNameForExternalCalls($blockCallingNameForExternalCalls)
    {
        $this->blockCallingNameForExternalCalls = $blockCallingNameForExternalCalls;
        return $this;
    }

    /**
     * Getter for enableDialableCallerID
     *
     * @ElementName enableDialableCallerID
     * @return bool|null
     */
    public function getEnableDialableCallerID()
    {
        return $this->enableDialableCallerID;
    }

    /**
     * Setter for enableDialableCallerID
     *
     * @ElementName enableDialableCallerID
     * @param bool|null $enableDialableCallerID
     * @return $this
     */
    public function setEnableDialableCallerID($enableDialableCallerID)
    {
        $this->enableDialableCallerID = $enableDialableCallerID;
        return $this;
    }

    /**
     * Getter for allowConfigurableCLIDForRedirectingIdentity
     *
     * @ElementName allowConfigurableCLIDForRedirectingIdentity
     * @return bool|null
     */
    public function getAllowConfigurableCLIDForRedirectingIdentity()
    {
        return $this->allowConfigurableCLIDForRedirectingIdentity;
    }

    /**
     * Setter for allowConfigurableCLIDForRedirectingIdentity
     *
     * @ElementName allowConfigurableCLIDForRedirectingIdentity
     * @param bool|null $allowConfigurableCLIDForRedirectingIdentity
     * @return $this
     */
    public function setAllowConfigurableCLIDForRedirectingIdentity($allowConfigurableCLIDForRedirectingIdentity)
    {
        $this->allowConfigurableCLIDForRedirectingIdentity = $allowConfigurableCLIDForRedirectingIdentity;
        return $this;
    }

    /**
     * Getter for allowDepartmentCLIDNameOverride
     *
     * @ElementName allowDepartmentCLIDNameOverride
     * @return bool|null
     */
    public function getAllowDepartmentCLIDNameOverride()
    {
        return $this->allowDepartmentCLIDNameOverride;
    }

    /**
     * Setter for allowDepartmentCLIDNameOverride
     *
     * @ElementName allowDepartmentCLIDNameOverride
     * @param bool|null $allowDepartmentCLIDNameOverride
     * @return $this
     */
    public function setAllowDepartmentCLIDNameOverride($allowDepartmentCLIDNameOverride)
    {
        $this->allowDepartmentCLIDNameOverride = $allowDepartmentCLIDNameOverride;
        return $this;
    }

    /**
     * Getter for enterpriseCallsCLIDPolicy
     *
     * @ElementName enterpriseCallsCLIDPolicy
     * @return string|null
     */
    public function getEnterpriseCallsCLIDPolicy()
    {
        return $this->enterpriseCallsCLIDPolicy;
    }

    /**
     * Setter for enterpriseCallsCLIDPolicy
     *
     * @ElementName enterpriseCallsCLIDPolicy
     * @param string|null $enterpriseCallsCLIDPolicy
     * @return $this
     */
    public function setEnterpriseCallsCLIDPolicy($enterpriseCallsCLIDPolicy)
    {
        $this->enterpriseCallsCLIDPolicy = $enterpriseCallsCLIDPolicy;
        return $this;
    }

    /**
     * Getter for groupCallsCLIDPolicy
     *
     * @ElementName groupCallsCLIDPolicy
     * @return string|null
     */
    public function getGroupCallsCLIDPolicy()
    {
        return $this->groupCallsCLIDPolicy;
    }

    /**
     * Setter for groupCallsCLIDPolicy
     *
     * @ElementName groupCallsCLIDPolicy
     * @param string|null $groupCallsCLIDPolicy
     * @return $this
     */
    public function setGroupCallsCLIDPolicy($groupCallsCLIDPolicy)
    {
        $this->groupCallsCLIDPolicy = $groupCallsCLIDPolicy;
        return $this;
    }

    /**
     * Getter for useGroupPhoneListLookupSetting
     *
     * @ElementName useGroupPhoneListLookupSetting
     * @return bool|null
     */
    public function getUseGroupPhoneListLookupSetting()
    {
        return $this->useGroupPhoneListLookupSetting;
    }

    /**
     * Setter for useGroupPhoneListLookupSetting
     *
     * @ElementName useGroupPhoneListLookupSetting
     * @param bool|null $useGroupPhoneListLookupSetting
     * @return $this
     */
    public function setUseGroupPhoneListLookupSetting($useGroupPhoneListLookupSetting)
    {
        $this->useGroupPhoneListLookupSetting = $useGroupPhoneListLookupSetting;
        return $this;
    }

    /**
     * Getter for enablePhoneListLookup
     *
     * @ElementName enablePhoneListLookup
     * @return bool|null
     */
    public function getEnablePhoneListLookup()
    {
        return $this->enablePhoneListLookup;
    }

    /**
     * Setter for enablePhoneListLookup
     *
     * @ElementName enablePhoneListLookup
     * @param bool|null $enablePhoneListLookup
     * @return $this
     */
    public function setEnablePhoneListLookup($enablePhoneListLookup)
    {
        $this->enablePhoneListLookup = $enablePhoneListLookup;
        return $this;
    }

    /**
     * Getter for useMaxConcurrentTerminatingAlertingRequests
     *
     * @ElementName useMaxConcurrentTerminatingAlertingRequests
     * @return bool|null
     */
    public function getUseMaxConcurrentTerminatingAlertingRequests()
    {
        return $this->useMaxConcurrentTerminatingAlertingRequests;
    }

    /**
     * Setter for useMaxConcurrentTerminatingAlertingRequests
     *
     * @ElementName useMaxConcurrentTerminatingAlertingRequests
     * @param bool|null $useMaxConcurrentTerminatingAlertingRequests
     * @return $this
     */
    public function setUseMaxConcurrentTerminatingAlertingRequests($useMaxConcurrentTerminatingAlertingRequests)
    {
        $this->useMaxConcurrentTerminatingAlertingRequests = $useMaxConcurrentTerminatingAlertingRequests;
        return $this;
    }

    /**
     * Getter for maxConcurrentTerminatingAlertingRequests
     *
     * @ElementName maxConcurrentTerminatingAlertingRequests
     * @return int|null
     */
    public function getMaxConcurrentTerminatingAlertingRequests()
    {
        return $this->maxConcurrentTerminatingAlertingRequests;
    }

    /**
     * Setter for maxConcurrentTerminatingAlertingRequests
     *
     * @ElementName maxConcurrentTerminatingAlertingRequests
     * @param int|null $maxConcurrentTerminatingAlertingRequests
     * @return $this
     */
    public function setMaxConcurrentTerminatingAlertingRequests($maxConcurrentTerminatingAlertingRequests)
    {
        $this->maxConcurrentTerminatingAlertingRequests = $maxConcurrentTerminatingAlertingRequests;
        return $this;
    }

    /**
     * Getter for includeRedirectionsInMaximumNumberOfConcurrentCalls
     *
     * @ElementName includeRedirectionsInMaximumNumberOfConcurrentCalls
     * @return bool|null
     */
    public function getIncludeRedirectionsInMaximumNumberOfConcurrentCalls()
    {
        return $this->includeRedirectionsInMaximumNumberOfConcurrentCalls;
    }

    /**
     * Setter for includeRedirectionsInMaximumNumberOfConcurrentCalls
     *
     * @ElementName includeRedirectionsInMaximumNumberOfConcurrentCalls
     * @param bool|null $includeRedirectionsInMaximumNumberOfConcurrentCalls
     * @return $this
     */
    public function setIncludeRedirectionsInMaximumNumberOfConcurrentCalls($includeRedirectionsInMaximumNumberOfConcurrentCalls)
    {
        $this->includeRedirectionsInMaximumNumberOfConcurrentCalls = $includeRedirectionsInMaximumNumberOfConcurrentCalls;
        return $this;
    }

    /**
     * Getter for useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
     *
     * @ElementName useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
     * @return bool|null
     */
    public function getUseUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable()
    {
        return $this->useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable;
    }

    /**
     * Setter for useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
     *
     * @ElementName useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
     * @param bool|null $useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
     * @return $this
     */
    public function setUseUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable($useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable)
    {
        $this->useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable = $useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable;
        return $this;
    }

    /**
     * Getter for useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
     *
     * @ElementName useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
     * @return bool|null
     */
    public function getUseUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable()
    {
        return $this->useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable;
    }

    /**
     * Setter for useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
     *
     * @ElementName useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
     * @param bool|null $useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
     * @return $this
     */
    public function setUseUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable($useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable)
    {
        $this->useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable = $useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable;
        return $this;
    }

    /**
     * Getter for routeOverrideDomain
     *
     * @ElementName routeOverrideDomain
     * @return string|null
     */
    public function getRouteOverrideDomain()
    {
        return $this->routeOverrideDomain;
    }

    /**
     * Setter for routeOverrideDomain
     *
     * @ElementName routeOverrideDomain
     * @param string|null $routeOverrideDomain
     * @return $this
     */
    public function setRouteOverrideDomain($routeOverrideDomain)
    {
        $this->routeOverrideDomain = $routeOverrideDomain;
        return $this;
    }

    /**
     * Getter for routeOverridePrefix
     *
     * @ElementName routeOverridePrefix
     * @return string|null
     */
    public function getRouteOverridePrefix()
    {
        return $this->routeOverridePrefix;
    }

    /**
     * Setter for routeOverridePrefix
     *
     * @ElementName routeOverridePrefix
     * @param string|null $routeOverridePrefix
     * @return $this
     */
    public function setRouteOverridePrefix($routeOverridePrefix)
    {
        $this->routeOverridePrefix = $routeOverridePrefix;
        return $this;
    }


}
