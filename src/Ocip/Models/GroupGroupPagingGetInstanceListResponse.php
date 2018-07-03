<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingGetInstanceListResponse
 *
 * Response to the GroupGroupPagingGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department",
 * "Is Active".
 *         The column value for "Is Active" can either be true, or false.
 *
 * @see GroupGroupPagingGetInstanceListRequest
 */
class GroupGroupPagingGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName pagingGroupTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $pagingGroupTable = null;

    /**
     * Getter for pagingGroupTable
     *
     * @ElementName pagingGroupTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getPagingGroupTable()
    {
        return $this->pagingGroupTable;
    }

    /**
     * Setter for pagingGroupTable
     *
     * @ElementName pagingGroupTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $pagingGroupTable
     * @return $this
     */
    public function setPagingGroupTable($pagingGroupTable)
    {
        $this->pagingGroupTable = $pagingGroupTable;
        return $this;
    }


}

