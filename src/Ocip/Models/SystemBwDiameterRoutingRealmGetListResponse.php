<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterRoutingRealmGetListResponse
 *
 * Contains a 4 column table with column headings 'Instance', 'Realm', 'ApplicationID', and 'Default'.  One row is present for each Diameter routing realm.
 *
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:2447","type":"sequence"}]
 */
class SystemBwDiameterRoutingRealmGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingRealmTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:2447
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $routingRealmTable = null;

    /**
     * Getter for routingRealmTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getRoutingRealmTable()
    {
        return $this->routingRealmTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routingRealmTable;
    }

    /**
     * Setter for routingRealmTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $routingRealmTable
     * @return $this
     */
    public function setRoutingRealmTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $routingRealmTable)
    {
        $this->routingRealmTable = $routingRealmTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoutingRealmTable()
    {
        $this->routingRealmTable = null;
        return $this;
    }


}

