<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPolycomPhoneServicesGetPrimaryEndpointListResponse
 *
 * Response to UserPolycomPhoneServicesGetPrimaryEndpointListRequest.
 *         The column headings for the deviceUserTable are: "Device Level", "Device Name", "Line/Port".
 *
 * @see UserPolycomPhoneServicesGetPrimaryEndpointListRequest
 * @Groups [{"id":"4f074d986b998636e2bcb0d67372b0f4:116","type":"sequence"}]
 */
class UserPolycomPhoneServicesGetPrimaryEndpointListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4f074d986b998636e2bcb0d67372b0f4:116
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

