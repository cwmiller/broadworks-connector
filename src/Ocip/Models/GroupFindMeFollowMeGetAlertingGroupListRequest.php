<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeGetAlertingGroupListRequest
 *
 * Get a list of Find-me/Follow-me alerting groups within a group.
 *         The response is either GroupFindMeFollowMeGetAlertingGroupListResponse or ErrorResponse.
 *
 * @see GroupFindMeFollowMeGetAlertingGroupListResponse
 * @see ErrorResponse
 * @Groups [{"id":"146ca46a7097f08aed7a73ab65f17df8:219","type":"sequence"}]
 */
class GroupFindMeFollowMeGetAlertingGroupListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 146ca46a7097f08aed7a73ab65f17df8:219
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

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
}

