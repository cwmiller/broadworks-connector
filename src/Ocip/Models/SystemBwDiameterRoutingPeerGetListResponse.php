<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterRoutingPeerGetListResponse
 *
 * Contains a 6 column table with column headings 'Instance', 'Realm',  'ApplicationID', 'Identity, 'Priority', and 'Weight'.  One row is present for each Diameter Routing Peer.
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:2849","type":"sequence"}]
 */
class SystemBwDiameterRoutingPeerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingPeerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2849
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

