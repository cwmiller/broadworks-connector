<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupUserCreationTaskGetResponse14sp4
 *
 * Response to a GroupTrunkGroupUserCreationTaskGetRequest14sp4.
 *
 * @see GroupTrunkGroupUserCreationTaskGetRequest14sp4
 */
class GroupTrunkGroupUserCreationTaskGetResponse14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userIdFormat
     * @var string|null
     */
    private $userIdFormat = null;

    /**
     * @ElementName userIdDomain
     * @var string|null
     */
    private $userIdDomain = null;

    /**
     * @ElementName populateExtension
     * @var bool|null
     */
    private $populateExtension = null;

    /**
     * @ElementName linePortFormat
     * @var string|null
     */
    private $linePortFormat = null;

    /**
     * @ElementName linePortDomain
     * @var string|null
     */
    private $linePortDomain = null;

    /**
     * @ElementName populateContact
     * @var bool|null
     */
    private $populateContact = null;

    /**
     * @ElementName contactFormat
     * @var string|null
     */
    private $contactFormat = null;

    /**
     * @ElementName contactDomain
     * @var string|null
     */
    private $contactDomain = null;

    /**
     * @ElementName usersCreated
     * @var int|null
     */
    private $usersCreated = null;

    /**
     * @ElementName totalUsersToCreate
     * @var int|null
     */
    private $totalUsersToCreate = null;

    /**
     * @ElementName errorCount
     * @var int|null
     */
    private $errorCount = null;

    /**
     * @ElementName servicePackName
     * @var string[]
     */
    private $servicePackName = array(
        
    );

    /**
     * @ElementName userServiceName
     * @var string[]
     */
    private $userServiceName = array(
        
    );

    /**
     * @ElementName status
     * @var string|null
     */
    private $status = null;

    /**
     * @ElementName userCreationMode
     * @var string|null
     */
    private $userCreationMode = null;

    /**
     * @ElementName taskSummary
     * @var string|null
     */
    private $taskSummary = null;

    /**
     * @ElementName reportFileKey
     * @var string|null
     */
    private $reportFileKey = null;

    /**
     * Getter for userIdFormat
     *
     * @ElementName userIdFormat
     * @return string|null
     */
    public function getUserIdFormat()
    {
        return $this->userIdFormat;
    }

    /**
     * Setter for userIdFormat
     *
     * @ElementName userIdFormat
     * @param string|null $userIdFormat
     * @return $this
     */
    public function setUserIdFormat($userIdFormat)
    {
        $this->userIdFormat = $userIdFormat;
        return $this;
    }

    /**
     * Getter for userIdDomain
     *
     * @ElementName userIdDomain
     * @return string|null
     */
    public function getUserIdDomain()
    {
        return $this->userIdDomain;
    }

    /**
     * Setter for userIdDomain
     *
     * @ElementName userIdDomain
     * @param string|null $userIdDomain
     * @return $this
     */
    public function setUserIdDomain($userIdDomain)
    {
        $this->userIdDomain = $userIdDomain;
        return $this;
    }

    /**
     * Getter for populateExtension
     *
     * @ElementName populateExtension
     * @return bool|null
     */
    public function getPopulateExtension()
    {
        return $this->populateExtension;
    }

    /**
     * Setter for populateExtension
     *
     * @ElementName populateExtension
     * @param bool|null $populateExtension
     * @return $this
     */
    public function setPopulateExtension($populateExtension)
    {
        $this->populateExtension = $populateExtension;
        return $this;
    }

    /**
     * Getter for linePortFormat
     *
     * @ElementName linePortFormat
     * @return string|null
     */
    public function getLinePortFormat()
    {
        return $this->linePortFormat;
    }

    /**
     * Setter for linePortFormat
     *
     * @ElementName linePortFormat
     * @param string|null $linePortFormat
     * @return $this
     */
    public function setLinePortFormat($linePortFormat)
    {
        $this->linePortFormat = $linePortFormat;
        return $this;
    }

    /**
     * Getter for linePortDomain
     *
     * @ElementName linePortDomain
     * @return string|null
     */
    public function getLinePortDomain()
    {
        return $this->linePortDomain;
    }

    /**
     * Setter for linePortDomain
     *
     * @ElementName linePortDomain
     * @param string|null $linePortDomain
     * @return $this
     */
    public function setLinePortDomain($linePortDomain)
    {
        $this->linePortDomain = $linePortDomain;
        return $this;
    }

    /**
     * Getter for populateContact
     *
     * @ElementName populateContact
     * @return bool|null
     */
    public function getPopulateContact()
    {
        return $this->populateContact;
    }

    /**
     * Setter for populateContact
     *
     * @ElementName populateContact
     * @param bool|null $populateContact
     * @return $this
     */
    public function setPopulateContact($populateContact)
    {
        $this->populateContact = $populateContact;
        return $this;
    }

    /**
     * Getter for contactFormat
     *
     * @ElementName contactFormat
     * @return string|null
     */
    public function getContactFormat()
    {
        return $this->contactFormat;
    }

    /**
     * Setter for contactFormat
     *
     * @ElementName contactFormat
     * @param string|null $contactFormat
     * @return $this
     */
    public function setContactFormat($contactFormat)
    {
        $this->contactFormat = $contactFormat;
        return $this;
    }

    /**
     * Getter for contactDomain
     *
     * @ElementName contactDomain
     * @return string|null
     */
    public function getContactDomain()
    {
        return $this->contactDomain;
    }

    /**
     * Setter for contactDomain
     *
     * @ElementName contactDomain
     * @param string|null $contactDomain
     * @return $this
     */
    public function setContactDomain($contactDomain)
    {
        $this->contactDomain = $contactDomain;
        return $this;
    }

    /**
     * Getter for usersCreated
     *
     * @ElementName usersCreated
     * @return int|null
     */
    public function getUsersCreated()
    {
        return $this->usersCreated;
    }

    /**
     * Setter for usersCreated
     *
     * @ElementName usersCreated
     * @param int|null $usersCreated
     * @return $this
     */
    public function setUsersCreated($usersCreated)
    {
        $this->usersCreated = $usersCreated;
        return $this;
    }

    /**
     * Getter for totalUsersToCreate
     *
     * @ElementName totalUsersToCreate
     * @return int|null
     */
    public function getTotalUsersToCreate()
    {
        return $this->totalUsersToCreate;
    }

    /**
     * Setter for totalUsersToCreate
     *
     * @ElementName totalUsersToCreate
     * @param int|null $totalUsersToCreate
     * @return $this
     */
    public function setTotalUsersToCreate($totalUsersToCreate)
    {
        $this->totalUsersToCreate = $totalUsersToCreate;
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
     * Getter for servicePackName
     *
     * @ElementName servicePackName
     * @return string[]
     */
    public function getServicePackName()
    {
        return $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @ElementName servicePackName
     * @param string[] $servicePackName
     * @return $this
     */
    public function setServicePackName($servicePackName)
    {
        $this->servicePackName = $servicePackName;
        return $this;
    }

    /**
     * Adder for servicePackName
     *
     * @ElementName servicePackName
     * @param string $servicePackName
     * @return $this
     */
    public function addServicePackName($servicePackName)
    {
        $this->servicePackName []= $servicePackName;
        return $this;
    }

    /**
     * Getter for userServiceName
     *
     * @ElementName userServiceName
     * @return string[]
     */
    public function getUserServiceName()
    {
        return $this->userServiceName;
    }

    /**
     * Setter for userServiceName
     *
     * @ElementName userServiceName
     * @param string[] $userServiceName
     * @return $this
     */
    public function setUserServiceName($userServiceName)
    {
        $this->userServiceName = $userServiceName;
        return $this;
    }

    /**
     * Adder for userServiceName
     *
     * @ElementName userServiceName
     * @param string $userServiceName
     * @return $this
     */
    public function addUserServiceName($userServiceName)
    {
        $this->userServiceName []= $userServiceName;
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
     * Getter for userCreationMode
     *
     * @ElementName userCreationMode
     * @return string|null
     */
    public function getUserCreationMode()
    {
        return $this->userCreationMode;
    }

    /**
     * Setter for userCreationMode
     *
     * @ElementName userCreationMode
     * @param string|null $userCreationMode
     * @return $this
     */
    public function setUserCreationMode($userCreationMode)
    {
        $this->userCreationMode = $userCreationMode;
        return $this;
    }

    /**
     * Getter for taskSummary
     *
     * @ElementName taskSummary
     * @return string|null
     */
    public function getTaskSummary()
    {
        return $this->taskSummary;
    }

    /**
     * Setter for taskSummary
     *
     * @ElementName taskSummary
     * @param string|null $taskSummary
     * @return $this
     */
    public function setTaskSummary($taskSummary)
    {
        $this->taskSummary = $taskSummary;
        return $this;
    }

    /**
     * Getter for reportFileKey
     *
     * @ElementName reportFileKey
     * @return string|null
     */
    public function getReportFileKey()
    {
        return $this->reportFileKey;
    }

    /**
     * Setter for reportFileKey
     *
     * @ElementName reportFileKey
     * @param string|null $reportFileKey
     * @return $this
     */
    public function setReportFileKey($reportFileKey)
    {
        $this->reportFileKey = $reportFileKey;
        return $this;
    }


}

