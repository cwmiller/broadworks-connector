<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskGetResponse21
 *
 * Response to ServiceProviderServicePackMigrationTaskGetRequest21.
 *         The groupTable column headings are: "Group Id", "Group Name", and "User
 * Count".
 *
 * @see ServiceProviderServicePackMigrationTaskGetRequest21
 */
class ServiceProviderServicePackMigrationTaskGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName taskName
     * @var string|null
     */
    private $taskName = null;

    /**
     * @ElementName startTimestamp
     * @var string|null
     */
    private $startTimestamp = null;

    /**
     * @ElementName actualStartTimestamp
     * @var string|null
     */
    private $actualStartTimestamp = null;

    /**
     * @ElementName expireAfterNumHours
     * @var int|null
     */
    private $expireAfterNumHours = null;

    /**
     * @ElementName maxDurationHours
     * @var int|null
     */
    private $maxDurationHours = null;

    /**
     * @ElementName sendReportEmail
     * @var bool|null
     */
    private $sendReportEmail = null;

    /**
     * @ElementName reportDeliveryEmailAddress
     * @var string|null
     */
    private $reportDeliveryEmailAddress = null;

    /**
     * @ElementName abortOnError
     * @var bool|null
     */
    private $abortOnError = null;

    /**
     * @ElementName abortErrorThreshold
     * @var int|null
     */
    private $abortErrorThreshold = null;

    /**
     * @ElementName reportAllUsers
     * @var bool|null
     */
    private $reportAllUsers = null;

    /**
     * @ElementName automaticallyIncrementServiceQuantity
     * @var bool|null
     */
    private $automaticallyIncrementServiceQuantity = null;

    /**
     * @ElementName errorCount
     * @var int|null
     */
    private $errorCount = null;

    /**
     * @ElementName status
     * @var string|null
     */
    private $status = null;

    /**
     * @ElementName groupsProcessed
     * @var int|null
     */
    private $groupsProcessed = null;

    /**
     * @ElementName groupsTotal
     * @var int|null
     */
    private $groupsTotal = null;

    /**
     * @ElementName usersProcessed
     * @var int|null
     */
    private $usersProcessed = null;

    /**
     * @ElementName usersTotal
     * @var int|null
     */
    private $usersTotal = null;

    /**
     * @ElementName userSelectionType
     * @var string|null
     */
    private $userSelectionType = null;

    /**
     * @ElementName reportFilePathName
     * @var string|null
     */
    private $reportFilePathName = null;

    /**
     * @ElementName migrateAllGroups
     * @var bool|null
     */
    private $migrateAllGroups = null;

    /**
     * @ElementName groupTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupTable = null;

    /**
     * @ElementName userSelectionServicePackName
     * @var string[]
     */
    private $userSelectionServicePackName = array(
        
    );

    /**
     * @ElementName userSelectionServiceName
     * @var string[]
     */
    private $userSelectionServiceName = array(
        
    );

    /**
     * @ElementName removeServicePackName
     * @var string[]
     */
    private $removeServicePackName = array(
        
    );

    /**
     * @ElementName removeServiceName
     * @var string[]
     */
    private $removeServiceName = array(
        
    );

    /**
     * @ElementName assignServicePackName
     * @var string[]
     */
    private $assignServicePackName = array(
        
    );

    /**
     * @ElementName assignServiceName
     * @var string[]
     */
    private $assignServiceName = array(
        
    );

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
     * Getter for startTimestamp
     *
     * @ElementName startTimestamp
     * @return string|null
     */
    public function getStartTimestamp()
    {
        return $this->startTimestamp;
    }

    /**
     * Setter for startTimestamp
     *
     * @ElementName startTimestamp
     * @param string|null $startTimestamp
     * @return $this
     */
    public function setStartTimestamp($startTimestamp)
    {
        $this->startTimestamp = $startTimestamp;
        return $this;
    }

    /**
     * Getter for actualStartTimestamp
     *
     * @ElementName actualStartTimestamp
     * @return string|null
     */
    public function getActualStartTimestamp()
    {
        return $this->actualStartTimestamp;
    }

    /**
     * Setter for actualStartTimestamp
     *
     * @ElementName actualStartTimestamp
     * @param string|null $actualStartTimestamp
     * @return $this
     */
    public function setActualStartTimestamp($actualStartTimestamp)
    {
        $this->actualStartTimestamp = $actualStartTimestamp;
        return $this;
    }

    /**
     * Getter for expireAfterNumHours
     *
     * @ElementName expireAfterNumHours
     * @return int|null
     */
    public function getExpireAfterNumHours()
    {
        return $this->expireAfterNumHours;
    }

    /**
     * Setter for expireAfterNumHours
     *
     * @ElementName expireAfterNumHours
     * @param int|null $expireAfterNumHours
     * @return $this
     */
    public function setExpireAfterNumHours($expireAfterNumHours)
    {
        $this->expireAfterNumHours = $expireAfterNumHours;
        return $this;
    }

    /**
     * Getter for maxDurationHours
     *
     * @ElementName maxDurationHours
     * @return int|null
     */
    public function getMaxDurationHours()
    {
        return $this->maxDurationHours;
    }

    /**
     * Setter for maxDurationHours
     *
     * @ElementName maxDurationHours
     * @param int|null $maxDurationHours
     * @return $this
     */
    public function setMaxDurationHours($maxDurationHours)
    {
        $this->maxDurationHours = $maxDurationHours;
        return $this;
    }

    /**
     * Getter for sendReportEmail
     *
     * @ElementName sendReportEmail
     * @return bool|null
     */
    public function getSendReportEmail()
    {
        return $this->sendReportEmail;
    }

    /**
     * Setter for sendReportEmail
     *
     * @ElementName sendReportEmail
     * @param bool|null $sendReportEmail
     * @return $this
     */
    public function setSendReportEmail($sendReportEmail)
    {
        $this->sendReportEmail = $sendReportEmail;
        return $this;
    }

    /**
     * Getter for reportDeliveryEmailAddress
     *
     * @ElementName reportDeliveryEmailAddress
     * @return string|null
     */
    public function getReportDeliveryEmailAddress()
    {
        return $this->reportDeliveryEmailAddress;
    }

    /**
     * Setter for reportDeliveryEmailAddress
     *
     * @ElementName reportDeliveryEmailAddress
     * @param string|null $reportDeliveryEmailAddress
     * @return $this
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress)
    {
        $this->reportDeliveryEmailAddress = $reportDeliveryEmailAddress;
        return $this;
    }

    /**
     * Getter for abortOnError
     *
     * @ElementName abortOnError
     * @return bool|null
     */
    public function getAbortOnError()
    {
        return $this->abortOnError;
    }

    /**
     * Setter for abortOnError
     *
     * @ElementName abortOnError
     * @param bool|null $abortOnError
     * @return $this
     */
    public function setAbortOnError($abortOnError)
    {
        $this->abortOnError = $abortOnError;
        return $this;
    }

    /**
     * Getter for abortErrorThreshold
     *
     * @ElementName abortErrorThreshold
     * @return int|null
     */
    public function getAbortErrorThreshold()
    {
        return $this->abortErrorThreshold;
    }

    /**
     * Setter for abortErrorThreshold
     *
     * @ElementName abortErrorThreshold
     * @param int|null $abortErrorThreshold
     * @return $this
     */
    public function setAbortErrorThreshold($abortErrorThreshold)
    {
        $this->abortErrorThreshold = $abortErrorThreshold;
        return $this;
    }

    /**
     * Getter for reportAllUsers
     *
     * @ElementName reportAllUsers
     * @return bool|null
     */
    public function getReportAllUsers()
    {
        return $this->reportAllUsers;
    }

    /**
     * Setter for reportAllUsers
     *
     * @ElementName reportAllUsers
     * @param bool|null $reportAllUsers
     * @return $this
     */
    public function setReportAllUsers($reportAllUsers)
    {
        $this->reportAllUsers = $reportAllUsers;
        return $this;
    }

    /**
     * Getter for automaticallyIncrementServiceQuantity
     *
     * @ElementName automaticallyIncrementServiceQuantity
     * @return bool|null
     */
    public function getAutomaticallyIncrementServiceQuantity()
    {
        return $this->automaticallyIncrementServiceQuantity;
    }

    /**
     * Setter for automaticallyIncrementServiceQuantity
     *
     * @ElementName automaticallyIncrementServiceQuantity
     * @param bool|null $automaticallyIncrementServiceQuantity
     * @return $this
     */
    public function setAutomaticallyIncrementServiceQuantity($automaticallyIncrementServiceQuantity)
    {
        $this->automaticallyIncrementServiceQuantity = $automaticallyIncrementServiceQuantity;
        return $this;
    }

    /**
     * Getter for errorCount
     *
     * @ElementName errorCount
     * @return int|null
     */
    public function getErrorCount()
    {
        return $this->errorCount;
    }

    /**
     * Setter for errorCount
     *
     * @ElementName errorCount
     * @param int|null $errorCount
     * @return $this
     */
    public function setErrorCount($errorCount)
    {
        $this->errorCount = $errorCount;
        return $this;
    }

    /**
     * Getter for status
     *
     * @ElementName status
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Setter for status
     *
     * @ElementName status
     * @param string|null $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Getter for groupsProcessed
     *
     * @ElementName groupsProcessed
     * @return int|null
     */
    public function getGroupsProcessed()
    {
        return $this->groupsProcessed;
    }

    /**
     * Setter for groupsProcessed
     *
     * @ElementName groupsProcessed
     * @param int|null $groupsProcessed
     * @return $this
     */
    public function setGroupsProcessed($groupsProcessed)
    {
        $this->groupsProcessed = $groupsProcessed;
        return $this;
    }

    /**
     * Getter for groupsTotal
     *
     * @ElementName groupsTotal
     * @return int|null
     */
    public function getGroupsTotal()
    {
        return $this->groupsTotal;
    }

    /**
     * Setter for groupsTotal
     *
     * @ElementName groupsTotal
     * @param int|null $groupsTotal
     * @return $this
     */
    public function setGroupsTotal($groupsTotal)
    {
        $this->groupsTotal = $groupsTotal;
        return $this;
    }

    /**
     * Getter for usersProcessed
     *
     * @ElementName usersProcessed
     * @return int|null
     */
    public function getUsersProcessed()
    {
        return $this->usersProcessed;
    }

    /**
     * Setter for usersProcessed
     *
     * @ElementName usersProcessed
     * @param int|null $usersProcessed
     * @return $this
     */
    public function setUsersProcessed($usersProcessed)
    {
        $this->usersProcessed = $usersProcessed;
        return $this;
    }

    /**
     * Getter for usersTotal
     *
     * @ElementName usersTotal
     * @return int|null
     */
    public function getUsersTotal()
    {
        return $this->usersTotal;
    }

    /**
     * Setter for usersTotal
     *
     * @ElementName usersTotal
     * @param int|null $usersTotal
     * @return $this
     */
    public function setUsersTotal($usersTotal)
    {
        $this->usersTotal = $usersTotal;
        return $this;
    }

    /**
     * Getter for userSelectionType
     *
     * @ElementName userSelectionType
     * @return string|null
     */
    public function getUserSelectionType()
    {
        return $this->userSelectionType;
    }

    /**
     * Setter for userSelectionType
     *
     * @ElementName userSelectionType
     * @param string|null $userSelectionType
     * @return $this
     */
    public function setUserSelectionType($userSelectionType)
    {
        $this->userSelectionType = $userSelectionType;
        return $this;
    }

    /**
     * Getter for reportFilePathName
     *
     * @ElementName reportFilePathName
     * @return string|null
     */
    public function getReportFilePathName()
    {
        return $this->reportFilePathName;
    }

    /**
     * Setter for reportFilePathName
     *
     * @ElementName reportFilePathName
     * @param string|null $reportFilePathName
     * @return $this
     */
    public function setReportFilePathName($reportFilePathName)
    {
        $this->reportFilePathName = $reportFilePathName;
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
    public function setGroupTable($groupTable)
    {
        $this->groupTable = $groupTable;
        return $this;
    }

    /**
     * Getter for userSelectionServicePackName
     *
     * @ElementName userSelectionServicePackName
     * @return string[]
     */
    public function getUserSelectionServicePackName()
    {
        return $this->userSelectionServicePackName;
    }

    /**
     * Setter for userSelectionServicePackName
     *
     * @ElementName userSelectionServicePackName
     * @param string[] $userSelectionServicePackName
     * @return $this
     */
    public function setUserSelectionServicePackName($userSelectionServicePackName)
    {
        $this->userSelectionServicePackName = $userSelectionServicePackName;
        return $this;
    }

    /**
     * Adder for userSelectionServicePackName
     *
     * @ElementName userSelectionServicePackName
     * @param string $userSelectionServicePackName
     * @return $this
     */
    public function addUserSelectionServicePackName($userSelectionServicePackName)
    {
        $this->userSelectionServicePackName []= $userSelectionServicePackName;
        return $this;
    }

    /**
     * Getter for userSelectionServiceName
     *
     * @ElementName userSelectionServiceName
     * @return string[]
     */
    public function getUserSelectionServiceName()
    {
        return $this->userSelectionServiceName;
    }

    /**
     * Setter for userSelectionServiceName
     *
     * @ElementName userSelectionServiceName
     * @param string[] $userSelectionServiceName
     * @return $this
     */
    public function setUserSelectionServiceName($userSelectionServiceName)
    {
        $this->userSelectionServiceName = $userSelectionServiceName;
        return $this;
    }

    /**
     * Adder for userSelectionServiceName
     *
     * @ElementName userSelectionServiceName
     * @param string $userSelectionServiceName
     * @return $this
     */
    public function addUserSelectionServiceName($userSelectionServiceName)
    {
        $this->userSelectionServiceName []= $userSelectionServiceName;
        return $this;
    }

    /**
     * Getter for removeServicePackName
     *
     * @ElementName removeServicePackName
     * @return string[]
     */
    public function getRemoveServicePackName()
    {
        return $this->removeServicePackName;
    }

    /**
     * Setter for removeServicePackName
     *
     * @ElementName removeServicePackName
     * @param string[] $removeServicePackName
     * @return $this
     */
    public function setRemoveServicePackName($removeServicePackName)
    {
        $this->removeServicePackName = $removeServicePackName;
        return $this;
    }

    /**
     * Adder for removeServicePackName
     *
     * @ElementName removeServicePackName
     * @param string $removeServicePackName
     * @return $this
     */
    public function addRemoveServicePackName($removeServicePackName)
    {
        $this->removeServicePackName []= $removeServicePackName;
        return $this;
    }

    /**
     * Getter for removeServiceName
     *
     * @ElementName removeServiceName
     * @return string[]
     */
    public function getRemoveServiceName()
    {
        return $this->removeServiceName;
    }

    /**
     * Setter for removeServiceName
     *
     * @ElementName removeServiceName
     * @param string[] $removeServiceName
     * @return $this
     */
    public function setRemoveServiceName($removeServiceName)
    {
        $this->removeServiceName = $removeServiceName;
        return $this;
    }

    /**
     * Adder for removeServiceName
     *
     * @ElementName removeServiceName
     * @param string $removeServiceName
     * @return $this
     */
    public function addRemoveServiceName($removeServiceName)
    {
        $this->removeServiceName []= $removeServiceName;
        return $this;
    }

    /**
     * Getter for assignServicePackName
     *
     * @ElementName assignServicePackName
     * @return string[]
     */
    public function getAssignServicePackName()
    {
        return $this->assignServicePackName;
    }

    /**
     * Setter for assignServicePackName
     *
     * @ElementName assignServicePackName
     * @param string[] $assignServicePackName
     * @return $this
     */
    public function setAssignServicePackName($assignServicePackName)
    {
        $this->assignServicePackName = $assignServicePackName;
        return $this;
    }

    /**
     * Adder for assignServicePackName
     *
     * @ElementName assignServicePackName
     * @param string $assignServicePackName
     * @return $this
     */
    public function addAssignServicePackName($assignServicePackName)
    {
        $this->assignServicePackName []= $assignServicePackName;
        return $this;
    }

    /**
     * Getter for assignServiceName
     *
     * @ElementName assignServiceName
     * @return string[]
     */
    public function getAssignServiceName()
    {
        return $this->assignServiceName;
    }

    /**
     * Setter for assignServiceName
     *
     * @ElementName assignServiceName
     * @param string[] $assignServiceName
     * @return $this
     */
    public function setAssignServiceName($assignServiceName)
    {
        $this->assignServiceName = $assignServiceName;
        return $this;
    }

    /**
     * Adder for assignServiceName
     *
     * @ElementName assignServiceName
     * @param string $assignServiceName
     * @return $this
     */
    public function addAssignServiceName($assignServiceName)
    {
        $this->assignServiceName []= $assignServiceName;
        return $this;
    }


}

