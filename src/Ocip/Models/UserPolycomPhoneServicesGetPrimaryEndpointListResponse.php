<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPolycomPhoneServicesGetPrimaryEndpointListResponse
 *
 * Response to UserPolycomPhoneServicesGetPrimaryEndpointListRequest.
 *         The column headings for the deviceUserTable are: "Device Level", "Device
 * Name", "Line/Port".
 *
 * @see UserPolycomPhoneServicesGetPrimaryEndpointListRequest
 */
class UserPolycomPhoneServicesGetPrimaryEndpointListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setDeviceUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceUserTable)
    {
        $this->deviceUserTable = $deviceUserTable;
        return $this;
    }


}

