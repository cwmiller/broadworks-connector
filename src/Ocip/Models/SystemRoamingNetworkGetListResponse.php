<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoamingNetworkGetListResponse
 *
 * Response to the SystemRoamingNetworkGetListRequest.
 *         Contains a table with columns: "MSC Address", "Network Translation Index".
 *
 * @see SystemRoamingNetworkGetListRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:13149","type":"sequence"}]
 */
class SystemRoamingNetworkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName roamingNetworkTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b5f5416d9e71f8e4246cda16c4723744:13149
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $roamingNetworkTable = null;

    /**
     * Getter for roamingNetworkTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getRoamingNetworkTable()
    {
        return $this->roamingNetworkTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->roamingNetworkTable;
    }

    /**
     * Setter for roamingNetworkTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $roamingNetworkTable
     * @return $this
     */
    public function setRoamingNetworkTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $roamingNetworkTable)
    {
        $this->roamingNetworkTable = $roamingNetworkTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoamingNetworkTable()
    {
        $this->roamingNetworkTable = null;
        return $this;
    }


}

