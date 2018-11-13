<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupUserCreationTaskAddRequest14sp4
 *
 * Add a user creation task for a trunk group.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupTrunkGroupUserCreationTaskAddRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName trunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    private $trunkGroupKey = null;

    /**
     * @ElementName taskName
     * @Type string
     * @var string|null
     */
    private $taskName = null;

    /**
     * @ElementName userIdFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationUserIdFormat
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationUserIdFormat|null
     */
    private $userIdFormat = null;

    /**
     * @ElementName userIdDomain
     * @Type string
     * @var string|null
     */
    private $userIdDomain = null;

    /**
     * @ElementName populateExtension
     * @Type bool
     * @var bool|null
     */
    private $populateExtension = null;

    /**
     * @ElementName linePortFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat|null
     */
    private $linePortFormat = null;

    /**
     * @ElementName linePortDomain
     * @Type string
     * @var string|null
     */
    private $linePortDomain = null;

    /**
     * @ElementName populateContact
     * @Type bool
     * @var bool|null
     */
    private $populateContact = null;

    /**
     * @ElementName contactFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat|null
     */
    private $contactFormat = null;

    /**
     * @ElementName contactDomain
     * @Type string
     * @var string|null
     */
    private $contactDomain = null;

    /**
     * @ElementName userPhoneNumbers
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4UserPhoneNumbers
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4UserPhoneNumbers|null
     */
    private $userPhoneNumbers = null;

    /**
     * @ElementName userExtensions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4UserExtensions
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4UserExtensions|null
     */
    private $userExtensions = null;

    /**
     * @ElementName servicePackName
     * @Type string
     * @Array
     * @var string[]
     */
    private $servicePackName = array(
        
    );

    /**
     * @ElementName userService
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    private $userService = array(
        
    );

    /**
     * Getter for trunkGroupKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     */
    public function getTrunkGroupKey()
    {
        return $this->trunkGroupKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupKey;
    }

    /**
     * Setter for trunkGroupKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $trunkGroupKey
     * @return $this
     */
    public function setTrunkGroupKey(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $trunkGroupKey)
    {
        $this->trunkGroupKey = $trunkGroupKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupKey()
    {
        $this->trunkGroupKey = null;
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
     * Getter for userPhoneNumbers
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4UserPhoneNumbers
     */
    public function getUserPhoneNumbers()
    {
        return $this->userPhoneNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userPhoneNumbers;
    }

    /**
     * Setter for userPhoneNumbers
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4UserPhoneNumbers $userPhoneNumbers
     * @return $this
     */
    public function setUserPhoneNumbers(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4UserPhoneNumbers $userPhoneNumbers)
    {
        $this->userPhoneNumbers = $userPhoneNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserPhoneNumbers()
    {
        $this->userPhoneNumbers = null;
        return $this;
    }

    /**
     * Getter for userExtensions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4UserExtensions
     */
    public function getUserExtensions()
    {
        return $this->userExtensions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userExtensions;
    }

    /**
     * Setter for userExtensions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4UserExtensions $userExtensions
     * @return $this
     */
    public function setUserExtensions(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4UserExtensions $userExtensions)
    {
        $this->userExtensions = $userExtensions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserExtensions()
    {
        $this->userExtensions = null;
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
     * Getter for userService
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    public function getUserService()
    {
        return $this->userService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userService;
    }

    /**
     * Setter for userService
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService[] $userService
     * @return $this
     */
    public function setUserService(array $userService)
    {
        $this->userService = $userService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserService()
    {
        $this->userService = null;
        return $this;
    }

    /**
     * Adder for userService
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $userService
     * @return $this
     */
    public function addUserService($userService)
    {
        $this->userService[] = $userService;
        return $this;
    }


}

