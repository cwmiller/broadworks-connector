<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceGetListResponse
 *
 * Response to ServiceProviderAccessDeviceGetListRequest.
 *         Contains a table of devices configured in the service provider.
 *         The column headings are: "Device Name", "Device Type", "Available
 * Ports",
 *         "Net Address", "MAC Address", "Status", and "Version".
 *
 * @see ServiceProviderAccessDeviceGetListRequest
 */
class ServiceProviderAccessDeviceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

