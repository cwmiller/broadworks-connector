<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeGetListResponse
 *
 * Response to SystemSIPDeviceTypeGetListRequest.
 *         Contains a table of identity/ device profile types configured in the
 * system.
 *         The column headings are: "Device Type", "Profile", "Is Obsolete".
 */
class SystemSIPDeviceTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceTypeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deviceTypeTable = null;

    /**
     * Getter for deviceTypeTable
     *
     * @ElementName deviceTypeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDeviceTypeTable()
    {
        return $this->deviceTypeTable;
    }

    /**
     * Setter for deviceTypeTable
     *
     * @ElementName deviceTypeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $deviceTypeTable
     * @return $this
     */
    public function setDeviceTypeTable($deviceTypeTable)
    {
        $this->deviceTypeTable = $deviceTypeTable;
        return $this;
    }


}

