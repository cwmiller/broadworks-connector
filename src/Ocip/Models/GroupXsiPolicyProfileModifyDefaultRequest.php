<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupXsiPolicyProfileModifyDefaultRequest
 *
 * Modifies the default Xsi policy profile for a group.
 *         It can only modify the user level default Xsi policy profile.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:8731","type":"sequence"}]
 */
class GroupXsiPolicyProfileModifyDefaultRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:8731
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:8731
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName userDefaultXsiPolicyProfile
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:8731
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $userDefaultXsiPolicyProfile = null;

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
     * Getter for userDefaultXsiPolicyProfile
     *
     * @return string
     */
    public function getUserDefaultXsiPolicyProfile()
    {
        return $this->userDefaultXsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userDefaultXsiPolicyProfile;
    }

    /**
     * Setter for userDefaultXsiPolicyProfile
     *
     * @param string $userDefaultXsiPolicyProfile
     * @return $this
     */
    public function setUserDefaultXsiPolicyProfile($userDefaultXsiPolicyProfile)
    {
        $this->userDefaultXsiPolicyProfile = $userDefaultXsiPolicyProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserDefaultXsiPolicyProfile()
    {
        $this->userDefaultXsiPolicyProfile = null;
        return $this;
    }
}

