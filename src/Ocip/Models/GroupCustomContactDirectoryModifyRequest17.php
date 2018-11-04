<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCustomContactDirectoryModifyRequest17
 *
 * Adds a Custom Contact Directory to a group.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCustomContactDirectoryModifyRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName entryList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCustomContactDirectoryEntryList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $entryList = null;

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
     * Getter for entryList
     *
     * @ElementName entryList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCustomContactDirectoryEntryList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getEntryList()
    {
        return $this->entryList;
    }

    /**
     * Setter for entryList
     *
     * @ElementName entryList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCustomContactDirectoryEntryList|null|\CWM\BroadWorksConnector\Ocip\Nil $entryList
     * @return $this
     */
    public function setEntryList($entryList)
    {
        $this->entryList = $entryList;
        return $this;
    }


}

