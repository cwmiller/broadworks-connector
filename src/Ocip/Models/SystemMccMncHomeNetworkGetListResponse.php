<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMccMncHomeNetworkGetListResponse
 *
 * Response to SystemMccMncHomeNetworkGetListRequest. 
 *         The table column is: "Home Networks".
 *
 * @see SystemMccMncHomeNetworkGetListRequest
 * @Groups [{"id":"4489f4baeefa41b8df0a86def4c05cd8:147","type":"sequence"}]
 */
class SystemMccMncHomeNetworkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName homeNetworksTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4489f4baeefa41b8df0a86def4c05cd8:147
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $homeNetworksTable = null;

    /**
     * Getter for homeNetworksTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getHomeNetworksTable()
    {
        return $this->homeNetworksTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeNetworksTable;
    }

    /**
     * Setter for homeNetworksTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $homeNetworksTable
     * @return $this
     */
    public function setHomeNetworksTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $homeNetworksTable)
    {
        $this->homeNetworksTable = $homeNetworksTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHomeNetworksTable()
    {
        $this->homeNetworksTable = null;
        return $this;
    }
}

