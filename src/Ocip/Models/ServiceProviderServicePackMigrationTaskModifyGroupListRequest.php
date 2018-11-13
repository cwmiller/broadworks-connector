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
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName taskName
     * @Type string
     * @var string|null
     */
    private $taskName = null;

    /**
     * @ElementName migrateAllGroups
     * @Type bool
     * @var bool|null
     */
    private $migrateAllGroups = null;

    /**
     * @ElementName groupIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $groupIdList = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for taskName
     *
     * @return string
     */
    public function getTaskName()
    {
        return $this->taskName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->taskName;
    }

    /**
     * Setter for taskName
     *
     * @param string $taskName
     * @return $this
     */
    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTaskName()
    {
        $this->taskName = null;
        return $this;
    }

    /**
     * Getter for migrateAllGroups
     *
     * @return bool
     */
    public function getMigrateAllGroups()
    {
        return $this->migrateAllGroups instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->migrateAllGroups;
    }

    /**
     * Setter for migrateAllGroups
     *
     * @param bool $migrateAllGroups
     * @return $this
     */
    public function setMigrateAllGroups($migrateAllGroups)
    {
        $this->migrateAllGroups = $migrateAllGroups;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMigrateAllGroups()
    {
        $this->migrateAllGroups = null;
        return $this;
    }

    /**
     * Getter for groupIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList|null
     */
    public function getGroupIdList()
    {
        return $this->groupIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupIdList;
    }

    /**
     * Setter for groupIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList|null $groupIdList
     * @return $this
     */
    public function setGroupIdList(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList $groupIdList)
    {
        if ($groupIdList === null) {
            $this->groupIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->groupIdList = $groupIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupIdList()
    {
        $this->groupIdList = null;
        return $this;
    }


}

