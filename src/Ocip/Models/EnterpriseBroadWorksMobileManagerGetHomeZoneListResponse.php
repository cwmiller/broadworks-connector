<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerGetHomeZoneListResponse
 *
 * Response to the
 *         EnterpriseBroadWorksMobileManagerGetHomeZoneListRequest.
 *         Contains a table with column headings: 
 *         "Home Zone Id", "Domain Name", "Mobile Country Code",
 *         "Mobile Network Code", "Local Area Code" and "Cell Identity".
 */
class EnterpriseBroadWorksMobileManagerGetHomeZoneListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName homeZonesTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $homeZonesTable = null;

    /**
     * Getter for homeZonesTable
     *
     * @ElementName homeZonesTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getHomeZonesTable()
    {
        return $this->homeZonesTable;
    }

    /**
     * Setter for homeZonesTable
     *
     * @ElementName homeZonesTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $homeZonesTable
     * @return $this
     */
    public function setHomeZonesTable($homeZonesTable)
    {
        $this->homeZonesTable = $homeZonesTable;
        return $this;
    }


}

