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
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:6450","type":"sequence"}]
 */
class GroupOfficeZoneGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName officeZoneTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:6450
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $officeZoneTable = null;

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

