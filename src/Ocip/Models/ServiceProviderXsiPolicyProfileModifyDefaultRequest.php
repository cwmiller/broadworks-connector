<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderXsiPolicyProfileModifyDefaultRequest
 *
 * Modifies the default Xsi policy profile for a service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:7216","type":"sequence"}]
 */
class ServiceProviderXsiPolicyProfileModifyDefaultRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:7216
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupDefaultXsiPolicyProfile
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:7216
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $groupDefaultXsiPolicyProfile = null;

    /**
     * @ElementName userDefaultXsiPolicyProfile
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:7216
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
     * Getter for groupDefaultXsiPolicyProfile
     *
     * @return string
     */
    public function getGroupDefaultXsiPolicyProfile()
    {
        return $this->groupDefaultXsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupDefaultXsiPolicyProfile;
    }

    /**
     * Setter for groupDefaultXsiPolicyProfile
     *
     * @param string $groupDefaultXsiPolicyProfile
     * @return $this
     */
    public function setGroupDefaultXsiPolicyProfile($groupDefaultXsiPolicyProfile)
    {
        $this->groupDefaultXsiPolicyProfile = $groupDefaultXsiPolicyProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupDefaultXsiPolicyProfile()
    {
        $this->groupDefaultXsiPolicyProfile = null;
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

