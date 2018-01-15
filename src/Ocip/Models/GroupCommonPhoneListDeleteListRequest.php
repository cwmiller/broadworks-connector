<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommonPhoneListDeleteListRequest
 *
 * Delete one or more entries from a group's common phone list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCommonPhoneListDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName entryName
     * @var string[]
     */
    private $entryName = array(
        
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
     * Getter for entryName
     *
     * @ElementName entryName
     * @return string[]
     */
    public function getEntryName()
    {
        return $this->entryName;
    }

    /**
     * Setter for entryName
     *
     * @ElementName entryName
     * @param string[] $entryName
     * @return $this
     */
    public function setEntryName($entryName)
    {
        $this->entryName = $entryName;
        return $this;
    }

    /**
     * Adder for entryName
     *
     * @ElementName entryName
     * @param string $entryName
     * @return $this
     */
    public function addEntryName($entryName)
    {
        $this->entryName []= $entryName;
        return $this;
    }


}

