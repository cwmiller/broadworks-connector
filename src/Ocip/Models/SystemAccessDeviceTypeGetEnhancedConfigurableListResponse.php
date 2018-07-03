<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceTypeGetEnhancedConfigurableListResponse
 *
 * Response to SystemAccessDeviceTypeGetEnhancedConfigurableListRequest.
 *         Contains a table with columns: "Access Device Type", "Enhanced
 * Configuration Type", "Supports Reset".
 *         The "Enhanced Configuration Type" column contains one of the
 * AccessDeviceEnhancedConfigurationType14
 *         enumerated values.
 *         The "Supports Reset" column is a boolean flag indicating the device can
 * be remotely reset.
 *
 * @see SystemAccessDeviceTypeGetEnhancedConfigurableListRequest
 */
class SystemAccessDeviceTypeGetEnhancedConfigurableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

