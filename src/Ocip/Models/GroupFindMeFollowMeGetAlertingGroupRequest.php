<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeGetAlertingGroupRequest
 *
 * Request to get all the information of a Find-me/Follow-me alerting group.
 *         The response is either GroupFindMeFollowMeGetAlertingGroupResponse or ErrorResponse.
 *
 * @see GroupFindMeFollowMeGetAlertingGroupResponse
 * @see ErrorResponse
 * @Groups [{"id":"146ca46a7097f08aed7a73ab65f17df8:252","type":"sequence"}]
 */
class GroupFindMeFollowMeGetAlertingGroupRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 146ca46a7097f08aed7a73ab65f17df8:252
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName alertingGroupName
     * @Type string
     * @Group 146ca46a7097f08aed7a73ab65f17df8:252
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $alertingGroupName = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for alertingGroupName
     *
     * @return string
     */
    public function getAlertingGroupName()
    {
        return $this->alertingGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertingGroupName;
    }

    /**
     * Setter for alertingGroupName
     *
     * @param string $alertingGroupName
     * @return $this
     */
    public function setAlertingGroupName($alertingGroupName)
    {
        $this->alertingGroupName = $alertingGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertingGroupName()
    {
        $this->alertingGroupName = null;
        return $this;
    }
}

