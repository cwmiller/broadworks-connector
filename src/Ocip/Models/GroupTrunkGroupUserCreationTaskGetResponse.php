<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupUserCreationTaskGetResponse
 *
 * Response to a GroupTrunkGroupUserCreationTaskGetRequest.
 *
 * @see GroupTrunkGroupUserCreationTaskGetRequest
 */
class GroupTrunkGroupUserCreationTaskGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userIdFormat
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationUserIdFormat|null
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
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat|null
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
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat|null
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
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    private $userServiceName = array(
        
    );

    /**
     * @ElementName status
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationTaskStatus|null
     */
    private $status = null;

    /**
     * @ElementName userCreationMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationMode|null
     */
    private $userCreationMode = null;

    /**
     * @ElementName taskSummary
     * @var string|null
     */
    private $taskSummary = null;

    /**
     * Getter for userIdFormat
     *
     * @ElementName userIdFormat
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationUserIdFormat|null
     */
    public function getUserIdFormat()
    {
        return $this->userIdFormat;
    }

    /**
     * Setter for userIdFormat
     *
     * @ElementName userIdFormat
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationUserIdFormat|null $userIdFormat
     * @return $this
     */
    public function setUserIdFormat(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationUserIdFormat $userIdFormat)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat|null
     */
    public function getLinePortFormat()
    {
        return $this->linePortFormat;
    }

    /**
     * Setter for linePortFormat
     *
     * @ElementName linePortFormat
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat|null $linePortFormat
     * @return $this
     */
    public function setLinePortFormat(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat $linePortFormat)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat|null
     */
    public function getContactFormat()
    {
        return $this->contactFormat;
    }

    /**
     * Setter for contactFormat
     *
     * @ElementName contactFormat
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat|null $contactFormat
     * @return $this
     */
    public function setContactFormat(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat $contactFormat)
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
    public function setServicePackName(array $servicePackName)
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
    public function addServicePackName(string $servicePackName)
    {
        $this->servicePackName []= $servicePackName;
        return $this;
    }

    /**
     * Getter for userServiceName
     *
     * @ElementName userServiceName
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    public function getUserServiceName()
    {
        return $this->userServiceName;
    }

    /**
     * Setter for userServiceName
     *
     * @ElementName userServiceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService[] $userServiceName
     * @return $this
     */
    public function setUserServiceName(array $userServiceName)
    {
        $this->userServiceName = $userServiceName;
        return $this;
    }

    /**
     * Adder for userServiceName
     *
     * @ElementName userServiceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $userServiceName
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationTaskStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Setter for status
     *
     * @ElementName status
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationTaskStatus|null $status
     * @return $this
     */
    public function setStatus(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationTaskStatus $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Getter for userCreationMode
     *
     * @ElementName userCreationMode
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationMode|null
     */
    public function getUserCreationMode()
    {
        return $this->userCreationMode;
    }

    /**
     * Setter for userCreationMode
     *
     * @ElementName userCreationMode
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationMode|null $userCreationMode
     * @return $this
     */
    public function setUserCreationMode(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationMode $userCreationMode)
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


}

