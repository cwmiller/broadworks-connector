<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingTargetsCapacityGetResponse
 *
 * Response to GroupGroupPagingTargetsCapacityGetRequest.
 */
class GroupGroupPagingTargetsCapacityGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maximumTargetUsersFromServiceProvider
     * @var int|null
     */
    private $maximumTargetUsersFromServiceProvider = null;

    /**
     * @ElementName maximumTargetUsers
     * @var int|null
     */
    private $maximumTargetUsers = null;

    /**
     * Getter for maximumTargetUsersFromServiceProvider
     *
     * @ElementName maximumTargetUsersFromServiceProvider
     * @return int|null
     */
    public function getMaximumTargetUsersFromServiceProvider()
    {
        return $this->maximumTargetUsersFromServiceProvider;
    }

    /**
     * Setter for maximumTargetUsersFromServiceProvider
     *
     * @ElementName maximumTargetUsersFromServiceProvider
     * @param int|null $maximumTargetUsersFromServiceProvider
     * @return $this
     */
    public function setMaximumTargetUsersFromServiceProvider($maximumTargetUsersFromServiceProvider)
    {
        $this->maximumTargetUsersFromServiceProvider = $maximumTargetUsersFromServiceProvider;
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

