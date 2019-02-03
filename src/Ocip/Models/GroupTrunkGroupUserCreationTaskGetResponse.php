<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupUserCreationTaskGetResponse
 *
 * Response to a GroupTrunkGroupUserCreationTaskGetRequest.
 *
 * @see GroupTrunkGroupUserCreationTaskGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:3172","type":"sequence"}]
 */
class GroupTrunkGroupUserCreationTaskGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userIdFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationUserIdFormat
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3172
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationUserIdFormat|null
     */
    private $userIdFormat = null;

    /**
     * @ElementName userIdDomain
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3172
     * @var string|null
     */
    private $userIdDomain = null;

    /**
     * @ElementName populateExtension
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3172
     * @var bool|null
     */
    private $populateExtension = null;

    /**
     * @ElementName linePortFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3172
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat|null
     */
    private $linePortFormat = null;

    /**
     * @ElementName linePortDomain
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3172
     * @var string|null
     */
    private $linePortDomain = null;

    /**
     * @ElementName populateContact
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3172
     * @var bool|null
     */
    private $populateContact = null;

    /**
     * @ElementName contactFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3172
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat|null
     */
    private $contactFormat = null;

    /**
     * @ElementName contactDomain
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3172
     * @var string|null
     */
    private $contactDomain = null;

    /**
     * @ElementName usersCreated
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3172
     * @var int|null
     */
    private $usersCreated = null;

    /**
     * @ElementName totalUsersToCreate
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3172
     * @var int|null
     */
    private $totalUsersToCreate = null;

    /**
     * @ElementName errorCount
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3172
     * @var int|null
     */
    private $errorCount = null;

    /**
     * @ElementName servicePackName
     * @Type string
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3172
     * @var string[]
     */
    private $servicePackName = array(
        
    );

    /**
     * @ElementName userServiceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3172
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    private $userServiceName = array(
        
    );

    /**
     * @ElementName status
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationTaskStatus
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3172
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationTaskStatus|null
     */
    private $status = null;

    /**
     * @ElementName userCreationMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationMode
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3172
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationMode|null
     */
    private $userCreationMode = null;

    /**
     * @ElementName taskSummary
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3172
     * @var string|null
     */
    private $taskSummary = null;

    /**
     * Getter for userIdFormat
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationUserIdFormat
     */
    public function getUserIdFormat()
    {
        return $this->userIdFormat instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userIdFormat;
    }

    /**
     * Setter for userIdFormat
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationUserIdFormat $userIdFormat
     * @return $this
     */
    public function setUserIdFormat(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationUserIdFormat $userIdFormat)
    {
        $this->userIdFormat = $userIdFormat;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserIdFormat()
    {
        $this->userIdFormat = null;
        return $this;
    }

    /**
     * Getter for userIdDomain
     *
     * @return string
     */
    public function getUserIdDomain()
    {
        return $this->userIdDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userIdDomain;
    }

    /**
     * Setter for userIdDomain
     *
     * @param string $userIdDomain
     * @return $this
     */
    public function setUserIdDomain($userIdDomain)
    {
        $this->userIdDomain = $userIdDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserIdDomain()
    {
        $this->userIdDomain = null;
        return $this;
    }

    /**
     * Getter for populateExtension
     *
     * @return bool
     */
    public function getPopulateExtension()
    {
        return $this->populateExtension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->populateExtension;
    }

    /**
     * Setter for populateExtension
     *
     * @param bool $populateExtension
     * @return $this
     */
    public function setPopulateExtension($populateExtension)
    {
        $this->populateExtension = $populateExtension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPopulateExtension()
    {
        $this->populateExtension = null;
        return $this;
    }

    /**
     * Getter for linePortFormat
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat
     */
    public function getLinePortFormat()
    {
        return $this->linePortFormat instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->linePortFormat;
    }

    /**
     * Setter for linePortFormat
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat $linePortFormat
     * @return $this
     */
    public function setLinePortFormat(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat $linePortFormat)
    {
        $this->linePortFormat = $linePortFormat;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLinePortFormat()
    {
        $this->linePortFormat = null;
        return $this;
    }

    /**
     * Getter for linePortDomain
     *
     * @return string
     */
    public function getLinePortDomain()
    {
        return $this->linePortDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->linePortDomain;
    }

    /**
     * Setter for linePortDomain
     *
     * @param string $linePortDomain
     * @return $this
     */
    public function setLinePortDomain($linePortDomain)
    {
        $this->linePortDomain = $linePortDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLinePortDomain()
    {
        $this->linePortDomain = null;
        return $this;
    }

    /**
     * Getter for populateContact
     *
     * @return bool
     */
    public function getPopulateContact()
    {
        return $this->populateContact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->populateContact;
    }

    /**
     * Setter for populateContact
     *
     * @param bool $populateContact
     * @return $this
     */
    public function setPopulateContact($populateContact)
    {
        $this->populateContact = $populateContact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPopulateContact()
    {
        $this->populateContact = null;
        return $this;
    }

    /**
     * Getter for contactFormat
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat
     */
    public function getContactFormat()
    {
        return $this->contactFormat instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contactFormat;
    }

    /**
     * Setter for contactFormat
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat $contactFormat
     * @return $this
     */
    public function setContactFormat(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat $contactFormat)
    {
        $this->contactFormat = $contactFormat;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContactFormat()
    {
        $this->contactFormat = null;
        return $this;
    }

    /**
     * Getter for contactDomain
     *
     * @return string
     */
    public function getContactDomain()
    {
        return $this->contactDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contactDomain;
    }

    /**
     * Setter for contactDomain
     *
     * @param string $contactDomain
     * @return $this
     */
    public function setContactDomain($contactDomain)
    {
        $this->contactDomain = $contactDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContactDomain()
    {
        $this->contactDomain = null;
        return $this;
    }

    /**
     * Getter for usersCreated
     *
     * @return int
     */
    public function getUsersCreated()
    {
        return $this->usersCreated instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->usersCreated;
    }

    /**
     * Setter for usersCreated
     *
     * @param int $usersCreated
     * @return $this
     */
    public function setUsersCreated($usersCreated)
    {
        $this->usersCreated = $usersCreated;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUsersCreated()
    {
        $this->usersCreated = null;
        return $this;
    }

    /**
     * Getter for totalUsersToCreate
     *
     * @return int
     */
    public function getTotalUsersToCreate()
    {
        return $this->totalUsersToCreate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->totalUsersToCreate;
    }

    /**
     * Setter for totalUsersToCreate
     *
     * @param int $totalUsersToCreate
     * @return $this
     */
    public function setTotalUsersToCreate($totalUsersToCreate)
    {
        $this->totalUsersToCreate = $totalUsersToCreate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTotalUsersToCreate()
    {
        $this->totalUsersToCreate = null;
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
     * Getter for servicePackName
     *
     * @return string[]
     */
    public function getServicePackName()
    {
        return $this->servicePackName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @param string[] $servicePackName
     * @return $this
     */
    public function setServicePackName(array $servicePackName)
    {
        $this->servicePackName = $servicePackName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackName()
    {
        $this->servicePackName = null;
        return $this;
    }

    /**
     * Adder for servicePackName
     *
     * @param string $servicePackName
     * @return $this
     */
    public function addServicePackName(string $servicePackName)
    {
        $this->servicePackName[] = $servicePackName;
        return $this;
    }

    /**
     * Getter for userServiceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    public function getUserServiceName()
    {
        return $this->userServiceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServiceName;
    }

    /**
     * Setter for userServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService[] $userServiceName
     * @return $this
     */
    public function setUserServiceName(array $userServiceName)
    {
        $this->userServiceName = $userServiceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserServiceName()
    {
        $this->userServiceName = null;
        return $this;
    }

    /**
     * Adder for userServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $userServiceName
     * @return $this
     */
    public function addUserServiceName($userServiceName)
    {
        $this->userServiceName[] = $userServiceName;
        return $this;
    }

    /**
     * Getter for status
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationTaskStatus
     */
    public function getStatus()
    {
        return $this->status instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->status;
    }

    /**
     * Setter for status
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationTaskStatus $status
     * @return $this
     */
    public function setStatus(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationTaskStatus $status)
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
     * Getter for userCreationMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationMode
     */
    public function getUserCreationMode()
    {
        return $this->userCreationMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userCreationMode;
    }

    /**
     * Setter for userCreationMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationMode $userCreationMode
     * @return $this
     */
    public function setUserCreationMode(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationMode $userCreationMode)
    {
        $this->userCreationMode = $userCreationMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserCreationMode()
    {
        $this->userCreationMode = null;
        return $this;
    }

    /**
     * Getter for taskSummary
     *
     * @return string
     */
    public function getTaskSummary()
    {
        return $this->taskSummary instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->taskSummary;
    }

    /**
     * Setter for taskSummary
     *
     * @param string $taskSummary
     * @return $this
     */
    public function setTaskSummary($taskSummary)
    {
        $this->taskSummary = $taskSummary;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTaskSummary()
    {
        $this->taskSummary = null;
        return $this;
    }


}

