<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingTargetsCapacityModifyRequest
 *
 * Modify the maximum number of target users per paging group configured for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: GroupGroupPagingTargetsCapacityModifyRequest22 in AS data mode.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupGroupPagingTargetsCapacityModifyRequest22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:2677","type":"sequence"}]
 */
class GroupGroupPagingTargetsCapacityModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:2677
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:2677
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName maximumTargetUsers
     * @Type int
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:2677
     * @MinInclusive 1
     * @MaxInclusive 149
     * @var int|null
     */
    private $maximumTargetUsers = null;

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
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for maximumTargetUsers
     *
     * @return int
     */
    public function getMaximumTargetUsers()
    {
        return $this->maximumTargetUsers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maximumTargetUsers;
    }

    /**
     * Setter for maximumTargetUsers
     *
     * @param int $maximumTargetUsers
     * @return $this
     */
    public function setMaximumTargetUsers($maximumTargetUsers)
    {
        $this->maximumTargetUsers = $maximumTargetUsers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaximumTargetUsers()
    {
        $this->maximumTargetUsers = null;
        return $this;
    }


}

