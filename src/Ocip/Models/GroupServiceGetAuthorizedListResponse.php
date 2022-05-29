<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceGetAuthorizedListResponse
 *
 * Response to GroupServiceGetAuthorizedListRequest.
 *
 * @see GroupServiceGetAuthorizedListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:7844","type":"sequence"}]
 */
class GroupServiceGetAuthorizedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName servicePackName
     * @Type string
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7844
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $servicePackName = array(
        
    );

    /**
     * @ElementName groupServiceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupService
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7844
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupService[]
     */
    protected $groupServiceName = array(
        
    );

    /**
     * @ElementName userServiceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7844
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    protected $userServiceName = array(
        
    );

    /**
     * Getter for servicePackName
     *
     * @return string[]
     */
    public function getServicePackName()
    {
        return $this->servicePackName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @param string[] $servicePackName
     * @return $this
     */
    public function setServicePackName(array $servicePackName)
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

    /**
     * Adder for servicePackName
     *
     * @param string $servicePackName
     * @return $this
     */
    public function addServicePackName(string $servicePackName)
    {
        $this->servicePackName[] = $servicePackName;
        return $this;
    }

    /**
     * Getter for groupServiceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupService[]
     */
    public function getGroupServiceName()
    {
        return $this->groupServiceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupServiceName;
    }

    /**
     * Setter for groupServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupService[] $groupServiceName
     * @return $this
     */
    public function setGroupServiceName(array $groupServiceName)
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
     * Adder for groupServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupService $groupServiceName
     * @return $this
     */
    public function addGroupServiceName($groupServiceName)
    {
        $this->groupServiceName[] = $groupServiceName;
        return $this;
    }

    /**
     * Getter for userServiceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    public function getUserServiceName()
    {
        return $this->userServiceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServiceName;
    }

    /**
     * Setter for userServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService[] $userServiceName
     * @return $this
     */
    public function setUserServiceName(array $userServiceName)
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
     * Adder for userServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $userServiceName
     * @return $this
     */
    public function addUserServiceName($userServiceName)
    {
        $this->userServiceName[] = $userServiceName;
        return $this;
    }


}

