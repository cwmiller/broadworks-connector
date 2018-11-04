<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCapacityManagementModifyInstanceRequest
 *
 * Modifies a Call Capacity Management group. Replaces the entire list of users in
 * the group.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCallCapacityManagementModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName newName
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName maxActiveCallsAllowed
     * @var int|null
     */
    private $maxActiveCallsAllowed = null;

    /**
     * @ElementName maxIncomingActiveCallsAllowed
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxIncomingActiveCallsAllowed = null;

    /**
     * @ElementName maxOutgoingActiveCallsAllowed
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxOutgoingActiveCallsAllowed = null;

    /**
     * @ElementName becomeDefaultGroupForNewUsers
     * @var bool|null
     */
    private $becomeDefaultGroupForNewUsers = null;

    /**
     * @ElementName userIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $userIdList = null;

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
     * Getter for newName
     *
     * @ElementName newName
     * @return string|null
     */
    public function getNewName()
    {
        return $this->newName;
    }

    /**
     * Setter for newName
     *
     * @ElementName newName
     * @param string|null $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMaxIncomingActiveCallsAllowed()
    {
        return $this->maxIncomingActiveCallsAllowed;
    }

    /**
     * Setter for maxIncomingActiveCallsAllowed
     *
     * @ElementName maxIncomingActiveCallsAllowed
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $maxIncomingActiveCallsAllowed
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMaxOutgoingActiveCallsAllowed()
    {
        return $this->maxOutgoingActiveCallsAllowed;
    }

    /**
     * Setter for maxOutgoingActiveCallsAllowed
     *
     * @ElementName maxOutgoingActiveCallsAllowed
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $maxOutgoingActiveCallsAllowed
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
     * Getter for userIdList
     *
     * @ElementName userIdList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getUserIdList()
    {
        return $this->userIdList;
    }

    /**
     * Setter for userIdList
     *
     * @ElementName userIdList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil $userIdList
     * @return $this
     */
    public function setUserIdList($userIdList)
    {
        $this->userIdList = $userIdList;
        return $this;
    }


}

