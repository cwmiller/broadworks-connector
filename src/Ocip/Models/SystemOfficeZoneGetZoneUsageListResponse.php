<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneGetZoneUsageListResponse
 *
 * Response to the SystemOfficeZoneGetZoneUsageListRequest.
 *         The response contains a table of all Office Zones that
 *         contain the specific Zone. The column headings
 *         are "Name" and "Description"
 *
 * @see SystemOfficeZoneGetZoneUsageListRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:12262","type":"sequence"}]
 */
class SystemOfficeZoneGetZoneUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName officeZoneTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:12262
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $officeZoneTable = null;

    /**
     * Getter for officeZoneTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getOfficeZoneTable()
    {
        return $this->officeZoneTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->officeZoneTable;
    }

    /**
     * Setter for officeZoneTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $officeZoneTable
     * @return $this
     */
    public function setOfficeZoneTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $officeZoneTable)
    {
        $this->officeZoneTable = $officeZoneTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOfficeZoneTable()
    {
        $this->officeZoneTable = null;
        return $this;
    }


}

