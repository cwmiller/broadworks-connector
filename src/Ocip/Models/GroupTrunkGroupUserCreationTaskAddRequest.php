<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupUserCreationTaskAddRequest
 *
 * Add a user creation task for a trunk group.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:13999","type":"sequence","children":[{"id":"1a79c7896cb04feac6eff47a5321756e:14010","type":"choice","children":[{"id":"1a79c7896cb04feac6eff47a5321756e:14014","type":"sequence"},{"id":"1a79c7896cb04feac6eff47a5321756e:14023","type":"sequence"}]}]}]
 */
class GroupTrunkGroupUserCreationTaskAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:13999
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName taskName
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:13999
     * @var string|null
     */
    private $taskName = null;

    /**
     * @ElementName userIdFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationUserIdFormat
     * @Group 1a79c7896cb04feac6eff47a5321756e:13999
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationUserIdFormat|null
     */
    private $userIdFormat = null;

    /**
     * @ElementName userIdDomain
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:13999
     * @var string|null
     */
    private $userIdDomain = null;

    /**
     * @ElementName populateExtension
     * @Type bool
     * @Group 1a79c7896cb04feac6eff47a5321756e:13999
     * @var bool|null
     */
    private $populateExtension = null;

    /**
     * @ElementName linePortFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat
     * @Group 1a79c7896cb04feac6eff47a5321756e:13999
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat|null
     */
    private $linePortFormat = null;

    /**
     * @ElementName linePortDomain
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:13999
     * @var string|null
     */
    private $linePortDomain = null;

    /**
     * @ElementName populateContact
     * @Type bool
     * @Group 1a79c7896cb04feac6eff47a5321756e:13999
     * @var bool|null
     */
    private $populateContact = null;

    /**
     * @ElementName contactFormat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:13999
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupUserCreationSIPURIFormat|null
     */
    private $contactFormat = null;

    /**
     * @ElementName contactDomain
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:13999
     * @var string|null
     */
    private $contactDomain = null;

    /**
     * @ElementName userPhoneNumbers
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequestUserPhoneNumbers
     * @Group 1a79c7896cb04feac6eff47a5321756e:14010
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequestUserPhoneNumbers|null
     */
    private $userPhoneNumbers = null;

    /**
     * @ElementName userExtensions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequestUserExtensions
     * @Group 1a79c7896cb04feac6eff47a5321756e:14010
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequestUserExtensions|null
     */
    private $userExtensions = null;

    /**
     * @ElementName servicePackName
     * @Type string
     * @Array
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:13999
     * @var string[]
     */
    private $servicePackName = array(
        
    );

    /**
     * @ElementName userService
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Array
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:13999
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    private $userService = array(
        
    );

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequestUserPhoneNumbers
     */
    public function getUserPhoneNumbers()
    {
        return $this->userPhoneNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userPhoneNumbers;
    }

    /**
     * Setter for userPhoneNumbers
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequestUserPhoneNumbers $userPhoneNumbers
     * @return $this
     */
    public function setUserPhoneNumbers(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequestUserPhoneNumbers $userPhoneNumbers)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequestUserExtensions
     */
    public function getUserExtensions()
    {
        return $this->userExtensions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userExtensions;
    }

    /**
     * Setter for userExtensions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequestUserExtensions $userExtensions
     * @return $this
     */
    public function setUserExtensions(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequestUserExtensions $userExtensions)
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

