<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGroupPagingTargetsCapacityGetResponse
 *
 * Response to ServiceProviderGroupPagingTargetsCapacityGetRequest.
 *         
 *         Replaced by: ServiceProviderGroupPagingTargetsCapacityGetResponse22 in AS data mode.
 *
 * @see ServiceProviderGroupPagingTargetsCapacityGetRequest
 * @see ServiceProviderGroupPagingTargetsCapacityGetResponse22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:5910","type":"sequence"}]
 */
class ServiceProviderGroupPagingTargetsCapacityGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maximumTargetUsers
     * @Type int
     * @Group de4d76f01f337fe4694212ec9f771753:5910
     * @MinInclusive 1
     * @MaxInclusive 149
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

