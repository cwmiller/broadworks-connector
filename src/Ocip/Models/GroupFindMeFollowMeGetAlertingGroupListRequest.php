<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeGetAlertingGroupListRequest
 *
 * Get a list of Find-me/Follow-me alerting groups within a group.
 *         The response is either GroupFindMeFollowMeGetAlertingGroupListResponse
 * or ErrorResponse.
 *
 * @see GroupFindMeFollowMeGetAlertingGroupListResponse
 * @see ErrorResponse
 */
class GroupFindMeFollowMeGetAlertingGroupListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }


}

