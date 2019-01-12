<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetUserListResponse21sp1
 *
 * Response to GroupAccessDeviceGetUserListRequest21sp1.
 *         The column headings for the deviceUserTable are: "Line/Port", "Last Name",
 *         "First Name", "Phone Number", "User Id", "User Type", "Endpoint Type", "Order", "Primary Line/Port", "Extension", "Department", "Email Address", "Private Identity".
 *         In IMS mode, the table will contain a row for each TEL-URI in the Phone Number column.
 *         In Standalone mode, rows for the alternate numbers are not included.
 *         The User Type column contains one of the enumerated UserType values.
 *         The Endpoint Type column contains one of the enumerated EndpointType21sp1 values.
 *         The value Mobility in Endpoint Type column is only applicable in AS data mode.
 *         The Private Identity column is empty is AS mode.
 *
 * @see GroupAccessDeviceGetUserListRequest21sp1
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:861","type":"sequence"}]
 */
class GroupAccessDeviceGetUserListResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:861
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deviceUserTable = null;

    /**
     * Getter for deviceUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDeviceUserTable()
    {
        return $this->deviceUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceUserTable;
    }

    /**
     * Setter for deviceUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceUserTable
     * @return $this
     */
    public function setDeviceUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceUserTable)
    {
        $this->deviceUserTable = $deviceUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceUserTable()
    {
        $this->deviceUserTable = null;
        return $this;
    }


}

