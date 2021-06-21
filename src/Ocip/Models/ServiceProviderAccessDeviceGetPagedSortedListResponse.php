<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceGetPagedSortedListResponse
 *
 * Response to ServiceProviderAccessDeviceGetPagedSortedListRequest.
 *         Contains a table of devices configured at service provider level.
 *         The column headings are: "Device Name", "Device Type", "Available Ports", "Net Address", "MAC Address", "Status", "Version", and "Support Visual Device Management API".
 *         When CloudPBX is not licensed, the column "Support Visual Device Management API" values are not returned.
 *
 * @see ServiceProviderAccessDeviceGetPagedSortedListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:940","type":"sequence"}]
 */
class ServiceProviderAccessDeviceGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessDeviceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:940
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $accessDeviceTable = null;

    /**
     * Getter for accessDeviceTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAccessDeviceTable()
    {
        return $this->accessDeviceTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceTable;
    }

    /**
     * Setter for accessDeviceTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $accessDeviceTable
     * @return $this
     */
    public function setAccessDeviceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $accessDeviceTable)
    {
        $this->accessDeviceTable = $accessDeviceTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceTable()
    {
        $this->accessDeviceTable = null;
        return $this;
    }


}

