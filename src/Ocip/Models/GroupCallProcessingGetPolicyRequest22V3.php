<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallProcessingGetPolicyRequest22V3
 *
 * Request the group level data associated with Call Processing Policy.
 *         The response is either a GroupCallProcessingGetPolicyResponse22V3 or an
 *         ErrorResponse.
 *
 *         The useGroupCLIDSetting attribute controls the CLID settings 
 *         (clidPolicy,enterpriseCallsCLIDPolicy, groupCallsCLIDPolicy, emergencyClidPolicy, allowAlternateNumbersForRedirectingIdentity, useGroupName, allowDepartmentCLIDNameOverride)
 *
 *         The useGroupMediaSetting attribute controls the Media settings 
 *         (medisPolicySelection, supportedMediaSetName)
 *
 *         The useGroupCallLimitsSetting attribute controls the Call Limits settings 
 *         (useMaxSimultaneousCalls, maxSimultaneousCalls, 
 *         useMaxSimultaneousVideoCalls, maxSimultaneousVideoCalls, useMaxCallTimeForAnsweredCalls, 
 *         maxCallTimeForAnsweredCallsMinutes, useMaxCallTimeForUnansweredCalls, maxCallTimeForUnansweredCallsMinutes, 
 *         useMaxConcurrentRedirectedCalls, useMaxFindMeFollowMeDepth, maxRedirectionDepth, 
 *         useMaxConcurrentFindMeFollowMeInvocations, maxConcurrentFindMeFollowMeInvocations, 
 *         useMaxConcurrentTerminatingAlertingRequests, maxConcurrentTerminatingAlertingRequests)
 *
 *         The useGroupTranslationRoutingSetting attribute controls the routing and translation settings 
 *         (networkUsageSelection, enforceGroupCallingLineIdentityRestriction, 
 *         allowEnterpriseGroupCallTypingForPrivateDialingPlan, allowEnterpriseGroupCallTypingForPublicDialingPlan, overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan, enableEnterpriseExtensionDialing)
 *
 * @see GroupCallProcessingGetPolicyResponse22V3
 * @see ErrorResponse
 * @see useMaxConcurrentTerminatingAlertingRequests
 * @see maxConcurrentTerminatingAlertingRequests
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:2548","type":"sequence"}]
 */
class GroupCallProcessingGetPolicyRequest22V3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2548
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2548
     * @MinLength 1
     * @MaxLength 30
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

