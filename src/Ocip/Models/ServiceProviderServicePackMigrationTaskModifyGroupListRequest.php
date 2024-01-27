<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskModifyGroupListRequest
 *
 * Replace the list of groups to be migrated for a specified service pack migration task.
 *         Modification is only allowed prior to task execution.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:6534","type":"sequence","children":[{"id":"e19a9072c2dad499e9f28837da5768db:6537","type":"choice"}]}]
 */
class ServiceProviderServicePackMigrationTaskModifyGroupListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:6534
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName taskName
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:6534
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $taskName = null;

    /**
     * @ElementName migrateAllGroups
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:6537
     * @var bool|null
     */
    protected $migrateAllGroups = null;

    /**
     * @ElementName groupIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList
     * @Nillable
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:6537
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $groupIdList = null;

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
    public function setGroupIdList(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskModifyGroupListRequestGroupIdList $groupIdList = null)
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

