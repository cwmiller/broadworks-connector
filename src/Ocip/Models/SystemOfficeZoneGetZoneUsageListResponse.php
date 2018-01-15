<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneGetZoneUsageListResponse
 *
 * Response to the SystemOfficeZoneGetZoneUsageListRequest.
 *         The response contains a table of all Office Zones that
 *         contain the specific Zone. The column headings
 *         are "Name" and "Description"
 */
class SystemOfficeZoneGetZoneUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName officeZoneTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $officeZoneTable = null;

    /**
     * Getter for officeZoneTable
     *
     * @ElementName officeZoneTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getOfficeZoneTable()
    {
        return $this->officeZoneTable;
    }

    /**
     * Setter for officeZoneTable
     *
     * @ElementName officeZoneTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $officeZoneTable
     * @return $this
     */
    public function setOfficeZoneTable($officeZoneTable)
    {
        $this->officeZoneTable = $officeZoneTable;
        return $this;
    }


}

