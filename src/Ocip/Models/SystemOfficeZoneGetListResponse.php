<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneGetListResponse
 *
 * Response to the SystemOfficeZoneGetListRequest.
 *         The response contains a table of all Office Zones
 *         in the system. The column headings are "Name" and "Description"
 *
 * @see SystemOfficeZoneGetListRequest
 */
class SystemOfficeZoneGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

