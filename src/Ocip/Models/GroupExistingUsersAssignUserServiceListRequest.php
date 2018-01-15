<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupExistingUsersAssignUserServiceListRequest
 *
 * Request to assign the user services and service packs to all existing users
 * within the group.
 *         BroadSoft recommends using this command only for small groups with less
 * than 100 users.  This 
 *         command will return an error if the group has over 500 users.  The
 * recommended way to bulk 
 *         assign/unassign services is Service Pack Migration.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupExistingUsersAssignUserServiceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName servicePackName
     * @var string[]
     */
    private $servicePackName = array(
        
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


}

