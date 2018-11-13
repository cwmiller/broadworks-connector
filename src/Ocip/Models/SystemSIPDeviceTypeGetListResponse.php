<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeGetListResponse
 *
 * Response to SystemSIPDeviceTypeGetListRequest.
 *         Contains a table of identity/ device profile types configured in the
 * system.
 *         The column headings are: "Device Type", "Profile", "Is Obsolete" and
 * "Reseller Id".
 *
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see SystemSIPDeviceTypeGetListRequest
 */
class SystemSIPDeviceTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceTypeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deviceTypeTable = null;

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

