<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifySupervisorListRequest
 *
 * Replaces a list of users as supervisors for a call center.
 *         Also allows the modification of the reporting server URL address.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Element "reportingServerURL"" will always be ignored.        
 *         Replaced By: GroupCallCenterSupervisorReportingModifyRequest
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupCallCenterSupervisorReportingModifyRequest
 */
class GroupCallCenterModifySupervisorListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName reportingServerURL
     * @var string|null
     */
    private $reportingServerURL = null;

    /**
     * @ElementName supervisorUserIdList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    private $supervisorUserIdList = null;

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
     * Getter for reportingServerURL
     *
     * @ElementName reportingServerURL
     * @return string|null
     */
    public function getReportingServerURL()
    {
        return $this->reportingServerURL;
    }

    /**
     * Setter for reportingServerURL
     *
     * @ElementName reportingServerURL
     * @param string|null $reportingServerURL
     * @return $this
     */
    public function setReportingServerURL($reportingServerURL)
    {
        $this->reportingServerURL = $reportingServerURL;
        return $this;
    }

    /**
     * Getter for supervisorUserIdList
     *
     * @ElementName supervisorUserIdList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getSupervisorUserIdList()
    {
        return $this->supervisorUserIdList;
    }

    /**
     * Setter for supervisorUserIdList
     *
     * @ElementName supervisorUserIdList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $supervisorUserIdList
     * @return $this
     */
    public function setSupervisorUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $supervisorUserIdList)
    {
        $this->supervisorUserIdList = $supervisorUserIdList;
        return $this;
    }


}

