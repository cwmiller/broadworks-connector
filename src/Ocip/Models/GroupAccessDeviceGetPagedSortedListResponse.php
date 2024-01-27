<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetPagedSortedListResponse
 *
 * Response to GroupAccessDeviceGetPagedSortedListRequest.
 *         Contains a table of devices configured in the group.
 *         The column headings are: "Device Name", "Device Type", "Available Ports", "Net Address", "MAC Address", "Status", "Version", and "Support Visual Device Management API".
 *         When CloudPBX is not licensed, the column "Support Visual Device Management API" values are not returned.
 *         
 *         Replaced by GroupAccessDeviceGetPagedSortedListResponse22.
 *
 * @see GroupAccessDeviceGetPagedSortedListRequest
 * @see GroupAccessDeviceGetPagedSortedListResponse22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:3221","type":"sequence"}]
 */
class GroupAccessDeviceGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName accessDeviceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:3221
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $accessDeviceTable = null;

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

