<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGroupPagingGetListResponse
 *
 * Response to the UserGroupPagingGetListRequest.
 *         The groupPagingTable contains columns: "Name", "Phone Number",
 * "Extension" and "Is Active"
 *         The column value for "Is Active" can either be true, or false.
 *
 * @see UserGroupPagingGetListRequest
 */
class UserGroupPagingGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

