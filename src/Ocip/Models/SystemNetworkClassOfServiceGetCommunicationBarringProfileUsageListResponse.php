<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListResponse
 *
 * Response to the SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListRequest.
 *         The response contains a table of all Network Classes of Service that
 *         contain the specific Communication Barring Profile. The column headings
 *         are "Name" and "Description"
 *
 * @see SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:11399","type":"sequence"}]
 */
class SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName networkClassOfServiceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11399
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

