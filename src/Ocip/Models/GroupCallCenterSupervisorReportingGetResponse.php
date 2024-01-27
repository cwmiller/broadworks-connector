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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:7424","type":"sequence"}]
 */
class GroupCallCenterSupervisorReportingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName reportingServerName
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:7424
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $reportingServerName = null;

    /**
     * @ElementName supervisorTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:7424
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $supervisorTable = null;

    /**
     * Getter for reportingServerName
     *
     * @return string
     */
    public function getReportingServerName()
    {
        return $this->reportingServerName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportingServerName;
    }

    /**
     * Setter for reportingServerName
     *
     * @param string $reportingServerName
     * @return $this
     */
    public function setReportingServerName($reportingServerName)
    {
        $this->reportingServerName = $reportingServerName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportingServerName()
    {
        $this->reportingServerName = null;
        return $this;
    }

    /**
     * Getter for supervisorTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSupervisorTable()
    {
        return $this->supervisorTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supervisorTable;
    }

    /**
     * Setter for supervisorTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $supervisorTable
     * @return $this
     */
    public function setSupervisorTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $supervisorTable)
    {
        $this->supervisorTable = $supervisorTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupervisorTable()
    {
        $this->supervisorTable = null;
        return $this;
    }
}

