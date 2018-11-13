<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterSupervisorReportingGetRequest
 *
 * Get a list of supervisors assigned to a call center.
 *         Only users in the same group or enterprise as this call center
 *         can successfully execute this request.
 *         The response is either a
 *         GroupCallCenterSupervisorReportingGetResponse or an
 *         ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterGetSupervisorListRequest16
 *
 * @see GroupCallCenterSupervisorReportingGetResponse
 * @see ErrorResponse
 * @see GroupCallCenterGetSupervisorListRequest16
 */
class GroupCallCenterSupervisorReportingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @var string|null
     */
    private $serviceUserId = null;

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

