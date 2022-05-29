<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingGetInstanceListResponse
 *
 * Response to the GroupGroupPagingGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active".
 *         The column value for "Is Active" can either be true, or false.
 *
 * @see GroupGroupPagingGetInstanceListRequest
 * @Groups [{"id":"0d36df8c109e3ea7324f79031368c661:280","type":"sequence"}]
 */
class GroupGroupPagingGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName pagingGroupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 0d36df8c109e3ea7324f79031368c661:280
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $pagingGroupTable = null;

    /**
     * Getter for pagingGroupTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getPagingGroupTable()
    {
        return $this->pagingGroupTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pagingGroupTable;
    }

    /**
     * Setter for pagingGroupTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $pagingGroupTable
     * @return $this
     */
    public function setPagingGroupTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $pagingGroupTable)
    {
        $this->pagingGroupTable = $pagingGroupTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPagingGroupTable()
    {
        $this->pagingGroupTable = null;
        return $this;
    }


}

