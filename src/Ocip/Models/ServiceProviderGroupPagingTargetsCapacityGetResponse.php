<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGroupPagingTargetsCapacityGetResponse
 *
 * Response to ServiceProviderGroupPagingTargetsCapacityGetRequest.
 *
 * @see ServiceProviderGroupPagingTargetsCapacityGetRequest
 */
class ServiceProviderGroupPagingTargetsCapacityGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maximumTargetUsers
     * @var int|null
     */
    private $maximumTargetUsers = null;

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

