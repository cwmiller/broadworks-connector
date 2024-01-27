<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallParkModifyInstanceRequest
 *
 * Modifies a Call Park group. Replaces the entire list of users in the group.  
 *         The users are in the list are in the order they will try to be parked on.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b6fd73d148b9b309dce1d2f04516ddfa:497","type":"sequence"}]
 */
class GroupCallParkModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:497
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:497
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:497
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:497
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $newName = null;

    /**
     * @ElementName userIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:497
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $userIdList = null;

    /**
     * @ElementName recallAlternateUserId
     * @Type string
     * @Nillable
     * @Optional
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:497
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $recallAlternateUserId = null;

    /**
     * @ElementName recallTo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo
     * @Optional
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:497
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo|null
     */
    protected $recallTo = null;

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
    public function setUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $userIdList = null)
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

    /**
     * Getter for recallAlternateUserId
     *
     * @return string|null
     */
    public function getRecallAlternateUserId()
    {
        return $this->recallAlternateUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recallAlternateUserId;
    }

    /**
     * Setter for recallAlternateUserId
     *
     * @param string|null $recallAlternateUserId
     * @return $this
     */
    public function setRecallAlternateUserId($recallAlternateUserId = null)
    {
        if ($recallAlternateUserId === null) {
            $this->recallAlternateUserId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->recallAlternateUserId = $recallAlternateUserId;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecallAlternateUserId()
    {
        $this->recallAlternateUserId = null;
        return $this;
    }

    /**
     * Getter for recallTo
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo
     */
    public function getRecallTo()
    {
        return $this->recallTo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recallTo;
    }

    /**
     * Setter for recallTo
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo $recallTo
     * @return $this
     */
    public function setRecallTo(\CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo $recallTo)
    {
        $this->recallTo = $recallTo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecallTo()
    {
        $this->recallTo = null;
        return $this;
    }
}

