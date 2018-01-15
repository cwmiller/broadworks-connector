<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupUserCreationTaskAddRequest14sp4
 *
 * Add a user creation task for a trunk group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupTrunkGroupUserCreationTaskAddRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName trunkGroupKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    private $trunkGroupKey = null;

    /**
     * @ElementName taskName
     * @var string|null
     */
    private $taskName = null;

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
     * @ElementName userPhoneNumbers
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4\UserPhoneNumbers|null
     */
    private $userPhoneNumbers = null;

    /**
     * @ElementName userExtensions
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4\UserExtensions|null
     */
    private $userExtensions = null;

    /**
     * @ElementName servicePackName
     * @var string[]
     */
    private $servicePackName = array(
        
    );

    /**
     * @ElementName userService
     * @var string[]
     */
    private $userService = array(
        
    );

    /**
     * Getter for trunkGroupKey
     *
     * @ElementName trunkGroupKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    public function getTrunkGroupKey()
    {
        return $this->trunkGroupKey;
    }

    /**
     * Setter for trunkGroupKey
     *
     * @ElementName trunkGroupKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null $trunkGroupKey
     * @return $this
     */
    public function setTrunkGroupKey($trunkGroupKey)
    {
        $this->trunkGroupKey = $trunkGroupKey;
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
     * Getter for userPhoneNumbers
     *
     * @ElementName userPhoneNumbers
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4\UserPhoneNumbers|null
     */
    public function getUserPhoneNumbers()
    {
        return $this->userPhoneNumbers;
    }

    /**
     * Setter for userPhoneNumbers
     *
     * @ElementName userPhoneNumbers
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4\UserPhoneNumbers|null $userPhoneNumbers
     * @return $this
     */
    public function setUserPhoneNumbers($userPhoneNumbers)
    {
        $this->userPhoneNumbers = $userPhoneNumbers;
        return $this;
    }

    /**
     * Getter for userExtensions
     *
     * @ElementName userExtensions
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4\UserExtensions|null
     */
    public function getUserExtensions()
    {
        return $this->userExtensions;
    }

    /**
     * Setter for userExtensions
     *
     * @ElementName userExtensions
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4\UserExtensions|null $userExtensions
     * @return $this
     */
    public function setUserExtensions($userExtensions)
    {
        $this->userExtensions = $userExtensions;
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
     * Getter for userService
     *
     * @ElementName userService
     * @return string[]
     */
    public function getUserService()
    {
        return $this->userService;
    }

    /**
     * Setter for userService
     *
     * @ElementName userService
     * @param string[] $userService
     * @return $this
     */
    public function setUserService($userService)
    {
        $this->userService = $userService;
        return $this;
    }

    /**
     * Adder for userService
     *
     * @ElementName userService
     * @param string $userService
     * @return $this
     */
    public function addUserService($userService)
    {
        $this->userService []= $userService;
        return $this;
    }


}

