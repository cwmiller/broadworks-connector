<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceGetAuthorizedListResponse
 *
 * Response to GroupServiceGetAuthorizedListRequest.
 *
 * @see GroupServiceGetAuthorizedListRequest
 */
class GroupServiceGetAuthorizedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName servicePackName
     * @var string[]
     */
    private $servicePackName = array(
        
    );

    /**
     * @ElementName groupServiceName
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupService[]
     */
    private $groupServiceName = array(
        
    );

    /**
     * @ElementName userServiceName
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    private $userServiceName = array(
        
    );

    /**
     * Getter for servicePackName
     *
     * @ElementName servicePackName
     * @return string[]
     */
    public function getServicePackName()
    {
        return $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @ElementName servicePackName
     * @param string[] $servicePackName
     * @return $this
     */
    public function setServicePackName(array $servicePackName)
    {
        $this->servicePackName = $servicePackName;
        return $this;
    }

    /**
     * Adder for servicePackName
     *
     * @ElementName servicePackName
     * @param string $servicePackName
     * @return $this
     */
    public function addServicePackName(string $servicePackName)
    {
        $this->servicePackName []= $servicePackName;
        return $this;
    }

    /**
     * Getter for groupServiceName
     *
     * @ElementName groupServiceName
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupService[]
     */
    public function getGroupServiceName()
    {
        return $this->groupServiceName;
    }

    /**
     * Setter for groupServiceName
     *
     * @ElementName groupServiceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupService[] $groupServiceName
     * @return $this
     */
    public function setGroupServiceName(array $groupServiceName)
    {
        $this->groupServiceName = $groupServiceName;
        return $this;
    }

    /**
     * Adder for groupServiceName
     *
     * @ElementName groupServiceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupService $groupServiceName
     * @return $this
     */
    public function addGroupServiceName($groupServiceName)
    {
        $this->groupServiceName []= $groupServiceName;
        return $this;
    }

    /**
     * Getter for userServiceName
     *
     * @ElementName userServiceName
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    public function getUserServiceName()
    {
        return $this->userServiceName;
    }

    /**
     * Setter for userServiceName
     *
     * @ElementName userServiceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService[] $userServiceName
     * @return $this
     */
    public function setUserServiceName(array $userServiceName)
    {
        $this->userServiceName = $userServiceName;
        return $this;
    }

    /**
     * Adder for userServiceName
     *
     * @ElementName userServiceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $userServiceName
     * @return $this
     */
    public function addUserServiceName($userServiceName)
    {
        $this->userServiceName []= $userServiceName;
        return $this;
    }


}

