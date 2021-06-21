<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoamingNetworkGetListResponse
 *
 * Response to the SystemRoamingNetworkGetListRequest.
 *         Contains a table with columns: "MSC Address", "Network Translation Index".
 *
 * @see SystemRoamingNetworkGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:14994","type":"sequence"}]
 */
class SystemRoamingNetworkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName roamingNetworkTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14994
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

