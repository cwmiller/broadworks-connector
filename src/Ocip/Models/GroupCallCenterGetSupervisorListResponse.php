<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetSupervisorListResponse
 *
 * Response to the GroupCallCenterGetSupervisorListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 *         Element "reportingServerURL"" will always be blank.        
 *         Replaced By: GroupCallCenterSupervisorReportingGetResponse
 *
 * @see GroupCallCenterGetSupervisorListRequest
 * @see GroupCallCenterSupervisorReportingGetResponse
 */
class GroupCallCenterGetSupervisorListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reportingServerURL
     * @var string|null
     */
    private $reportingServerURL = null;

    /**
     * @ElementName supervisorTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $supervisorTable = null;

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
     * Getter for supervisorTable
     *
     * @ElementName supervisorTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getSupervisorTable()
    {
        return $this->supervisorTable;
    }

    /**
     * Setter for supervisorTable
     *
     * @ElementName supervisorTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $supervisorTable
     * @return $this
     */
    public function setSupervisorTable($supervisorTable)
    {
        $this->supervisorTable = $supervisorTable;
        return $this;
    }


}

