<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceGetUserListResponse
 *
 * Response to ServiceProviderAccessDeviceGetUserListRequest.
 *         The column headings for the deviceUserTable are: "Line/Port", "Last Name",
 *         "First Name", "Phone Number", "Group Id", "User Id",
 *         "User Type", "Endpoint Type", "Primary Line/Port", "Order", "Extension", "Department", "Email Address", "Private Identity".
 *         In IMS mode, the table will contain a row for each TEL-URI in the Phone Number column.
 *         In standalone mode, rows for the alternate numbers are not included.
 *         The User Type column contains one of the enumerated UserType values.
 *         The Endpoint Type column contains one of the enumerated EndpointType values.
 *         The Private Identity column is empty is AS mode.
 *         
 *         Replaced by: ServiceProviderAccessDeviceGetUserListResponse21sp1 in AS data mode.
 *
 * @see ServiceProviderAccessDeviceGetUserListRequest
 * @see ServiceProviderAccessDeviceGetUserListResponse21sp1
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:5845","type":"sequence"}]
 */
class ServiceProviderAccessDeviceGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 240b50f54d060859e5e275082fdf49f9:5845
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $deviceUserTable = null;

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

