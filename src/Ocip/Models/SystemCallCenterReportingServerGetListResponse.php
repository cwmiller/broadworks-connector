<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterReportingServerGetListResponse
 *
 * Response to SystemCallCenterReportingServerGetListRequest.  The table columns are:
 *         "Name", "URL", "Net Address", and "Description".
 *
 * @see SystemCallCenterReportingServerGetListRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:21759","type":"sequence"}]
 */
class SystemCallCenterReportingServerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName reportingServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:21759
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $reportingServerTable = null;

    /**
     * Getter for reportingServerTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getReportingServerTable()
    {
        return $this->reportingServerTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportingServerTable;
    }

    /**
     * Setter for reportingServerTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $reportingServerTable
     * @return $this
     */
    public function setReportingServerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $reportingServerTable)
    {
        $this->reportingServerTable = $reportingServerTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportingServerTable()
    {
        $this->reportingServerTable = null;
        return $this;
    }
}

