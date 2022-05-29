<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceTypeGetEnhancedConfigurableListResponse
 *
 * Response to SystemAccessDeviceTypeGetEnhancedConfigurableListRequest.
 *         Contains a table with columns: "Access Device Type", "Enhanced Configuration Type", "Supports Reset".
 *         The "Enhanced Configuration Type" column contains one of the AccessDeviceEnhancedConfigurationType14
 *         enumerated values.
 *         The "Supports Reset" column is a boolean flag indicating the device can be remotely reset.
 *
 * @see SystemAccessDeviceTypeGetEnhancedConfigurableListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:1761","type":"sequence"}]
 */
class SystemAccessDeviceTypeGetEnhancedConfigurableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceTypeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1761
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

