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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:6396","type":"sequence"}]
 */
class GroupCallCenterGetSupervisorListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName reportingServerURL
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6396
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $reportingServerURL = null;

    /**
     * @ElementName supervisorTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:6396
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $supervisorTable = null;

    /**
     * Getter for reportingServerURL
     *
     * @return string
     */
    public function getReportingServerURL()
    {
        return $this->reportingServerURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportingServerURL;
    }

    /**
     * Setter for reportingServerURL
     *
     * @param string $reportingServerURL
     * @return $this
     */
    public function setReportingServerURL($reportingServerURL)
    {
        $this->reportingServerURL = $reportingServerURL;
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

