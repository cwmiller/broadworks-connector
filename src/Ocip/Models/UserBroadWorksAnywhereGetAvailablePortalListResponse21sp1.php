<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetAvailablePortalListResponse21sp1
 *
 * Response to the UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1.
 *         Contains a table with column headings: "Portal ID", "Portal Name", "Phone Number", "Extension", "Language".
 *
 * @see UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1
 * @Groups [{"id":"b2dd0919a492fbd36c0e7f346f843ff2:362","type":"sequence"}]
 */
class UserBroadWorksAnywhereGetAvailablePortalListResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName portalTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b2dd0919a492fbd36c0e7f346f843ff2:362
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $portalTable = null;

    /**
     * Getter for portalTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getPortalTable()
    {
        return $this->portalTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->portalTable;
    }

    /**
     * Setter for portalTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $portalTable
     * @return $this
     */
    public function setPortalTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $portalTable)
    {
        $this->portalTable = $portalTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPortalTable()
    {
        $this->portalTable = null;
        return $this;
    }


}

