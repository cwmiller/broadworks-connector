<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterRoutingPeerGetListResponse
 *
 * Contains a 6 column table with column headings 'Instance', 'Realm', 
 * 'ApplicationID', 'Identity, 'Priority', and 'Weight'.  One row is present for
 * each Diameter Routing Peer.
 */
class SystemBwDiameterRoutingPeerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingPeerTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $routingPeerTable = null;

    /**
     * Getter for routingPeerTable
     *
     * @ElementName routingPeerTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getRoutingPeerTable()
    {
        return $this->routingPeerTable;
    }

    /**
     * Setter for routingPeerTable
     *
     * @ElementName routingPeerTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $routingPeerTable
     * @return $this
     */
    public function setRoutingPeerTable($routingPeerTable)
    {
        $this->routingPeerTable = $routingPeerTable;
        return $this;
    }


}

