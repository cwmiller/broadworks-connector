<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingGetTranslationListResponse
 *
 * Response to SystemRoutingGetTranslationListRequest. The column headings are "Routing Digits"
 *         and "Route".
 *
 * @see SystemRoutingGetTranslationListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:15633","type":"sequence"}]
 */
class SystemRoutingGetTranslationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName routingTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:15633
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $routingTable = null;

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

