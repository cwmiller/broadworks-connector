<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetUserListResponse21sp1
 *
 * Response to SystemAccessDeviceGetUserListRequest21sp1.
 *         The column headings for the deviceUserTable are: "Line/Port", "Last Name",
 *         "First Name", "Phone Number", "Service Provider Id", "Group Id", "User Id",
 *         "User Type", "Endpoint Type", "Primary Line/Port", "Order", "Extension", "Department", "Email Address", "Private Identity".
 *         If the identity/device profile is an identity, the table will contain a row for each TEL-URI in the Phone Number column.
 *         If the identity/device profile is a real device, rows for the alternate numbers are not included.
 *         The User Type column contains one of the enumerated UserType values.
 *         The Endpoint Type column contains one of the enumerated EndpointType21sp1 values.
 *         The value Mobility in Endpoint Type column is only applicable in AS data mode.
 *         The Private Identity column is empty is AS mode.
 *
 * @see SystemAccessDeviceGetUserListRequest21sp1
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:1469","type":"sequence"}]
 */
class SystemAccessDeviceGetUserListResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1469
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

