<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointExternalSystemGetAssignedListResponse
 *
 * Response to the GroupRoutePointExternalSystemGetAssignedListRequest.
 *         Contains a table of all Route Point External Systems assigned to the
 *         group.  The column headings are: "Name" and "Description".
 */
class GroupRoutePointExternalSystemGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName externalSystemTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $externalSystemTable = null;

    /**
     * Getter for externalSystemTable
     *
     * @ElementName externalSystemTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getExternalSystemTable()
    {
        return $this->externalSystemTable;
    }

    /**
     * Setter for externalSystemTable
     *
     * @ElementName externalSystemTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $externalSystemTable
     * @return $this
     */
    public function setExternalSystemTable($externalSystemTable)
    {
        $this->externalSystemTable = $externalSystemTable;
        return $this;
    }


}

