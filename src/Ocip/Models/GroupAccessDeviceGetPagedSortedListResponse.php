<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetPagedSortedListResponse
 *
 * Response to GroupAccessDeviceGetPagedSortedListRequest.
 *         Contains a table of devices configured in the group.
 *         The column headings are: "Device Name", "Device Type", "Available Ports", "Net Address", "MAC Address", "Status" and "Version".
 *
 * @see GroupAccessDeviceGetPagedSortedListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:750","type":"sequence"}]
 */
class GroupAccessDeviceGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessDeviceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:750
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

