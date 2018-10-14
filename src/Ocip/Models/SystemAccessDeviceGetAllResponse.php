<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetAllResponse
 *
 * Response to SystemAccessDeviceGetAllRequest.
 *         Contains a table of devices configured in the entire system.
 *         The column headings are: "Service Provider Id", "Is Enterprise", "Group
 * Id",
 *         "Device Name", "Device Type", "Net Address", "MAC Address", "Status",
 * "Reseller Id".
 *         
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see SystemAccessDeviceGetAllRequest
 */
class SystemAccessDeviceGetAllResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setAccessDeviceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $accessDeviceTable)
    {
        $this->accessDeviceTable = $accessDeviceTable;
        return $this;
    }


}

