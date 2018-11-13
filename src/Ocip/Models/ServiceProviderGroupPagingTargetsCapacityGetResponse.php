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
     * @Type int
     * @var int|null
     */
    private $maximumTargetUsers = null;

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

