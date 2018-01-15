<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterPeerGetListResponse
 *
 * Contains a 5 column table with column headings 'Instance', 'Identity', 'IP
 * Address', 'Port', and 'Enabled'. One row is present for each peer.
 */
class SystemBwDiameterPeerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName peerTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $peerTable = null;

    /**
     * Getter for peerTable
     *
     * @ElementName peerTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getPeerTable()
    {
        return $this->peerTable;
    }

    /**
     * Setter for peerTable
     *
     * @ElementName peerTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $peerTable
     * @return $this
     */
    public function setPeerTable($peerTable)
    {
        $this->peerTable = $peerTable;
        return $this;
    }


}

