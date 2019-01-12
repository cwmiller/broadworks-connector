<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerNetworkClassOfServiceGetAssignedListResponse
 *
 * Response to ResellerNetworkClassOfServiceGetAssignedListRequest.
 *         Contains a table of all Network Classes of Service assigned to the
 *         reseller. The column headings are: "Name", "Description" and "Default".
 *
 * @see ResellerNetworkClassOfServiceGetAssignedListRequest
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:503","type":"sequence"}]
 */
class ResellerNetworkClassOfServiceGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName networkClassOfServiceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b009175f2a2a9d38115e319a6ad64d7f:503
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $networkClassOfServiceTable = null;

    /**
     * Getter for networkClassOfServiceTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getNetworkClassOfServiceTable()
    {
        return $this->networkClassOfServiceTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfServiceTable;
    }

    /**
     * Setter for networkClassOfServiceTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $networkClassOfServiceTable
     * @return $this
     */
    public function setNetworkClassOfServiceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $networkClassOfServiceTable)
    {
        $this->networkClassOfServiceTable = $networkClassOfServiceTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfServiceTable()
    {
        $this->networkClassOfServiceTable = null;
        return $this;
    }


}

