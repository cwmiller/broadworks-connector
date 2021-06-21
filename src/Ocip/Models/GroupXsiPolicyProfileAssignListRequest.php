<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupXsiPolicyProfileAssignListRequest
 *
 * Assign a group level Xsi policy profile and a list of user Xsi policy profiles
 *         to a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:8873","type":"sequence"}]
 */
class GroupXsiPolicyProfileAssignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8873
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8873
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName groupXsiPolicyProfile
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8873
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $groupXsiPolicyProfile = null;

    /**
     * @ElementName userXsiPolicyProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8873
     * @var \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry|null
     */
    private $userXsiPolicyProfile = null;

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

    /**
     * Getter for groupXsiPolicyProfile
     *
     * @return string
     */
    public function getGroupXsiPolicyProfile()
    {
        return $this->groupXsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupXsiPolicyProfile;
    }

    /**
     * Setter for groupXsiPolicyProfile
     *
     * @param string $groupXsiPolicyProfile
     * @return $this
     */
    public function setGroupXsiPolicyProfile($groupXsiPolicyProfile)
    {
        $this->groupXsiPolicyProfile = $groupXsiPolicyProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupXsiPolicyProfile()
    {
        $this->groupXsiPolicyProfile = null;
        return $this;
    }

    /**
     * Getter for userXsiPolicyProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry
     */
    public function getUserXsiPolicyProfile()
    {
        return $this->userXsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userXsiPolicyProfile;
    }

    /**
     * Setter for userXsiPolicyProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry $userXsiPolicyProfile
     * @return $this
     */
    public function setUserXsiPolicyProfile(\CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry $userXsiPolicyProfile)
    {
        $this->userXsiPolicyProfile = $userXsiPolicyProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserXsiPolicyProfile()
    {
        $this->userXsiPolicyProfile = null;
        return $this;
    }


}

