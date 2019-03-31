<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifySupervisorListRequest
 *
 * Replaces a list of users as supervisors for a call center.
 *                 Also allows the modification of the reporting server URL address.
 *                 The response is either a SuccessResponse or an ErrorResponse.
 *                 Element "reportingServerURL"" will always be ignored.
 *                 Replaced By: GroupCallCenterSupervisorReportingModifyRequest
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupCallCenterSupervisorReportingModifyRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:1129","type":"sequence"}]
 */
class GroupCallCenterModifySupervisorListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1129
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName reportingServerURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1129
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $reportingServerURL = null;

    /**
     * @ElementName supervisorUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1129
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $supervisorUserIdList = null;

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
     * Getter for reportingServerURL
     *
     * @return string|null
     */
    public function getReportingServerURL()
    {
        return $this->reportingServerURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportingServerURL;
    }

    /**
     * Setter for reportingServerURL
     *
     * @param string|null $reportingServerURL
     * @return $this
     */
    public function setReportingServerURL($reportingServerURL = null)
    {
        if ($reportingServerURL === null) {
            $this->reportingServerURL = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->reportingServerURL = $reportingServerURL;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportingServerURL()
    {
        $this->reportingServerURL = null;
        return $this;
    }

    /**
     * Getter for supervisorUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getSupervisorUserIdList()
    {
        return $this->supervisorUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supervisorUserIdList;
    }

    /**
     * Setter for supervisorUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $supervisorUserIdList
     * @return $this
     */
    public function setSupervisorUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $supervisorUserIdList = null)
    {
        if ($supervisorUserIdList === null) {
            $this->supervisorUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->supervisorUserIdList = $supervisorUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupervisorUserIdList()
    {
        $this->supervisorUserIdList = null;
        return $this;
    }


}

