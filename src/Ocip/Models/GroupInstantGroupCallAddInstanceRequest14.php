<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInstantGroupCallAddInstanceRequest14
 *
 * Request to add an Instant Group Call service instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6c8b59f80404b6283b25be24c263cb12:46","type":"sequence"}]
 */
class GroupInstantGroupCallAddInstanceRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 6c8b59f80404b6283b25be24c263cb12:46
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 6c8b59f80404b6283b25be24c263cb12:46
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 6c8b59f80404b6283b25be24c263cb12:46
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile
     * @Group 6c8b59f80404b6283b25be24c263cb12:46
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName destinationPhoneNumber
     * @Type string
     * @Array
     * @Optional
     * @Group 6c8b59f80404b6283b25be24c263cb12:46
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $destinationPhoneNumber = [
        
    ];

    /**
     * @ElementName isAnswerTimeoutEnabled
     * @Type bool
     * @Group 6c8b59f80404b6283b25be24c263cb12:46
     * @var bool|null
     */
    protected $isAnswerTimeoutEnabled = null;

    /**
     * @ElementName answerTimeoutMinutes
     * @Type int
     * @Optional
     * @Group 6c8b59f80404b6283b25be24c263cb12:46
     * @MinInclusive 1
     * @MaxInclusive 60
     * @var int|null
     */
    protected $answerTimeoutMinutes = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 6c8b59f80404b6283b25be24c263cb12:46
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

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
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

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
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile $serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInstanceProfile()
    {
        $this->serviceInstanceProfile = null;
        return $this;
    }

    /**
     * Getter for destinationPhoneNumber
     *
     * @return string[]
     */
    public function getDestinationPhoneNumber()
    {
        return $this->destinationPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->destinationPhoneNumber;
    }

    /**
     * Setter for destinationPhoneNumber
     *
     * @param string[] $destinationPhoneNumber
     * @return $this
     */
    public function setDestinationPhoneNumber(array $destinationPhoneNumber)
    {
        $this->destinationPhoneNumber = $destinationPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDestinationPhoneNumber()
    {
        $this->destinationPhoneNumber = null;
        return $this;
    }

    /**
     * Adder for destinationPhoneNumber
     *
     * @param string $destinationPhoneNumber
     * @return $this
     */
    public function addDestinationPhoneNumber(string $destinationPhoneNumber)
    {
        $this->destinationPhoneNumber[] = $destinationPhoneNumber;
        return $this;
    }

    /**
     * Getter for isAnswerTimeoutEnabled
     *
     * @return bool
     */
    public function getIsAnswerTimeoutEnabled()
    {
        return $this->isAnswerTimeoutEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isAnswerTimeoutEnabled;
    }

    /**
     * Setter for isAnswerTimeoutEnabled
     *
     * @param bool $isAnswerTimeoutEnabled
     * @return $this
     */
    public function setIsAnswerTimeoutEnabled($isAnswerTimeoutEnabled)
    {
        $this->isAnswerTimeoutEnabled = $isAnswerTimeoutEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsAnswerTimeoutEnabled()
    {
        $this->isAnswerTimeoutEnabled = null;
        return $this;
    }

    /**
     * Getter for answerTimeoutMinutes
     *
     * @return int
     */
    public function getAnswerTimeoutMinutes()
    {
        return $this->answerTimeoutMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->answerTimeoutMinutes;
    }

    /**
     * Setter for answerTimeoutMinutes
     *
     * @param int $answerTimeoutMinutes
     * @return $this
     */
    public function setAnswerTimeoutMinutes($answerTimeoutMinutes)
    {
        $this->answerTimeoutMinutes = $answerTimeoutMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnswerTimeoutMinutes()
    {
        $this->answerTimeoutMinutes = null;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @return string
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }
}

