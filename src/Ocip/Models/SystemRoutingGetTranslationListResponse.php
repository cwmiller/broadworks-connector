<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingGetTranslationListResponse
 *
 * Response to SystemRoutingGetTranslationListRequest. The column headings are
 * "Routing Digits"
 *         and "Route".
 */
class SystemRoutingGetTranslationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $routingTable = null;

    /**
     * Getter for routingTable
     *
     * @ElementName routingTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getRoutingTable()
    {
        return $this->routingTable;
    }

    /**
     * Setter for routingTable
     *
     * @ElementName routingTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $routingTable
     * @return $this
     */
    public function setRoutingTable($routingTable)
    {
        $this->routingTable = $routingTable;
        return $this;
    }


}

