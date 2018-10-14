<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListResponse
 *
 * Response to the
 * SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListRequest.
 *         The response contains a table of all Network Classes of Service that
 *         contain the specific Communication Barring Profile. The column headings
 *         are "Name" and "Description"
 *
 * @see SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListRequest
 */
class SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setNetworkClassOfServiceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $networkClassOfServiceTable)
    {
        $this->networkClassOfServiceTable = $networkClassOfServiceTable;
        return $this;
    }


}

