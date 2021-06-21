<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobileManagerGetHomeZoneListResponse
 *
 * Response to the GroupBroadWorksMobileManagerGetHomeZoneListRequest.
 *         Contains a table with column headings: 
 *         "Home Zone Id", "Domain Name", "Mobile Country Code",
 *         "Mobile Network Code", "Local Area Code" and "Cell Identity".
 *
 * @see GroupBroadWorksMobileManagerGetHomeZoneListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:2366","type":"sequence"}]
 */
class GroupBroadWorksMobileManagerGetHomeZoneListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName homeZonesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2366
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $homeZonesTable = null;

    /**
     * Getter for homeZonesTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getHomeZonesTable()
    {
        return $this->homeZonesTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeZonesTable;
    }

    /**
     * Setter for homeZonesTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $homeZonesTable
     * @return $this
     */
    public function setHomeZonesTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $homeZonesTable)
    {
        $this->homeZonesTable = $homeZonesTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHomeZonesTable()
    {
        $this->homeZonesTable = null;
        return $this;
    }


}

