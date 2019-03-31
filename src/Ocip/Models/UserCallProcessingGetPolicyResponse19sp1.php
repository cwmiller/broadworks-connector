<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallProcessingGetPolicyResponse19sp1
 *
 * Response to UserCallProcessingGetPolicyRequest19sp1.
 *                 The useUserCLIDSetting attribute controls the CLID settings
 *                 (clidPolicy, emergencyClidPolicy, allowAlternateNumbersForRedirectingIdentity, useGroupName,
 *                 allowConfigurableCLIDForRedirectingIdentity, allowDepartmentCLIDNameOverride)
 *
 *                 The useUserMediaSetting attribute controls the Media settings
 *                 (medisPolicySelection, supportedMediaSetName)
 *
 *                 The useUserCallLimitsSetting attribute controls the Call Limits setting
 *                 (useMaxSimultaneousCalls, maxSimultaneousCalls, useMaxSimultaneousVideoCalls, maxSimultaneousVideoCalls,
 *                 useMaxCallTimeForAnsweredCalls, maxCallTimeForAnsweredCallsMinutes, useMaxCallTimeForUnansweredCalls,
 *                 maxCallTimeForUnansweredCallsMinutes, useMaxConcurrentRedirectedCalls, useMaxFindMeFollowMeDepth,
 *                 maxRedirectionDepth, useMaxConcurrentFindMeFollowMeInvocations, maxConcurrentFindMeFollowMeInvocations)
 *                 The following elements are only used in AS data mode :
 *                 useUserDCLIDSetting
 *                 enableDialableCallerID
 *                 allowConfigurableCLIDForRedirectingIdentity
 *                 allowDepartmentCLIDNameOverride
 *
 *                 Replaced by: UserCallProcessingGetPolicyResponse21sp1
 *
 * @see UserCallProcessingGetPolicyRequest19sp1
 * @see UserCallProcessingGetPolicyResponse21sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:40344","type":"sequence"}]
 */
class UserCallProcessingGetPolicyResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useUserCLIDSetting
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $useUserCLIDSetting = null;

    /**
     * @ElementName useUserMediaSetting
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $useUserMediaSetting = null;

    /**
     * @ElementName useUserCallLimitsSetting
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $useUserCallLimitsSetting = null;

    /**
     * @ElementName useUserDCLIDSetting
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $useUserDCLIDSetting = null;

    /**
     * @ElementName useMaxSimultaneousCalls
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $useMaxSimultaneousCalls = null;

    /**
     * @ElementName maxSimultaneousCalls
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    private $maxSimultaneousCalls = null;

    /**
     * @ElementName useMaxSimultaneousVideoCalls
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $useMaxSimultaneousVideoCalls = null;

    /**
     * @ElementName maxSimultaneousVideoCalls
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    private $maxSimultaneousVideoCalls = null;

    /**
     * @ElementName useMaxCallTimeForAnsweredCalls
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $useMaxCallTimeForAnsweredCalls = null;

    /**
     * @ElementName maxCallTimeForAnsweredCallsMinutes
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @MinInclusive 3
     * @MaxInclusive 2880
     * @var int|null
     */
    private $maxCallTimeForAnsweredCallsMinutes = null;

    /**
     * @ElementName useMaxCallTimeForUnansweredCalls
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $useMaxCallTimeForUnansweredCalls = null;

    /**
     * @ElementName maxCallTimeForUnansweredCallsMinutes
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @MinInclusive 1
     * @MaxInclusive 2880
     * @var int|null
     */
    private $maxCallTimeForUnansweredCallsMinutes = null;

    /**
     * @ElementName mediaPolicySelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection|null
     */
    private $mediaPolicySelection = null;

    /**
     * @ElementName supportedMediaSetName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $supportedMediaSetName = null;

    /**
     * @ElementName useMaxConcurrentRedirectedCalls
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $useMaxConcurrentRedirectedCalls = null;

    /**
     * @ElementName maxConcurrentRedirectedCalls
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    private $maxConcurrentRedirectedCalls = null;

    /**
     * @ElementName useMaxFindMeFollowMeDepth
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $useMaxFindMeFollowMeDepth = null;

    /**
     * @ElementName maxFindMeFollowMeDepth
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    private $maxFindMeFollowMeDepth = null;

    /**
     * @ElementName maxRedirectionDepth
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    private $maxRedirectionDepth = null;

    /**
     * @ElementName useMaxConcurrentFindMeFollowMeInvocations
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $useMaxConcurrentFindMeFollowMeInvocations = null;

    /**
     * @ElementName maxConcurrentFindMeFollowMeInvocations
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    private $maxConcurrentFindMeFollowMeInvocations = null;

    /**
     * @ElementName clidPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy|null
     */
    private $clidPolicy = null;

    /**
     * @ElementName emergencyClidPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy|null
     */
    private $emergencyClidPolicy = null;

    /**
     * @ElementName allowAlternateNumbersForRedirectingIdentity
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $allowAlternateNumbersForRedirectingIdentity = null;

    /**
     * @ElementName useGroupName
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $useGroupName = null;

    /**
     * @ElementName blockCallingNameForExternalCalls
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $blockCallingNameForExternalCalls = null;

    /**
     * @ElementName enableDialableCallerID
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $enableDialableCallerID = null;

    /**
     * @ElementName allowConfigurableCLIDForRedirectingIdentity
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $allowConfigurableCLIDForRedirectingIdentity = null;

    /**
     * @ElementName allowDepartmentCLIDNameOverride
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40344
     * @var bool|null
     */
    private $allowDepartmentCLIDNameOverride = null;

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


}

