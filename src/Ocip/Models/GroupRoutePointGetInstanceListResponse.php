<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetInstanceListResponse
 *
 * Response to the GroupRoutePointGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Video", "Phone Number", "Extension", "Department", "Is Active".
 *         The column values for "Video" and "Is Active" can either be true, or false.
 *
 * @see GroupRoutePointGetInstanceListRequest
 * @Groups [{"id":"a27224a048c30ff69eab9209dec841cc:587","type":"sequence"}]
 */
class GroupRoutePointGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routePointTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group a27224a048c30ff69eab9209dec841cc:587
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $routePointTable = null;

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

