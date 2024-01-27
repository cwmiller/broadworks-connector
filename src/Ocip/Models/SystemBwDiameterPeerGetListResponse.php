<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterPeerGetListResponse
 *
 * Contains a 6 column table with column headings 'Instance', 'Identity', 'IP Address', 'Port', 'Enabled' and 'Secure'. One row is present for each peer.
 *
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:2810","type":"sequence"}]
 */
class SystemBwDiameterPeerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName peerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:2810
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $peerTable = null;

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

