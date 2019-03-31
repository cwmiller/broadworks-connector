<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServiceGetAuthorizationRequest
 *
 * Requests the service provider's service authorization information for a specific service or service pack.
 *         The response is either ServiceProviderServiceGetAuthorizationResponse or ErrorResponse.
 *
 * @see ServiceProviderServiceGetAuthorizationResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:5128","type":"sequence","children":[{"id":"f1088f4c5ceb30d524d2ba0f8097c393:5130","type":"choice"}]}]
 */
class ServiceProviderServiceGetAuthorizationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5128
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName userServiceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5130
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService|null
     */
    private $userServiceName = null;

    /**
     * @ElementName groupServiceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupService
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5130
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupService|null
     */
    private $groupServiceName = null;

    /**
     * @ElementName servicePackName
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5130
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $servicePackName = null;

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

