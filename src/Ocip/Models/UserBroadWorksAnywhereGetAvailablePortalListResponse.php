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
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:32484","type":"sequence"}]
 */
class UserBroadWorksAnywhereGetAvailablePortalListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName portalTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:32484
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

