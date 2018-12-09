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
 *
 * @see EnterpriseBroadWorksMobileManagerGetHomeZoneListRequest
 * @Groups [{"id":"889c8c305076ef39cc50c70d0c2dc820:257","type":"sequence"}]
 */
class EnterpriseBroadWorksMobileManagerGetHomeZoneListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName homeZonesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 889c8c305076ef39cc50c70d0c2dc820:257
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

