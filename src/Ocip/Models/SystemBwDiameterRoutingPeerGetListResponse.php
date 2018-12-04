<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterRoutingPeerGetListResponse
 *
 * Contains a 6 column table with column headings 'Instance', 'Realm',  'ApplicationID', 'Identity, 'Priority', and 'Weight'.  One row is present for each Diameter Routing Peer.
 *
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:2360","type":"sequence"}]
 */
class SystemBwDiameterRoutingPeerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingPeerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:2360
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $routingPeerTable = null;

    /**
     * Getter for routingPeerTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getRoutingPeerTable()
    {
        return $this->routingPeerTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routingPeerTable;
    }

    /**
     * Setter for routingPeerTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $routingPeerTable
     * @return $this
     */
    public function setRoutingPeerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $routingPeerTable)
    {
        $this->routingPeerTable = $routingPeerTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoutingPeerTable()
    {
        $this->routingPeerTable = null;
        return $this;
    }


}

