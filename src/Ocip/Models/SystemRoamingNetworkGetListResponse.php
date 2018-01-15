<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoamingNetworkGetListResponse
 *
 * Response to the SystemRoamingNetworkGetListRequest.
 *         Contains a table with columns: "MSC Address", "Network Translation
 * Index".
 */
class SystemRoamingNetworkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName roamingNetworkTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $roamingNetworkTable = null;

    /**
     * Getter for roamingNetworkTable
     *
     * @ElementName roamingNetworkTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getRoamingNetworkTable()
    {
        return $this->roamingNetworkTable;
    }

    /**
     * Setter for roamingNetworkTable
     *
     * @ElementName roamingNetworkTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $roamingNetworkTable
     * @return $this
     */
    public function setRoamingNetworkTable($roamingNetworkTable)
    {
        $this->roamingNetworkTable = $roamingNetworkTable;
        return $this;
    }


}

