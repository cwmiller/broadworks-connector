<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingTargetsCapacityGetResponse
 *
 * Response to GroupGroupPagingTargetsCapacityGetRequest.
 *
 * @see GroupGroupPagingTargetsCapacityGetRequest
 * @Groups [{"id":"76de8409eddf3e150e3b79f9c41e6cc0:485","type":"sequence"}]
 */
class GroupGroupPagingTargetsCapacityGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maximumTargetUsersFromServiceProvider
     * @Type int
     * @Group 76de8409eddf3e150e3b79f9c41e6cc0:485
     * @var int|null
     */
    private $maximumTargetUsersFromServiceProvider = null;

    /**
     * @ElementName maximumTargetUsers
     * @Type int
     * @Group 76de8409eddf3e150e3b79f9c41e6cc0:485
     * @var int|null
     */
    private $maximumTargetUsers = null;

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

