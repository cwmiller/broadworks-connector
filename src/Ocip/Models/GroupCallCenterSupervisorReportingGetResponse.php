<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterSupervisorReportingGetResponse
 *
 * Response to the GroupCallCenterSupervisorReportingGetRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 *
 * @see GroupCallCenterSupervisorReportingGetRequest
 */
class GroupCallCenterSupervisorReportingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reportingServerName
     * @var string|null
     */
    private $reportingServerName = null;

    /**
     * @ElementName supervisorTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $supervisorTable = null;

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

