<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallParkModifyInstanceRequest
 *
 * Modifies a Call Park group. Replaces the entire list of users in the group.  
 *         The users are in the list are in the order they will try to be parked
 * on.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCallParkModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName userIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $userIdList = null;

    /**
     * @ElementName recallAlternateUserId
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $recallAlternateUserId = null;

    /**
     * @ElementName recallTo
     * @var string|null
     */
    private $recallTo = null;

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

    /**
     * Getter for recallAlternateUserId
     *
     * @ElementName recallAlternateUserId
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRecallAlternateUserId()
    {
        return $this->recallAlternateUserId;
    }

    /**
     * Setter for recallAlternateUserId
     *
     * @ElementName recallAlternateUserId
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $recallAlternateUserId
     * @return $this
     */
    public function setRecallAlternateUserId($recallAlternateUserId)
    {
        $this->recallAlternateUserId = $recallAlternateUserId;
        return $this;
    }

    /**
     * Getter for recallTo
     *
     * @ElementName recallTo
     * @return string|null
     */
    public function getRecallTo()
    {
        return $this->recallTo;
    }

    /**
     * Setter for recallTo
     *
     * @ElementName recallTo
     * @param string|null $recallTo
     * @return $this
     */
    public function setRecallTo($recallTo)
    {
        $this->recallTo = $recallTo;
        return $this;
    }


}

