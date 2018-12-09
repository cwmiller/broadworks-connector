<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityMobileNetworkGetListResponse
 *
 * The response to a SystemBroadWorksMobilityMobileNetworkGetListRequest.
 *         Contains a table with column headings: "Name", "SCF Signaling Net Address", "SCF Signaling Port"
 *
 * @see SystemBroadWorksMobilityMobileNetworkGetListRequest
 * @Groups [{"id":"6536ac9946b3d8422bec81ad9d995e2b:740","type":"sequence"}]
 */
class SystemBroadWorksMobilityMobileNetworkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mobileNetworkTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:740
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $mobileNetworkTable = null;

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

