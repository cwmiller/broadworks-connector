<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingGetRouteDeviceListResponse
 *
 * Response to SystemRoutingGetRouteDeviceListRequest. The column headings are "Net Address",
 *         "Port", "Transport" and "Description".
 *
 * @see SystemRoutingGetRouteDeviceListRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:13516","type":"sequence"}]
 */
class SystemRoutingGetRouteDeviceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routeDeviceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b5f5416d9e71f8e4246cda16c4723744:13516
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $routeDeviceTable = null;

    /**
     * Getter for routeDeviceTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getRouteDeviceTable()
    {
        return $this->routeDeviceTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeDeviceTable;
    }

    /**
     * Setter for routeDeviceTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $routeDeviceTable
     * @return $this
     */
    public function setRouteDeviceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $routeDeviceTable)
    {
        $this->routeDeviceTable = $routeDeviceTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteDeviceTable()
    {
        $this->routeDeviceTable = null;
        return $this;
    }


}

