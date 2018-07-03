<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskModifyGroupListRequest
 *
 * Replace the list of groups to be migrated for a specified service pack migration
 * task.
 *         Modification is only allowed prior to task execution.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderServicePackMigrationTaskModifyGroupListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName taskName
     * @var string|null
     */
    private $taskName = null;

    /**
     * @ElementName migrateAllGroups
     * @var bool|null
     */
    private $migrateAllGroups = null;

    /**
     * @ElementName groupIdList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyGroupListRequest\GroupIdList|null
     */
    private $groupIdList = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for taskName
     *
     * @ElementName taskName
     * @return string|null
     */
    public function getTaskName()
    {
        return $this->taskName;
    }

    /**
     * Setter for taskName
     *
     * @ElementName taskName
     * @param string|null $taskName
     * @return $this
     */
    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * Getter for migrateAllGroups
     *
     * @ElementName migrateAllGroups
     * @return bool|null
     */
    public function getMigrateAllGroups()
    {
        return $this->migrateAllGroups;
    }

    /**
     * Setter for migrateAllGroups
     *
     * @ElementName migrateAllGroups
     * @param bool|null $migrateAllGroups
     * @return $this
     */
    public function setMigrateAllGroups($migrateAllGroups)
    {
        $this->migrateAllGroups = $migrateAllGroups;
        return $this;
    }

    /**
     * Getter for groupIdList
     *
     * @ElementName groupIdList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyGroupListRequest\GroupIdList|null
     */
    public function getGroupIdList()
    {
        return $this->groupIdList;
    }

    /**
     * Setter for groupIdList
     *
     * @ElementName groupIdList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyGroupListRequest\GroupIdList|null $groupIdList
     * @return $this
     */
    public function setGroupIdList($groupIdList)
    {
        $this->groupIdList = $groupIdList;
        return $this;
    }


}

