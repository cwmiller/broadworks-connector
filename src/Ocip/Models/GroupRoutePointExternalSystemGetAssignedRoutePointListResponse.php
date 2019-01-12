<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointExternalSystemGetAssignedRoutePointListResponse
 *
 * Response to the GroupRoutePointExternalSystemGetAssignedRoutePointListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Video", "Phone Number", "Extension", "Department".
 *         The column values for "Video" can either be "true", or "false".
 *
 * @see GroupRoutePointExternalSystemGetAssignedRoutePointListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:6219","type":"sequence"}]
 */
class GroupRoutePointExternalSystemGetAssignedRoutePointListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routePointTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6219
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $routePointTable = null;

    /**
     * Getter for routePointTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getRoutePointTable()
    {
        return $this->routePointTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routePointTable;
    }

    /**
     * Setter for routePointTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $routePointTable
     * @return $this
     */
    public function setRoutePointTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $routePointTable)
    {
        $this->routePointTable = $routePointTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoutePointTable()
    {
        $this->routePointTable = null;
        return $this;
    }


}

