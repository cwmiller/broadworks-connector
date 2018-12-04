<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCapacityManagementModifyInstanceRequest
 *
 * Modifies a Call Capacity Management group. Replaces the entire list of users in the group.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ec414f584634edfc7ab45285fc8bb597:246","type":"sequence"}]
 */
class GroupCallCapacityManagementModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ec414f584634edfc7ab45285fc8bb597:246
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group ec414f584634edfc7ab45285fc8bb597:246
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group ec414f584634edfc7ab45285fc8bb597:246
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group ec414f584634edfc7ab45285fc8bb597:246
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName maxActiveCallsAllowed
     * @Type int
     * @Optional
     * @Group ec414f584634edfc7ab45285fc8bb597:246
     * @var int|null
     */
    private $maxActiveCallsAllowed = null;

    /**
     * @ElementName maxIncomingActiveCallsAllowed
     * @Type int
     * @Nillable
     * @Optional
     * @Group ec414f584634edfc7ab45285fc8bb597:246
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxIncomingActiveCallsAllowed = null;

    /**
     * @ElementName maxOutgoingActiveCallsAllowed
     * @Type int
     * @Nillable
     * @Optional
     * @Group ec414f584634edfc7ab45285fc8bb597:246
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxOutgoingActiveCallsAllowed = null;

    /**
     * @ElementName becomeDefaultGroupForNewUsers
     * @Type bool
     * @Optional
     * @Group ec414f584634edfc7ab45285fc8bb597:246
     * @var bool|null
     */
    private $becomeDefaultGroupForNewUsers = null;

    /**
     * @ElementName userIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group ec414f584634edfc7ab45285fc8bb597:246
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $userIdList = null;

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
     * Getter for newName
     *
     * @return string
     */
    public function getNewName()
    {
        return $this->newName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newName;
    }

    /**
     * Setter for newName
     *
     * @param string $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewName()
    {
        $this->newName = null;
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
     * @return int|null
     */
    public function getMaxIncomingActiveCallsAllowed()
    {
        return $this->maxIncomingActiveCallsAllowed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxIncomingActiveCallsAllowed;
    }

    /**
     * Setter for maxIncomingActiveCallsAllowed
     *
     * @param int|null $maxIncomingActiveCallsAllowed
     * @return $this
     */
    public function setMaxIncomingActiveCallsAllowed($maxIncomingActiveCallsAllowed)
    {
        if ($maxIncomingActiveCallsAllowed === null) {
            $this->maxIncomingActiveCallsAllowed = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->maxIncomingActiveCallsAllowed = $maxIncomingActiveCallsAllowed;
        }
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
     * @return int|null
     */
    public function getMaxOutgoingActiveCallsAllowed()
    {
        return $this->maxOutgoingActiveCallsAllowed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxOutgoingActiveCallsAllowed;
    }

    /**
     * Setter for maxOutgoingActiveCallsAllowed
     *
     * @param int|null $maxOutgoingActiveCallsAllowed
     * @return $this
     */
    public function setMaxOutgoingActiveCallsAllowed($maxOutgoingActiveCallsAllowed)
    {
        if ($maxOutgoingActiveCallsAllowed === null) {
            $this->maxOutgoingActiveCallsAllowed = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->maxOutgoingActiveCallsAllowed = $maxOutgoingActiveCallsAllowed;
        }
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
     * Getter for userIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getUserIdList()
    {
        return $this->userIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userIdList;
    }

    /**
     * Setter for userIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $userIdList
     * @return $this
     */
    public function setUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $userIdList)
    {
        if ($userIdList === null) {
            $this->userIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->userIdList = $userIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserIdList()
    {
        $this->userIdList = null;
        return $this;
    }


}

