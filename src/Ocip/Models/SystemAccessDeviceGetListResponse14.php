<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetListResponse14
 *
 * Response to SystemAccessDeviceGetListRequest14.
 *         Contains a table of devices defined at the System-level.
 *         The column headings are:
 *         "Device Name", "Device Type", "Available Ports", "Net Address" and "MAC
 * Address", "Status", "Version".
 */
class SystemAccessDeviceGetListResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessDeviceTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $accessDeviceTable = null;

    /**
     * Getter for accessDeviceTable
     *
     * @ElementName accessDeviceTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAccessDeviceTable()
    {
        return $this->accessDeviceTable;
    }

    /**
     * Setter for accessDeviceTable
     *
     * @ElementName accessDeviceTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $accessDeviceTable
     * @return $this
     */
    public function setAccessDeviceTable($accessDeviceTable)
    {
        $this->accessDeviceTable = $accessDeviceTable;
        return $this;
    }


}

