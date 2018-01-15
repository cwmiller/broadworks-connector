<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetAvailablePortalListResponse
 *
 * Response to the UserBroadWorksAnywhereGetAvailablePortalListRequest.
 *         Contains a table with column headings: "Portal Name", "Phone Number",
 * "Extension", "Language".
 */
class UserBroadWorksAnywhereGetAvailablePortalListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName portalTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $portalTable = null;

    /**
     * Getter for portalTable
     *
     * @ElementName portalTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getPortalTable()
    {
        return $this->portalTable;
    }

    /**
     * Setter for portalTable
     *
     * @ElementName portalTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $portalTable
     * @return $this
     */
    public function setPortalTable($portalTable)
    {
        $this->portalTable = $portalTable;
        return $this;
    }


}

