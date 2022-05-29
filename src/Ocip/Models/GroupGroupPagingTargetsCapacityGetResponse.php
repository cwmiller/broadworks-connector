<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingTargetsCapacityGetResponse
 *
 * Response to GroupGroupPagingTargetsCapacityGetRequest.
 *         
 *         Replaced by: GroupGroupPagingTargetsCapacityGetResponse22 in AS data mode.
 *
 * @see GroupGroupPagingTargetsCapacityGetRequest
 * @see GroupGroupPagingTargetsCapacityGetResponse22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:2658","type":"sequence"}]
 */
class GroupGroupPagingTargetsCapacityGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maximumTargetUsersFromServiceProvider
     * @Type int
     * @Group de4d76f01f337fe4694212ec9f771753:2658
     * @MinInclusive 1
     * @MaxInclusive 149
     * @var int|null
     */
    protected $maximumTargetUsersFromServiceProvider = null;

    /**
     * @ElementName maximumTargetUsers
     * @Type int
     * @Group de4d76f01f337fe4694212ec9f771753:2658
     * @MinInclusive 1
     * @MaxInclusive 149
     * @var int|null
     */
    protected $maximumTargetUsers = null;

    /**
     * Getter for maximumTargetUsersFromServiceProvider
     *
     * @return int
     */
    public function getMaximumTargetUsersFromServiceProvider()
    {
        return $this->maximumTargetUsersFromServiceProvider instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maximumTargetUsersFromServiceProvider;
    }

    /**
     * Setter for maximumTargetUsersFromServiceProvider
     *
     * @param int $maximumTargetUsersFromServiceProvider
     * @return $this
     */
    public function setMaximumTargetUsersFromServiceProvider($maximumTargetUsersFromServiceProvider)
    {
        $this->maximumTargetUsersFromServiceProvider = $maximumTargetUsersFromServiceProvider;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaximumTargetUsersFromServiceProvider()
    {
        $this->maximumTargetUsersFromServiceProvider = null;
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

