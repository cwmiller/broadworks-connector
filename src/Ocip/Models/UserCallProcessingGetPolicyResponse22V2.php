<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallProcessingGetPolicyResponse22V2
 *
 * Response to UserCallProcessingGetPolicyRequest22V2.
 *      The useUserCLIDSetting attribute controls the CLID settings 
 *      (clidPolicy, emergencyClidPolicy, allowAlternateNumbersForRedirectingIdentity, useGroupName, allowConfigurableCLIDForRedirectingIdentity, allowDepartmentCLIDNameOverride)
 *      
 *         The useUserMediaSetting attribute controls the Media settings 
 *         (medisPolicySelection, supportedMediaSetName)
 *         
 *         The useUserCallLimitsSetting attribute controls the Call Limits setting 
 *         (useMaxSimultaneousCalls, maxSimultaneousCalls, useMaxSimultaneousVideoCalls, maxSimultaneousVideoCalls, 
 *         useMaxCallTimeForAnsweredCalls, maxCallTimeForAnsweredCallsMinutes, useMaxCallTimeForUnansweredCalls, 
 *         maxCallTimeForUnansweredCallsMinutes, useMaxConcurrentRedirectedCalls, useMaxFindMeFollowMeDepth, 
 *         maxRedirectionDepth, useMaxConcurrentFindMeFollowMeInvocations, maxConcurrentFindMeFollowMeInvocations,
 *         useMaxConcurrentTerminatingAlertingRequests, maxConcurrentTerminatingAlertingRequests,
 *         includeRedirectionsInMaximumNumberOfConcurrentCalls)
 *         
 *         The useUserDCLIDSetting controls the Dialable Caller ID settings (enableDialableCallerID)
 *
 *         The useUserPhoneListLookupSetting controls whether or not to use the group setting for the Phone List Lookup policy (enablePhoneListLookup)
 *
 *         The useUserTranslationRoutingSetting attribute controls the routing and translation settings (routeOverrideDomain, routeOverridePrefix)     
 *         
 *         The following elements are only used in AS data mode:
 *          useUserDCLIDSetting
 *          enableDialableCallerID
 *          allowConfigurableCLIDForRedirectingIdentity
 *          allowDepartmentCLIDNameOverride
 *          useUserPhoneListLookupSetting, value "false" is returned in XS data mode.
 *          enablePhoneListLookup, value "false" is returned in XS data mode.  
 *          useMaxConcurrentTerminatingAlertingRequests, value "false" is returned in XS data mode.
 *          maxConcurrentTerminatingAlertingRequests, value "10" is returned in XS data mode.
 *          includeRedirectionsInMaximumNumberOfConcurrentCalls, value "false" is returned in XS data mode.
 *          allowMobileDNForRedirectingIdentity,value "false" is returned in XS data mode.
 *
 *         The following elements are only used in XS data mode and ignored in AS data mode:
 *            routeOverrideDomain
 *            routeOverridePrefix
 *
 *         The following elements are only used in XS data mode:
 *            useUserTranslationRoutingSetting, value "false" is returned in AS data mode.
 *
 * @see UserCallProcessingGetPolicyRequest22V2
 * @see useMaxConcurrentTerminatingAlertingRequests
 * @see maxConcurrentTerminatingAlertingRequests
 * @see useMaxConcurrentTerminatingAlertingRequests
 * @see maxConcurrentTerminatingAlertingRequests
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:999","type":"sequence"}]
 */
class UserCallProcessingGetPolicyResponse22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useUserCLIDSetting
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $useUserCLIDSetting = null;

    /**
     * @ElementName useUserMediaSetting
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $useUserMediaSetting = null;

    /**
     * @ElementName useUserCallLimitsSetting
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $useUserCallLimitsSetting = null;

    /**
     * @ElementName useUserDCLIDSetting
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $useUserDCLIDSetting = null;

    /**
     * @ElementName useUserTranslationRoutingSetting
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $useUserTranslationRoutingSetting = null;

    /**
     * @ElementName useMaxSimultaneousCalls
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $useMaxSimultaneousCalls = null;

    /**
     * @ElementName maxSimultaneousCalls
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxSimultaneousCalls = null;

    /**
     * @ElementName useMaxSimultaneousVideoCalls
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $useMaxSimultaneousVideoCalls = null;

    /**
     * @ElementName maxSimultaneousVideoCalls
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxSimultaneousVideoCalls = null;

    /**
     * @ElementName useMaxCallTimeForAnsweredCalls
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $useMaxCallTimeForAnsweredCalls = null;

    /**
     * @ElementName maxCallTimeForAnsweredCallsMinutes
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @MinInclusive 3
     * @MaxInclusive 2880
     * @var int|null
     */
    protected $maxCallTimeForAnsweredCallsMinutes = null;

    /**
     * @ElementName useMaxCallTimeForUnansweredCalls
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $useMaxCallTimeForUnansweredCalls = null;

    /**
     * @ElementName maxCallTimeForUnansweredCallsMinutes
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @MinInclusive 1
     * @MaxInclusive 2880
     * @var int|null
     */
    protected $maxCallTimeForUnansweredCallsMinutes = null;

    /**
     * @ElementName mediaPolicySelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection|null
     */
    protected $mediaPolicySelection = null;

    /**
     * @ElementName supportedMediaSetName
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $supportedMediaSetName = null;

    /**
     * @ElementName useMaxConcurrentRedirectedCalls
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $useMaxConcurrentRedirectedCalls = null;

    /**
     * @ElementName maxConcurrentRedirectedCalls
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxConcurrentRedirectedCalls = null;

    /**
     * @ElementName useMaxFindMeFollowMeDepth
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $useMaxFindMeFollowMeDepth = null;

    /**
     * @ElementName maxFindMeFollowMeDepth
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    protected $maxFindMeFollowMeDepth = null;

    /**
     * @ElementName maxRedirectionDepth
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    protected $maxRedirectionDepth = null;

    /**
     * @ElementName useMaxConcurrentFindMeFollowMeInvocations
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $useMaxConcurrentFindMeFollowMeInvocations = null;

    /**
     * @ElementName maxConcurrentFindMeFollowMeInvocations
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxConcurrentFindMeFollowMeInvocations = null;

    /**
     * @ElementName clidPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy|null
     */
    protected $clidPolicy = null;

    /**
     * @ElementName emergencyClidPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy|null
     */
    protected $emergencyClidPolicy = null;

    /**
     * @ElementName allowAlternateNumbersForRedirectingIdentity
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $allowAlternateNumbersForRedirectingIdentity = null;

    /**
     * @ElementName useGroupName
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $useGroupName = null;

    /**
     * @ElementName blockCallingNameForExternalCalls
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $blockCallingNameForExternalCalls = null;

    /**
     * @ElementName enableDialableCallerID
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $enableDialableCallerID = null;

    /**
     * @ElementName allowConfigurableCLIDForRedirectingIdentity
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $allowConfigurableCLIDForRedirectingIdentity = null;

    /**
     * @ElementName allowDepartmentCLIDNameOverride
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $allowDepartmentCLIDNameOverride = null;

    /**
     * @ElementName useUserPhoneListLookupSetting
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $useUserPhoneListLookupSetting = null;

    /**
     * @ElementName enablePhoneListLookup
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $enablePhoneListLookup = null;

    /**
     * @ElementName useMaxConcurrentTerminatingAlertingRequests
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $useMaxConcurrentTerminatingAlertingRequests = null;

    /**
     * @ElementName maxConcurrentTerminatingAlertingRequests
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @MinInclusive 1
     * @MaxInclusive 50
     * @var int|null
     */
    protected $maxConcurrentTerminatingAlertingRequests = null;

    /**
     * @ElementName includeRedirectionsInMaximumNumberOfConcurrentCalls
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $includeRedirectionsInMaximumNumberOfConcurrentCalls = null;

    /**
     * @ElementName routeOverrideDomain
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $routeOverrideDomain = null;

    /**
     * @ElementName routeOverridePrefix
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    protected $routeOverridePrefix = null;

    /**
     * @ElementName allowMobileDNForRedirectingIdentity
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:999
     * @var bool|null
     */
    protected $allowMobileDNForRedirectingIdentity = null;

    /**
     * Getter for useUserCLIDSetting
     *
     * @return bool
     */
    public function getUseUserCLIDSetting()
    {
        return $this->useUserCLIDSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useUserCLIDSetting;
    }

    /**
     * Setter for useUserCLIDSetting
     *
     * @param bool $useUserCLIDSetting
     * @return $this
     */
    public function setUseUserCLIDSetting($useUserCLIDSetting)
    {
        $this->useUserCLIDSetting = $useUserCLIDSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseUserCLIDSetting()
    {
        $this->useUserCLIDSetting = null;
        return $this;
    }

    /**
     * Getter for useUserMediaSetting
     *
     * @return bool
     */
    public function getUseUserMediaSetting()
    {
        return $this->useUserMediaSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useUserMediaSetting;
    }

    /**
     * Setter for useUserMediaSetting
     *
     * @param bool $useUserMediaSetting
     * @return $this
     */
    public function setUseUserMediaSetting($useUserMediaSetting)
    {
        $this->useUserMediaSetting = $useUserMediaSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseUserMediaSetting()
    {
        $this->useUserMediaSetting = null;
        return $this;
    }

    /**
     * Getter for useUserCallLimitsSetting
     *
     * @return bool
     */
    public function getUseUserCallLimitsSetting()
    {
        return $this->useUserCallLimitsSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useUserCallLimitsSetting;
    }

    /**
     * Setter for useUserCallLimitsSetting
     *
     * @param bool $useUserCallLimitsSetting
     * @return $this
     */
    public function setUseUserCallLimitsSetting($useUserCallLimitsSetting)
    {
        $this->useUserCallLimitsSetting = $useUserCallLimitsSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseUserCallLimitsSetting()
    {
        $this->useUserCallLimitsSetting = null;
        return $this;
    }

    /**
     * Getter for useUserDCLIDSetting
     *
     * @return bool
     */
    public function getUseUserDCLIDSetting()
    {
        return $this->useUserDCLIDSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useUserDCLIDSetting;
    }

    /**
     * Setter for useUserDCLIDSetting
     *
     * @param bool $useUserDCLIDSetting
     * @return $this
     */
    public function setUseUserDCLIDSetting($useUserDCLIDSetting)
    {
        $this->useUserDCLIDSetting = $useUserDCLIDSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseUserDCLIDSetting()
    {
        $this->useUserDCLIDSetting = null;
        return $this;
    }

    /**
     * Getter for useUserTranslationRoutingSetting
     *
     * @return bool
     */
    public function getUseUserTranslationRoutingSetting()
    {
        return $this->useUserTranslationRoutingSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useUserTranslationRoutingSetting;
    }

    /**
     * Setter for useUserTranslationRoutingSetting
     *
     * @param bool $useUserTranslationRoutingSetting
     * @return $this
     */
    public function setUseUserTranslationRoutingSetting($useUserTranslationRoutingSetting)
    {
        $this->useUserTranslationRoutingSetting = $useUserTranslationRoutingSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseUserTranslationRoutingSetting()
    {
        $this->useUserTranslationRoutingSetting = null;
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
     * Getter for emergencyClidPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy
     */
    public function getEmergencyClidPolicy()
    {
        return $this->emergencyClidPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyClidPolicy;
    }

    /**
     * Setter for emergencyClidPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy $emergencyClidPolicy
     * @return $this
     */
    public function setEmergencyClidPolicy(\CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy $emergencyClidPolicy)
    {
        $this->emergencyClidPolicy = $emergencyClidPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmergencyClidPolicy()
    {
        $this->emergencyClidPolicy = null;
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
     * Getter for useUserPhoneListLookupSetting
     *
     * @return bool
     */
    public function getUseUserPhoneListLookupSetting()
    {
        return $this->useUserPhoneListLookupSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useUserPhoneListLookupSetting;
    }

    /**
     * Setter for useUserPhoneListLookupSetting
     *
     * @param bool $useUserPhoneListLookupSetting
     * @return $this
     */
    public function setUseUserPhoneListLookupSetting($useUserPhoneListLookupSetting)
    {
        $this->useUserPhoneListLookupSetting = $useUserPhoneListLookupSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseUserPhoneListLookupSetting()
    {
        $this->useUserPhoneListLookupSetting = null;
        return $this;
    }

    /**
     * Getter for enablePhoneListLookup
     *
     * @return bool
     */
    public function getEnablePhoneListLookup()
    {
        return $this->enablePhoneListLookup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enablePhoneListLookup;
    }

    /**
     * Setter for enablePhoneListLookup
     *
     * @param bool $enablePhoneListLookup
     * @return $this
     */
    public function setEnablePhoneListLookup($enablePhoneListLookup)
    {
        $this->enablePhoneListLookup = $enablePhoneListLookup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnablePhoneListLookup()
    {
        $this->enablePhoneListLookup = null;
        return $this;
    }

    /**
     * Getter for useMaxConcurrentTerminatingAlertingRequests
     *
     * @return bool
     */
    public function getUseMaxConcurrentTerminatingAlertingRequests()
    {
        return $this->useMaxConcurrentTerminatingAlertingRequests instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMaxConcurrentTerminatingAlertingRequests;
    }

    /**
     * Setter for useMaxConcurrentTerminatingAlertingRequests
     *
     * @param bool $useMaxConcurrentTerminatingAlertingRequests
     * @return $this
     */
    public function setUseMaxConcurrentTerminatingAlertingRequests($useMaxConcurrentTerminatingAlertingRequests)
    {
        $this->useMaxConcurrentTerminatingAlertingRequests = $useMaxConcurrentTerminatingAlertingRequests;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMaxConcurrentTerminatingAlertingRequests()
    {
        $this->useMaxConcurrentTerminatingAlertingRequests = null;
        return $this;
    }

    /**
     * Getter for maxConcurrentTerminatingAlertingRequests
     *
     * @return int
     */
    public function getMaxConcurrentTerminatingAlertingRequests()
    {
        return $this->maxConcurrentTerminatingAlertingRequests instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConcurrentTerminatingAlertingRequests;
    }

    /**
     * Setter for maxConcurrentTerminatingAlertingRequests
     *
     * @param int $maxConcurrentTerminatingAlertingRequests
     * @return $this
     */
    public function setMaxConcurrentTerminatingAlertingRequests($maxConcurrentTerminatingAlertingRequests)
    {
        $this->maxConcurrentTerminatingAlertingRequests = $maxConcurrentTerminatingAlertingRequests;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxConcurrentTerminatingAlertingRequests()
    {
        $this->maxConcurrentTerminatingAlertingRequests = null;
        return $this;
    }

    /**
     * Getter for includeRedirectionsInMaximumNumberOfConcurrentCalls
     *
     * @return bool
     */
    public function getIncludeRedirectionsInMaximumNumberOfConcurrentCalls()
    {
        return $this->includeRedirectionsInMaximumNumberOfConcurrentCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeRedirectionsInMaximumNumberOfConcurrentCalls;
    }

    /**
     * Setter for includeRedirectionsInMaximumNumberOfConcurrentCalls
     *
     * @param bool $includeRedirectionsInMaximumNumberOfConcurrentCalls
     * @return $this
     */
    public function setIncludeRedirectionsInMaximumNumberOfConcurrentCalls($includeRedirectionsInMaximumNumberOfConcurrentCalls)
    {
        $this->includeRedirectionsInMaximumNumberOfConcurrentCalls = $includeRedirectionsInMaximumNumberOfConcurrentCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeRedirectionsInMaximumNumberOfConcurrentCalls()
    {
        $this->includeRedirectionsInMaximumNumberOfConcurrentCalls = null;
        return $this;
    }

    /**
     * Getter for routeOverrideDomain
     *
     * @return string
     */
    public function getRouteOverrideDomain()
    {
        return $this->routeOverrideDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeOverrideDomain;
    }

    /**
     * Setter for routeOverrideDomain
     *
     * @param string $routeOverrideDomain
     * @return $this
     */
    public function setRouteOverrideDomain($routeOverrideDomain)
    {
        $this->routeOverrideDomain = $routeOverrideDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteOverrideDomain()
    {
        $this->routeOverrideDomain = null;
        return $this;
    }

    /**
     * Getter for routeOverridePrefix
     *
     * @return string
     */
    public function getRouteOverridePrefix()
    {
        return $this->routeOverridePrefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeOverridePrefix;
    }

    /**
     * Setter for routeOverridePrefix
     *
     * @param string $routeOverridePrefix
     * @return $this
     */
    public function setRouteOverridePrefix($routeOverridePrefix)
    {
        $this->routeOverridePrefix = $routeOverridePrefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteOverridePrefix()
    {
        $this->routeOverridePrefix = null;
        return $this;
    }

    /**
     * Getter for allowMobileDNForRedirectingIdentity
     *
     * @return bool
     */
    public function getAllowMobileDNForRedirectingIdentity()
    {
        return $this->allowMobileDNForRedirectingIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowMobileDNForRedirectingIdentity;
    }

    /**
     * Setter for allowMobileDNForRedirectingIdentity
     *
     * @param bool $allowMobileDNForRedirectingIdentity
     * @return $this
     */
    public function setAllowMobileDNForRedirectingIdentity($allowMobileDNForRedirectingIdentity)
    {
        $this->allowMobileDNForRedirectingIdentity = $allowMobileDNForRedirectingIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowMobileDNForRedirectingIdentity()
    {
        $this->allowMobileDNForRedirectingIdentity = null;
        return $this;
    }
}

