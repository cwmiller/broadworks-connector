<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallProcessingGetPolicyResponse17sp4
 *
 * Response to UserCallProcessingGetPolicyRequest17sp4.
 *         The useUserCLIDSetting attribute controls the CLID settings 
 *         (clidPolicy, emergencyClidPolicy,
 * allowAlternateNumbersForRedirectingIdentity, useGroupName,
 * allowConfigurableCLIDForRedirectingIdentity)
 *         
 *           The useUserMediaSetting attribute controls the Media settings 
 *           (medisPolicySelection, supportedMediaSetName)
 *           
 *           The useUserCallLimitsSetting attribute controls the Call Limits
 * setting 
 *           (useMaxSimultaneousCalls, maxSimultaneousCalls,
 * useMaxSimultaneousVideoCalls, maxSimultaneousVideoCalls,
 * useMaxCallTimeForAnsweredCalls, maxCallTimeForAnsweredCallsMinutes,
 * useMaxCallTimeForUnansweredCalls, maxCallTimeForUnansweredCallsMinutes,
 * useMaxConcurrentRedirectedCalls, useMaxFindMeFollowMeDepth, maxRedirectionDepth,
 * useMaxConcurrentFindMeFollowMeInvocations,
 * maxConcurrentFindMeFollowMeInvocations)
 *        
 *           The useUserDCLIDSetting controls the Dialable Caller ID settings
 * (enableDialableCallerID)
 *           The following elements are only used in AS data mode:
 *            useUserDCLIDSetting
 *            enableDialableCallerID
 *            allowConfigurableCLIDForRedirectingIdentity
 *           Replaced by: UserCallProcessingGetPolicyResponse18
 */
class UserCallProcessingGetPolicyResponse17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useUserCLIDSetting
     * @var bool|null
     */
    private $useUserCLIDSetting = null;

    /**
     * @ElementName useUserMediaSetting
     * @var bool|null
     */
    private $useUserMediaSetting = null;

    /**
     * @ElementName useUserCallLimitsSetting
     * @var bool|null
     */
    private $useUserCallLimitsSetting = null;

    /**
     * @ElementName useUserDCLIDSetting
     * @var bool|null
     */
    private $useUserDCLIDSetting = null;

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
     * Getter for useUserCLIDSetting
     *
     * @ElementName useUserCLIDSetting
     * @return bool|null
     */
    public function getUseUserCLIDSetting()
    {
        return $this->useUserCLIDSetting;
    }

    /**
     * Setter for useUserCLIDSetting
     *
     * @ElementName useUserCLIDSetting
     * @param bool|null $useUserCLIDSetting
     * @return $this
     */
    public function setUseUserCLIDSetting($useUserCLIDSetting)
    {
        $this->useUserCLIDSetting = $useUserCLIDSetting;
        return $this;
    }

    /**
     * Getter for useUserMediaSetting
     *
     * @ElementName useUserMediaSetting
     * @return bool|null
     */
    public function getUseUserMediaSetting()
    {
        return $this->useUserMediaSetting;
    }

    /**
     * Setter for useUserMediaSetting
     *
     * @ElementName useUserMediaSetting
     * @param bool|null $useUserMediaSetting
     * @return $this
     */
    public function setUseUserMediaSetting($useUserMediaSetting)
    {
        $this->useUserMediaSetting = $useUserMediaSetting;
        return $this;
    }

    /**
     * Getter for useUserCallLimitsSetting
     *
     * @ElementName useUserCallLimitsSetting
     * @return bool|null
     */
    public function getUseUserCallLimitsSetting()
    {
        return $this->useUserCallLimitsSetting;
    }

    /**
     * Setter for useUserCallLimitsSetting
     *
     * @ElementName useUserCallLimitsSetting
     * @param bool|null $useUserCallLimitsSetting
     * @return $this
     */
    public function setUseUserCallLimitsSetting($useUserCallLimitsSetting)
    {
        $this->useUserCallLimitsSetting = $useUserCallLimitsSetting;
        return $this;
    }

    /**
     * Getter for useUserDCLIDSetting
     *
     * @ElementName useUserDCLIDSetting
     * @return bool|null
     */
    public function getUseUserDCLIDSetting()
    {
        return $this->useUserDCLIDSetting;
    }

    /**
     * Setter for useUserDCLIDSetting
     *
     * @ElementName useUserDCLIDSetting
     * @param bool|null $useUserDCLIDSetting
     * @return $this
     */
    public function setUseUserDCLIDSetting($useUserDCLIDSetting)
    {
        $this->useUserDCLIDSetting = $useUserDCLIDSetting;
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


}

