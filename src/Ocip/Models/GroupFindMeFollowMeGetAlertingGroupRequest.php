<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeGetAlertingGroupRequest
 *
 * Request to get all the information of a Find-me/Follow-me alerting group.
 *         The response is either GroupFindMeFollowMeGetAlertingGroupResponse or
 * ErrorResponse.
 *
 * @see GroupFindMeFollowMeGetAlertingGroupResponse
 * @see ErrorResponse
 */
class GroupFindMeFollowMeGetAlertingGroupRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName alertingGroupName
     * @var string|null
     */
    private $alertingGroupName = null;

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

    /**
     * Getter for alertingGroupName
     *
     * @ElementName alertingGroupName
     * @return string|null
     */
    public function getAlertingGroupName()
    {
        return $this->alertingGroupName;
    }

    /**
     * Setter for alertingGroupName
     *
     * @ElementName alertingGroupName
     * @param string|null $alertingGroupName
     * @return $this
     */
    public function setAlertingGroupName($alertingGroupName)
    {
        $this->alertingGroupName = $alertingGroupName;
        return $this;
    }


}

