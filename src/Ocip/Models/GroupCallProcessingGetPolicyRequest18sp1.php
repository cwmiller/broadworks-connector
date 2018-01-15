<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallProcessingGetPolicyRequest18sp1
 *
 * Request the group level data associated with Call Processing Policy.
 *         The response is either a GroupCallProcessingGetPolicyResponse18sp1 or an
 *         ErrorResponse.
 *
 *         The useGroupCLIDSetting attribute controls the CLID settings 
 *         (clidPolicy,enterpriseCallsCLIDPolicy, groupCallsCLIDPolicy,
 * emergencyClidPolicy, allowAlternateNumbersForRedirectingIdentity, useGroupName,
 * allowDepartmentCLIDNameOverride)
 *
 *         The useGroupMediaSetting attribute controls the Media settings 
 *         (medisPolicySelection, supportedMediaSetName)
 *
 *         The useGroupCallLimitsSetting attribute controls the Call Limits
 * settings 
 *         (useMaxSimultaneousCalls, maxSimultaneousCalls, 
 *         useMaxSimultaneousVideoCalls, maxSimultaneousVideoCalls,
 * useMaxCallTimeForAnsweredCalls, maxCallTimeForAnsweredCallsMinutes,
 * useMaxCallTimeForUnansweredCalls, maxCallTimeForUnansweredCallsMinutes,
 * useMaxConcurrentRedirectedCalls, useMaxFindMeFollowMeDepth, maxRedirectionDepth,
 * useMaxConcurrentFindMeFollowMeInvocations,
 * maxConcurrentFindMeFollowMeInvocations)
 *
 *         The useGroupTranslationRoutingSetting attribute controls the routing and
 * translation settings 
 *         (networkUsageSelection, enforceGroupCallingLineIdentityRestriction, 
 *         allowEnterpriseGroupCallTypingForPrivateDialingPlan,
 * allowEnterpriseGroupCallTypingForPublicDialingPlan,
 * overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan,
 * enableEnterpriseExtensionDialing)
 *
 *         The following elements are only used in AS data mode:
 *           useGroupDCLIDSetting
 *           enableDialableCallerID
 *           allowDepartmentCLIDNameOverride
 *           enterpriseCallsCLIDPolicy
 *           groupCallsCLIDPolicy
 *  
 *         Replaced by: GroupCallProcessingGetPolicyRequest19sp1
 */
class GroupCallProcessingGetPolicyRequest18sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


}

