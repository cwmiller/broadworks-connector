<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterSupervisorReportingModifyRequest
 *
 * Replaces a list of users as supervisors for a call center.
 *         Also allows the modification of the reporting server URL address.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterModifySupervisorListRequest16
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupCallCenterModifySupervisorListRequest16
 */
class GroupCallCenterSupervisorReportingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName reportingServerName
     * @var string|null
     */
    private $reportingServerName = null;

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
     * Getter for reportingServerName
     *
     * @ElementName reportingServerName
     * @return string|null
     */
    public function getReportingServerName()
    {
        return $this->reportingServerName;
    }

    /**
     * Setter for reportingServerName
     *
     * @ElementName reportingServerName
     * @param string|null $reportingServerName
     * @return $this
     */
    public function setReportingServerName($reportingServerName)
    {
        $this->reportingServerName = $reportingServerName;
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
    public function setSupervisorUserIdList($supervisorUserIdList)
    {
        $this->supervisorUserIdList = $supervisorUserIdList;
        return $this;
    }


}

