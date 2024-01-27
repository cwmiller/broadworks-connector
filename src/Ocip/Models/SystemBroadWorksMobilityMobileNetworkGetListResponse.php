<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityMobileNetworkGetListResponse
 *
 * The response to a SystemBroadWorksMobilityMobileNetworkGetListRequest.
 *         Contains a table with column headings: "Name", "SCF Signaling Net Address", "SCF Signaling Port"
 *
 * @see SystemBroadWorksMobilityMobileNetworkGetListRequest
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:1123","type":"sequence"}]
 */
class SystemBroadWorksMobilityMobileNetworkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName mobileNetworkTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:1123
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $mobileNetworkTable = null;

    /**
     * Getter for mobileNetworkTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getMobileNetworkTable()
    {
        return $this->mobileNetworkTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileNetworkTable;
    }

    /**
     * Setter for mobileNetworkTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mobileNetworkTable
     * @return $this
     */
    public function setMobileNetworkTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mobileNetworkTable)
    {
        $this->mobileNetworkTable = $mobileNetworkTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileNetworkTable()
    {
        $this->mobileNetworkTable = null;
        return $this;
    }
}

