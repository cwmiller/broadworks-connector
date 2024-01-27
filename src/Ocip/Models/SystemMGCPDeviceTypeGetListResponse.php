<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMGCPDeviceTypeGetListResponse
 *
 * Response to SystemMGCPDeviceTypeGetListRequest.
 *         Contains a table of identity/ device profile types configured in the system.
 *         The column headings are: "Device Type", "Profile", "Is Obsolete".
 *
 * @see SystemMGCPDeviceTypeGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12308","type":"sequence"}]
 */
class SystemMGCPDeviceTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceTypeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:12308
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $deviceTypeTable = null;

    /**
     * Getter for deviceTypeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDeviceTypeTable()
    {
        return $this->deviceTypeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceTypeTable;
    }

    /**
     * Setter for deviceTypeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceTypeTable
     * @return $this
     */
    public function setDeviceTypeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceTypeTable)
    {
        $this->deviceTypeTable = $deviceTypeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceTypeTable()
    {
        $this->deviceTypeTable = null;
        return $this;
    }
}

