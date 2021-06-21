<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHuntGroupGetInstancePagedSortedListResponse
 *
 * Response to the GroupHuntGroupGetInstancePagedSortedListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Is Phone Number Activated", 
 *         "Country Code","National Prefix", "Extension", "Department", "Department Type", 
 *         "Parent Department", "Parent Department Type", "Is Active", "Policy".
 *         The column values for "Is Active" can either be true, or false.
 *         NOTE: prior to release 14, the policy column did not match the HuntPolicy enumerated type.
 *
 * @see GroupHuntGroupGetInstancePagedSortedListRequest
 * @Groups [{"id":"bc829065f9d696d3ca7084121d57f8c0:427","type":"sequence"}]
 */
class GroupHuntGroupGetInstancePagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName huntGroupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group bc829065f9d696d3ca7084121d57f8c0:427
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $huntGroupTable = null;

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

