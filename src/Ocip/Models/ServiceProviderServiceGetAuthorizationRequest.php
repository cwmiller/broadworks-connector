<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServiceGetAuthorizationRequest
 *
 * Requests the service provider's service authorization information for a specific service or service pack.
 *         The response is either ServiceProviderServiceGetAuthorizationResponse or ErrorResponse.
 *         
 *         The following element is used in AS mode and triggers an ErrorResponse in XS data mode:
 *           servicePackName
 *
 * @see ServiceProviderServiceGetAuthorizationResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:6026","type":"sequence","children":[{"id":"e19a9072c2dad499e9f28837da5768db:6028","type":"choice"}]}]
 */
class ServiceProviderServiceGetAuthorizationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:6026
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName userServiceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Group e19a9072c2dad499e9f28837da5768db:6028
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService|null
     */
    protected $userServiceName = null;

    /**
     * @ElementName groupServiceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupService
     * @Group e19a9072c2dad499e9f28837da5768db:6028
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupService|null
     */
    protected $groupServiceName = null;

    /**
     * @ElementName servicePackName
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:6028
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $servicePackName = null;

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
     * Getter for userServiceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService
     */
    public function getUserServiceName()
    {
        return $this->userServiceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServiceName;
    }

    /**
     * Setter for userServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $userServiceName
     * @return $this
     */
    public function setUserServiceName(\CWM\BroadWorksConnector\Ocip\Models\UserService $userServiceName)
    {
        $this->userServiceName = $userServiceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserServiceName()
    {
        $this->userServiceName = null;
        return $this;
    }

    /**
     * Getter for groupServiceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupService
     */
    public function getGroupServiceName()
    {
        return $this->groupServiceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupServiceName;
    }

    /**
     * Setter for groupServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupService $groupServiceName
     * @return $this
     */
    public function setGroupServiceName(\CWM\BroadWorksConnector\Ocip\Models\GroupService $groupServiceName)
    {
        $this->groupServiceName = $groupServiceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupServiceName()
    {
        $this->groupServiceName = null;
        return $this;
    }

    /**
     * Getter for servicePackName
     *
     * @return string
     */
    public function getServicePackName()
    {
        return $this->servicePackName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @param string $servicePackName
     * @return $this
     */
    public function setServicePackName($servicePackName)
    {
        $this->servicePackName = $servicePackName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackName()
    {
        $this->servicePackName = null;
        return $this;
    }
}

