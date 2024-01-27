<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallProcessingGetPolicyRequest22
 *
 * Request the group level data associated with Call Processing Policy.
 *         The response is either a GroupCallProcessingGetPolicyResponse22 or an
 *         ErrorResponse.
 *         The useGroupCLIDSetting attribute controls the CLID settings 
 *         (clidPolicy,enterpriseCallsCLIDPolicy, groupCallsCLIDPolicy, emergencyClidPolicy, allowAlternateNumbersForRedirectingIdentity, useGroupName, allowDepartmentCLIDNameOverride)
 *         The useGroupMediaSetting attribute controls the Media settings 
 *         (medisPolicySelection, supportedMediaSetName)
 *         The useGroupCallLimitsSetting attribute controls the Call Limits settings 
 *         (useMaxSimultaneousCalls, maxSimultaneousCalls, 
 *         useMaxSimultaneousVideoCalls, maxSimultaneousVideoCalls, useMaxCallTimeForAnsweredCalls, 
 *         maxCallTimeForAnsweredCallsMinutes, useMaxCallTimeForUnansweredCalls, maxCallTimeForUnansweredCallsMinutes, 
 *         useMaxConcurrentRedirectedCalls, useMaxFindMeFollowMeDepth, maxRedirectionDepth, 
 *         useMaxConcurrentFindMeFollowMeInvocations, maxConcurrentFindMeFollowMeInvocations, 
 *         useMaxConcurrentTerminatingAlertingRequests, maxConcurrentTerminatingAlertingRequests)
 *         The useGroupTranslationRoutingSetting attribute controls the routing and translation settings 
 *         (networkUsageSelection, enforceGroupCallingLineIdentityRestriction, 
 *         allowEnterpriseGroupCallTypingForPrivateDialingPlan, allowEnterpriseGroupCallTypingForPublicDialingPlan, overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan, enableEnterpriseExtensionDialing)
 *         Replaced by: GroupCallProcessingGetPolicyRequest22V2 in AS data mode.
 *
 * @see GroupCallProcessingGetPolicyResponse22
 * @see ErrorResponse
 * @see useMaxConcurrentTerminatingAlertingRequests
 * @see maxConcurrentTerminatingAlertingRequests
 * @see GroupCallProcessingGetPolicyRequest22V2
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:2325","type":"sequence"}]
 */
class GroupCallProcessingGetPolicyRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:2325
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:2325
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

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

