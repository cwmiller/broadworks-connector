<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCustomContactDirectoryModifyRequest
 *
 * Adds a Custom Contact Directory to a group.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replace by: GroupCustomContactDirectoryModifyRequest17
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupCustomContactDirectoryModifyRequest17
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:9090","type":"sequence"}]
 */
class GroupCustomContactDirectoryModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:9090
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:9090
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:9090
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:9090
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $newName = null;

    /**
     * @ElementName userIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:9090
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $userIdList = null;

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
}

