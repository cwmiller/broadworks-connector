<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterReportingServerGetListResponse
 *
 * Response to SystemCallCenterReportingServerGetListRequest.  The table columns
 * are:
 *         "Name", "URL", "Net Address", and "Description".
 */
class SystemCallCenterReportingServerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reportingServerTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $reportingServerTable = null;

    /**
     * Getter for reportingServerTable
     *
     * @ElementName reportingServerTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getReportingServerTable()
    {
        return $this->reportingServerTable;
    }

    /**
     * Setter for reportingServerTable
     *
     * @ElementName reportingServerTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $reportingServerTable
     * @return $this
     */
    public function setReportingServerTable($reportingServerTable)
    {
        $this->reportingServerTable = $reportingServerTable;
        return $this;
    }


}

