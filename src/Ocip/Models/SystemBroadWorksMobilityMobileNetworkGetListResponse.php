<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityMobileNetworkGetListResponse
 *
 * The response to a SystemBroadWorksMobilityMobileNetworkGetListRequest.
 *         Contains a table with column headings: "Name", "SCF Signaling Net Address", "SCF Signaling Port"
 *
 * @see SystemBroadWorksMobilityMobileNetworkGetListRequest
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:1124","type":"sequence"}]
 */
class SystemBroadWorksMobilityMobileNetworkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mobileNetworkTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1124
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

