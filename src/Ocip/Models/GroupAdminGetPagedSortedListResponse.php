<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetPagedSortedListResponse
 *
 * Response to GroupAdminGetPagedSortedListRequest.
 *         Contains a 8 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Administrator Type", "Department",
 *         "Language", "Locale" and "Encoding".  
 *         The following columns are only returned in AS data mode:
 *         "Locale" and "Encoding".
 *
 * @see GroupAdminGetPagedSortedListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:1611","type":"sequence"}]
 */
class GroupAdminGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName groupAdminTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:1611
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $groupAdminTable = null;

    /**
     * Getter for groupAdminTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getGroupAdminTable()
    {
        return $this->groupAdminTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminTable;
    }

    /**
     * Setter for groupAdminTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupAdminTable
     * @return $this
     */
    public function setGroupAdminTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupAdminTable)
    {
        $this->groupAdminTable = $groupAdminTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminTable()
    {
        $this->groupAdminTable = null;
        return $this;
    }
}

