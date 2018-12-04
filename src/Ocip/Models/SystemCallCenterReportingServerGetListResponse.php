<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterReportingServerGetListResponse
 *
 * Response to SystemCallCenterReportingServerGetListRequest.  The table columns are:
 *         "Name", "URL", "Net Address", and "Description".
 *
 * @see SystemCallCenterReportingServerGetListRequest
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:18176","type":"sequence"}]
 */
class SystemCallCenterReportingServerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reportingServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 1a79c7896cb04feac6eff47a5321756e:18176
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $reportingServerTable = null;

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

