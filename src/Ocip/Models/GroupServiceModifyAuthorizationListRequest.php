<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceModifyAuthorizationListRequest
 *
 * Requests to change the group's service authorization status.
 *         The boolean flags are used to authorize or unauthorize services and
 * packs.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupServiceModifyAuthorizationListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName servicePackAuthorization
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServicePackAuthorization[]
     */
    private $servicePackAuthorization = array(
        
    );

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
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for servicePackAuthorization
     *
     * @ElementName servicePackAuthorization
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServicePackAuthorization[]
     */
    public function getServicePackAuthorization()
    {
        return $this->servicePackAuthorization;
    }

    /**
     * Setter for servicePackAuthorization
     *
     * @ElementName servicePackAuthorization
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServicePackAuthorization[] $servicePackAuthorization
     * @return $this
     */
    public function setServicePackAuthorization($servicePackAuthorization)
    {
        $this->servicePackAuthorization = $servicePackAuthorization;
        return $this;
    }

    /**
     * Adder for servicePackAuthorization
     *
     * @ElementName servicePackAuthorization
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServicePackAuthorization $servicePackAuthorization
     * @return $this
     */
    public function addServicePackAuthorization($servicePackAuthorization)
    {
        $this->servicePackAuthorization []= $servicePackAuthorization;
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
    public function setGroupServiceAuthorization($groupServiceAuthorization)
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
    public function setUserServiceAuthorization($userServiceAuthorization)
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

