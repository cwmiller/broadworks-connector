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
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:3413","type":"sequence"}]
 */
class GroupCustomContactDirectoryModifyRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:3413
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:3413
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:3413
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:3413
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $newName = null;

    /**
     * @ElementName entryList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementCustomContactDirectoryEntryList
     * @Nillable
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:3413
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCustomContactDirectoryEntryList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $entryList = null;

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
     * Getter for entryList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCustomContactDirectoryEntryList|null
     */
    public function getEntryList()
    {
        return $this->entryList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entryList;
    }

    /**
     * Setter for entryList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCustomContactDirectoryEntryList|null $entryList
     * @return $this
     */
    public function setEntryList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementCustomContactDirectoryEntryList $entryList = null)
    {
        if ($entryList === null) {
            $this->entryList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->entryList = $entryList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntryList()
    {
        $this->entryList = null;
        return $this;
    }
}

