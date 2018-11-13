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
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupServiceAuthorization
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorization
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorization[]
     */
    private $groupServiceAuthorization = array(
        
    );

    /**
     * @ElementName userServiceAuthorization
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserServiceAuthorization
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserServiceAuthorization[]
     */
    private $userServiceAuthorization = array(
        
    );

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
     * Getter for groupServiceAuthorization
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorization[]
     */
    public function getGroupServiceAuthorization()
    {
        return $this->groupServiceAuthorization instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupServiceAuthorization;
    }

    /**
     * Setter for groupServiceAuthorization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorization[] $groupServiceAuthorization
     * @return $this
     */
    public function setGroupServiceAuthorization(array $groupServiceAuthorization)
    {
        $this->groupServiceAuthorization = $groupServiceAuthorization;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupServiceAuthorization()
    {
        $this->groupServiceAuthorization = null;
        return $this;
    }

    /**
     * Adder for groupServiceAuthorization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorization $groupServiceAuthorization
     * @return $this
     */
    public function addGroupServiceAuthorization($groupServiceAuthorization)
    {
        $this->groupServiceAuthorization[] = $groupServiceAuthorization;
        return $this;
    }

    /**
     * Getter for userServiceAuthorization
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserServiceAuthorization[]
     */
    public function getUserServiceAuthorization()
    {
        return $this->userServiceAuthorization instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServiceAuthorization;
    }

    /**
     * Setter for userServiceAuthorization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserServiceAuthorization[] $userServiceAuthorization
     * @return $this
     */
    public function setUserServiceAuthorization(array $userServiceAuthorization)
    {
        $this->userServiceAuthorization = $userServiceAuthorization;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserServiceAuthorization()
    {
        $this->userServiceAuthorization = null;
        return $this;
    }

    /**
     * Adder for userServiceAuthorization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserServiceAuthorization $userServiceAuthorization
     * @return $this
     */
    public function addUserServiceAuthorization($userServiceAuthorization)
    {
        $this->userServiceAuthorization[] = $userServiceAuthorization;
        return $this;
    }


}

