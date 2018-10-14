<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOfficeZoneGetAssignedListResponse
 *
 * Response to GroupOfficeZoneGetAssignedListRequest.
 *         Contains a table of all Office Zones assigned to the
 *         group. The column headings are: "Name", "Description" and "Default".
 *
 * @see GroupOfficeZoneGetAssignedListRequest
 */
class GroupOfficeZoneGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setOfficeZoneTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $officeZoneTable)
    {
        $this->officeZoneTable = $officeZoneTable;
        return $this;
    }


}

