<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCapacityManagementAddInstanceRequest
 *
 * Adds a Call Capacity Management group.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCallCapacityManagementAddInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName maxActiveCallsAllowed
     * @var int|null
     */
    private $maxActiveCallsAllowed = null;

    /**
     * @ElementName maxIncomingActiveCallsAllowed
     * @var int|null
     */
    private $maxIncomingActiveCallsAllowed = null;

    /**
     * @ElementName maxOutgoingActiveCallsAllowed
     * @var int|null
     */
    private $maxOutgoingActiveCallsAllowed = null;

    /**
     * @ElementName becomeDefaultGroupForNewUsers
     * @var bool|null
     */
    private $becomeDefaultGroupForNewUsers = null;

    /**
     * @ElementName userId
     * @var string[]
     */
    private $userId = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for maxActiveCallsAllowed
     *
     * @ElementName maxActiveCallsAllowed
     * @return int|null
     */
    public function getMaxActiveCallsAllowed()
    {
        return $this->maxActiveCallsAllowed;
    }

    /**
     * Setter for maxActiveCallsAllowed
     *
     * @ElementName maxActiveCallsAllowed
     * @param int|null $maxActiveCallsAllowed
     * @return $this
     */
    public function setMaxActiveCallsAllowed($maxActiveCallsAllowed)
    {
        $this->maxActiveCallsAllowed = $maxActiveCallsAllowed;
        return $this;
    }

    /**
     * Getter for maxIncomingActiveCallsAllowed
     *
     * @ElementName maxIncomingActiveCallsAllowed
     * @return int|null
     */
    public function getMaxIncomingActiveCallsAllowed()
    {
        return $this->maxIncomingActiveCallsAllowed;
    }

    /**
     * Setter for maxIncomingActiveCallsAllowed
     *
     * @ElementName maxIncomingActiveCallsAllowed
     * @param int|null $maxIncomingActiveCallsAllowed
     * @return $this
     */
    public function setMaxIncomingActiveCallsAllowed($maxIncomingActiveCallsAllowed)
    {
        $this->maxIncomingActiveCallsAllowed = $maxIncomingActiveCallsAllowed;
        return $this;
    }

    /**
     * Getter for maxOutgoingActiveCallsAllowed
     *
     * @ElementName maxOutgoingActiveCallsAllowed
     * @return int|null
     */
    public function getMaxOutgoingActiveCallsAllowed()
    {
        return $this->maxOutgoingActiveCallsAllowed;
    }

    /**
     * Setter for maxOutgoingActiveCallsAllowed
     *
     * @ElementName maxOutgoingActiveCallsAllowed
     * @param int|null $maxOutgoingActiveCallsAllowed
     * @return $this
     */
    public function setMaxOutgoingActiveCallsAllowed($maxOutgoingActiveCallsAllowed)
    {
        $this->maxOutgoingActiveCallsAllowed = $maxOutgoingActiveCallsAllowed;
        return $this;
    }

    /**
     * Getter for becomeDefaultGroupForNewUsers
     *
     * @ElementName becomeDefaultGroupForNewUsers
     * @return bool|null
     */
    public function getBecomeDefaultGroupForNewUsers()
    {
        return $this->becomeDefaultGroupForNewUsers;
    }

    /**
     * Setter for becomeDefaultGroupForNewUsers
     *
     * @ElementName becomeDefaultGroupForNewUsers
     * @param bool|null $becomeDefaultGroupForNewUsers
     * @return $this
     */
    public function setBecomeDefaultGroupForNewUsers($becomeDefaultGroupForNewUsers)
    {
        $this->becomeDefaultGroupForNewUsers = $becomeDefaultGroupForNewUsers;
        return $this;
    }

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string[]
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string[] $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Adder for userId
     *
     * @ElementName userId
     * @param string $userId
     * @return $this
     */
    public function addUserId($userId)
    {
        $this->userId []= $userId;
        return $this;
    }


}

