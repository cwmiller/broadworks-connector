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
 */
class GroupCallCenterGetSupervisorListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

