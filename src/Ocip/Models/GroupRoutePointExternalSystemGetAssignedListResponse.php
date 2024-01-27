<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointExternalSystemGetAssignedListResponse
 *
 * Response to the GroupRoutePointExternalSystemGetAssignedListRequest.
 *         Contains a table of all Route Point External Systems assigned to the
 *         group.  The column headings are: "Name" and "Description".
 *
 * @see GroupRoutePointExternalSystemGetAssignedListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:6935","type":"sequence"}]
 */
class GroupRoutePointExternalSystemGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName externalSystemTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:6935
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $externalSystemTable = null;

    /**
     * Getter for externalSystemTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getExternalSystemTable()
    {
        return $this->externalSystemTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalSystemTable;
    }

    /**
     * Setter for externalSystemTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $externalSystemTable
     * @return $this
     */
    public function setExternalSystemTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $externalSystemTable)
    {
        $this->externalSystemTable = $externalSystemTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExternalSystemTable()
    {
        $this->externalSystemTable = null;
        return $this;
    }
}

