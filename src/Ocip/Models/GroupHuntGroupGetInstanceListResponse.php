<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHuntGroupGetInstanceListResponse
 *
 * Response to the GroupHuntGroupGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active", "Policy".
 *         The column values for "Is Active" can either be true, or false.
 *         NOTE: prior to release 14, the policy column did not match the HuntPolicy enumerated type.
 *
 * @see GroupHuntGroupGetInstanceListRequest
 * @Groups [{"id":"781bbab86d937537938d4fe917029d5c:369","type":"sequence"}]
 */
class GroupHuntGroupGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName huntGroupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 781bbab86d937537938d4fe917029d5c:369
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $huntGroupTable = null;

    /**
     * Getter for huntGroupTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getHuntGroupTable()
    {
        return $this->huntGroupTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->huntGroupTable;
    }

    /**
     * Setter for huntGroupTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $huntGroupTable
     * @return $this
     */
    public function setHuntGroupTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $huntGroupTable)
    {
        $this->huntGroupTable = $huntGroupTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHuntGroupTable()
    {
        $this->huntGroupTable = null;
        return $this;
    }
}

