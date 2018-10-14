<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterRoutingRealmGetListResponse
 *
 * Contains a 4 column table with column headings 'Instance', 'Realm',
 * 'ApplicationID', and 'Default'.  One row is present for each Diameter routing
 * realm.
 */
class SystemBwDiameterRoutingRealmGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingRealmTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $routingRealmTable = null;

    /**
     * Getter for routingRealmTable
     *
     * @ElementName routingRealmTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getRoutingRealmTable()
    {
        return $this->routingRealmTable;
    }

    /**
     * Setter for routingRealmTable
     *
     * @ElementName routingRealmTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $routingRealmTable
     * @return $this
     */
    public function setRoutingRealmTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $routingRealmTable)
    {
        $this->routingRealmTable = $routingRealmTable;
        return $this;
    }


}

