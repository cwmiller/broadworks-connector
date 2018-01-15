<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCustomContactDirectoryAddRequest17
 *
 * Adds a Custom Contact Directory to a group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCustomContactDirectoryAddRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName entry
     * @var \CWM\BroadWorksConnector\Ocip\Models\CustomContactDirectoryEntry[]
     */
    private $entry = array(
        
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
     * Getter for entry
     *
     * @ElementName entry
     * @return \CWM\BroadWorksConnector\Ocip\Models\CustomContactDirectoryEntry[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Setter for entry
     *
     * @ElementName entry
     * @param \CWM\BroadWorksConnector\Ocip\Models\CustomContactDirectoryEntry[] $entry
     * @return $this
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;
        return $this;
    }

    /**
     * Adder for entry
     *
     * @ElementName entry
     * @param \CWM\BroadWorksConnector\Ocip\Models\CustomContactDirectoryEntry $entry
     * @return $this
     */
    public function addEntry($entry)
    {
        $this->entry []= $entry;
        return $this;
    }


}

