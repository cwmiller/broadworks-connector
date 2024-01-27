<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGroupPagingTargetsCapacityGetResponse22
 *
 * Response to ServiceProviderGroupPagingTargetsCapacityGetRequest22.
 *
 * @see ServiceProviderGroupPagingTargetsCapacityGetRequest22
 * @Groups [{"id":"8ede928f2a9c1318573ba9c7a105655c:545","type":"sequence"}]
 */
class ServiceProviderGroupPagingTargetsCapacityGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName maximumTargetUsers
     * @Type int
     * @Group 8ede928f2a9c1318573ba9c7a105655c:545
     * @MinInclusive 1
     * @MaxInclusive 294
     * @var int|null
     */
    protected $maximumTargetUsers = null;

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

