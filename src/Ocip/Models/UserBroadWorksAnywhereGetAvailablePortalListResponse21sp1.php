<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetAvailablePortalListResponse21sp1
 *
 * Response to the UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1.
 *         Contains a table with column headings: "Portal ID", "Portal Name",
 * "Phone Number", "Extension", "Language".
 *
 * @see UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1
 */
class UserBroadWorksAnywhereGetAvailablePortalListResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName portalTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
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

