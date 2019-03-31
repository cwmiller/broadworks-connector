<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetSupervisorListResponse
 *
 * Response to the GroupCallCenterGetSupervisorListRequest.
 *                 Contains a table with column headings: "User Id", "Last Name",
 *                 "First Name", "Hiragana Last Name", "Hiragana First Name".
 *                 Element "reportingServerURL"" will always be blank.
 *                 Replaced By: GroupCallCenterSupervisorReportingGetResponse
 *
 * @see GroupCallCenterGetSupervisorListRequest
 * @see GroupCallCenterSupervisorReportingGetResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:1060","type":"sequence"}]
 */
class GroupCallCenterGetSupervisorListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reportingServerURL
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1060
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $reportingServerURL = null;

    /**
     * @ElementName supervisorTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1060
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $supervisorTable = null;

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

