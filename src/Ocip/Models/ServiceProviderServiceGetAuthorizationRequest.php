<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServiceGetAuthorizationRequest
 *
 * Requests the service provider's service authorization information for a specific
 * service or service pack.
 *         The response is either ServiceProviderServiceGetAuthorizationResponse or
 * ErrorResponse.
 *
 * @see ServiceProviderServiceGetAuthorizationResponse
 * @see ErrorResponse
 */
class ServiceProviderServiceGetAuthorizationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName userServiceName
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService|null
     */
    private $userServiceName = null;

    /**
     * @ElementName groupServiceName
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupService|null
     */
    private $groupServiceName = null;

    /**
     * @ElementName servicePackName
     * @var string|null
     */
    private $servicePackName = null;

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
     * Getter for userServiceName
     *
     * @ElementName userServiceName
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService|null
     */
    public function getUserServiceName()
    {
        return $this->userServiceName;
    }

    /**
     * Setter for userServiceName
     *
     * @ElementName userServiceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService|null $userServiceName
     * @return $this
     */
    public function setUserServiceName(\CWM\BroadWorksConnector\Ocip\Models\UserService $userServiceName)
    {
        $this->userServiceName = $userServiceName;
        return $this;
    }

    /**
     * Getter for groupServiceName
     *
     * @ElementName groupServiceName
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupService|null
     */
    public function getGroupServiceName()
    {
        return $this->groupServiceName;
    }

    /**
     * Setter for groupServiceName
     *
     * @ElementName groupServiceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupService|null $groupServiceName
     * @return $this
     */
    public function setGroupServiceName(\CWM\BroadWorksConnector\Ocip\Models\GroupService $groupServiceName)
    {
        $this->groupServiceName = $groupServiceName;
        return $this;
    }

    /**
     * Getter for servicePackName
     *
     * @ElementName servicePackName
     * @return string|null
     */
    public function getServicePackName()
    {
        return $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @ElementName servicePackName
     * @param string|null $servicePackName
     * @return $this
     */
    public function setServicePackName($servicePackName)
    {
        $this->servicePackName = $servicePackName;
        return $this;
    }


}

