<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServiceModifyAuthorizationListRequest
 *
 * Requests to change the service provider's service authorization status.
 *         The boolean flags are used to authorize or unauthorize services.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderServiceModifyAuthorizationListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupServiceAuthorization
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorization[]
     */
    private $groupServiceAuthorization = array(
        
    );

    /**
     * @ElementName userServiceAuthorization
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserServiceAuthorization[]
     */
    private $userServiceAuthorization = array(
        
    );

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
     * Getter for groupServiceAuthorization
     *
     * @ElementName groupServiceAuthorization
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorization[]
     */
    public function getGroupServiceAuthorization()
    {
        return $this->groupServiceAuthorization;
    }

    /**
     * Setter for groupServiceAuthorization
     *
     * @ElementName groupServiceAuthorization
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorization[] $groupServiceAuthorization
     * @return $this
     */
    public function setGroupServiceAuthorization(array $groupServiceAuthorization)
    {
        $this->groupServiceAuthorization = $groupServiceAuthorization;
        return $this;
    }

    /**
     * Adder for groupServiceAuthorization
     *
     * @ElementName groupServiceAuthorization
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorization $groupServiceAuthorization
     * @return $this
     */
    public function addGroupServiceAuthorization($groupServiceAuthorization)
    {
        $this->groupServiceAuthorization []= $groupServiceAuthorization;
        return $this;
    }

    /**
     * Getter for userServiceAuthorization
     *
     * @ElementName userServiceAuthorization
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserServiceAuthorization[]
     */
    public function getUserServiceAuthorization()
    {
        return $this->userServiceAuthorization;
    }

    /**
     * Setter for userServiceAuthorization
     *
     * @ElementName userServiceAuthorization
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserServiceAuthorization[] $userServiceAuthorization
     * @return $this
     */
    public function setUserServiceAuthorization(array $userServiceAuthorization)
    {
        $this->userServiceAuthorization = $userServiceAuthorization;
        return $this;
    }

    /**
     * Adder for userServiceAuthorization
     *
     * @ElementName userServiceAuthorization
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserServiceAuthorization $userServiceAuthorization
     * @return $this
     */
    public function addUserServiceAuthorization($userServiceAuthorization)
    {
        $this->userServiceAuthorization []= $userServiceAuthorization;
        return $this;
    }


}

