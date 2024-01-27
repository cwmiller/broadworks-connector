<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommonPhoneListDeleteListRequest
 *
 * Delete one or more entries from a group's common phone list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:2536","type":"sequence"}]
 */
class GroupCommonPhoneListDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:2536
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:2536
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName entryName
     * @Type string
     * @Array
     * @Group 4b0e7857796c636464362260a2f8e5ee:2536
     * @MinLength 1
     * @MaxLength 50
     * @var string[]
     */
    protected $entryName = [
        
    ];

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
     * Getter for entryName
     *
     * @return string[]
     */
    public function getEntryName()
    {
        return $this->entryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entryName;
    }

    /**
     * Setter for entryName
     *
     * @param string[] $entryName
     * @return $this
     */
    public function setEntryName(array $entryName)
    {
        $this->entryName = $entryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntryName()
    {
        $this->entryName = null;
        return $this;
    }

    /**
     * Adder for entryName
     *
     * @param string $entryName
     * @return $this
     */
    public function addEntryName(string $entryName)
    {
        $this->entryName[] = $entryName;
        return $this;
    }
}

