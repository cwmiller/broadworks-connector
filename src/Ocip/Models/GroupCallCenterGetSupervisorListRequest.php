<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetSupervisorListRequest
 *
 * Get a list of supervisors assigned to a call center.
 *         Only users in the same group or enterprise as this call center can
 *         successfully execute this request.
 *         The response is either a GroupCallCenterGetSupervisorListResponse
 *         or an ErrorResponse.
 *         Replaced By: GroupCallCenterSupervisorReportingGetRequest
 *
 * @see GroupCallCenterGetSupervisorListResponse
 * @see ErrorResponse
 * @see GroupCallCenterSupervisorReportingGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:6377","type":"sequence"}]
 */
class GroupCallCenterGetSupervisorListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:6377
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

