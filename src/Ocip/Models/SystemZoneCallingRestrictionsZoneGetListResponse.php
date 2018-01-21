<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneCallingRestrictionsZoneGetListResponse
 *
 * Response to SystemZoneCallingRestrictionsZoneGetListRequest. 
 *   Contains a table of all the zones in the system. The column headings are "Zone
 * Name" , "Physical Location".
 *         Replaced by: SystemZoneGetListResponse
 */
class SystemZoneCallingRestrictionsZoneGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName zoneTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $zoneTable = null;

    /**
     * Getter for zoneTable
     *
     * @ElementName zoneTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getZoneTable()
    {
        return $this->zoneTable;
    }

    /**
     * Setter for zoneTable
     *
     * @ElementName zoneTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $zoneTable
     * @return $this
     */
    public function setZoneTable($zoneTable)
    {
        $this->zoneTable = $zoneTable;
        return $this;
    }


}

