<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingTargetsCapacityModifyRequest
 *
 * Modify the maximum number of target users per paging group configured for a
 * group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupGroupPagingTargetsCapacityModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName maximumTargetUsers
     * @var int|null
     */
    private $maximumTargetUsers = null;

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
     * Getter for maximumTargetUsers
     *
     * @ElementName maximumTargetUsers
     * @return int|null
     */
    public function getMaximumTargetUsers()
    {
        return $this->maximumTargetUsers;
    }

    /**
     * Setter for maximumTargetUsers
     *
     * @ElementName maximumTargetUsers
     * @param int|null $maximumTargetUsers
     * @return $this
     */
    public function setMaximumTargetUsers($maximumTargetUsers)
    {
        $this->maximumTargetUsers = $maximumTargetUsers;
        return $this;
    }


}

