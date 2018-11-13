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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $networkRoutingServerTable = null;

    /**
     * Getter for networkRoutingServerTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getNetworkRoutingServerTable()
    {
        return $this->networkRoutingServerTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkRoutingServerTable;
    }

    /**
     * Setter for networkRoutingServerTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $networkRoutingServerTable
     * @return $this
     */
    public function setNetworkRoutingServerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $networkRoutingServerTable)
    {
        $this->networkRoutingServerTable = $networkRoutingServerTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkRoutingServerTable()
    {
        $this->networkRoutingServerTable = null;
        return $this;
    }


}

