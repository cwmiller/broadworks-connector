<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingGetTranslationListResponse
 *
 * Response to SystemRoutingGetTranslationListRequest. The column headings are "Routing Digits"
 *         and "Route".
 *
 * @see SystemRoutingGetTranslationListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:15420","type":"sequence"}]
 */
class SystemRoutingGetTranslationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15420
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

