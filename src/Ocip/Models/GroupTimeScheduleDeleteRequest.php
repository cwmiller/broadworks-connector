<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTimeScheduleDeleteRequest
 *
 * Delete a time schedule from a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:13015","type":"sequence"}]
 */
class GroupTimeScheduleDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13015
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13015
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName timeScheduleName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13015
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $timeScheduleName = null;

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
     * Getter for timeScheduleName
     *
     * @return string
     */
    public function getTimeScheduleName()
    {
        return $this->timeScheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeScheduleName;
    }

    /**
     * Setter for timeScheduleName
     *
     * @param string $timeScheduleName
     * @return $this
     */
    public function setTimeScheduleName($timeScheduleName)
    {
        $this->timeScheduleName = $timeScheduleName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeScheduleName()
    {
        $this->timeScheduleName = null;
        return $this;
    }


}

