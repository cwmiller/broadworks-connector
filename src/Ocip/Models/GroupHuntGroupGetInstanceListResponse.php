<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHuntGroupGetInstanceListResponse
 *
 * Response to the GroupHuntGroupGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department",
 * "Is Active", "Policy".
 *         The column values for "Is Active" can either be true, or false.
 *         NOTE: prior to release 14, the policy column did not match the
 * HuntPolicy enumerated type.
 *
 * @see GroupHuntGroupGetInstanceListRequest
 */
class GroupHuntGroupGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName huntGroupTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $huntGroupTable = null;

    /**
     * Getter for huntGroupTable
     *
     * @ElementName huntGroupTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getHuntGroupTable()
    {
        return $this->huntGroupTable;
    }

    /**
     * Setter for huntGroupTable
     *
     * @ElementName huntGroupTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $huntGroupTable
     * @return $this
     */
    public function setHuntGroupTable($huntGroupTable)
    {
        $this->huntGroupTable = $huntGroupTable;
        return $this;
    }


}

