<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetUserServiceAssignedUserListRequest
 *
 * Get the list of users assigned the user service or service pack.
 *         The response is either a GroupGetUserServiceAssignedUserListResponse or
 * an ErrorResponse.
 */
class GroupGetUserServiceAssignedUserListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @var string|null
     */
    private $serviceName = null;

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
     * @return string|null
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @ElementName serviceName
     * @param string|null $serviceName
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
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

