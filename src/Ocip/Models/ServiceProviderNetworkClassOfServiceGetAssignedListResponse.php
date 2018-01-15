<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderNetworkClassOfServiceGetAssignedListResponse
 *
 * Response to ServiceProviderNetworkClassOfServiceGetAssignedListRequest.
 *         Contains a table of all Network Classes of Service assigned to the
 *         service provider. The column headings are: "Name", "Description" and
 * "Default".
 */
class ServiceProviderNetworkClassOfServiceGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

