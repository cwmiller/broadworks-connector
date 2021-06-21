<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGroupPagingTargetsCapacityGetResponse22
 *
 * Response to ServiceProviderGroupPagingTargetsCapacityGetRequest22.
 *
 * @see ServiceProviderGroupPagingTargetsCapacityGetRequest22
 * @Groups [{"id":"0d36df8c109e3ea7324f79031368c661:546","type":"sequence"}]
 */
class ServiceProviderGroupPagingTargetsCapacityGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maximumTargetUsers
     * @Type int
     * @Group 0d36df8c109e3ea7324f79031368c661:546
     * @MinInclusive 1
     * @MaxInclusive 294
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

