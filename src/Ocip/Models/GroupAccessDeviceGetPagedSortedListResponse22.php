<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetPagedSortedListResponse22
 *
 * Response to GroupAccessDeviceGetPagedSortedListRequest22.
 *         Contains a table of devices configured in the group.
 *         The column headings are: "Device Name", "Device Type", "Available Ports", "Net Address", "MAC Address", "Status", "Version", and "Support Visual Device Management API".
 *         When CloudPBX is not licensed, the column "Support Visual Device Management API" values are not returned.
 *
 * @see GroupAccessDeviceGetPagedSortedListRequest22
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:1080","type":"sequence"}]
 */
class GroupAccessDeviceGetPagedSortedListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName totalNumberOfRows
     * @Type int
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1080
     * @var int|null
     */
    protected $totalNumberOfRows = null;

    /**
     * @ElementName accessDeviceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:1080
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $accessDeviceTable = null;

    /**
     * Getter for totalNumberOfRows
     *
     * @return int
     */
    public function getTotalNumberOfRows()
    {
        return $this->totalNumberOfRows instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->totalNumberOfRows;
    }

    /**
     * Setter for totalNumberOfRows
     *
     * @param int $totalNumberOfRows
     * @return $this
     */
    public function setTotalNumberOfRows($totalNumberOfRows)
    {
        $this->totalNumberOfRows = $totalNumberOfRows;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTotalNumberOfRows()
    {
        $this->totalNumberOfRows = null;
        return $this;
    }

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

