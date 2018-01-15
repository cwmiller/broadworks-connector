<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingGetRouteDeviceListResponse
 *
 * Response to SystemRoutingGetRouteDeviceListRequest. The column headings are "Net
 * Address",
 *         "Port", "Transport" and "Description".
 */
class SystemRoutingGetRouteDeviceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routeDeviceTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $routeDeviceTable = null;

    /**
     * Getter for routeDeviceTable
     *
     * @ElementName routeDeviceTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getRouteDeviceTable()
    {
        return $this->routeDeviceTable;
    }

    /**
     * Setter for routeDeviceTable
     *
     * @ElementName routeDeviceTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $routeDeviceTable
     * @return $this
     */
    public function setRouteDeviceTable($routeDeviceTable)
    {
        $this->routeDeviceTable = $routeDeviceTable;
        return $this;
    }


}

