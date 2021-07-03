<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderXsiPolicyProfileUnassignListRequest
 *
 * Unassign a list of Xsi policy profile.
 *         Unassign a list of Xsi policy profile.
 *         Only group and user level Xsi policy profile can be unassigned.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:7158","type":"sequence"}]
 */
class ServiceProviderXsiPolicyProfileUnassignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:7158
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupXsiPolicyProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileUnassignEntry
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:7158
     * @var \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileUnassignEntry|null
     */
    private $groupXsiPolicyProfile = null;

    /**
     * @ElementName userXsiPolicyProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileUnassignEntry
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:7158
     * @var \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileUnassignEntry|null
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
     * Getter for groupXsiPolicyProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileUnassignEntry
     */
    public function getGroupXsiPolicyProfile()
    {
        return $this->groupXsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupXsiPolicyProfile;
    }

    /**
     * Setter for groupXsiPolicyProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileUnassignEntry $groupXsiPolicyProfile
     * @return $this
     */
    public function setGroupXsiPolicyProfile(\CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileUnassignEntry $groupXsiPolicyProfile)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileUnassignEntry
     */
    public function getUserXsiPolicyProfile()
    {
        return $this->userXsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userXsiPolicyProfile;
    }

    /**
     * Setter for userXsiPolicyProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileUnassignEntry $userXsiPolicyProfile
     * @return $this
     */
    public function setUserXsiPolicyProfile(\CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileUnassignEntry $userXsiPolicyProfile)
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

