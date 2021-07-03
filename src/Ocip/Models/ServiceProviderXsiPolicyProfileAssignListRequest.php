<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderXsiPolicyProfileAssignListRequest
 *
 * Assign a list of group and user Xsi policy profile to a service provider.
 *         At service provider level, only one service provider Xsi policy profile can be assigned to service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:7045","type":"sequence"}]
 */
class ServiceProviderXsiPolicyProfileAssignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:7045
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName spXsiPolicyProfile
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:7045
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $spXsiPolicyProfile = null;

    /**
     * @ElementName groupXsiPolicyProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:7045
     * @var \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry|null
     */
    private $groupXsiPolicyProfile = null;

    /**
     * @ElementName userXsiPolicyProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:7045
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
     * Getter for spXsiPolicyProfile
     *
     * @return string
     */
    public function getSpXsiPolicyProfile()
    {
        return $this->spXsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->spXsiPolicyProfile;
    }

    /**
     * Setter for spXsiPolicyProfile
     *
     * @param string $spXsiPolicyProfile
     * @return $this
     */
    public function setSpXsiPolicyProfile($spXsiPolicyProfile)
    {
        $this->spXsiPolicyProfile = $spXsiPolicyProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSpXsiPolicyProfile()
    {
        $this->spXsiPolicyProfile = null;
        return $this;
    }

    /**
     * Getter for groupXsiPolicyProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry
     */
    public function getGroupXsiPolicyProfile()
    {
        return $this->groupXsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupXsiPolicyProfile;
    }

    /**
     * Setter for groupXsiPolicyProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry $groupXsiPolicyProfile
     * @return $this
     */
    public function setGroupXsiPolicyProfile(\CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileAssignEntry $groupXsiPolicyProfile)
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

