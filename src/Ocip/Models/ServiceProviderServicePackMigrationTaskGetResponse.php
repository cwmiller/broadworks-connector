<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskGetResponse
 *
 * Response to ServiceProviderServicePackMigrationTaskGetRequest.
 *         The groupTable column headings are: "Migrate", "Group Id", "Group Name",
 * "User Count".
 *         Replaced By: ServiceProviderServicePackMigrationTaskGetResponse14sp4
 *
 * @see ServiceProviderServicePackMigrationTaskGetRequest
 * @see ServiceProviderServicePackMigrationTaskGetResponse14sp4
 */
class ServiceProviderServicePackMigrationTaskGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName taskName
     * @Type string
     * @var string|null
     */
    private $taskName = null;

    /**
     * @ElementName startTimestamp
     * @Type string
     * @var string|null
     */
    private $startTimestamp = null;

    /**
     * @ElementName maxDurationHours
     * @Type int
     * @var int|null
     */
    private $maxDurationHours = null;

    /**
     * @ElementName sendReportEmail
     * @Type bool
     * @var bool|null
     */
    private $sendReportEmail = null;

    /**
     * @ElementName reportDeliveryEmailAddress
     * @Type string
     * @var string|null
     */
    private $reportDeliveryEmailAddress = null;

    /**
     * @ElementName abortOnError
     * @Type bool
     * @var bool|null
     */
    private $abortOnError = null;

    /**
     * @ElementName abortErrorThreshold
     * @Type int
     * @var int|null
     */
    private $abortErrorThreshold = null;

    /**
     * @ElementName reportAllUsers
     * @Type bool
     * @var bool|null
     */
    private $reportAllUsers = null;

    /**
     * @ElementName automaticallyIncrementServiceQuantity
     * @Type bool
     * @var bool|null
     */
    private $automaticallyIncrementServiceQuantity = null;

    /**
     * @ElementName errorCount
     * @Type int
     * @var int|null
     */
    private $errorCount = null;

    /**
     * @ElementName status
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServicePackMigrationTaskStatus
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServicePackMigrationTaskStatus|null
     */
    private $status = null;

    /**
     * @ElementName groupsProcessed
     * @Type int
     * @var int|null
     */
    private $groupsProcessed = null;

    /**
     * @ElementName groupsTotal
     * @Type int
     * @var int|null
     */
    private $groupsTotal = null;

    /**
     * @ElementName usersProcessed
     * @Type int
     * @var int|null
     */
    private $usersProcessed = null;

    /**
     * @ElementName usersTotal
     * @Type int
     * @var int|null
     */
    private $usersTotal = null;

    /**
     * @ElementName userSelectionType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServicePackMigrationTaskUserSelectionType
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServicePackMigrationTaskUserSelectionType|null
     */
    private $userSelectionType = null;

    /**
     * @ElementName reportFilePathName
     * @Type string
     * @var string|null
     */
    private $reportFilePathName = null;

    /**
     * @ElementName groupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupTable = null;

    /**
     * @ElementName userSelectionServicePackName
     * @Type string
     * @Array
     * @var string[]
     */
    private $userSelectionServicePackName = array(
        
    );

    /**
     * @ElementName userSelectionServiceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    private $userSelectionServiceName = array(
        
    );

    /**
     * @ElementName removeServicePackName
     * @Type string
     * @Array
     * @var string[]
     */
    private $removeServicePackName = array(
        
    );

    /**
     * @ElementName removeServiceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    private $removeServiceName = array(
        
    );

    /**
     * @ElementName assignServicePackName
     * @Type string
     * @Array
     * @var string[]
     */
    private $assignServicePackName = array(
        
    );

    /**
     * @ElementName assignServiceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    private $assignServiceName = array(
        
    );

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
     * Getter for startTimestamp
     *
     * @return string
     */
    public function getStartTimestamp()
    {
        return $this->startTimestamp instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startTimestamp;
    }

    /**
     * Setter for startTimestamp
     *
     * @param string $startTimestamp
     * @return $this
     */
    public function setStartTimestamp($startTimestamp)
    {
        $this->startTimestamp = $startTimestamp;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartTimestamp()
    {
        $this->startTimestamp = null;
        return $this;
    }

    /**
     * Getter for maxDurationHours
     *
     * @return int
     */
    public function getMaxDurationHours()
    {
        return $this->maxDurationHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxDurationHours;
    }

    /**
     * Setter for maxDurationHours
     *
     * @param int $maxDurationHours
     * @return $this
     */
    public function setMaxDurationHours($maxDurationHours)
    {
        $this->maxDurationHours = $maxDurationHours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxDurationHours()
    {
        $this->maxDurationHours = null;
        return $this;
    }

    /**
     * Getter for sendReportEmail
     *
     * @return bool
     */
    public function getSendReportEmail()
    {
        return $this->sendReportEmail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendReportEmail;
    }

    /**
     * Setter for sendReportEmail
     *
     * @param bool $sendReportEmail
     * @return $this
     */
    public function setSendReportEmail($sendReportEmail)
    {
        $this->sendReportEmail = $sendReportEmail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendReportEmail()
    {
        $this->sendReportEmail = null;
        return $this;
    }

    /**
     * Getter for reportDeliveryEmailAddress
     *
     * @return string
     */
    public function getReportDeliveryEmailAddress()
    {
        return $this->reportDeliveryEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportDeliveryEmailAddress;
    }

    /**
     * Setter for reportDeliveryEmailAddress
     *
     * @param string $reportDeliveryEmailAddress
     * @return $this
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress)
    {
        $this->reportDeliveryEmailAddress = $reportDeliveryEmailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportDeliveryEmailAddress()
    {
        $this->reportDeliveryEmailAddress = null;
        return $this;
    }

    /**
     * Getter for abortOnError
     *
     * @return bool
     */
    public function getAbortOnError()
    {
        return $this->abortOnError instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->abortOnError;
    }

    /**
     * Setter for abortOnError
     *
     * @param bool $abortOnError
     * @return $this
     */
    public function setAbortOnError($abortOnError)
    {
        $this->abortOnError = $abortOnError;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAbortOnError()
    {
        $this->abortOnError = null;
        return $this;
    }

    /**
     * Getter for abortErrorThreshold
     *
     * @return int
     */
    public function getAbortErrorThreshold()
    {
        return $this->abortErrorThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->abortErrorThreshold;
    }

    /**
     * Setter for abortErrorThreshold
     *
     * @param int $abortErrorThreshold
     * @return $this
     */
    public function setAbortErrorThreshold($abortErrorThreshold)
    {
        $this->abortErrorThreshold = $abortErrorThreshold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAbortErrorThreshold()
    {
        $this->abortErrorThreshold = null;
        return $this;
    }

    /**
     * Getter for reportAllUsers
     *
     * @return bool
     */
    public function getReportAllUsers()
    {
        return $this->reportAllUsers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportAllUsers;
    }

    /**
     * Setter for reportAllUsers
     *
     * @param bool $reportAllUsers
     * @return $this
     */
    public function setReportAllUsers($reportAllUsers)
    {
        $this->reportAllUsers = $reportAllUsers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportAllUsers()
    {
        $this->reportAllUsers = null;
        return $this;
    }

    /**
     * Getter for automaticallyIncrementServiceQuantity
     *
     * @return bool
     */
    public function getAutomaticallyIncrementServiceQuantity()
    {
        return $this->automaticallyIncrementServiceQuantity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->automaticallyIncrementServiceQuantity;
    }

    /**
     * Setter for automaticallyIncrementServiceQuantity
     *
     * @param bool $automaticallyIncrementServiceQuantity
     * @return $this
     */
    public function setAutomaticallyIncrementServiceQuantity($automaticallyIncrementServiceQuantity)
    {
        $this->automaticallyIncrementServiceQuantity = $automaticallyIncrementServiceQuantity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAutomaticallyIncrementServiceQuantity()
    {
        $this->automaticallyIncrementServiceQuantity = null;
        return $this;
    }

    /**
     * Getter for errorCount
     *
     * @return int
     */
    public function getErrorCount()
    {
        return $this->errorCount instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->errorCount;
    }

    /**
     * Setter for errorCount
     *
     * @param int $errorCount
     * @return $this
     */
    public function setErrorCount($errorCount)
    {
        $this->errorCount = $errorCount;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetErrorCount()
    {
        $this->errorCount = null;
        return $this;
    }

    /**
     * Getter for status
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServicePackMigrationTaskStatus
     */
    public function getStatus()
    {
        return $this->status instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->status;
    }

    /**
     * Setter for status
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServicePackMigrationTaskStatus $status
     * @return $this
     */
    public function setStatus(\CWM\BroadWorksConnector\Ocip\Models\ServicePackMigrationTaskStatus $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatus()
    {
        $this->status = null;
        return $this;
    }

    /**
     * Getter for groupsProcessed
     *
     * @return int
     */
    public function getGroupsProcessed()
    {
        return $this->groupsProcessed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupsProcessed;
    }

    /**
     * Setter for groupsProcessed
     *
     * @param int $groupsProcessed
     * @return $this
     */
    public function setGroupsProcessed($groupsProcessed)
    {
        $this->groupsProcessed = $groupsProcessed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupsProcessed()
    {
        $this->groupsProcessed = null;
        return $this;
    }

    /**
     * Getter for groupsTotal
     *
     * @return int
     */
    public function getGroupsTotal()
    {
        return $this->groupsTotal instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupsTotal;
    }

    /**
     * Setter for groupsTotal
     *
     * @param int $groupsTotal
     * @return $this
     */
    public function setGroupsTotal($groupsTotal)
    {
        $this->groupsTotal = $groupsTotal;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupsTotal()
    {
        $this->groupsTotal = null;
        return $this;
    }

    /**
     * Getter for usersProcessed
     *
     * @return int
     */
    public function getUsersProcessed()
    {
        return $this->usersProcessed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->usersProcessed;
    }

    /**
     * Setter for usersProcessed
     *
     * @param int $usersProcessed
     * @return $this
     */
    public function setUsersProcessed($usersProcessed)
    {
        $this->usersProcessed = $usersProcessed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUsersProcessed()
    {
        $this->usersProcessed = null;
        return $this;
    }

    /**
     * Getter for usersTotal
     *
     * @return int
     */
    public function getUsersTotal()
    {
        return $this->usersTotal instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->usersTotal;
    }

    /**
     * Setter for usersTotal
     *
     * @param int $usersTotal
     * @return $this
     */
    public function setUsersTotal($usersTotal)
    {
        $this->usersTotal = $usersTotal;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUsersTotal()
    {
        $this->usersTotal = null;
        return $this;
    }

    /**
     * Getter for userSelectionType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServicePackMigrationTaskUserSelectionType
     */
    public function getUserSelectionType()
    {
        return $this->userSelectionType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userSelectionType;
    }

    /**
     * Setter for userSelectionType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServicePackMigrationTaskUserSelectionType $userSelectionType
     * @return $this
     */
    public function setUserSelectionType(\CWM\BroadWorksConnector\Ocip\Models\ServicePackMigrationTaskUserSelectionType $userSelectionType)
    {
        $this->userSelectionType = $userSelectionType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserSelectionType()
    {
        $this->userSelectionType = null;
        return $this;
    }

    /**
     * Getter for reportFilePathName
     *
     * @return string
     */
    public function getReportFilePathName()
    {
        return $this->reportFilePathName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportFilePathName;
    }

    /**
     * Setter for reportFilePathName
     *
     * @param string $reportFilePathName
     * @return $this
     */
    public function setReportFilePathName($reportFilePathName)
    {
        $this->reportFilePathName = $reportFilePathName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportFilePathName()
    {
        $this->reportFilePathName = null;
        return $this;
    }

    /**
     * Getter for groupTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getGroupTable()
    {
        return $this->groupTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupTable;
    }

    /**
     * Setter for groupTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupTable
     * @return $this
     */
    public function setGroupTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupTable)
    {
        $this->groupTable = $groupTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupTable()
    {
        $this->groupTable = null;
        return $this;
    }

    /**
     * Getter for userSelectionServicePackName
     *
     * @return string[]
     */
    public function getUserSelectionServicePackName()
    {
        return $this->userSelectionServicePackName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userSelectionServicePackName;
    }

    /**
     * Setter for userSelectionServicePackName
     *
     * @param string[] $userSelectionServicePackName
     * @return $this
     */
    public function setUserSelectionServicePackName(array $userSelectionServicePackName)
    {
        $this->userSelectionServicePackName = $userSelectionServicePackName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserSelectionServicePackName()
    {
        $this->userSelectionServicePackName = null;
        return $this;
    }

    /**
     * Adder for userSelectionServicePackName
     *
     * @param string $userSelectionServicePackName
     * @return $this
     */
    public function addUserSelectionServicePackName(string $userSelectionServicePackName)
    {
        $this->userSelectionServicePackName[] = $userSelectionServicePackName;
        return $this;
    }

    /**
     * Getter for userSelectionServiceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    public function getUserSelectionServiceName()
    {
        return $this->userSelectionServiceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userSelectionServiceName;
    }

    /**
     * Setter for userSelectionServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService[] $userSelectionServiceName
     * @return $this
     */
    public function setUserSelectionServiceName(array $userSelectionServiceName)
    {
        $this->userSelectionServiceName = $userSelectionServiceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserSelectionServiceName()
    {
        $this->userSelectionServiceName = null;
        return $this;
    }

    /**
     * Adder for userSelectionServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $userSelectionServiceName
     * @return $this
     */
    public function addUserSelectionServiceName($userSelectionServiceName)
    {
        $this->userSelectionServiceName[] = $userSelectionServiceName;
        return $this;
    }

    /**
     * Getter for removeServicePackName
     *
     * @return string[]
     */
    public function getRemoveServicePackName()
    {
        return $this->removeServicePackName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->removeServicePackName;
    }

    /**
     * Setter for removeServicePackName
     *
     * @param string[] $removeServicePackName
     * @return $this
     */
    public function setRemoveServicePackName(array $removeServicePackName)
    {
        $this->removeServicePackName = $removeServicePackName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRemoveServicePackName()
    {
        $this->removeServicePackName = null;
        return $this;
    }

    /**
     * Adder for removeServicePackName
     *
     * @param string $removeServicePackName
     * @return $this
     */
    public function addRemoveServicePackName(string $removeServicePackName)
    {
        $this->removeServicePackName[] = $removeServicePackName;
        return $this;
    }

    /**
     * Getter for removeServiceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    public function getRemoveServiceName()
    {
        return $this->removeServiceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->removeServiceName;
    }

    /**
     * Setter for removeServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService[] $removeServiceName
     * @return $this
     */
    public function setRemoveServiceName(array $removeServiceName)
    {
        $this->removeServiceName = $removeServiceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRemoveServiceName()
    {
        $this->removeServiceName = null;
        return $this;
    }

    /**
     * Adder for removeServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $removeServiceName
     * @return $this
     */
    public function addRemoveServiceName($removeServiceName)
    {
        $this->removeServiceName[] = $removeServiceName;
        return $this;
    }

    /**
     * Getter for assignServicePackName
     *
     * @return string[]
     */
    public function getAssignServicePackName()
    {
        return $this->assignServicePackName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assignServicePackName;
    }

    /**
     * Setter for assignServicePackName
     *
     * @param string[] $assignServicePackName
     * @return $this
     */
    public function setAssignServicePackName(array $assignServicePackName)
    {
        $this->assignServicePackName = $assignServicePackName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssignServicePackName()
    {
        $this->assignServicePackName = null;
        return $this;
    }

    /**
     * Adder for assignServicePackName
     *
     * @param string $assignServicePackName
     * @return $this
     */
    public function addAssignServicePackName(string $assignServicePackName)
    {
        $this->assignServicePackName[] = $assignServicePackName;
        return $this;
    }

    /**
     * Getter for assignServiceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    public function getAssignServiceName()
    {
        return $this->assignServiceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assignServiceName;
    }

    /**
     * Setter for assignServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService[] $assignServiceName
     * @return $this
     */
    public function setAssignServiceName(array $assignServiceName)
    {
        $this->assignServiceName = $assignServiceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssignServiceName()
    {
        $this->assignServiceName = null;
        return $this;
    }

    /**
     * Adder for assignServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $assignServiceName
     * @return $this
     */
    public function addAssignServiceName($assignServiceName)
    {
        $this->assignServiceName[] = $assignServiceName;
        return $this;
    }


}

