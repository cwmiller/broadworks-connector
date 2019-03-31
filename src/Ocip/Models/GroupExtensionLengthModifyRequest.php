<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupExtensionLengthModifyRequest
 *
 * Modify the group's extension length.
 *                 The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:13631","type":"sequence"}]
 */
class GroupExtensionLengthModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13631
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13631
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName extensionLength
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13631
     * @MinInclusive 2
     * @MaxInclusive 6
     * @var int|null
     */
    private $extensionLength = null;

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
     * Getter for extensionLength
     *
     * @return int
     */
    public function getExtensionLength()
    {
        return $this->extensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extensionLength;
    }

    /**
     * Setter for extensionLength
     *
     * @param int $extensionLength
     * @return $this
     */
    public function setExtensionLength($extensionLength)
    {
        $this->extensionLength = $extensionLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtensionLength()
    {
        $this->extensionLength = null;
        return $this;
    }


}

