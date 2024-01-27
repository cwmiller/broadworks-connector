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
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:728","type":"sequence"}]
 */
class ResellerNetworkClassOfServiceGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName networkClassOfServiceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d45e381d6dbac771631649063122a42e:728
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $networkClassOfServiceTable = null;

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

