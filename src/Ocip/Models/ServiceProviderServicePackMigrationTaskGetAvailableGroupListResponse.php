<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskGetAvailableGroupListResponse
 *
 * Response to ServiceProviderServicePackMigrationTaskGetAvailableGroupListRequest.
 *         The groupTable column headings are: "Group Id", "Group Name", "User
 * Count".
 *
 * @see ServiceProviderServicePackMigrationTaskGetAvailableGroupListRequest
 */
class ServiceProviderServicePackMigrationTaskGetAvailableGroupListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupTable = null;

    /**
     * Getter for groupTable
     *
     * @ElementName groupTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getGroupTable()
    {
        return $this->groupTable;
    }

    /**
     * Setter for groupTable
     *
     * @ElementName groupTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $groupTable
     * @return $this
     */
    public function setGroupTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupTable)
    {
        $this->groupTable = $groupTable;
        return $this;
    }


}

