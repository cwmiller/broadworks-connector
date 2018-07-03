<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkSynchingServerGetListResponse
 *
 * Response to SystemNetworkSynchingServerGetListRequest. The Network Server table
 * column
 *         headings are: "Net Address", "Port", "Description", "Order".
 *         The following columns are only used in XS data mode and not returned in
 * AS data mode:
 *           Order
 *         The following elements are only used in AS data mode and not returned in
 * XS data mode:
 *           preferredNetworkServerNetAddress
 *
 * @see SystemNetworkSynchingServerGetListRequest
 */
class SystemNetworkSynchingServerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName preferredNetworkServerNetAddress
     * @var string|null
     */
    private $preferredNetworkServerNetAddress = null;

    /**
     * @ElementName networkSynchingServerTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $networkSynchingServerTable = null;

    /**
     * Getter for preferredNetworkServerNetAddress
     *
     * @ElementName preferredNetworkServerNetAddress
     * @return string|null
     */
    public function getPreferredNetworkServerNetAddress()
    {
        return $this->preferredNetworkServerNetAddress;
    }

    /**
     * Setter for preferredNetworkServerNetAddress
     *
     * @ElementName preferredNetworkServerNetAddress
     * @param string|null $preferredNetworkServerNetAddress
     * @return $this
     */
    public function setPreferredNetworkServerNetAddress($preferredNetworkServerNetAddress)
    {
        $this->preferredNetworkServerNetAddress = $preferredNetworkServerNetAddress;
        return $this;
    }

    /**
     * Getter for networkSynchingServerTable
     *
     * @ElementName networkSynchingServerTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getNetworkSynchingServerTable()
    {
        return $this->networkSynchingServerTable;
    }

    /**
     * Setter for networkSynchingServerTable
     *
     * @ElementName networkSynchingServerTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $networkSynchingServerTable
     * @return $this
     */
    public function setNetworkSynchingServerTable($networkSynchingServerTable)
    {
        $this->networkSynchingServerTable = $networkSynchingServerTable;
        return $this;
    }


}

