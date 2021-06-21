<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingTargetsCapacityGetResponse22
 *
 * Response to GroupGroupPagingTargetsCapacityGetRequest22.
 *
 * @see GroupGroupPagingTargetsCapacityGetRequest22
 * @Groups [{"id":"0d36df8c109e3ea7324f79031368c661:495","type":"sequence"}]
 */
class GroupGroupPagingTargetsCapacityGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maximumTargetUsersFromServiceProvider
     * @Type int
     * @Group 0d36df8c109e3ea7324f79031368c661:495
     * @MinInclusive 1
     * @MaxInclusive 294
     * @var int|null
     */
    private $maximumTargetUsersFromServiceProvider = null;

    /**
     * @ElementName maximumTargetUsers
     * @Type int
     * @Group 0d36df8c109e3ea7324f79031368c661:495
     * @MinInclusive 1
     * @MaxInclusive 294
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

