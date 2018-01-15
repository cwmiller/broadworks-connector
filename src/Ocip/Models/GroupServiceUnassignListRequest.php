<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceUnassignListRequest
 *
 * Unassign one or more of the group's assigned services.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupServiceUnassignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName serviceName
     * @var string[]
     */
    private $serviceName = array(
        
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
     * Getter for serviceName
     *
     * @ElementName serviceName
     * @return string[]
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @ElementName serviceName
     * @param string[] $serviceName
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * Adder for serviceName
     *
     * @ElementName serviceName
     * @param string $serviceName
     * @return $this
     */
    public function addServiceName($serviceName)
    {
        $this->serviceName []= $serviceName;
        return $this;
    }


}

