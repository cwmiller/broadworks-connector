<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityMobileNetworkGetListResponse
 *
 * The response to a SystemBroadWorksMobilityMobileNetworkGetListRequest.
 *         Contains a table with column headings: "Name", "SCF Signaling Net
 * Address", "SCF Signaling Port"
 *
 * @see SystemBroadWorksMobilityMobileNetworkGetListRequest
 */
class SystemBroadWorksMobilityMobileNetworkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mobileNetworkTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $mobileNetworkTable = null;

    /**
     * Getter for mobileNetworkTable
     *
     * @ElementName mobileNetworkTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getMobileNetworkTable()
    {
        return $this->mobileNetworkTable;
    }

    /**
     * Setter for mobileNetworkTable
     *
     * @ElementName mobileNetworkTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $mobileNetworkTable
     * @return $this
     */
    public function setMobileNetworkTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mobileNetworkTable)
    {
        $this->mobileNetworkTable = $mobileNetworkTable;
        return $this;
    }


}

