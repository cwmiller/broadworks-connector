<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetInstanceListResponse
 *
 * Response to the GroupRoutePointGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Video", "Phone Number", "Extension",
 * "Department", "Is Active".
 *         The column values for "Video" and "Is Active" can either be true, or
 * false.
 *
 * @see GroupRoutePointGetInstanceListRequest
 */
class GroupRoutePointGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routePointTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $routePointTable = null;

    /**
     * Getter for routePointTable
     *
     * @ElementName routePointTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getRoutePointTable()
    {
        return $this->routePointTable;
    }

    /**
     * Setter for routePointTable
     *
     * @ElementName routePointTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $routePointTable
     * @return $this
     */
    public function setRoutePointTable($routePointTable)
    {
        $this->routePointTable = $routePointTable;
        return $this;
    }


}

