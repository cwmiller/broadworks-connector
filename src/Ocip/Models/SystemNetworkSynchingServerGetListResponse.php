<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkSynchingServerGetListResponse
 *
 * Response to SystemNetworkSynchingServerGetListRequest. The Network Server table column
 *         headings are: "Net Address", "Port", "Description", "Order".
 *         The following columns are only used in XS data mode and not returned in AS data mode:
 *           Order
 *         The following elements are only used in AS data mode and not returned in XS data mode:
 *           preferredNetworkServerNetAddress
 *
 * @see SystemNetworkSynchingServerGetListRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:11193","type":"sequence"}]
 */
class SystemNetworkSynchingServerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName preferredNetworkServerNetAddress
     * @Type string
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:11193
     * @var string|null
     */
    private $preferredNetworkServerNetAddress = null;

    /**
     * @ElementName networkSynchingServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:11193
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $networkSynchingServerTable = null;

    /**
     * Getter for preferredNetworkServerNetAddress
     *
     * @return string
     */
    public function getPreferredNetworkServerNetAddress()
    {
        return $this->preferredNetworkServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preferredNetworkServerNetAddress;
    }

    /**
     * Setter for preferredNetworkServerNetAddress
     *
     * @param string $preferredNetworkServerNetAddress
     * @return $this
     */
    public function setPreferredNetworkServerNetAddress($preferredNetworkServerNetAddress)
    {
        $this->preferredNetworkServerNetAddress = $preferredNetworkServerNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPreferredNetworkServerNetAddress()
    {
        $this->preferredNetworkServerNetAddress = null;
        return $this;
    }

    /**
     * Getter for networkSynchingServerTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getNetworkSynchingServerTable()
    {
        return $this->networkSynchingServerTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkSynchingServerTable;
    }

    /**
     * Setter for networkSynchingServerTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $networkSynchingServerTable
     * @return $this
     */
    public function setNetworkSynchingServerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $networkSynchingServerTable)
    {
        $this->networkSynchingServerTable = $networkSynchingServerTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkSynchingServerTable()
    {
        $this->networkSynchingServerTable = null;
        return $this;
    }


}

