<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterPeerGetListResponse
 *
 * Contains a 5 column table with column headings 'Instance', 'Identity', 'IP Address', 'Port', and 'Enabled'. One row is present for each peer.
 *
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:2272","type":"sequence"}]
 */
class SystemBwDiameterPeerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName peerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:2272
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $peerTable = null;

    /**
     * Getter for peerTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getPeerTable()
    {
        return $this->peerTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->peerTable;
    }

    /**
     * Setter for peerTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $peerTable
     * @return $this
     */
    public function setPeerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $peerTable)
    {
        $this->peerTable = $peerTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeerTable()
    {
        $this->peerTable = null;
        return $this;
    }


}

