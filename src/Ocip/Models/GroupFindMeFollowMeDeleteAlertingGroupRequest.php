<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeDeleteAlertingGroupRequest
 *
 * Delete an alerting group from a Find-me/Follow-me instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"d0d5b8a5908815c6ae522efe732e363a:169","type":"sequence"}]
 */
class GroupFindMeFollowMeDeleteAlertingGroupRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group d0d5b8a5908815c6ae522efe732e363a:169
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName alertingGroupName
     * @Type string
     * @Group d0d5b8a5908815c6ae522efe732e363a:169
     * @var string|null
     */
    private $alertingGroupName = null;

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

