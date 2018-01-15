<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceGetAuthorizedListResponse
 *
 * Response to GroupServiceGetAuthorizedListRequest.
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
     * @var string[]
     */
    private $groupServiceName = array(
        
    );

    /**
     * @ElementName userServiceName
     * @var string[]
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
    public function setServicePackName($servicePackName)
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
    public function addServicePackName($servicePackName)
    {
        $this->servicePackName []= $servicePackName;
        return $this;
    }

    /**
     * Getter for groupServiceName
     *
     * @ElementName groupServiceName
     * @return string[]
     */
    public function getGroupServiceName()
    {
        return $this->groupServiceName;
    }

    /**
     * Setter for groupServiceName
     *
     * @ElementName groupServiceName
     * @param string[] $groupServiceName
     * @return $this
     */
    public function setGroupServiceName($groupServiceName)
    {
        $this->groupServiceName = $groupServiceName;
        return $this;
    }

    /**
     * Adder for groupServiceName
     *
     * @ElementName groupServiceName
     * @param string $groupServiceName
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
     * @return string[]
     */
    public function getUserServiceName()
    {
        return $this->userServiceName;
    }

    /**
     * Setter for userServiceName
     *
     * @ElementName userServiceName
     * @param string[] $userServiceName
     * @return $this
     */
    public function setUserServiceName($userServiceName)
    {
        $this->userServiceName = $userServiceName;
        return $this;
    }

    /**
     * Adder for userServiceName
     *
     * @ElementName userServiceName
     * @param string $userServiceName
     * @return $this
     */
    public function addUserServiceName($userServiceName)
    {
        $this->userServiceName []= $userServiceName;
        return $this;
    }


}

