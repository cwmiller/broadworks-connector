<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderOfficeZoneGetAssignedListResponse
 *
 * Response to ServiceProviderOfficeZoneGetAssignedListRequest.
 *         Contains a table of all Office Zones assigned to the
 *         service provider. The column headings are: "Name", "Description" and "Default".
 *
 * @see ServiceProviderOfficeZoneGetAssignedListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:4403","type":"sequence"}]
 */
class ServiceProviderOfficeZoneGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName officeZoneTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4403
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

