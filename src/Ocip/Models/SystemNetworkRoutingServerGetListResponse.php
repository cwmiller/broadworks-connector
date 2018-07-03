<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkRoutingServerGetListResponse
 *
 * Response to SystemNetworkRoutingServerGetListRequest. The routing Network Server
 * table column
 *         headings are: "Net Address", "Port", "Transport", "Poll", "OpState",
 * "Description".
 *
 * @see SystemNetworkRoutingServerGetListRequest
 */
class SystemNetworkRoutingServerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName networkRoutingServerTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $networkRoutingServerTable = null;

    /**
     * Getter for networkRoutingServerTable
     *
     * @ElementName networkRoutingServerTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getNetworkRoutingServerTable()
    {
        return $this->networkRoutingServerTable;
    }

    /**
     * Setter for networkRoutingServerTable
     *
     * @ElementName networkRoutingServerTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $networkRoutingServerTable
     * @return $this
     */
    public function setNetworkRoutingServerTable($networkRoutingServerTable)
    {
        $this->networkRoutingServerTable = $networkRoutingServerTable;
        return $this;
    }


}

