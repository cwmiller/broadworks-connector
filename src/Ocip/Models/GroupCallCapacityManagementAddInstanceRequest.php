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
 * @Groups [{"id":"a508c8d47cf6dc9787cc3865bf94b9f5:50","type":"sequence"}]
 */
class GroupCallCapacityManagementAddInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group a508c8d47cf6dc9787cc3865bf94b9f5:50
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group a508c8d47cf6dc9787cc3865bf94b9f5:50
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group a508c8d47cf6dc9787cc3865bf94b9f5:50
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName maxActiveCallsAllowed
     * @Type int
     * @Group a508c8d47cf6dc9787cc3865bf94b9f5:50
     * @var int|null
     */
    private $maxActiveCallsAllowed = null;

    /**
     * @ElementName maxIncomingActiveCallsAllowed
     * @Type int
     * @Optional
     * @Group a508c8d47cf6dc9787cc3865bf94b9f5:50
     * @var int|null
     */
    private $maxIncomingActiveCallsAllowed = null;

    /**
     * @ElementName maxOutgoingActiveCallsAllowed
     * @Type int
     * @Optional
     * @Group a508c8d47cf6dc9787cc3865bf94b9f5:50
     * @var int|null
     */
    private $maxOutgoingActiveCallsAllowed = null;

    /**
     * @ElementName becomeDefaultGroupForNewUsers
     * @Type bool
     * @Group a508c8d47cf6dc9787cc3865bf94b9f5:50
     * @var bool|null
     */
    private $becomeDefaultGroupForNewUsers = null;

    /**
     * @ElementName userId
     * @Type string
     * @Array
     * @Optional
     * @Group a508c8d47cf6dc9787cc3865bf94b9f5:50
     * @var string[]
     */
    private $userId = array(
        
    );

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
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for maxActiveCallsAllowed
     *
     * @return int
     */
    public function getMaxActiveCallsAllowed()
    {
        return $this->maxActiveCallsAllowed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxActiveCallsAllowed;
    }

    /**
     * Setter for maxActiveCallsAllowed
     *
     * @param int $maxActiveCallsAllowed
     * @return $this
     */
    public function setMaxActiveCallsAllowed($maxActiveCallsAllowed)
    {
        $this->maxActiveCallsAllowed = $maxActiveCallsAllowed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxActiveCallsAllowed()
    {
        $this->maxActiveCallsAllowed = null;
        return $this;
    }

    /**
     * Getter for maxIncomingActiveCallsAllowed
     *
     * @return int
     */
    public function getMaxIncomingActiveCallsAllowed()
    {
        return $this->maxIncomingActiveCallsAllowed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxIncomingActiveCallsAllowed;
    }

    /**
     * Setter for maxIncomingActiveCallsAllowed
     *
     * @param int $maxIncomingActiveCallsAllowed
     * @return $this
     */
    public function setMaxIncomingActiveCallsAllowed($maxIncomingActiveCallsAllowed)
    {
        $this->maxIncomingActiveCallsAllowed = $maxIncomingActiveCallsAllowed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxIncomingActiveCallsAllowed()
    {
        $this->maxIncomingActiveCallsAllowed = null;
        return $this;
    }

    /**
     * Getter for maxOutgoingActiveCallsAllowed
     *
     * @return int
     */
    public function getMaxOutgoingActiveCallsAllowed()
    {
        return $this->maxOutgoingActiveCallsAllowed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxOutgoingActiveCallsAllowed;
    }

    /**
     * Setter for maxOutgoingActiveCallsAllowed
     *
     * @param int $maxOutgoingActiveCallsAllowed
     * @return $this
     */
    public function setMaxOutgoingActiveCallsAllowed($maxOutgoingActiveCallsAllowed)
    {
        $this->maxOutgoingActiveCallsAllowed = $maxOutgoingActiveCallsAllowed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxOutgoingActiveCallsAllowed()
    {
        $this->maxOutgoingActiveCallsAllowed = null;
        return $this;
    }

    /**
     * Getter for becomeDefaultGroupForNewUsers
     *
     * @return bool
     */
    public function getBecomeDefaultGroupForNewUsers()
    {
        return $this->becomeDefaultGroupForNewUsers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->becomeDefaultGroupForNewUsers;
    }

    /**
     * Setter for becomeDefaultGroupForNewUsers
     *
     * @param bool $becomeDefaultGroupForNewUsers
     * @return $this
     */
    public function setBecomeDefaultGroupForNewUsers($becomeDefaultGroupForNewUsers)
    {
        $this->becomeDefaultGroupForNewUsers = $becomeDefaultGroupForNewUsers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBecomeDefaultGroupForNewUsers()
    {
        $this->becomeDefaultGroupForNewUsers = null;
        return $this;
    }

    /**
     * Getter for userId
     *
     * @return string[]
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string[] $userId
     * @return $this
     */
    public function setUserId(array $userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Adder for userId
     *
     * @param string $userId
     * @return $this
     */
    public function addUserId(string $userId)
    {
        $this->userId[] = $userId;
        return $this;
    }


}

