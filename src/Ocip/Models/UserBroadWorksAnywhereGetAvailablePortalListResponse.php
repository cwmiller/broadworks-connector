<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetAvailablePortalListResponse
 *
 * Response to the UserBroadWorksAnywhereGetAvailablePortalListRequest.
 *         Contains a table with column headings: "Portal ID", "Phone Number", "Extension", "Language".
 *         Replaced by UserBroadWorksAnywhereGetAvailablePortalListResponse21sp1
 *
 * @see UserBroadWorksAnywhereGetAvailablePortalListRequest
 * @see UserBroadWorksAnywhereGetAvailablePortalListResponse21sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:7197","type":"sequence"}]
 */
class UserBroadWorksAnywhereGetAvailablePortalListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName portalTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group de4d76f01f337fe4694212ec9f771753:7197
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

