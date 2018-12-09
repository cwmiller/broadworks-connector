<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingGetTranslationListResponse
 *
 * Response to SystemRoutingGetTranslationListRequest. The column headings are "Routing Digits"
 *         and "Route".
 *
 * @see SystemRoutingGetTranslationListRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:13575","type":"sequence"}]
 */
class SystemRoutingGetTranslationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b5f5416d9e71f8e4246cda16c4723744:13575
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $routingTable = null;

    /**
     * Getter for routingTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getRoutingTable()
    {
        return $this->routingTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routingTable;
    }

    /**
     * Setter for routingTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $routingTable
     * @return $this
     */
    public function setRoutingTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $routingTable)
    {
        $this->routingTable = $routingTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoutingTable()
    {
        $this->routingTable = null;
        return $this;
    }


}

