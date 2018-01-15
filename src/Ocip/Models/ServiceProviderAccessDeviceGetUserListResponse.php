<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceGetUserListResponse
 *
 * Response to ServiceProviderAccessDeviceGetUserListRequest.
 *         The column headings for the deviceUserTable are: "Line/Port", "Last
 * Name",
 *         "First Name", "Phone Number", "Group Id", "User Id",
 *         "User Type", "Endpoint Type", "Primary Line/Port", "Order", "Extension",
 * "Department", "Email Address", "Private Identity".
 *         In IMS mode, the table will contain a row for each TEL-URI in the Phone
 * Number column.
 *         In standalone mode, rows for the alternate numbers are not included.
 *         The User Type column contains one of the enumerated UserType values.
 *         The Endpoint Type column contains one of the enumerated EndpointType
 * values.
 *         The Private Identity column is empty is AS mode.
 */
class ServiceProviderAccessDeviceGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

