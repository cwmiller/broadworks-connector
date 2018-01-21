<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetUserListResponse
 *
 * Response to SystemAccessDeviceGetUserListRequest.
 *         The column headings for the deviceUserTable are: "Line/Port", "Last
 * Name",
 *         "First Name", "Phone Number", "Service Provider Id", "Group Id", "User
 * Id",
 *         "User Type", "Endpoint Type", "Primary Line/Port", "Order", "Extension",
 * "Department", "Email Address", "Private Identity".
 *         If the identity/device profile is an identity, the table will contain a
 * row for each TEL-URI in the Phone Number column.
 *         If the identity/device profile is a real device, rows for the alternate
 * numbers are not included.
 *         The User Type column contains one of the enumerated UserType values.
 *         The Endpoint Type column contains one of the enumerated EndpointType
 * values.
 *         The Private Identity column is empty is AS mode.
 *         
 *         Replaced by: SystemAccessDeviceGetUserListResponse21sp1 in AS data mode.
 */
class SystemAccessDeviceGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deviceUserTable = null;

    /**
     * Getter for deviceUserTable
     *
     * @ElementName deviceUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDeviceUserTable()
    {
        return $this->deviceUserTable;
    }

    /**
     * Setter for deviceUserTable
     *
     * @ElementName deviceUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $deviceUserTable
     * @return $this
     */
    public function setDeviceUserTable($deviceUserTable)
    {
        $this->deviceUserTable = $deviceUserTable;
        return $this;
    }


}

