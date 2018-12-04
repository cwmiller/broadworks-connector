<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneCallingRestrictionsZoneGetListResponse
 *
 * Response to SystemZoneCallingRestrictionsZoneGetListRequest. 
 *   Contains a table of all the zones in the system. The column headings are "Zone Name" , "Physical Location".
 *         Replaced by: SystemZoneGetListResponse
 *
 * @see SystemZoneCallingRestrictionsZoneGetListRequest
 * @see SystemZoneGetListResponse
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:32203","type":"sequence"}]
 */
class SystemZoneCallingRestrictionsZoneGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName zoneTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 1a79c7896cb04feac6eff47a5321756e:32203
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $zoneTable = null;

    /**
     * Getter for zoneTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getZoneTable()
    {
        return $this->zoneTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->zoneTable;
    }

    /**
     * Setter for zoneTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $zoneTable
     * @return $this
     */
    public function setZoneTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $zoneTable)
    {
        $this->zoneTable = $zoneTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetZoneTable()
    {
        $this->zoneTable = null;
        return $this;
    }


}

