<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallProcessingGetPolicyRequest15sp2
 *
 * Request the group level data associated with Call Processing Policy.
 *                 The response is either a GroupCallProcessingGetPolicyResponse15sp2 or an
 *                 ErrorResponse.
 *                 The useGroupCLIDSetting attribute controls the CLID settings
 *                 (clidPolicy, emergencyClidPolicy, allowAlternateNumbersForRedirectingIdentity, useGroupName)
 *                 The useGroupMediaSetting attribute controls the Media settings
 *                 (medisPolicySelection, supportedMediaSetName)
 *                 The useGroupCallLimitsSetting attribute controls the Call Limits settings
 *                 (useMaxSimultaneousCalls, maxSimultaneousCalls,
 *                 useMaxSimultaneousVideoCalls, maxSimultaneousVideoCalls, useMaxCallTimeForAnsweredCalls,
 *                 maxCallTimeForAnsweredCallsMinutes, useMaxCallTimeForUnansweredCalls,
 *                 maxCallTimeForUnansweredCallsMinutes,
 *                 useMaxConcurrentRedirectedCalls, useMaxFindMeFollowMeDepth, maxRedirectionDepth,
 *                 useMaxConcurrentFindMeFollowMeInvocations, maxConcurrentFindMeFollowMeInvocations)
 *                 The useGroupTranslationRoutingSetting attribute controls the routing and translation settings
 *                 (networkUsageSelection, enforceGroupCallingLineIdentityRestriction,
 *                 allowEnterpriseGroupCallTypingForPrivateDialingPlan, allowEnterpriseGroupCallTypingForPublicDialingPlan,
 *                 overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan, enableEnterpriseExtensionDialing)
 *
 * @see GroupCallProcessingGetPolicyResponse15sp2
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:8719","type":"sequence"}]
 */
class GroupCallProcessingGetPolicyRequest15sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8719
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8719
     * @var string|null
     */
    private $groupId = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }


}

