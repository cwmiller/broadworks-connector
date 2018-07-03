<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupNetworkClassOfServiceGetAssignedListResponse
 *
 * Response to GroupNetworkClassOfServiceGetAssignedListRequest.
 *         Contains a table of all Network Classes of Service assigned to
 *         the group. The column headings are: "Name", "Description" and "Default".
 *
 * @see GroupNetworkClassOfServiceGetAssignedListRequest
 */
class GroupNetworkClassOfServiceGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName networkClassOfServiceTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $networkClassOfServiceTable = null;

    /**
     * Getter for networkClassOfServiceTable
     *
     * @ElementName networkClassOfServiceTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getNetworkClassOfServiceTable()
    {
        return $this->networkClassOfServiceTable;
    }

    /**
     * Setter for networkClassOfServiceTable
     *
     * @ElementName networkClassOfServiceTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $networkClassOfServiceTable
     * @return $this
     */
    public function setNetworkClassOfServiceTable($networkClassOfServiceTable)
    {
        $this->networkClassOfServiceTable = $networkClassOfServiceTable;
        return $this;
    }


}

